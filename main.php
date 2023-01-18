<?php

spl_autoload_register(function ($className) {
    require_once "{$className}.php";
});

$collector = new \services\CollectorService();
$products = $collector->collectFruits();

echo('Собрано:' . PHP_EOL);
foreach ($products as $productName => $quantity) {
    echo ($productName . ': ' . $quantity . PHP_EOL);
}
