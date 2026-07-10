<x-layout>
    <x-slot:title>
        Register
    </x-slot:title>
    <h1>Register</h1>
    <form method="POST">
        @csrf
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <label>Name: <input name="first_name" required></label><br>
        <label>Surname: <input name="last_name" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Password: <input type="password" name="password" required></label><br>
        <label>Conferm Password: <input type="password" name="password_confirmation" required></label><br>
        <button>Register</button>
    </form>
</x-layout>