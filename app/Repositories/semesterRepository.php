<?php

namespace App\Repositories;

use App\Models\semester;
use App\Repositories\BaseRepository;

/**
 * Class semesterRepository
 * @package App\Repositories
 * @version November 1, 2019, 12:15 pm UTC
*/

class semesterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'semester_name',
        'semester_code',
        'semester_duration',
        'semester_description'
    ];

    protected $primaryKey = 'semester_id';

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
        return semester::class;
    }
}
