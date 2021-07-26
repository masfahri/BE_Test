<?php

namespace App\Http\Controllers;

use App\Services\CRUDServices;
use App\Services\UploadServices;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Check Data
     * @param array $request
     * @return Boolean
     */
    public function checkService($request)
    {
        $services = new CRUDServices;
        return $services->handleExists($request);
    }

    /**
     * Create Data
     * @param array $request
     * @return array with Messages
     */
    public function createService($request)
    {
        $services = new CRUDServices;
        return $services->handleCreate($request);
    }

    /**
     * Delete Data
     * @param array $request
     * @return array with Messages
     */
    public function deleteService($request)
    {
        $services = new CRUDServices; 
        return $services->handleDelete($request);
    }

    /**
     * Update Data
     * @param array $request
     * @return array with Messages
     */
    public function updateService($request)
    {
        $services = new CRUDServices;
        return $services->handleUpdate($request);
    }

    /**
     * Create Multiple Table
     *
     * @param array $request
     * @return void
     */
    public function createContinueService($request)
    {
        $services = new CRUDServices;
        return $services->handleCreateContinue($request);
    }

    /**
     * Upload File
     *
     * @param files $file
     * @return String
     */
    public function uploadService($file)
    {
        $services = new UploadServices;
        return $services->handleUploadedImage($file);
    }

}