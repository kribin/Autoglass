<?php

namespace Modules\Product\Services;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Modules\Product\Repository\ProductRepository;

/**
 * Class ProductCreator
 * @package Modules\Vehicle\Services\ProductCreator
 */
class ProductCreator
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     * ProductCreator constructor.
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Store an product
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Series
     */
    public function store(array $data)
    {
        $response = $this->productRepository->store($data);

        return $response->refresh();
    }
}
