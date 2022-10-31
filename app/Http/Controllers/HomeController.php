<?php

namespace App\Http\Controllers;

use App\Models\Tpermohonan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function superadmin()
    {
        return 'superadmin';
    }

    public function pemohon()
    {
        $permohonan = Tpermohonan::orderBy('id', 'DESC')->get();
        return view('pemohon.home', compact('permohonan'));
    }
}
