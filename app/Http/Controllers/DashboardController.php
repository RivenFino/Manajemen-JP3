<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    
    public function index()
    {
        $count = [
            'guru' => Guru::count(),
            'mapel' => MataPelajaran::count(),
        ];
        return view('dashboard', compact('count'));

    }
}
