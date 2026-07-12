<x-layout>
    <x-slot:title>
        Diary: {{ $diary->title }}
    </x-slot:title>
    <div class="box">
        <div class="box_title">
            <h1>Diary: {{ $diary->title }}</h1>
        </div>
        <div class="box_show">
            <div>
                <p class="big">Date: {{$diary->date}}</p>
                <p class="big">{{$diary->body}}</p>
            </div>
            
            <div class="box_show_box">
                <div>
                    <a  href="{{ $diary->id }}/edit">
                        <button class="editdelete_button green">
                            Edit
                        </button>
                    </a>
                </div>
                <div>
                    <form action="{{$diary->id}}/delete"method="POST">
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