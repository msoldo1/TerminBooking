<?php

namespace App\Http\Controllers;

use App\Models\Igrac;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $users = Auth::user();
        $admini = User::where('role', 0)->get();
        $tvrtke = User::where('role', 1)->get();
        $igraci = User::where('role',2)->get();

        return view('admin.index',compact('users','igraci', 'tvrtke', 'admini'));
    }


    public function listaigraci()
    {
        $users = Auth::user();
        $igraci = User::where('role',1)->where('deleted',0)->get();
        return view('admin.listaigraci', compact('igraci','users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Igrac  $igrac
     * @return \Illuminate\Http\Response
     */
    public function listaigraciizbrisano()
    {
        $users = Auth::user();
        $igraci = User::where('role',1)->where('deleted', 1)->get();
        return view('admin.listaigraciizbrisano', compact('igraci','users'));
    }


    public function listatvrtki()
    {
        $users = Auth::user();
        $tvrtke = User::where('role',2)->where('deleted',0)->get();
        return view('admin.listatvrtki', compact('tvrtke','users'));
    }

    public function listatvrtkiizbrisano()
    {
        $users = Auth::user();
        $tvrtke = User::where('role',2)->where('deleted', 1)->get();
        return view('admin.listatvrtkiizbrisano', compact('tvrtke','users'));
    }



}
