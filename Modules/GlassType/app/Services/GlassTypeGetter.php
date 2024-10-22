<?php

namespace Modules\GlassType\Services;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Modules\GlassType\Repository\GlassTypeRepository;

/**
 * Class GlassTypeGetter
 * @package Modules\GlassType\Services\GlassTypeGetter
 */
class GlassTypeGetter
{
    /**
     * @var GlassTypeRepository
     */
    protected $glassTypeRepository;

    /**
     * GlassTypeGetter constructor.
     * @param GlassTypeRepository $glassTypeRepository
     */
    public function __construct(GlassTypeRepository $glassTypeRepository)
    {
        $this->glassTypeRepository = $glassTypeRepository;
    }

    /**
     * Get paginated GlassTypeGetter list
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function getPaginatedList(Request $request): LengthAwarePaginator
    {
        return $this->glassTypeRepository->getPaginatedList($request);
    }

    /**
     * Get a single GlassTypeGetter
     * @param $id
     * @return Object|null
     */
    public function show($id)
    {
        return $this->glassTypeRepository->findOrFail($id);
    }
}
