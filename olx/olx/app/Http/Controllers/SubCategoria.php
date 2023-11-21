<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoria extends Controller
{
    public function store(){
    $requestData = $request->all();
                if ($request->hasFile('attachment')) {
            $requestData['attachment'] = $request->file('attachment')
                ->store('uploads', 'public');
        }

        File::create($requestData);
    }
}
