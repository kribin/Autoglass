<?php

namespace Modules\GlassType\Services;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Modules\GlassType\Repository\GlassTypeRepository;

/**
 * Class GlassTypeCreator
 * @package Modules\GlassType\Services\GlassTypeCreator
 */
class GlassTypeCreator
{
    /**
     * @var GlassTypeRepository
     */
    protected $glassTypeRepository;

    /**
     * GlassTypeCreator constructor.
     * @param GlassTypeRepository $glassTypeRepository
     */
    public function __construct(GlassTypeRepository $glassTypeRepository)
    {
        $this->glassTypeRepository = $glassTypeRepository;
    }

    /**
     * Store an LabResult
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(array $data)
    {
        $response = $this->glassTypeRepository->store($data);

        return $response->refresh();
    }
}
