{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
    <main>

        <div class="jumbotron">
            <h1>HOME PAGE</h1>
            <p class="jumbo-text">Benvenuti nella più piccola raccolta di fumetti fatta con Laravel</p>
            <div class="current-series">Current Series</div>
        </div>
    </main>
@endsection


@section('titlePage')
    home
@endsection
