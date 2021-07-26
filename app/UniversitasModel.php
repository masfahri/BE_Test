<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniversitasModel extends Model
{
    protected $table = 'university';

    /**
     * Get all of the candidates for the BankModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function candidates()
    {
        return $this->hasMany(CandidateModel::class, 'university_id');
    }
}
