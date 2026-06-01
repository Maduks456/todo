
    <h1>Reģistrēties</h1>
    <form method="POST">
        @csrf
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <label>Vards: <input name="first_name" required></label><br>
        <label>Uzvards: <input name="last_name" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Password: <input type="password" name="password" required></label><br>
        <label>Conferm Password: <input type="password" name="password_confirmation" required></label><br>
        <button>Saglabāt</button>
    </form>
