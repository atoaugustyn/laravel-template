<?php

namespace App\Http\Controllers;

use App\Models\Permit;
use App\Models\Company;
use App\Models\PermitUnit;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;

class PermitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::orderBy('name', 'asc')->get();
        $permitUnits = PermitUnit::orderBy('name', 'asc')->get();

        return view('permit.create', compact(['permitUnits', 'companies']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permit = new Permit;
        $data = $this->doValidation($request, $permit);
        $permit->fill($data);
        $permit->save();

        return redirect()->route('permit.index')->with('toast_success', 'Permit added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function show(Permit $permit)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function edit(Permit $permit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permit $permit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permit  $permit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permit $permit)
    {
        //
    }

    public function doValidation($request, Permit $permit)
    {
        return $request->validate(
            [
                'company_id' =>  [($permit->id) ? "sometimes" : "required", "exists:companies,id"],
                'permit_unit_id' =>  [($permit->id) ? "sometimes" : "required", "exists:permit_units,id"],
                'name_of_vessel' =>  [($permit->id) ? "sometimes" : "required"],
                'port_of_registry' =>  [($permit->id) ? "sometimes" : "nullable"],
                'gross_tonnage' =>  [($permit->id) ? "sometimes" : "nullable"],
                'imo_number' =>  [($permit->id) ? "sometimes" : "nullable", Rule::unique('permits', 'imo_number')->ignore($permit->id)],
                'call_sign' =>  [($permit->id) ? "sometimes" : "nullable", Rule::unique('permits', 'call_sign')->ignore($permit->id)],
                'permit_number' =>  [($permit->id) ? "sometimes" : "required", Rule::unique('permits', 'permit_number')->ignore($permit->id)],
                'date_of_issue' =>  [($permit->id) ? "sometimes" : "required", "date"],
                'date_of_expiry' =>  [($permit->id) ? "sometimes" : "required", "date"],
            ],
        );
    }
}
