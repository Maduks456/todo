<x-layout>
    <x-slot:title>
        {{ $todo->content }} Task
    </x-slot:title>
    <div class="box">
        <div class="box_title">
            <h1>{{ $todo->content }} Task</h1>
        </div>
        <div class="box_show">
            <div>
                <p class="bigger">Completed: {{ $todo->completed ? "Yes" : "No" }}</p>
            </div>
            <div class="box_show_box">
                <div>
                    <a href="{{ $todo->id }}/edit">
                        <button class="editdelete_button green">
                            Edit
                        </button>
                    </a>
                </div>
                <div>
                    <form action="{{$todo->id}}/delete"method="POST">
                        @csrf
                        @method("DELETE")
                        <button class=" editdelete_button red">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>