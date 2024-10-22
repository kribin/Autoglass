<?php

namespace Modules\Product\Services;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Modules\Product\Repository\ProductRepository;

/**
 * Class ProductGetter
 * @package Modules\Product\Services\ProductGetter
 */
class ProductGetter
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     * ProductGetter constructor.
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Get paginated ProductGetter list
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function getPaginatedList(Request $request): LengthAwarePaginator
    {
        return $this->productRepository->getPaginatedList($request);
    }

    /**
     * Get a single ProductGetter
     * @param $id
     * @return Object|null
     */
    public function show($id)
    {
        return $this->productRepository->findOrFail($id);
    }
}
