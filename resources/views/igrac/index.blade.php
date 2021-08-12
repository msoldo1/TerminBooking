@extends('igrac.igrac_master')
@section('igrac')
        <div class="content">
            <!-- Top Statistics -->
            <div class="row">
                <div class="col-xl-4 col-sm-6">
                    <div class="card card-mini mb-4">
                        <div class="card-body">
                            <h2 class="mb-1">Dobro došli {{ $user->name }} <i class="mdi mdi-account"></i></h2>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-xl-4 col-sm-6">
                    <div class="card card-mini  mb-4">
                        <div class="card-body">
                            <h2 class="mb-1">{{ $dvorane->count()}} <i class="mdi mdi-football-helmet"></i></h2>
                            <p>Broj dvorana</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card card-mini mb-4">
                        <div class="card-body">
                            <h2 class="mb-1">{{ $tenis->count() }} <i class="mdi mdi-tennis"></i></h2>
                            <p>Broj teniskih dvorana</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xl-4 col-sm-6">
                    <div class="card card-mini mb-4">
                        <div class="card-body">
                            <h2 class="mb-1">{{ $kosarka->count() }} <i class="mdi mdi-basketball"></i></h2>
                            <p>Broj kosarkaških dvorana</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card card-mini mb-4">
                        <div class="card-body">
                            <h2 class="mb-1">{{ $nogomet->count() }} <i class="mdi mdi-soccer"></i></h2>
                            <p>Broj nogometnih dvorana</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection
