<x-layout>
    <x-slot:title>Create Diary</x-slot:title>
    <h1>Create Diary</h1>
    @error("content")
        <p>{{ $message }}</p>
    @enderror
    <form method="POST" action="/diaries">
        @csrf
        <input name="title"><br>
        <textarea name="body"></textarea><br>
        <input type="date" name="date"><br>
        <button>Save</button>
    </form>
</x-layout>