<?php
require __DIR__ . '/vendor/autoload.php';

use Mahasiswa06\TugasCiPhp\Hello;

echo "=== Aplikasi PHP CI/CD ===\n";

$hello = new Hello();
echo $hello->sayHello("Dila") . "\n";
