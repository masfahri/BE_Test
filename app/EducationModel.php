<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationModel extends Model
{
    protected $table = 'education';
    protected $guarded = [];

    /**
     * Get all of the candidates for the ReligionModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function candidates()
    {
        return $this->hasMany(CandidateModel::class, 'education_id');
    }
}
