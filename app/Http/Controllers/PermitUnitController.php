<?php

namespace App\Http\Controllers;

use App\Models\PermitUnit;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class PermitUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permitUnits = PermitUnit::all();
        return view('permit_unit.create', compact('permitUnits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permit_unit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
                'name' =>  [($permitUnit->id) ? "sometimes" : "required", Rule::unique('permit_units', 'name')->ignore($permitUnit->id)],
                'permit_type' =>  [($permitUnit->id) ? "sometimes" : "required"],
            ],
        );
    }
}
