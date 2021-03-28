@extends('layouts.base')

@section('title', 'DWMG3 - Your favorite comic book character website - Edit a character')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/form.css') }}">
@endsection

@section('content')
    <h1 class="bulle top-200">Edit a character</h1>
        <div id="card">
            <form action="/editCharacter" method="post" class="card">
                @csrf
                <input type="hidden" name="id" value="{{ $character->id }}">
                <div>
                    <label for="name">Name</label><br>
                    <input type="text" name="name" id="name" placeholder="your name" value="{{ $character->name }}">
                </div>    
                <div>
                    <label for="creation_date">Creation date</label><br>
                    <input type="number" name="creation_date" id="creation_date" placeholder="2021" value="{{ $character->creation_date }}">
                </div>    
                <div>
                    <label for="comic">Comic</label><br>
                    <input type="text" name="comic" id="comic" placeholder="comic" value="{{ $character->comic }}">
                </div>        
                <div>
                    <label for="designer">Designer</label><br>
                    <input type="text" name="designer" id="designer" placeholder="designer" value="{{ $character->designer }}">          
                </div>
                <div>
                    <input type="submit" value="Submit" class="btn btn-dark top-20">
                </div>
            </form>
        </div>
@endsection