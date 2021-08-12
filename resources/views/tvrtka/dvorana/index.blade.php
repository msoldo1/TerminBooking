@extends('tvrtka.tvrtka_master')
@section('tvrtka')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-10 col-sm-6">
                <div class="card card-mini  mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{ $dvorane->count()}} <i class="mdi mdi-football-helmet"></i></h2>
                        <p>Broj dvorana</p>
                        <hr>
                        <table class="table table-striped">
                            <thead >
                            <tr>
                                <th scope="col">Id dvorane</th>
                                <th scope="col">Naziv</th>
                                <th scope="col">Tip</th>
                                <th scope="col">Max broj igraca</th>
                                <th scope="col">Info</th>
                                <th scope="col">Termini</th>
                                <th scope="col">Brisanje</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($dvorane as $dvorana)
                                <tr>
                                    <th scope="row">{{ $dvorana->id }}</th>
                                    <td>
                                        {{ $dvorana->naziv }}
                                    </td>
                                    <td>
                                        {{ $dvorana->tip }}
                                    </td>
                                    <td>
                                        {{ $dvorana->max_igraci }}
                                    </td>
                                    <td>
                                        <a href=" {{ url('dvorane/'.$dvorana->id) }}" class="btn btn-primary" >Prikaži dvoranu</a>
                                    </td>
                                    <td>
                                        <a href=" {{ url('termini/dvorane/'.$dvorana->id) }}" class="btn btn-primary" >Prikaži termine</a>
                                    </td>
                                    <td>
                                        <a href=" {{ url('dvorane/delete/'.$dvorana->id) }}" class="btn btn-danger" onclick="return confirm('Jeste li sigurni?')">Izbriši dvoranu</a>
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
