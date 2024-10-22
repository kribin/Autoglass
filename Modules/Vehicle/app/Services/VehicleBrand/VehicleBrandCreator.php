<?php

namespace Modules\Vehicle\Services\VehicleBrand;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Modules\Vehicle\Repository\VehicleBrandRepository;

/**
 * Class VehicleBrandCreator
 * @package Modules\Vehicle\Services\VehicleBrand\VehicleBrandCreator
 */
class VehicleBrandCreator
{
    /**
     * @var VehicleBrandRepository
     */
    protected $vehicleBrandRepository;

    /**
     * VehicleBrandCreator constructor.
     * @param VehicleBrandRepository $vehicleBrandRepository
     */
    public function __construct(VehicleBrandRepository $vehicleBrandRepository)
    {
        $this->vehicleBrandRepository = $vehicleBrandRepository;
    }

    /**
     * Store an VehicleBrand
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(array $data)
    {
        $response = $this->vehicleBrandRepository->store($data);

        return $response->refresh();
    }
}
