<?php
namespace App\Services;

use App\Repositories\ResourceRepository;

class SearchService
{
    private ResourceRepository $repository;

    public function __construct()
    {
        $this->repository = new ResourceRepository();
    }

    public function search(string $term): void
    {
        if (strlen($term) < 3) {
            echo "Por favor ingrese al menos 3 caracteres.\n";
            return;
        }

        $resources = $this->repository->search($term);

        foreach ($resources as $resource) {
            echo $resource->getDisplay() . PHP_EOL;
        }
    }
}