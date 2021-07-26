<?php

namespace App\Http\Controllers;

use App\BankModel;
use App\ReligionModel;
use App\CandidateModel;
use App\CandidateOrganizationModel;
use App\EducationModel;
use App\Http\Requests\CandidateRequest;
use App\InternshipModel;
use App\SelectionPassModel;
use App\UniversitasModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;


class CandidateController extends Controller
{

    public function __construct(CandidateModel $candidateModel, CandidateOrganizationModel $candidateOrganizationModel) {
        $this->candidateModel = $candidateModel;
        $this->candidateOrganizationModel = $candidateOrganizationModel;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $religion = ReligionModel::all()->pluck('name', 'id');
        $bank = BankModel::all()->pluck('name', 'id');
        $education = EducationModel::all()->pluck('name', 'id');
        $university = UniversitasModel::all()->pluck('name', 'id');
        $candidate = null;
        return view('components/form_registrasi', compact('religion', 'bank', 'education', 'university', 'candidate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('form_registrasi');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CandidateRequest $request)
    {
        try {
            $identity_file = $this->uploadService($request->file('identity_file'));
            $file_cv = $this->uploadService($request->file('file_cv'));
            $file_photo = $this->uploadService($request->file('file_photo'));
            $file_portfolio = $this->uploadService($request->file('file_portfolio'));

            DB::beginTransaction();
            $candidate = $this->candidateModel::create([
                'identity_file' => $identity_file,
                'file_cv'       => $file_cv,
                'file_photo'    => $file_photo,
                'file_portfolio'=> $file_portfolio,
                'name'          => $request->name,
                'gender'        => $request->gender,
                'date_of_birth' => $request->date_of_birth,
                'city_of_birth' => $request->city_of_birth,
                'religion_id'   => $request->religion_id,
                'email'         => $request->email,
                'phone'         => $request->phone,
                'identity_number' => $request->identity_number,
                'bank_id'       => $request->bank_id,
                'bank_account'  => $request->bank_account,
                'bank_name'     => $request->bank_name,
                'address'       => $request->address,
                'education_id'  => $request->education_id,
                'university_id' => $request->university_id,
                'university_other' => $request->university_other,
                'major'         => $request->major,
                'graduation_year' => $request->graduation_year,
                'in_college' => $request->in_college,
                'semester'   => $request->semester,
                'skill'      => $request->skill,
                'source_information_id' => $request->source_information_id,
                'source_information_other' => $request->source_information_other,
                'candidate_status_id' => 1,
                'ranking'    => $request->ranking,
                'instagram'  => $request->instagram,
                'twitter'    => $request->twitter,
                'facebook'   => $request->facebook,
                'linkedin'   => $request->linkedin,
                'created_by' => 'Admin',
                'updated_by' => ''
            ]);

            for ($i=0; $i < count($request->org_name); $i++) { 
                $org_file[$i] = $this->uploadService($request->file('org_file')[$i]);
                $this->candidateOrganizationModel::create([
                    'candidate_id' => $candidate->id,
                    'org_name' => $request->org_name[$i],
                    'year' => $request->year[$i],
                    'position' => $request->position[$i],
                    'description' => $request->description[$i],
                    'file' => $org_file[$i],
                    'created_by' => 'Admin',
                ]);
            }
            DB::commit();
            return redirect()->back()->with('success', 'Sukses Input Kandidat');   
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('error', $th->getMessage());   
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidate = $this->candidateModel->find($id);
        return view('data_activity_detail', compact('candidate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidate = $this->candidateModel->find($id);

        $religion = ReligionModel::all()->pluck('name', 'id');
        $bank = BankModel::all()->pluck('name', 'id');
        $education = EducationModel::all()->pluck('name', 'id');
        $university = UniversitasModel::all()->pluck('name', 'id');

        return view('data_activity_edit', compact('candidate', 'religion', 'bank', 'education', 'university'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $internshipModel = new InternshipModel();
        $selectionPassModel = new SelectionPassModel();
        try {
            DB::beginTransaction();
            $candidate = $this->candidateModel::find($id);
            $candidate = $candidate->update([
                'name'          => $request->name,
                'gender'        => $request->gender,
                'date_of_birth' => $request->date_of_birth,
                'religion_id'   => $request->religion_id,
                'email'         => $request->email,
                'phone'         => $request->phone,
                'identity_number' => $request->identity_number,
                'identity_file'   => 'asd',
                'bank_id'       => $request->bank_id,
                'bank_account'  => $request->bank_account,
                'bank_name'     => $request->bank_name,
                'address'       => $request->address,
                'education_id'  => $request->education_id,
                'university_id' => $request->university_id,
                'university_other' => $request->university_other,
                'major'         => $request->major,
                'graduation_year' => $request->graduation_year,
                'in_college' => $request->in_college,
                'semester'   => $request->semester,
                'skill'      => $request->skill,
                'source_information_id' => $request->source_information_id,
                'source_information_other' => $request->source_information_other,
                'ranking'    => $request->ranking,
                'instagram'  => $request->instagram,
                'twitter'    => $request->twitter,
                'facebook'   => $request->facebook,
                'linkedin'   => $request->linkedin,
                'created_by' => 'Admin',
                'updated_by' => ''
            ]);

            $candidate_organization = $this->candidateOrganizationModel::create([
                'candidate_id' => $id,
                'org_name' => $request->org_name,
                'year' => $request->year,
                'position' => $request->position,
                'description' => $request->description,
                'file' => $request->org_file,
                'created_by' => 'Admin',
            ]);

            $check_internship = $this->checkService(array('model' => $internshipModel, 'data' => array('candidate_id' => $id)));
            if (!$check_internship) {
                $internshipModel::create([
                    'candidate_id' => $id,
                    'vacancy_internship' => $request->vacancy_internship,
                    'periode_internship' => $request->periode_internship,
                    'type_internship' => $request->type_internship,
                    'location_internship' => $request->location_internship
                ]);
            }else{
                $internshipModel::where('candidate_id', $id)->update([
                    'candidate_id' => $id,
                    'vacancy_internship' => $request->vacancy_internship,
                    'periode_internship' => $request->periode_internship,
                    'type_internship' => $request->type_internship,
                    'location_internship' => $request->location_internship
                ]);
            }

            $check_passed = $this->checkService(array('model' => $selectionPassModel, 'data' => array('candidate_id' => $id)));
            if (!$check_passed) {
                $selectionPassModel::create([
                    'candidate_id' => $id,
                    'unit' => $request->unit,
                    'assesment' => $request->assesment,
                    'score' => $request->score,
                    'result' => $request->result
                ]);
            } else {
                $selectionPassModel::where('candidate_id', $id)->update([
                    'candidate_id' => $id,
                    'unit' => $request->unit,
                    'assesment' => $request->assesment,
                    'score' => $request->score,
                    'result' => $request->result
                ]);
            }
            DB::commit();
            return $candidate;
        } catch (\Throwable $th) {
            return $th->getMessage()." ".$th->getLine();
            DB::rollback();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
