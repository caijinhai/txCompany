<?php

namespace App\Http\Controllers;

use App\Krpano_photo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class KrpanoController extends Controller
{
    public function show( $id)
    {
        $krpano_photo = Krpano_photo::findOrFail($id);
        return view('krpano.show',compact('krpano_photo'));
    }
    public function create()
    {
        return view('krpano.create');
    }
}
