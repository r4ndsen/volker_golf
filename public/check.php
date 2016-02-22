<?php

require __DIR__ . '/../bootstrap.php';

use \vg\Response;
use \vg\SQLite as db;

$code = $_POST['code'];

if (empty($code)) {
    echo new Response('Invalider Teilnehmercode');
    exit;
}

$db = new db;

$record = $db->get($code);

if (empty($record['date'])) {
  $db->activate($code);

  $r = new Response('gepr&uuml;ft', true, true);
  $r->longtext = sprintf('Teilnehmer %s registriert', $record['name']);
  echo $r;
  exit;
}

$r = new Response('gepr&uuml;ft', true, true);
$r->longtext = sprintf('Sie sind bereits seit %s Uhr registriert, vielen Dank', $record['date']);
echo $r;
exit;
