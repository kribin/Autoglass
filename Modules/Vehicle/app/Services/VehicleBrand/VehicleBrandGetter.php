<?php

namespace Modules\Vehicle\Services\VehicleBrand;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Modules\Vehicle\Repository\VehicleBrandRepository;

/**
 * Class VehicleBrandGetter
 * @package Modules\Vehicle\Services\VehicleBrand\VehicleBrandGetter
 */
class VehicleBrandGetter
{
    /**
     * @var VehicleBrandRepository
     */
    protected $vehicleBrandRepository;

    /**
     * VehicleBrandGetter constructor.
     * @param VehicleBrandRepository $vehicleBrandRepository
     */
    public function __construct(VehicleBrandRepository $vehicleBrandRepository)
    {
        $this->vehicleBrandRepository = $vehicleBrandRepository;
    }

    /**
     * Get paginated VehicleBrandGetter list
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function getPaginatedList(Request $request): LengthAwarePaginator
    {
        return $this->vehicleBrandRepository->getPaginatedList($request);
    }

    /**
     * Get a single VehicleBrandGetter
     * @param $id
     * @return Object|null
     */
    public function show($id)
    {
        return $this->vehicleBrandRepository->findOrFail($id);
    }
}
