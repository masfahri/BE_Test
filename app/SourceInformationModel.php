<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SourceInformationModel extends Model
{
    protected $table = 'source_information';

    /**
     * Get all of the candidates for the BankModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function candidates()
    {
        return $this->hasMany(CandidateModel::class, 'source_information_id');
    }
}
