@extends('admin.admin_master')
@section('admin')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-10 col-sm-6">
                <div class="card card-mini  mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{ $tvrtke->count()}} <i class="mdi mdi-football-helmet"></i></h2>
                        <p>Broj izbrisanih tvrtki</p>
                        <hr>
                        <table class="table table-striped">
                            <thead >
                            <tr>
                                <th scope="col">Id Tvrtke</th>
                                <th scope="col">Naziv</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Brisanje</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($tvrtke as $tvrtka)
                                <tr>
                                    <th scope="row">{{ $tvrtka->id }}</th>
                                    <td>
                                        {{ $tvrtka->name }}
                                    </td>
                                    <td>
                                        {{ $tvrtka->email }}
                                    </td>
                                    <td>
                                        <a href=" {{ url('tvrtke/add/'.$tvrtka->id) }}" class="btn btn-primary" onclick="return confirm('Jeste li sigurni?')">Vrati tvrtku</a>
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
