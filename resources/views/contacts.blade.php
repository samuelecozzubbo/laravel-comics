{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div class="jumbotron">
        <h1>Scrivici</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo modi, iusto dolore eaque laudantium
            optio,
            adipisci perspiciatis voluptate obcaecati sit perferendis natus velit ut! Tempora voluptatum ipsam modi rem
            voluptas.
        </p>
        <div class="form-container">
            <form action="#">
                <label for="name">Nome</label>
                <input type="text" name="name">

                <label for="subject">Cognome</label>
                <input type="text" name="surname">

                <label for="email">Email</label>
                <input type="email" name="email">

                <label for="message">Messaggio</label>
                <textarea name="message" rows="5"></textarea>

                <button type="submit" class="submit-btn">Invia</button>
            </form>
        </div>
    </div>
@endsection

@section('titlePage')
    contatti
@endsection
