<x-layout>
    <x-slot:title>
        Create A Task
    </x-slot:title>
    <div class="box">
        <div class="box_title">
            <h1>Create A Task</h1>
        </div>
        <div class="box_logreg">
            <div class="box_logreg_inputbox">
                <form method="POST"  action="/todos">
                    @csrf
                    
                        @if ($errors->any())
                             @error("content")
                                <p>{{ $message }}</p>
                            @enderror
                        @endif
                        <label >Task:</label><input name="content" />
            </div>
            <div class="line"></div>
                <div class="box_logreg_inputbox">
                    <button class=" input_button green">Create</button>
            </div>
            </form>
        </div>
    </div>
</x-layout>