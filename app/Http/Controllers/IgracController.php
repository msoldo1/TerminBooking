<?php

namespace App\Http\Controllers;

use App\Models\Dvorana;
use App\Models\Igrac;
use App\Models\Termin;
use App\Models\TerminIgraci;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IgracController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $dvorane = Dvorana::all();
        $tenis = Dvorana::where('tip', 'Tenis');
        $nogomet = Dvorana::where('tip', 'Nogomet');
        $kosarka = Dvorana::where('tip', 'Kosarka');
        return view('igrac.index', compact('user', 'nogomet', 'tenis', 'dvorane', 'kosarka'));
    }

    public function tvrtke()
    {
        $user = Auth::user();
        $tvrtke = User::where('role',2)->get();

        return view('igrac.tvrtka', compact('user','tvrtke'));
    }

    public function dvorane($tvrtka)
    {
        $user = Auth::user();
        $dvorane = Dvorana::where('tvrtka_id', $tvrtka)->get();

        return view('igrac.dvorane', compact('user','dvorane'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function termini($dvorana)
    {
        $user = Auth::user();
        $termini = Termin::where('dvorana_id', $dvorana)->get();

        return view('igrac.termini',compact('user', 'termini'));
    }

    public function rezerviraj($termin)
    {
        $user = Auth::user();
        $termin = Termin::whereId( $termin)->get();
        $termin[0]->ogranizator = $user->id;
        $termin[0]->save();
        return back();
    }

    public function listatermina()
    {
        $user = Auth::user();
        $termini = Termin::where('ogranizator', $user->id)->get();
        return view('igrac.listatermina', compact('user','termini'));
    }

    public function pozovi($id)
    {
        $user = Auth::user();
        $termin = Termin::whereId($id)->get();
        $termin = $termin[0]->id;
        $igraci = User::where('role', 1)->get();
        return view('igrac.igraci.index', compact('user','igraci', 'termin'));
    }

    public function dodavanje(Request $request)
    {
        $dodavanje = new TerminIgraci();
        $dodavanje->termin = $request->termin;
        $dodavanje->igrac = $request->igrac;
        $dodavanje->save();
        $user = Auth::user();
        $termin = Termin::whereId($request->termin)->get();
        $termin = $termin[0];
        $terminigraci = TerminIgraci::where('termin', $termin->id)->get();

        return view('igrac.show',compact('user', 'termin', 'terminigraci'));

    }

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
     * @param  \App\Models\Igrac  $igrac
     * @return \Illuminate\Http\Response
     */
    public function show(Igrac $igrac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Igrac  $igrac
     * @return \Illuminate\Http\Response
     */
    public function edit(Igrac $igrac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Igrac  $igrac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Igrac $igrac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Igrac  $igrac
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $igrac = User::find($id);
        $igrac->deleted = 1;
        $igrac->save();

        return redirect('admin/igraci');
    }

    public function add($id)
    {
        $igrac = User::find($id);
        $igrac->deleted = 0;
        $igrac->save();

        return redirect('admin/igraci');
    }
}
