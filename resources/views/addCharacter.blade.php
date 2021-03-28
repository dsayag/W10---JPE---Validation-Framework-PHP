@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/form.css') }}">
@endsection

@section('title', 'DWMG3 - Your favorite comic book character website - Add a character')

@section('content')
    <h1 class="bulle top-200">Add a character</h1>
        <section id="card">
            <div class="card top-20">
                <form action="/addCharacter" method="post">
                    @csrf
                    <div>
                        <label for="name" class="card-img">Name</label><br>
                        <input type="text" name="name" id="name" placeholder="your name">
                    </div>
                    <div>
                        <label for="creation_date">Creation date</label><br>
                        <input type="number" name="creation_date" id="creation_date" placeholder="2021">
                    </div>    
                    <div>
                        <label for="comic">Comic</label><br>
                        <input type="text" name="comic" id="comic" placeholder="comic">
                    </div>        
                    <div>
                        <label for="designer">Designer</label><br>
                        <input type="text" name="designer" id="designer" placeholder="designer">
                    </div>
                    <div>
                        <input type="submit" value="Add" class="btn btn-dark top-20">
                    </div>
                </form>
            </div>
        </section>
@endsection