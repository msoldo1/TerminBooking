@extends('tvrtka.tvrtka_master')
@section('tvrtka')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-12">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h1>Termin {{ $termin->datum }}</h1></div>
                    <div class="p-2"><a href="{{ $termin->id }}/edit" class="btn btn-primary" role="button">Uredi</a></div>
                </div>
                <hr>
            </div>

            <div class="col-12 ">
                <h2>Osnovne informacije</h2>
                <br>
                <h4><strong>Naziv dvorane:</strong> {{ $termin->dvorana->naziv }}</h4>
                <br>
                <h4><strong>Datum termina:</strong> {{ $termin->datum }}</h4>
                <br>
                <h4><strong>Pocetak termina:</strong> {{ $termin->pocetak }}</h4>
                <br>
                <h4><strong>Kraj termina:</strong> {{ $termin->kraj }}</h4>
                <br>
            </div>


        </div>


    </div>
@endsection
