<?php

namespace vg;
use SQLite3;

class SQLite
{
    private $db;

    public function __construct()
    {
        $this->db = new SQLite3($path = APPLICATION_PATH.'/private/db.sqlite');
        $this->create($path);
    }

    public function get($key)
    {
        $res = $this->db->query(sprintf("select * from data where `code` = '%s'", SQLite3::escapeString($key)));

        return $res->fetchArray(SQLITE3_ASSOC) ? : [];
    }

    public function getAll()
    {
        $res = $this->db->query('select * from data');

        if ($res !== false) {
            while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
                yield $row;
            }
            $res->finalize();
        }
    }

    private function create($path)
    {
        return $this->db->exec('create table if not exists data (
            code TEXT,
            name TEXT,
            date TEXT,
            UNIQUE (`code`, `name`) ON CONFLICT IGNORE
            )'
        ) && @chmod($path, 0666);
    }

    public function insert($code = '', $name = '', $date = null)
    {
        return $this->db->exec(sprintf(
            "insert into data (`code`, `name`, `date`) values ('%s', '%s', '%s');",
            SQLite3::escapeString($code),
            SQLite3::escapeString($name),
            SQLite3::escapeString($date)
        ));
    }

    public function activate($code)
    {
        return $this->db->exec(sprintf(
            "update data set date = '%s' where `code` = '%s' and `date` = ''",
            SQLite3::escapeString(date('Y-m-d H:i:s')),
            SQLite3::escapeString($code)
        ));
    }

    public function truncate()
    {
        $this->db->exec('delete from data');
    }

    public function drop()
    {
        $this->db->exec('drop data');
    }
}
