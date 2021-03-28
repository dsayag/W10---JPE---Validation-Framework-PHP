@extends('layouts.base')

@section('title', 'DWMG3 - Your favorite comic book character website - Edit a designer')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/form.css') }}">
@endsection

@section('content')
    <h1 class="bulle top-200">Edit a designer</h1>
        <div id="card">
            <form action="/editDesigner" method="post" class="card">
                @csrf
                <input type="hidden" name="id" value="{{ $designer->id }}">
                <div>
                    <label for="name">Name</label><br>
                    <input type="text" name="name" id="name" placeholder="your name" value="{{ $designer->name }}">
                </div>    
                <div>
                    <label for="birth_date">Birth date</label><br>
                    <input type="number" name="birth_date" id="birth_date" placeholder="2021" value="{{ $designer->birth_date }}">
                </div>    
                <div>
                    <label for="nationality">Nationality</label><br>
                    <input type="text" name="nationality" id="nationality" placeholder="French" value="{{ $designer->nationality }}">
                </div>
                <div>
                    <input type="submit" value="Submit" class="btn btn-dark top-20">
                </div>
            </form>
        </div>
@endsection