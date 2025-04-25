<?php
require 'vendor/autoload.php';

use App\Services\SearchService;

$command = $argv[1] ?? null;
$keyword = $argv[2] ?? '';

if ($command === 'search') {
    $service = new SearchService();
    $service->search($keyword);
} else {
    echo "Comando no reconocido.\n";
}