<?php

namespace App\Http\Controllers;

use App\Models\Vessel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class VesselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vessels = Vessel::all();
        return view('vessel.index', compact('vessels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vessel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vessel = new Vessel;
        $data = $this->doValidation($request, $vessel);
        $vessel->fill($data);
        $vessel->save();

        return redirect()->route('vessel.index')->with('toast_success', 'Vessel added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vessel  $vessel
     * @return \Illuminate\Http\Response
     */
    public function show(Vessel $vessel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vessel  $vessel
     * @return \Illuminate\Http\Response
     */
    public function edit(Vessel $vessel)
    {
        return view('vessel.edit', compact('vessel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vessel  $vessel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vessel $vessel)
    {
        $data = $this->doValidation($request, $vessel);
        $vessel->update($data);
        return redirect()->route('vessel.index')->with('toast_success', 'Vessel updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vessel  $vessel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vessel $vessel)
    {
        //
    }

    public function doValidation($request, Vessel $vessel)
    {
        return $request->validate(
            [
                'name' =>  [($vessel->id) ? "sometimes" : "required", Rule::unique('vessels', 'name')->ignore($vessel->id)],
                'vessel_type' =>  [($vessel->id) ? "sometimes" : "nullable"],
                'flag' =>  [($vessel->id) ? "sometimes" : "nullable"],
                'port_of_registration' =>  [($vessel->id) ? "sometimes" : "nullable"],
                'gross_tonnage' =>  [($vessel->id) ? "sometimes" : "nullable"],
                'call_sign' =>  [($vessel->id) ? "sometimes" : "nullable"],
                'name_address_owner' =>  [($vessel->id) ? "sometimes" : "nullable"],
            ],
        );
    }
}
