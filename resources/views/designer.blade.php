@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/designer.css') }}">
@endsection

@section('title', 'DWMG3 - Your favorite comic book character website - Designer')

@section('content')
    <h1 class="bulle top-200">Designer : {{ $designer->name }}</h1>
        <section id="card">
            <div class="card">
                <div class="card-img"><img src="/img/designer-{{ $designer->id }}.jpg" width="200" height="200"></div>
                <div class="card-header"><strong>Name :</strong> {{ $designer->name }}</div>
                <div class="card-body"><strong>Birth date :</strong> {{ $designer->birth_date }}</div>
                <div class="card-body"><strong>Nationality :</strong> {{ $designer->nationality }}</div>
                <div class="card-body collapse-btn">
                    <div>
                        <a href="/editDesigner/{{ $designer->id }}" class="btn btn-success">Edit</a></div>
                    <div>
                        <form action="/deleteDesigner" method="POST">
                            @csrf
                                <input type="hidden" name="id" value="{{ $designer->id }}">
                                <input type="submit" class="btn btn-danger" value="X">
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection