<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternshipModel extends Model
{
    protected $table = 'internships';
    protected $fillable = [
        'candidate_id',
        'vacancy_internship',
        'periode_internship',
        'type_internship',
        'location_internship'
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
