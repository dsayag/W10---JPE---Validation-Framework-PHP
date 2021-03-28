@extends('layouts.base')

@section('title', 'DWMG3 - Your favorite comic book character website - Add a designer')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/form.css') }}">
@endsection

@section('content')
    <h1 class="bulle top-200">Add a designer</h1>
        <section id="card">
            <div class="card top-20">
                <form action="/addDesigner" method="post">
                    @csrf
                        <div>
                            <label for="name">Name</label><br>
                            <input type="text" name="name" id="name" placeholder="your name">
                        </div>
                        <div>
                            <label for="birth_date">Birth date</label><br>
                            <input type="number" name="birth_date" id="birth_date" placeholder="2021">
                        </div>    
                        <div>
                            <label for="nationality">Nationality</label><br>
                            <input type="text" name="nationality" id="nationality" placeholder="nationality">
                        </div>        
                        <div>
                            <input type="submit" value="Add" class="btn btn-dark top-20">
                        </div>
                </form>
            </div>
        </section>
@endsection