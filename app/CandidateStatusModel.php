<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateStatusModel extends Model
{
    protected $table = 'candidate_status';

    /**
     * Get all of the candidates for the BankModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function candidates()
    {
        return $this->hasMany(CandidateModel::class, 'candidate_status_id');
    }
}
