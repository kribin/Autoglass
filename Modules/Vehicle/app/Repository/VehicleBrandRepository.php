<?php

namespace Modules\Vehicle\Repository;

use App\Repositories\Repository;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Vehicle\Models\VehicleBrand;

class VehicleBrandRepository extends Repository
{

    /**
     * VehicleBrandRepository constructor.
     * @param vehicleBrand $VehicleBrand
     */
    public function __construct(VehicleBrand $vehicleBrand)
    {
        parent::__construct($vehicleBrand);
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
