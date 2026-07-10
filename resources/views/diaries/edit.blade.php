<x-layout>
    <x-slot:title>{{ $diary->title}} Edit</x-slot:title>
    <h1>{{ $diary->title}} Edit</h1>
    <form action="/diaries/{{ $diary->id }}" method="POST">
        @csrf
        @method('PUT')
        <label>
            <input type="text" name="title" value="{{ old('title', $diary->title)}}">
        </label>
        @error("title")
            <p>{{ $message }}</p>
        @enderror
        <label>
            <input type="text" name="body" value="{{ old('body', $diary->body)}}">
        </label>
        @error("body")
            <p>{{ $message }}</p>
        @enderror
        <label>
            <input type="text" name="date" value="{{ old('date', $diary->date)}}">
        </label>
        @error("date")
            <p>{{ $message }}</p>
        @enderror
        <button>Save Changes</button>
    </form>
</x-layout>