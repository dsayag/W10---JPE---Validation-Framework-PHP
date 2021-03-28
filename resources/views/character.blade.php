@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/character.css')}}">
@endsection

@section('title', 'DWMG3 - Your favorite comic book character website - Character')

@section('content')
    <h1 class="bulle top-200">Character : {{ $character->name }}</h1>
        <section id="card">
            <div class="card">
                <div class="card-img">
                    <img src="/img/character-{{ $character->id }}.jpg" width="200" height="200">
                </div>
                <div class="card-header">
                    <strong>Name :</strong> {{ $character->name }}</div>
                <div class="card-body">
                    <strong>Creation date :</strong> {{ $character->creation_date }}</div>
                <div class="card-body">
                    <strong>Comic :</strong> {{ $character->comic }}</div>
                <div class="card-body">
                    <strong>Designer :</strong> <a href="/designer/{{ $character->id }}">{{ $character->designer }}</a></div>
                <div class="card-body collapse-btn">
                    <div>
                        <a href="/editCharacter/{{ $character->id }}" class="btn btn-success">Edit</a></div>
                    <div>
                        <form action="/deleteCharacter" method="POST">
                            @csrf
                                <input type="hidden" name="id" value="{{ $character->id }}">
                                <input type="submit" class="btn btn-danger" value="X">
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection