@extends('igrac.igrac_master')
@section('igrac')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-4 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">Lista tvrtki <i class="mdi mdi-factory"></i></h2>
                    </div>
                </div>
            </div>
        </div>
        @foreach($tvrtke as $tvrtka)

        <div class="row">
            <div class="col-xl-8 col-sm-12">
                <a href="{{ url('/igraci/dvorane/'.$tvrtka->id) }}">
                    <div class="card card-mini mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-sm-12" >
                                    <h3 class="mb-1">Naziv tvrtke : {{ $tvrtka->name }} <i class="mdi mdi-factory"></i> </h3>
                                </div>
                                <div class="col-xl-6 col-sm-12" >
                                    <h3 class="mb-1">Broj dvorana : {{ $tvrtka->dvorane->count() }} <i class="mdi mdi-factory"></i></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach

    </div>
@endsection
