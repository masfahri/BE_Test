<?php

use App\CandidateModel;
use App\Http\Controllers\CandidateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $candidateModel = new CandidateModel();
    $candidate_lk = $candidateModel->where('gender', 'L')->count();
    $candidate_pr = $candidateModel->where('gender', 'P')->count();
    $candidates = $candidateModel->all();
    return view('dashboard', compact('candidate_lk', 'candidate_pr', 'candidates'));
});

Route::name('form_registrasi.')->prefix('form_registrasi/')->group(function ()
{
    Route::get('index',[CandidateController::class, 'index'])->name('index');
    Route::get('create',[CandidateController::class, 'create'])->name('create');
    Route::get('data_activity_edit/{id}',[CandidateController::class, 'edit'])->name('edit');
    
    Route::post('store',[CandidateController::class, 'store'])->name('store');

    Route::put('update/{id}',[CandidateController::class, 'update'])->name('update');

    Route::delete('delete/{id}',[CandidateController::class, 'destroy'])->name('delete');
});

Route::get('/data_activity', function () {
    $candidateModel = new CandidateModel();
    $candidates = $candidateModel->all();
    return view('data_activity', compact('candidates'));
});

// Route::get('/data_activity_detail/{id}', [CandidateController::class, 'show']);



// Route::get('/data_activity_edit', function () {
//     return view('data_activity_edit');
// });