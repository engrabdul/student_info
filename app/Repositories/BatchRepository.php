<?php

namespace App\Repositories;

use App\Models\Batch;
use App\Repositories\BaseRepository;

/**
 * Class BatchRepository
 * @package App\Repositories
 * @version October 28, 2019, 8:45 pm UTC
*/

class BatchRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'batch'
    ];

    protected $primaryKey = 'batch_id';

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Batch::class;
    }
}
