@extends('igrac.igrac_master')
@section('igrac')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-10 col-sm-6">
                <div class="card card-mini  mb-4">
                    <div class="card-body">
                        <h2>Lista dvorana</h2>
                        <hr>
                        <table class="table table-striped">
                            <thead >
                            <tr>
                                <th scope="col">Id dvorane</th>
                                <th scope="col">Naziv</th>
                                <th scope="col">Max kapacitet</th>
                                <th scope="col">Tip</th>
                                <th scope="col">Broj termina</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($dvorane as $dvorana)
                                <tr>
                                    <th scope="row">{{ $dvorana->id}}</th>
                                    <td>
                                        {{ $dvorana->naziv }}
                                    </td>
                                    <td>
                                        {{ $dvorana->max_kapacitet }}
                                    </td>
                                    <td>
                                        {{ $dvorana->tip }}
                                    </td>
                                    <td>
                                        {{ $dvorana->termin->count() }}
                                    </td>
                                    <td>
                                        <a href=" {{ url('igraci/termini/'.$dvorana->id) }}" class="btn btn-primary" >Lista termina</a>
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
