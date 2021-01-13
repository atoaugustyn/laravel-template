<?php

namespace App\Http\Controllers;

use App\Models\PermitType;
use App\Models\PermitUnit;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class PermitUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permitTypes = DB::table('permit_units')
            ->join('permit_types', 'permit_types.id', '=', 'permit_units.permit_type_id')
            ->select('permit_types.*', 'permit_units.unit_name')
            ->get();
            return view('permit_unit.index', compact('permitTypes'));
        
       
             
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permitTypes = PermitType::all();
        return view('permit_unit.create', compact('permitTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permitUnit = new PermitUnit;
        $data = $this->doValidation($request, $permitUnit);
        $permitUnit->fill($data);
        $permitUnit->save();
        return redirect()->route('permit_unit.index')->with('toast_success', 'Permit unit added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PermitUnit  $permitUnit
     * @return \Illuminate\Http\Response
     */
    public function show(PermitUnit $permitUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PermitUnit  $permitUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(PermitUnit $permitUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PermitUnit  $permitUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PermitUnit $permitUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermitUnit  $permitUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermitUnit $permitUnit)
    {
        //
    }

    public function doValidation($request, PermitUnit $permitUnit)
    {
        return $request->validate(
            [
                'permit_type_id' =>  [($permitUnit->id) ? "sometimes" : "required", "exists:permit_types,id"],
                'name' =>  [($permitUnit->id) ? "sometimes" : "required", Rule::unique('permit_units', 'name')->ignore($permitUnit->id)],
            ],
        );
    }
}
