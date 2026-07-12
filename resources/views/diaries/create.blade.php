<x-layout>
    <x-slot:title>
        Create Diary
    </x-slot:title>
    <div class="box">
        <div class="box_title">
            <h1>Create Diary</h1>
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
                    <p>{{ $message }}</p><br>
                @enderror
            </div>
            <div class="box_logreg_inputbox">
                <form method="POST"  action="/diaries">
                    @csrf
                    <div>
                         <label >Title: <input name="title"></label><br>
                    </div>
                    <div>
                        <label> Content: <input name="body"/> </label><br>
                    </div>
                    <div>
                        <label>Date: <input type="date" name="date"></label><br>
                    </div>
            </div>
            <div class="line"></div>
                <div class="box_logreg_inputbox">
                    <button class=" input_button green">Create</button>
            </div>
            </form>
        </div>
    </div>
</x-layout>