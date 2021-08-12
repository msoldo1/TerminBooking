@extends('admin.admin_master')
@section('admin')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-10 col-sm-6">
                <div class="card card-mini  mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{ $igraci->count()}} <i class="mdi mdi-football-helmet"></i></h2>
                        <p>Broj izbrisanih igrača</p>
                        <hr>
                        <table class="table table-striped">
                            <thead >
                            <tr>
                                <th scope="col">Id igraca</th>
                                <th scope="col">Ime</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Brisanje</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($igraci as $igrac)
                                <tr>
                                    <th scope="row">{{ $igrac->id }}</th>
                                    <td>
                                        {{ $igrac->name }}
                                    </td>
                                    <td>
                                        {{ $igrac->email }}
                                    </td>
                                    <td>
                                        <a href=" {{ url('igraci/add/'.$igrac->id) }}" class="btn btn-primary" onclick="return confirm('Jeste li sigurni?')">Vrati igraca</a>
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
