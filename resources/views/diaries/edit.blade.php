<x-layout>
    <x-slot:title>
        Diary: {{ $diary->title}} Edit
    </x-slot:title>
      <div class="box">
        <div class="box_title">
            <h1> Diary: {{ $diary->title}} Edit</h1>
        </div>
        <div class="box_logreg">
            <div>
                @error("title")
                    <p>{{ $message }}</p><br>
                @enderror
                @error("body")
                    <p>{{ $message }}</p><br>
                @enderror
                @error("date")
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="box_logreg_inputbox">
                <form action="/diaries/{{ $diary->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label>
                       Title: <input type="text" name="title" value="{{ old('title', $diary->title)}}"><br>
                    </label>
                    <label>
                        Content: <input type="text" name="body" value="{{ old('body', $diary->body)}}"><br>
                    </label>
                    <label>
                        Date: <input type="date" name="date" value="{{ old('date', $diary->date)}}">
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