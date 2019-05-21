<?php
namespace App\Repositories;

use App\Repositories\EloquentRepository;

class SubjectRegistrationRepository extends EloquentRepository
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\SubjectRegistration::class;
    }
}
