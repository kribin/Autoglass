<?php

namespace Modules\Product\Http\Controllers\Admin;

use App\Helpers\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Product\Http\Requests\CreateProductRequest;
use Modules\Product\Services\ProductCreator;
use Modules\Product\Services\ProductGetter;
use Modules\Product\Transformers\ProductListResource;
use Modules\Product\Transformers\ProductResource;

class ProductController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, ProductGetter $productGetter)
    {
        return ProductListResource::collection($productGetter->getPaginatedList($request));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProductRequest $request,ProductCreator $ProductCreator): JsonResponse
    {
        $data = $request->all();

        return $this->successResponse(
            ProductResource::make($ProductCreator->store($data)),
            __('Product added Successfully!!'),
            Response::HTTP_CREATED
        );
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('product::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('product::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }

    public function list(Request $request)
    {
        dd('asd');
    }
}
