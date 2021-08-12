<?php

namespace App\Http\Controllers;

use App\Models\Dvorana;
use App\Models\Tvrtka;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TvrtkaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $dvorane = Dvorana::where('tvrtka_id',Auth::user()->id)->get();
        $teniske = Dvorana::where('tip', 0 )->where( 'tvrtka_id',Auth::user()->id)->get();
        $nogometne = Dvorana::where('tip', 1)->where( 'tvrtka_id',Auth::user()->id)->get();
        $kosarkaske = Dvorana::where('tip', 2)->where('tvrtka_id',Auth::user()->id)->get();

        return view('tvrtka.index', compact('user','dvorane', 'teniske', 'nogometne', 'kosarkaske'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Tvrtka  $tvrtka
     * @return \Illuminate\Http\Response
     */
    public function show(Tvrtka $tvrtka)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tvrtka  $tvrtka
     * @return \Illuminate\Http\Response
     */
    public function edit(Tvrtka $tvrtka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tvrtka  $tvrtka
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tvrtka $tvrtka)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tvrtka  $tvrtka
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tvrtka = User::find($id);
        $dvorane = Dvorana::all();
        foreach ($dvorane as $dvorana){
            if($dvorana->tvrtka_id == $tvrtka->id){
                $dvorana->deleted = 1;
                $dvorana->save();
            }
        }
        $tvrtka->deleted = 1;
        $tvrtka->save();

        return redirect('admin/tvrtke');
    }

    public function add($id)
    {
        $tvrtka= User::find($id);
        $tvrtka->deleted = 0;
        $tvrtka->save();

        return redirect('admin/tvrtke');
    }
}
