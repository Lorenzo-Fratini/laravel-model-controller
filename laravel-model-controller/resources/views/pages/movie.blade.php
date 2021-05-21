@extends('layouts.main-layout')

@section('content')
    <main>
        <h1>{{ $movie -> title }}</h1>
        <ul>
            <li>
                Titolo originale: 
                {{ $movie -> original_title }}
            </li>
            <li>
                Nazionalità: 
                {{ $movie -> nationality }}
            </li>
            <li>
                Data di uscita: 
                {{ date('d/m/Y', strtotime($movie -> date)) }}
            </li>
            <li>
                Voto: 
                {{ $movie -> vote }}
            </li>
        </ul>
    </main>
@endsection