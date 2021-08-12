@extends('tvrtka.tvrtka_master')
@section('tvrtka')

    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-10 col-sm-6">
                <div class="card card-mini  mb-4">
                    <div class="card-body">
                        <h2 class="mb-1"> <i class="mdi mdi-football-helmet"></i></h2>
                        <p>Broj termina</p>
                        <hr>
                        <table class="table table-striped">
                            <thead >
                            <tr>
                                <th scope="col">Id termin</th>
                                <th scope="col">Datum</th>
                                <th scope="col">Početak</th>
                                <th scope="col">Kraj</th>
                                <th scope="col">Info</th>
                                <th scope="col">Brisanje</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($termini as $termin)
                                    <tr>
                                        <th scope="row">{{ $termin->id}}</th>
                                        <td>
                                            {{ $termin->datum }}
                                        </td>
                                        <td>
                                            {{ $termin->pocetak }}
                                        </td>
                                        <td>
                                            {{ $termin->kraj }}
                                        </td>

                                        <td>
                                            <a href=" {{ url('termini/'.$termin->id) }}" class="btn btn-primary" >Prikaži termin</a>
                                        </td>
                                        <td>
                                            <a href=" {{ url('termini/delete/'.$termin->id) }}" class="btn btn-danger" onclick="return confirm('Jeste li sigurni?')">Izbriši termin</a>
                                        </td>
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
