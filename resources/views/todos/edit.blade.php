<x-layout>
    <x-slot:title>
        {{ $todo->content}} Task Edit
    </x-slot:title>
    <div class="box">
        <div class="box_title">
            <h1>{{ $todo->content}} Task Edit</h1>
        </div>
        <div class="box_logreg">
            <div>
                @error("completed")
                    <p>{{ $message }}</p><br>
                @enderror
                @error("content")
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="box_logreg_inputbox">
                <form action="/todos/{{ $todo->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label>
                        Task: <input type="text" name="content" value="{{ old('content', $todo->content)}}"><br>
                    </label>
                    
                    <label>
                        Is the task completed (Check the box if yes):
                        <input name="completed" type="hidden" value="0">
                        <input name="completed" type="checkbox" value="1" {{ old("completed", $todo->completed) ? 'checked' : '' }}>   
                    </label>
            </div>
            <div class="line"></div>
                <div class="box_logreg_inputbox">
                    <button class=" input_button green">Save Changes</button>
            </div>
            </form>
        </div>
    </div>
</x-layout>