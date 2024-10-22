<?php

namespace Modules\Vehicle\Repository;

use App\Repositories\Repository;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Vehicle\Models\VehicleType;

class VehicleTypeRepository extends Repository
{

    /**
     * VehicleTypeRepository constructor.
     * @param VehicleType $VehicleType
     */
    public function __construct(VehicleType $vehicleType)
    {
        parent::__construct($vehicleType);
    }

    /**
     * @param Request $request
     * @param array $columns
     * @return LengthAwarePaginator
     */
    public function getPaginatedList(Request $request, array $columns = array('*')): LengthAwarePaginator
    {
        $limit = $request->get('limit', config('app.per_page'));
        return $this->model->newQuery()
            ->latest()
            ->paginate($limit);
    }
}
