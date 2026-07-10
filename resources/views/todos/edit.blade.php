<x-layout>
    <x-slot:title>{{ $todo->content}} Edit</x-slot:title>
    <h1>{{ $todo->content}} Edit</h1>
    <form action="/todos/{{ $todo->id }}" method="POST">
        @csrf
        @method('PUT')
        <label>
            <input type="text" name="content" value="{{ old('content', $todo->content)}}">
        </label>
        @error("content")
            <p>{{ $message }}</p>
        @enderror
        <label>
            Completed: 
            <input name="completed" type="hidden" value="0">
            <input name="completed" type="checkbox" value="1" {{ old("completed", $todo->completed) ? 'checked' : '' }}>   
        </label>
        @error("completed")
            <p>{{ $message }}</p>
        @enderror
             
        <button>Save Changes</button>
    </form>
</x-layout>