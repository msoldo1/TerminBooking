@extends('igrac.igrac_master')
@section('igrac')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-10 col-sm-6">
                <div class="card card-mini  mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{ $igraci->count()}} <i class="mdi mdi-football-helmet"></i></h2>
                        <p>Broj igraca</p>
                        <hr>
                        <table class="table table-striped">
                            <thead >
                            <tr>
                                <th scope="col">Id igraca</th>
                                <th scope="col">Ime igraca</th>
                                <th scope="col">E mail</th>
                                <th scope="col">Pozovi na termin</th>
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
                                        <form action="/dodajigraca" method="post">
                                            <input type="hidden" value="{{$termin}}" name="termin" id="termin" />
                                            <input type="hidden" value="{{$igrac->id}}" name="igrac" id="igrac" />
                                            <button type="submit" class="btn btn-primary">Dodaj igraca</button>
                                            @csrf
                                        </form>
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
