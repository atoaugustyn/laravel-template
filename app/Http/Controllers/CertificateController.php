<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Vessel;

use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = Certificate::with('vessel')->orderBy('name', 'asc')->get();
        return view('certificate.index', compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vessels = Vessel::orderBy('name', 'asc')->get();
        return view('certificate.create', compact('vessels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $certificate = new Certificate;
        $data = $this->doValidation($request, $certificate);
        $certificate->fill($data);
        $certificate->save();

        return redirect()->route('certificate.index')->with('toast_success', 'Certificate added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $certificate)
    {
        //
    }

    public function doValidation($request, Certificate $certificate)
    {
        return $request->validate(
            [
                'vessel_id' => [($certificate->id) ? "sometimes" : "required", "exists:vessels,id"],
                'name' => [($certificate->id) ? "sometimes" : "required"],
                'issue_date' => [($certificate->id) ? "sometimes" : "required", "date"],
                'expiry_date' => [($certificate->id) ? "sometimes" : "required", "date"],
            ],
        );
    }
}
