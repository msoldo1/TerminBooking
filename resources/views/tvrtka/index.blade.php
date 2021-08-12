@extends('tvrtka.tvrtka_master')
@section('tvrtka')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-4 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{ $dvorane->count()}} <i class="mdi mdi-city"></i></h2>
                        <p>Broj dvorana <h2></h2></p>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card card-mini  mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{ $teniske->count()}} <i class="mdi mdi-tennis"></i></h2>
                        <p>Broj teniskih dvorana</p><span class="iconify" data-icon="" data-inline="false"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{ $nogometne->count() }} <i class="mdi mdi-soccer"></i></h2>
                        <p>Broj nogometnih dvorana</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card card-mini mb-4">
                    <div class="card-body">
                        <h2 class="mb-1">{{ $kosarkaske->count() }} <i class="mdi mdi-basketball "></i></h2>
                        <p>Broj košarkaskih dvorana</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
