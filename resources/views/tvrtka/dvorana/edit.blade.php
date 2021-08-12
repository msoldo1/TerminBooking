

@extends('tvrtka.tvrtka_master')
@section('tvrtka')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <form action="/dvorane/{{ $dvorana->id }}" method="post">
                @method('PATCH')
                @include('tvrtka.dvorana.form')
                <button type="submit" class="btn btn-primary">Spremi promjene</button>
                @csrf
            </form>
        </div>


    </div>
@endsection
