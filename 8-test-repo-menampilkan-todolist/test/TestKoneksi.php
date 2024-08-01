<?php

require_once __DIR__ . "/../config/Koneksi.php";

use Config8\Database;

$database = Database::getConnection();
echo "Sukses Konek ke Database" . PHP_EOL;
