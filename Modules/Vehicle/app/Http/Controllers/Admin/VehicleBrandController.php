<?php

namespace Modules\Vehicle\Http\Controllers\Admin;

use App\Helpers\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Modules\Vehicle\Http\Requests\VehicleBrand\CreateVehicleBrandRequest;
use Modules\Vehicle\Services\VehicleBrand\VehicleBrandCreator;
use Modules\Vehicle\Services\VehicleBrand\VehicleBrandGetter;
use Modules\Vehicle\Transformers\VehicleBrand\VehicleBrandListResource;
use Modules\Vehicle\Transformers\VehicleBrand\VehicleBrandResource;

class VehicleBrandController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, VehicleBrandGetter $VehicleBrandGetter)
    {
        return VehicleBrandListResource::collection($VehicleBrandGetter->getPaginatedList($request));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateVehicleBrandRequest $request,VehicleBrandCreator $vehicleBrandCreator): JsonResponse
    {
        $data = $request->all();

        return $this->successResponse(
            VehicleBrandResource::make($vehicleBrandCreator->store($data)),
            __('Vehicle Brand added Successfully!!'),
            Response::HTTP_CREATED
        );
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('vehicle::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('vehicle::edit');
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

    public function list()
    {
        
    }
}
