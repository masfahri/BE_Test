<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReligionModel extends Model
{
    protected $table = 'religion';
    protected $guarderd = [];

    /**
     * Get all of the candidates for the ReligionModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function candidates()
    {
        return $this->hasMany(CandidateModel::class, 'religion_id');
    }
}
