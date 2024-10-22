<?php

namespace Modules\Vehicle\Services\VehicleType;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Modules\Vehicle\Repository\VehicleTypeRepository;

/**
 * Class VehicleTypeCreator
 * @package Modules\Vehicle\Services\VehicleType\VehicleTypeCreator
 */
class VehicleTypeCreator
{
    /**
     * @var VehicleTypeRepository
     */
    protected $vehicleTypeRepository;

    /**
     * VehicleTypeCreator constructor.
     * @param VehicleTypeRepository $vehicleTypeRepository
     */
    public function __construct(VehicleTypeRepository $vehicleTypeRepository)
    {
        $this->vehicleTypeRepository = $vehicleTypeRepository;
    }

    /**
     * Store an VehicleType
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Type
     */
    public function store(array $data)
    {
        $response = $this->vehicleTypeRepository->store($data);

        return $response->refresh();
    }
}
