<?php

namespace Modules\Vehicle\Http\Controllers\Admin;

use App\Helpers\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Modules\Vehicle\Http\Requests\VehicleSeries\CreateVehicleSeriesRequest;
use Modules\Vehicle\Services\VehicleSeries\VehicleSeriesCreator;
use Modules\Vehicle\Services\VehicleSeries\VehicleSeriesGetter;
use Modules\Vehicle\Transformers\VehicleSeries\VehicleSeriesListResource;
use Modules\Vehicle\Transformers\VehicleSeries\VehicleSeriesResource;

class VehicleSeriesController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, VehicleSeriesGetter $VehicleSeriesGetter)
    {
        return VehicleSeriesListResource::collection($VehicleSeriesGetter->getPaginatedList($request));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateVehicleSeriesRequest $request,VehicleSeriesCreator $vehicleSeriesCreator): JsonResponse
    {
        $data = $request->all();

        return $this->successResponse(
            VehicleSeriesResource::make($vehicleSeriesCreator->store($data)),
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
