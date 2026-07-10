<x-layout>
    <x-slot:title>Create task</x-slot:title>
    <h1>Create task</h1>
    @error("content")
        <p>{{ $message }}</p>
    @enderror
    <form method="POST" action="/todos">
        @csrf
        <input name="content" />
        <button>Save</button>
    </form>
</x-layout>