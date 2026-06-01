<x-layout>
    <x-slot:title>Izveidot uzdevumu</x-slot:title>
    <h1>Izveidot uzdevumu</h1>
    @error("content")
        <p>{{ $message }}</p>
    @enderror
    <form method="POST" action="/todos">
        @csrf
        <input name="content" />
        <button>Saglabāt</button>
    </form>
</x-layout>