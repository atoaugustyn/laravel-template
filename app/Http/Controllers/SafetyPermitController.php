<?php

namespace App\Http\Controllers;

use App\Models\Permit;
use App\Models\Company;
use App\Models\PermitUnit;
use Illuminate\Http\Request;

class SafetyPermitController extends Controller
{
    public function index () {
        $permits = Permit::with(['company', 'permitUnit'])->where('permit_type', 'Safety permit')->get();
        return view('safety_permit.index', compact('permits'));
    }
}
