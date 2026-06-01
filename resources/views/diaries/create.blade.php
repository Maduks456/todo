<x-layout>
    <x-slot:title>Izveidot dienasgrāmatu</x-slot:title>
    <h1>Izveidot dienasgrāmatu</h1>
    @error("content")
        <p>{{ $message }}</p>
    @enderror
    <form method="POST" action="/diaries">
        @csrf
        <input name="title"><br>
        <textarea name="body"></textarea><br>
        <input type="date" name="date"><br>
        <button>Saglabāt</button>
    </form>
</x-layout>