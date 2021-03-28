@extends('layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('/css/listcharacters.css')}}">
@endsection

@section('title', 'DWMG3 - Your favorite comic book character website - List of characters')

@section('content')
<h1 class="bulle top-200">List of characters</h1>

<div class="top-20">
    <table class="table table-striped table-light">
        <thead class="thead-dark">
            <tr>                
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
                <th scope="col">Comic</th>
                <th scope="col">Designer</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>            
        </thead>
        <tbody>
            @foreach ($characters as $character)              
            <tr>
                <td><img src="/img/character-{{ $character->id }}.jpg" width="40" height="40" alt="{{ $character->name }}" title="{{ $character->name }}"></td>                
                <td><a href="/character/{{ $character->id }}">{{ $character->name }}</a></td>
                <td>{{ $character->creation_date }}</td>
                <td>{{ $character->comic }}</td>
                <td>
                    <a href="/designer/{{ $character->id }}">{{ $character->designer }}</a></td>
                <td>
                    <a href="/editCharacter/{{ $character->id }}" class="btn btn-success">Edit</a></td>
                <td>
                    <form action="/deleteCharacter" method="POST">
                    @csrf
                        <input type="hidden" name="id" value="{{ $character->id }}">
                        <input type="submit" class="btn btn-danger" value="X">
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection