<?php

namespace Modules\GlassType\Http\Controllers\Admin;

use App\Helpers\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\GlassType\Http\Requests\CreateGlassTypeRequest;
use Modules\GlassType\Services\GlassTypeCreator;
use Modules\GlassType\Services\GlassTypeGetter;
use Modules\GlassType\Transformers\GlasstypeListResource;
use Modules\GlassType\Transformers\GlassTypeResource;


class GlassTypeController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, GlassTypeGetter $glassTypeGetter)
    {
        return GlasstypeListResource::collection($glassTypeGetter->getPaginatedList($request));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateGlassTypeRequest $request,GlassTypeCreator $glassTypeCreator): JsonResponse
    {
        $data = $request->all();

        return $this->successResponse(
            GlassTypeResource::make($glassTypeCreator->store($data)),
            __('Glass Type added Successfully!!'),
            Response::HTTP_CREATED
        );
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('glasstype::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('glasstype::edit');
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
}
