<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Wali;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        return view('dosen.index', compact(['dosen']));
    }
    public function create()
    {
        return view('dosen.create');
    }
    public function store(Request $request)
    {
        Dosen::create($request->except(['_token', 'submit']));
        return redirect('/dosen');
    }
    public function edit($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen.edit', compact(['dosen']));
    }
    public function update($id, Request $request)
    {
        $dosen = Dosen::find($id);
        $dosen->update($request->except(['_token', 'submit']));
        return redirect('/dosen');
    }
    public function destroy($id)
    {
        $dosen = Dosen::find($id);
        $dosen -> delete();
        return redirect('/dosen');
    }
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $dosen = Dosen::where('nama', 'LIKE', '%'.$request->search.'%')->get();
        } else {
            $dosen = Dosen::all();
        }

        return view('dosen.index', ['dosen'=> $dosen]);
    }

    // one to one relationship
    public function mahasiswa()
    {
        $dosen = Dosen::all();
        return view('dosen.mahasiswa', ['dosen' => $dosen]);
    }
    public function searchA(Request $request)
    {
        if ($request->has('search')) {
            $mahasiswa = Mahasiswa::where('nama', 'LIKE', '%'.$request->search.'%')->get();
        } else {
            $mahasiswa = Mahasiswa::all();
        }

        return view('dosen.mahasiswa', ['mahasiswa'=> $mahasiswa]);
    }

    // one to many relationship
    public function wali()
    {
        $wali = Wali::all();
        return view('dosen.wali', ['wali' => $wali]);
    }
    public function searchB(Request $request)
    {
        if ($request->has('search')) {
            $wali = Wali::where('nama', 'LIKE', '%'.$request->search.'%')->get();
        } else {
            $wali = Wali::all();
        }

        return view('dosen.wali', ['wali'=> $wali]);
    }
}
