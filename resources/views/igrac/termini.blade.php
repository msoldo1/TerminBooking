@extends('igrac.igrac_master')
@section('igrac')
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
                                <th scope="col">Rezerviraj</th>

                            </tr>
                            </thead>

                            <tbody>
                            @foreach($termini as $termin)
                                @if($termin->ogranizator == 0 and $termin->deleted == 0)
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
                                            <a href=" {{ url('igraci/rezervacija/'.$termin->id) }}" class="btn btn-primary" >Rezerviraj</a>
                                        </td>
                                    </tr>
                                    @endif
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
