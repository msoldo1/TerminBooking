@extends('tvrtka.tvrtka_master')
@section('tvrtka')
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <form action="/dvorane" method="post">
                @include('tvrtka.dvorana.form')
                <button type="submit" class="btn btn-primary">Dodaj dvoranu</button>
                @csrf
            </form>
        </div>


    </div>
@endsection
