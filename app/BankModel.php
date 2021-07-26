<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankModel extends Model
{
    protected $table = 'bank';
    protected $guarded = [];

    /**
     * Get all of the candidates for the BankModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function candidates()
    {
        return $this->hasMany(CandidateModel::class, 'bank_id');
    }

}
