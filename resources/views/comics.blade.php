@extends('layouts.main')


@section('content')
    <main>
        <section class="products">
            <div class="boxes container">
                @foreach ($comics as $comic)
                    <div class="prod-card">
                        <img src="{{ $comic['thumb'] }}" alt="descrizione altenativa">
                        <h3>{{ $comic['title'] }}</h3>
                    </div>
                @endforeach

            </div>
        </section>
    </main>
@endsection


@section('titlePage', 'comics')
