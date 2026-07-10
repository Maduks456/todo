<x-layout>
    <x-slot:title>
        {{ $todo->content }}
    </x-slot:title>
    <h1>{{ $todo->content }}</h1>
    <p>Completed: {{ $todo->completed ? "Jā" : "Nē" }}</p>
    <a href="{{ $todo->id }}/edit">
        <button>
            Edit
        </button>
    </a>
    <form action="{{$todo->id}}/delete"method="POST">
        @csrf
        @method("DELETE")
        <button>
            Delete
        </button>
    </form>
</x-layout>