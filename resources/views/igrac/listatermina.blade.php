@extends('igrac.igrac_master')
@section('igrac')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-10 col-sm-6">
                <div class="card card-mini  mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{ $termini->count()}} <i class="mdi mdi-football-helmet"></i></h2>
                        <p>Broj termina rezerviranih</p>
                        <hr>
                        <table class="table table-striped">
                            <thead >
                            <tr>
                                <th scope="col">Id termina</th>
                                <th scope="col">Datum termina</th>
                                <th scope="col">Početak termina</th>
                                <th scope="col">Kraj termina</th>
                                <th scope="col">Dodaj igrace</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($termini as $termin)
                                <tr>
                                    <th scope="row">{{ $termin->id }}</th>
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
                                        <a href=" {{ url('dodajigraca/'.$termin->id) }}" class="btn btn-primary" >Dodaj igrace na termin</a>
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
