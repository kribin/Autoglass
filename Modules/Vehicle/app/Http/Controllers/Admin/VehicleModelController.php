<?php

namespace Modules\Vehicle\Http\Controllers\Admin;

use App\Helpers\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Modules\Vehicle\Http\Requests\VehicleModel\CreateVehicleModelRequest;
use Modules\Vehicle\Services\VehicleModel\VehicleModelCreator;
use Modules\Vehicle\Services\VehicleModel\VehicleModelGetter;
use Modules\Vehicle\Transformers\VehicleModel\VehicleModelListResource;
use Modules\Vehicle\Transformers\VehicleModel\VehicleModelResource;

class VehicleModelController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, VehicleModelGetter $VehicleModelGetter)
    {
        return VehicleModelListResource::collection($VehicleModelGetter->getPaginatedList($request));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateVehicleModelRequest $request,VehicleModelCreator $vehicleModelCreator): JsonResponse
    {
        $data = $request->all();

        return $this->successResponse(
            VehicleModelResource::make($vehicleModelCreator->store($data)),
            __('Vehicle Brand added Successfully!!'),
            Response::HTTP_CREATED
        );
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
}
