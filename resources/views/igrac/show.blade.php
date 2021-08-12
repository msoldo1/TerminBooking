@extends('igrac.igrac_master')
@section('igrac')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-12">
                <div class="d-flex">
                    <div class="mr-auto p-2"><h1>Termin {{ $termin->datum }}</h1></div>
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
                @foreach($terminigraci as $terminigrac)
                    <br>
                    <h4><strong>Igrac:</strong> {{ $terminigrac->igraci->name }}</h4>
                    <br>
                @endforeach
            </div>


        </div>


    </div>
@endsection
