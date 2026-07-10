<x-layout>
    <x-slot:title>
        All Todo Tasks
    </x-slot:title>
    <h1>All Todo Tasks</h1>
    <ul>
        @foreach (Auth::user()->todos as $todo) 
            <li><a href="/todos/{{ $todo->id }}">{{ $todo->content }}</a></li>
        @endforeach 
    </ul>
</x-layout>