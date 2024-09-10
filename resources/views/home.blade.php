{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
    <main>
        <h1>HOME PAGE</h1>
        <p>Benvenuti nella più piccola raccolta di fumetti fatta con Laravel</p>
    </main>
@endsection


@section('titlePage')
    home
@endsection
