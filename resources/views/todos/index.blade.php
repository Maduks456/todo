<x-layout>
    <x-slot:title>
        Tasks
    </x-slot:title>
    <div class="box">
        <div class="box_title">
            <h1>Tasks</h1>
        </div>
        <div class="line"></div>
        <div class="box_taskbox">
            @if (Auth::user()->todos->isEmpty())
                <p class="bigger">You haven't made any tasks yet</p>
            @else
                @foreach (Auth::user()->todos as $todo) 
                    <a href="/todos/{{ $todo->id }}">
                        <button class="task_button">
                            {{ $todo->content }}
                        </button>
                    </a>
                @endforeach 
            @endif
        </div>
    </div>
</x-layout>