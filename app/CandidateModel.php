<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateModel extends Model
{
    protected $table = 'candidate';
    protected $fillable = [
        'name'         ,
        'gender'       ,
        'date_of_birth',
        'religion_id'  ,
        'email'        ,
        'phone'        ,
        'identity_number',
        'identity_file'  ,
        'bank_id'      ,
        'bank_account' ,
        'bank_name'    ,
        'address'      ,
        'education_id' ,
        'university_id',
        'university_other',
        'major'        ,
        'graduation_year',
        'in_college',
        'semester'  ,
        'skill'     ,
        'file_cv'   ,
        'file_photo',
        'source_information_id',
        'source_information_other',
        'ranking'   ,
        'candidate_status_id',
        'instagram' ,
        'twitter'   ,
        'facebook'  ,
        'linkedin'  ,
        'created_by',
        'updated_by',
    ];
    protected $guarderd = [];

    /**
     * Get the religion associated with the CandidateModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function religion()
    {
        return $this->hasOne(ReligionModel::class, 'id', 'religion_id');
    }
    
    /**
     * Get the bank associated with the CandidateModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bank()
    {
        return $this->hasOne(BankModel::class, 'id', 'bank_id');
    }

    /**
     * Get the education associated with the CandidateModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function education()
    {
        return $this->hasOne(EducationModel::class, 'id', 'education_id');
    }

    /**
     * Get the university associated with the CandidateModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function university()
    {
        return $this->hasOne(UniversitasModel::class, 'id', 'university_id');
    }

    /**
     * Get the sourceInformation associated with the CandidateModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sourceInformation()
    {
        return $this->hasOne(UniversitasModel::class, 'id', 'source_information_id');
    }
    
    /**
     * Get the sourceInformation associated with the CandidateModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function statuses()
    {
        return $this->hasOne(CandidateStatusModel::class, 'id', 'candidate_status_id');
    }

    /**
     * Get the Organization associated with the CandidateModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function organization()
    {
        return $this->hasOne(CandidateOrganizationModel::class, 'candidate_id', 'id');
    }

    /**
     * Get the Internship associated with the CandidateModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function internship()
    {
        return $this->hasOne(InternshipModel::class, 'candidate_id', 'id');
    }
    
    /**
     * Get the SelectionPasses associated with the CandidateModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function passed()
    {
        return $this->hasOne(SelectionPassModel::class, 'candidate_id', 'id');
    }




}
