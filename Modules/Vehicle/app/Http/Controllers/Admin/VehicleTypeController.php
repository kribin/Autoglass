<?php

namespace Modules\Vehicle\Http\Controllers\Admin;

use App\Helpers\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Modules\Vehicle\Http\Requests\VehicleType\CreateVehicleTypeRequest;
use Modules\Vehicle\Services\VehicleType\VehicleTypeCreator;
use Modules\Vehicle\Services\VehicleType\VehicleTypeGetter;
use Modules\Vehicle\Transformers\VehicleType\VehicleTypeListResource;
use Modules\Vehicle\Transformers\VehicleType\VehicleTypeResource;

class VehicleTypeController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, VehicleTypeGetter $VehicleTypeGetter)
    {
        return VehicleTypeListResource::collection($VehicleTypeGetter->getPaginatedList($request));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateVehicleTypeRequest $request,VehicleTypeCreator $vehicleTypeCreator): JsonResponse
    {
        $data = $request->all();

        return $this->successResponse(
            VehicleTypeResource::make($vehicleTypeCreator->store($data)),
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
}
