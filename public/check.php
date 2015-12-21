<?php

require __DIR__.'/../bootstrap.php';

$disabled = false;
$success = true;

$message = 'hallo Welt';

echo json_encode([
  'success' => $success,
  'disabled' => $disabled,
  'message' => $message,
]);
