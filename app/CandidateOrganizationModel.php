<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateOrganizationModel extends Model
{
    protected $table = 'candidate_organization';
    protected $fillable = [
        'candidate_id',
        'org_name',
        'year',
        'position',
        'description',
        'file',
        'created_by',
    ];

    /**
     * Get the candidate associated with the CandidateOrganizationModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function candidate()
    {
        return $this->hasOne(CandidateModel::class, 'id', 'candidate_id');
    }
}
