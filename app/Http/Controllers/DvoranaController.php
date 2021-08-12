<?php

namespace App\Http\Controllers;

use App\Models\Dvorana;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DvoranaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $dvorane = Dvorana::where('tvrtka_id',Auth::user()->id)->where('deleted', 0)->get();

        return view('tvrtka.dvorana.index', compact('dvorane','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $dvorana = new Dvorana();
        return view ('tvrtka.dvorana.create',compact('dvorana', 'user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dvorana = new Dvorana();
        $dvorana->tvrtka_id = Auth::user()->id;
        $dvorana->naziv = $request->naziv;
        $dvorana->tip = $request->tip;
        $dvorana->deleted = 0;
        $dvorana->max_igraci = $request->max_igraci;
        $dvorana->save();

        return redirect('dvorane');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dvorana  $dvorana
     * @return \Illuminate\Http\Response
     */
    public function show(Dvorana $dvorana)
    {
        $user = Auth::user();
        return view('tvrtka.dvorana.show', compact('dvorana','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dvorana  $dvorana
     * @return \Illuminate\Http\Response
     */
    public function edit(Dvorana $dvorana)
    {
        $user = Auth::user();
        return view('tvrtka.dvorana.edit', compact('dvorana','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dvorana  $dvorana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dvorana $dvorana)
    {
        $user = Auth::user();
        $dvorana->update($this->validateRequest());
        $dvorana->save();
        return redirect('dvorane/' . $dvorana->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dvorana  $dvorana
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dvorana = Dvorana::find($id);
        $dvorana->deleted = 1;
        $dvorana->save();
        return redirect('dvorane');
    }
    private function validateRequest()
    {
        return request()->validate([
            'naziv' => 'required',
            'tip' => 'required',
            'max_igraci' => 'required',
        ]);
    }

}
