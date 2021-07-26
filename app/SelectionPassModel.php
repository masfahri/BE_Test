<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelectionPassModel extends Model
{
    protected $table = 'selection_passes';
    protected $fillable = [
        'candidate_id',
        'unit',
        'assesment',
        'score',
        'result'
    ];

    /**
     * Get the candidate associated with the SelectionPassModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function candidate()
    {
        return $this->hasOne(CandidateModel::class, 'candidate_id');
    }
}
