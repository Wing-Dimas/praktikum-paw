<?php

namespace App\Http\Controllers;

use App\Http\Requests\MahasiswaRequest;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view("home", compact("mahasiswa"));
    }

    public function create(){
        return view("create");
    }

    public function store(MahasiswaRequest $request)
    {
        Mahasiswa::create($request->all());
        return redirect("/");
    }
}
