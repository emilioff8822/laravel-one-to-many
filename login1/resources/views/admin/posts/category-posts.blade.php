@extends('layouts.admin')

@section('content')
    <div class="container p-5">

        @if (session('deleted'))
            <div class="alert alert-success" role="alert">
                {{ session('deleted') }}
            </div>
        @endif



        <h2 class="fs-4 text-secondary my-4">
            Elenco Categorie e Posts
        </h2>


    </div>
@endsection
