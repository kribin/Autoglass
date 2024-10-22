<?php

namespace Modules\Vehicle\Services\VehicleModel;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Modules\Vehicle\Repository\VehicleModelRepository;

/**
 * Class VehicleModelCreator
 * @package Modules\Vehicle\Services\VehicleModel\VehicleModelCreator
 */
class VehicleModelCreator
{
    /**
     * @var VehicleModelRepository
     */
    protected $vehicleModelRepository;

    /**
     * VehicleModelCreator constructor.
     * @param VehicleModelRepository $vehicleModelRepository
     */
    public function __construct(VehicleModelRepository $vehicleModelRepository)
    {
        $this->vehicleModelRepository = $vehicleModelRepository;
    }

    /**
     * Store an VehicleModel
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(array $data)
    {
        $response = $this->vehicleModelRepository->store($data);

        return $response->refresh();
    }
}
