<x-layout>
    <x-slot:title>
        Diaries
    </x-slot:title>
    <div class="box">
        <div class="box_title">
            <h1>Your Diaries</h1>
        </div>
        <div class="line"></div>
        <div class="box_taskbox">
            @if (Auth::user()->diaries->isEmpty())
                <p class="bigger">You haven't made any diaries yet</p>
            @else
                @foreach (Auth::user()->diaries as $diary) 
                    <a href="diaries/{{ $diary->id }}">
                        <button class="task_button">
                            {{$diary->title}}
                        </button>
                    </a>
                @endforeach 
            @endif
        </div>
    </div>
</x-layout>