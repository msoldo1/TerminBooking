@extends('admin.admin_master')
@section('admin')
<div class="content">
    <!-- Top Statistics -->
    <div class="row">
        <div class="col-xl-4 col-sm-6">
            <div class="card card-mini mb-4">
                <div class="card-body">
                    <h2 class="mb-1">{{ $users->count() }} <i class="mdi mdi-account"></i></h2>
                    <p>Broj korisnika <h2></h2></p>

                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card card-mini  mb-4">
                <div class="card-body">
                    <h2 class="mb-1">{{ $igraci->count()}} <i class="mdi mdi-football-helmet"></i></h2>
                    <p>Broj igrača</p>

                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-xl-4 col-sm-6">
            <div class="card card-mini mb-4">
                <div class="card-body">
                    <h2 class="mb-1">{{ $tvrtke->count() }} <i class="mdi mdi-football-helmet"></i></h2>
                    <p>Broj tvrtki</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card card-mini mb-4">
                <div class="card-body">
                    <h2 class="mb-1">{{ $admini->count() }} <i class="mdi mdi-account-key"></i></h2>
                    <p>Broj admina</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
