@extends('layouts.master')

@section("content")

<ul class="list-group">
@foreach ($movies as $movie)
    
    <li>
        <x-card>
            <x-slot:title>
                {{$movie["title"]}}
            </x-slot:title>
            <x-slot:original_title>
                {{$movie["original_title"]}}
            </x-slot:original_title>
            <x-slot:date>
                {{$movie["date"]}}
            </x-slot:date>
            <x-slot:nationality>
                {{$movie["nationality"]}}
            </x-slot:nationality>
            <x-slot:rating>
                {{$movie["vote"]}}
            </x-slot:rating>


        </x-card>
    </li>

@endforeach
</ul>

@endsection