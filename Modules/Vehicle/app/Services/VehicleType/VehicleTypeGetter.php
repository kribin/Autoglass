<?php

namespace Modules\Vehicle\Services\VehicleType;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Modules\Vehicle\Repository\VehicleTypeRepository;

/**
 * Class VehicleTypeGetter
 * @package Modules\Vehicle\Services\VehicleType\VehicleTypeGetter
 */
class VehicleTypeGetter
{
    /**
     * @var VehicleTypeRepository
     */
    protected $vehicleSerVehicleTypeRepository;

    /**
     * VehicleTypeGetter constructor.
     * @param VehicleTypeRepository $vehicleSerVehicleTypeRepository
     */
    public function __construct(VehicleTypeRepository $vehicleSerVehicleTypeRepository)
    {
        $this->vehicleSerVehicleTypeRepository = $vehicleSerVehicleTypeRepository;
    }

    /**
     * Get paginated VehicleTypeGetter list
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function getPaginatedList(Request $request): LengthAwarePaginator
    {
        return $this->vehicleSerVehicleTypeRepository->getPaginatedList($request);
    }

    /**
     * Get a single VehicleTypeGetter
     * @param $id
     * @return Object|null
     */
    public function show($id)
    {
        return $this->vehicleSerVehicleTypeRepository->findOrFail($id);
    }
}
