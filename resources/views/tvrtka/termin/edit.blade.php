

@extends('tvrtka.tvrtka_master')
@section('tvrtka')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <form action="/termini/{{ $termin->id }}" method="post">
                @method('PATCH')
                @include('tvrtka.termin.form')
                <button type="submit" class="btn btn-primary">Spremi promjene</button>
                @csrf
            </form>
        </div>


    </div>
@endsection
