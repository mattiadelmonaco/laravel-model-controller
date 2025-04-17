@extends('layouts.master')

@section("content")

<ul class="list-unstyled text-white d-flex flex-wrap gap-5 justify-content-center">
@foreach ($movies as $movie)
    
    <li class="d-flex justify-content-center" style="flex: 1 1 600px; max-width: 600px;">
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