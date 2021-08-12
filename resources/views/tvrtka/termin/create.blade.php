@extends('tvrtka.tvrtka_master')
@section('tvrtka')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <form action="/termini" method="post">
                @include('tvrtka.termin.form')
                <button type="submit" class="btn btn-primary">Dodaj termin</button>
                @csrf
            </form>
        </div>


    </div>
@endsection
