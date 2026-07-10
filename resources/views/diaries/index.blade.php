<x-layout>
    <x-slot:title>
        Diaries
    </x-slot:title>
    <h1>All Diaries</h1>
    <ul>
        @foreach (Auth::user()->diaries as $diary)
            <li><a href="diaries/{{ $diary->id }}">{{$diary->title}}</a></li>
        @endforeach
    <ul>
</x-layout>