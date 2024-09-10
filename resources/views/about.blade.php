{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@php
    $members = config('team.team_members');
@endphp

@extends('layouts.main')

@section('content')
    <div class="container my-5">

    </div>
    <main>
        <div class="jumbotron">
            <h1>Il nostro fantastico team</h1>
            <p class="jumbo-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto suscipit deserunt assumenda a officia
                quibusdam, soluta quo neque unde illum. A ut veritatis voluptatibus delectus aliquid cumque quia. Cum nulla
                beatae iure nisi exercitationem accusamus, illo minus corporis deserunt ad. Omnis voluptates distinctio
                dignissimos sint voluptate minima esse eos modi suscipit quaerat tempora blanditiis vitae quam laudantium
                consequuntur veniam molestias nesciunt magnam hic libero et placeat quisquam, provident explicabo. Amet
                sapiente ea, iusto ipsa quam exercitationem maiores incidunt veniam, architecto officia facilis eum quidem
                quos! Consequuntur iste perferendis odio esse consequatur aperiam incidunt ducimus adipisci dolorum
                voluptatum enim rem officiis, quam laudantium aspernatur, error fugiat labore cupiditate aliquam voluptates
                reiciendis aliquid assumenda? Id alias expedita tempore ad unde neque eum adipisci vel officia, ullam
                dignissimos, laborum iusto. Culpa nemo, nihil, blanditiis obcaecati fuga dicta dolores delectus sunt iusto,
                distinctio quod molestias enim veniam incidunt voluptate ad. Libero tempora magni eius fugit molestiae optio
                repudiandae ad quos iure neque, praesentium illo laudantium eos enim corrupti accusantium quam voluptatem
                fugiat reprehenderit iusto animi non ducimus. Quidem ea, animi consectetur ullam soluta repellendus iste
                error excepturi et nesciunt delectus ipsa quia modi officiis odio a est sapiente! Dicta voluptatem nisi
                laborum est consectetur illum cupiditate ratione soluta. Quod voluptate doloribus, numquam tenetur mollitia
                et quam explicabo nisi hic odio expedita tempore perferendis ullam, autem totam ab error blanditiis itaque,
                dolor harum deserunt? Animi, veniam quae! Fugiat ducimus harum corrupti est similique nulla in autem modi
                numquam aspernatur voluptas repellat mollitia esse nisi impedit, dolore dolorem, voluptate, commodi facilis
                labore nobis ipsum doloremque. Quae animi ullam blanditiis inventore temporibus nulla, alias perferendis
                error sunt labore, quo corporis repellat molestiae iure. Quam nihil aut harum, rem voluptatibus sapiente
                eaque delectus labore corporis inventore dolore ea laborum adipisci et fugit unde soluta iste earum nam sit?
            </p>
            <div class="team-container">
                @foreach ($members as $member)
                    <div class="team-card">
                        <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="team-card-img">
                        <div class="team-card-body">
                            <h5 class="team-card-title">{{ $member['name'] }}</h5>
                            <h6 class="team-card-role">{{ $member['role'] }}</h6>
                            <p class="team-card-bio">{{ $member['bio'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection


@section('titlePage')
    chi siamo
@endsection
