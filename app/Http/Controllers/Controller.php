<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use \Datetime;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function saveImages($request, $folder, $inputName) {

        if ($request->hasFile($inputName)) {
            $image = $request->file($inputName);


            $extension = $image->getClientOriginalExtension();

            $date = new DateTime();
            $result = $date->format('Y-m-d-H-i-s');
            $krr = explode('-', $result);
            $result = implode("", $krr);
            $newName = $result . '.' . $extension;

            $image->storeAs($folder, $newName, 'images');

            return $folder.'/'.$newName;

            //Pegar arquivos com storage
            //Storage::disk('images')->get($arquivo);

        } else {

            return 'no-img.jpg';
        }


    }
}
