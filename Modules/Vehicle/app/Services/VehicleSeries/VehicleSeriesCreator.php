<?php

namespace Modules\Vehicle\Services\VehicleSeries;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Modules\Vehicle\Repository\VehicleSeriesRepository;

/**
 * Class VehicleSeriesCreator
 * @package Modules\Vehicle\Services\VehicleSeries\VehicleSeriesCreator
 */
class VehicleSeriesCreator
{
    /**
     * @var VehicleSeriesRepository
     */
    protected $vehicleSeriesRepository;

    /**
     * VehicleSeriesCreator constructor.
     * @param VehicleSeriesRepository $vehicleSeriesRepository
     */
    public function __construct(VehicleSeriesRepository $vehicleSeriesRepository)
    {
        $this->vehicleSeriesRepository = $vehicleSeriesRepository;
    }

    /**
     * Store an VehicleSeries
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Series
     */
    public function store(array $data)
    {
        $response = $this->vehicleSeriesRepository->store($data);

        return $response->refresh();
    }
}
