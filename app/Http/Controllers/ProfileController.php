<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id, $name)
    {
        return view('pages.profile.index')->with([
            'name' => $name,
            'id' => $id,
        ]);
    }
}
