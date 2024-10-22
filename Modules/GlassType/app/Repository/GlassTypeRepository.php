<?php

namespace Modules\GlassType\Repository;

use Modules\GlassType\Models\GlassType;
use App\Repositories\Repository;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class GlassTypeRepository extends Repository
{

    /**
     * glassTypeRepository constructor.
     * @param GlassType $glassType
     */
    public function __construct(GlassType $glassType)
    {
        parent::__construct($glassType);
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
