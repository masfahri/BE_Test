<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'              => 'required',
            'gender'            => 'required',
            'date_of_birth' => 'required',
            'religion_id'   => 'required',
            'email'         => 'required',
            'phone'         => 'required',
            'identity_number' => 'required',
            'identity_file'   => 'required',
            'bank_id'       => 'required',
            'bank_account'  => 'required',
            'bank_name'     => 'required',
            'address'       => 'required',
            'education_id'  => 'required',
            'university_id' => 'required',
            'university_other' => 'required',
            'major'         => 'required',
            'graduation_year' => 'required',
            'in_college' => 'required',
            'semester'   => 'required',
            'skill'      => 'required',
            'file_cv'    => 'required',
            'file_photo' => 'required',
            'candidate_status_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Dibutuhkan Gaes',              
            'gender.required' => 'Dibutuhkan Gaes',            
            'date_of_birth.required' => 'Dibutuhkan Gaes', 
            'religion_id.required' => 'Dibutuhkan Gaes',   
            'email.required' => 'Dibutuhkan Gaes',         
            'phone.required' => 'Dibutuhkan Gaes',         
            'identity_number.required' => 'Dibutuhkan Gaes', 
            'identity_file.required' => 'Dibutuhkan Gaes',   
            'bank_id.required' => 'Dibutuhkan Gaes',       
            'bank_account.required' => 'Dibutuhkan Gaes',  
            'bank_name.required' => 'Dibutuhkan Gaes',     
            'address.required' => 'Dibutuhkan Gaes',       
            'education_id.required' => 'Dibutuhkan Gaes',  
            'university_id.required' => 'Dibutuhkan Gaes', 
            'university_other.required' => 'Dibutuhkan Gaes', 
            'major.required' => 'Dibutuhkan Gaes',         
            'graduation_year.required' => 'Dibutuhkan Gaes', 
            'in_college.required' => 'Dibutuhkan Gaes', 
            'semester.required' => 'Dibutuhkan Gaes',   
            'skill.required' => 'Dibutuhkan Gaes',      
            'file_cv.required' => 'Dibutuhkan Gaes',    
            'file_photo.required' => 'Dibutuhkan Gaes', 
            'candidate_status_id.required' => 'Dibutuhkan Gaes', 
        ];
    }
}
