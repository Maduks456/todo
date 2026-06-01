<x-layout>
    <x-slot:title>
        Dienasgrāmatas
    </x-slot:title>
    <h1>Visi dienasgrāmatas</h1>
    <ul>
        @foreach (Auth::user()->diaries as $diary)
            <li><a href="diaries/{{ $diary->id }}">{{$diary->title}}</a></li>
        @endforeach
    <ul>
</x-layout>