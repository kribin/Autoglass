<?php

namespace Modules\Vehicle\Repository;

use App\Repositories\Repository;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Vehicle\Models\VehicleModel;

class VehicleModelRepository extends Repository
{

    /**
     * VehicleModelRepository constructor.
     * @param VehicleModel $VehicleModel
     */
    public function __construct(VehicleModel $vehicleModel)
    {
        parent::__construct($vehicleModel);
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
