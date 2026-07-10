<x-layout>
    <x-slot:title>
        {{ $diary->title }}
    </x-slot:title>
    <h1>{{ $diary->title }}</h1>
    <a href="{{ $diary->id }}/edit">
        <button>
            Edit
        </button>
    </a>
    <form action="{{$diary->id}}/delete"method="POST">
        @csrf
        @method("DELETE")
        <button>
            Delete
        </button>
    </form>
</x-layout>