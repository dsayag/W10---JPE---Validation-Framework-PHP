@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/designer.css')}}">
@endsection

@section('title', 'DWMG3 - Your favorite comic book character website - List of designers')

@section('content')
<h1 class="bulle top-200">List of designers</h1>

<div class="top-20">
    <table class="table table-striped table-light">
        <thead class="thead-dark">
            <tr>                
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Birth date</th>
                <th scope="col">Nationaliy</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>            
        </thead>
        <tbody>
            @foreach ($designers as $designer)              
            <tr>
                <td><img src="/img/designer-{{ $designer->id }}.jpg" width="40" height="40" alt="{{ $designer->name }}" title="{{ $designer->name }}"></td>                
                <td><a href="/designer/{{ $designer->id }}">{{ $designer->name }}</a></td>
                <td>{{ $designer->birth_date }}</td>
                <td>{{ $designer->nationality }}</td>
                <td>
                    <a href="/editDesigner/{{ $designer->id }}" class="btn btn-success">Edit</a></td>
                <td>
                    <form action="/deleteDesigner" method="POST">
                    @csrf
                        <input type="hidden" name="id" value="{{ $designer->id }}">
                        <input type="submit" class="btn btn-danger" value="X">
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection