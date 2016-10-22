<?php

require '../Meli/meli.php';

$meli = new Meli('APP_ID', 'SECRET_KEY');

$params = [];

$result = $meli->get('/sites/MLB', $params);

echo '<pre>';
print_r($result);
echo '</pre>';
