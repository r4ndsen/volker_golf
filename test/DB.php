<?php

require __DIR__.'/../bootstrap.php';

use \vg\SQLite;

$db = new SQLite();

$db->truncate();
$db->insert('xyz', 'werner');

#print_r($db->get('xyz'));
#$db->activate('xyz');
#print_r($db->get('xyz'));

foreach ($db->getAll() as $row) {
  print_r($row);
}
