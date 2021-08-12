<?php

namespace App\Http\Controllers;

use App\Models\Dvorana;
use App\Models\Termin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TerminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($dvorana)
    {
        $user = Auth::user();
        $termini = Termin::where('dvorana_id', $dvorana)->where('deleted',0)->get();
        return view('tvrtka.termin.index', compact('user', 'termini'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $dvorane = Dvorana::where('tvrtka_id', $user->id)->get();
        $termin = new Termin();
        return view ('tvrtka.termin.create',compact('termin', 'user','dvorane'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $termin = new Termin();
        $termin->dvorana_id = $request->dvorana_id;
        $termin->pocetak = $request->pocetak;
        $termin->kraj = $request->kraj;
        $termin->deleted = 0;
        $termin->datum = $request->datum;
        $termin->save();

        return redirect('/termini/dvorane/'.$termin->dvorana_id );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function show(Termin $termin)
    {
        $user = Auth::user();
        return view('tvrtka.termin.show', compact('termin','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function edit(Termin $termin)
    {
        $user = Auth::user();
        $dvorane = Dvorana::all();
        return view('tvrtka.termin.edit', compact('termin','user','dvorane'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Termin $termin)
    {
        $user = Auth::user();
        $termin->update($this->validateRequest());
        $termin->save();
        return redirect('termini/' . $termin->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Termin  $termin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $termin = Termin::find($id);
        $termin->deleted = 1;
        $termin->save();
        return redirect('termini/' . $termin->id);
    }

    private function validateRequest()
    {
        return request()->validate([
            'datum' => 'required',
            'pocetak' => 'required',
            'kraj' => 'required',
            'dvorana_id'=>'required'
        ]);
    }
}
