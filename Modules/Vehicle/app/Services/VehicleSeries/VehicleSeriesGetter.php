<?php

namespace Modules\Vehicle\Services\VehicleSeries;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Modules\Vehicle\Repository\VehicleSeriesRepository;

/**
 * Class VehicleSeriesGetter
 * @package Modules\Vehicle\Services\VehicleSeries\VehicleSeriesGetter
 */
class VehicleSeriesGetter
{
    /**
     * @var VehicleSeriesRepository
     */
    protected $vehicleSerVehicleSeriesRepository;

    /**
     * VehicleSeriesGetter constructor.
     * @param VehicleSeriesRepository $vehicleSerVehicleSeriesRepository
     */
    public function __construct(VehicleSeriesRepository $vehicleSerVehicleSeriesRepository)
    {
        $this->vehicleSerVehicleSeriesRepository = $vehicleSerVehicleSeriesRepository;
    }

    /**
     * Get paginated VehicleSeriesGetter list
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function getPaginatedList(Request $request): LengthAwarePaginator
    {
        return $this->vehicleSerVehicleSeriesRepository->getPaginatedList($request);
    }

    /**
     * Get a single VehicleSeriesGetter
     * @param $id
     * @return Object|null
     */
    public function show($id)
    {
        return $this->vehicleSerVehicleSeriesRepository->findOrFail($id);
    }
}
