<x-layout>
    <x-slot:title>
        Login
    </x-slot:title>
    <h1>Login</h1>
    <form method="POST">
        @csrf
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Password: <input type="password" name="password" required></label><br>
        <button>Login</button>
    </form>
</x-layout>