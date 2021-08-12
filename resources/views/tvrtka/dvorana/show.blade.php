@extends('tvrtka.tvrtka_master')
@section('tvrtka')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-12">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h1>Dvorana {{ $dvorana->naziv }}</h1></div>
                    <div class="p-2"><a href="{{ $dvorana->id }}/edit" class="btn btn-primary" role="button">Uredi</a></div>
                </div>
                <hr>
            </div>

            <div class="col-12 ">
                <h2>Osnovne informacije</h2>
                <br>
                <h4><strong>Naziv dvorane:</strong> {{ $dvorana->naziv }}</h4>
                <br>
                <h4><strong>Tip dvorane:</strong> {{ $dvorana->tip }}</h4>
                <br>
                <h4><strong>Kapacitet dvorane:</strong> {{ $dvorana->max_igraci }}</h4>
                <br>
            </div>


        </div>


    </div>
@endsection
