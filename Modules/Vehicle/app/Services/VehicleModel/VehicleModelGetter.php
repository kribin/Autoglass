<?php

namespace Modules\Vehicle\Services\VehicleModel;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Modules\Vehicle\Repository\VehicleModelRepository;

/**
 * Class VehicleModelGetter
 * @package Modules\Vehicle\Services\VehicleModel\VehicleModelGetter
 */
class VehicleModelGetter
{
    /**
     * @var VehicleModelRepository
     */
    protected $vehicleModelRepository;

    /**
     * VehicleModelGetter constructor.
     * @param VehicleModelRepository $vehicleModelRepository
     */
    public function __construct(VehicleModelRepository $vehicleModelRepository)
    {
        $this->vehicleModelRepository = $vehicleModelRepository;
    }

    /**
     * Get paginated VehicleModelGetter list
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function getPaginatedList(Request $request): LengthAwarePaginator
    {
        return $this->vehicleModelRepository->getPaginatedList($request);
    }

    /**
     * Get a single VehicleModelGetter
     * @param $id
     * @return Object|null
     */
    public function show($id)
    {
        return $this->vehicleModelRepository->findOrFail($id);
    }
}
