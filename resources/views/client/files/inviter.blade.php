@extends('client.master')

@section('title')
    SignIn
@endsection

@section('content')

<style>
    .back{
        background-image: url('images/logo6.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white; /* Couleur du texte en blanc pour contraster avec l'image */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
</style>

<div class="container">

    <div class="row mt-1 mb-5">
        <div class="col text-start">
            <i class="bi bi-arrow-left-circle text-dark"></i>
        </div>
        <div class="mt-2 col text-center">
            <h1>INVITER</h1>
        </div>
        <div class="col text-end">
            <i class="bi bi-people text-dark"></i>
        </div>
    </div>

    <div class="container-fluid back">
        <p>
            Etes- vous pret a rejoindre notre equipe
            dynamique et passionnee ? Nous sommes
            a la recherche de personnes talentueises 
            et motivees pour reforcer notre equipe.
            Si vous connaissez quelqu’un qui corresondrait
            parfaitement a notre culture et a nos
            valeurs, n’hesitez pas a les inviter a postuler avec 
            nous ! Ensemble, nous pouvons accomplir
            de grandes choses. Invitez-les des maintenat
            a nous rejoindre en partageant ce lien:
            <a href="#">[Lien d’invitation]</a> Nous sommes impatients
            de les accueillir dans notre equipe !
        </p>
    </div>
</div>


@endsection