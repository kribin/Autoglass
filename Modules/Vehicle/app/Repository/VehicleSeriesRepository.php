<?php

namespace Modules\Vehicle\Repository;

use App\Repositories\Repository;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Modules\Vehicle\Models\VehicleSeries;

class VehicleSeriesRepository extends Repository
{

    /**
     * VehicleSeriesRepository constructor.
     * @param vehicleSeries $VehicleSeries
     */
    public function __construct(VehicleSeries $vehicleSeries)
    {
        parent::__construct($vehicleSeries);
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
