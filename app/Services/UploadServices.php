<?php

namespace App\Services;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UploadServices {

    public function handleUploadedImage($file)
    {
        if (!is_null($file)) {
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$file->getClientOriginalName());
            return $file->getClientOriginalName();
        }
    } 
}
