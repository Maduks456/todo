<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('style.css') }}">
      <title>{{$title ?? "Register"}}</title>
  </head>
  <body>
    <div class="box">
        <div class="box_title">
            <h1>Register</h1>
        </div>
        <div class="box_logreg">
            <div>
                <form method="POST">
                        @csrf
                        @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                        @endif
            </div>
            <div class="box_logreg_inputbox">
                <label>Name: <input name="first_name" value="{{old('first_name')}}" required></label><br>
                <label>Surname: <input name="last_name" value="{{old('last_name')}}"required></label><br>
                <label>Email: <input type="email" name="email" value="{{old('email')}}"required></label><br>
                <label>Password: <input type="password" name="password" required></label><br>
                <label>Conferm Password: <input type="password" name="password_confirmation" required></label><br>
            </div>
            <div class="line"></div>
            <div class="box_logreg_inputbox">
                <button class=" input_button green">Register</button>
                <p>Already have an account: <a href="/login">Login</a></p>
            </div>
                
            </form>
        </div>
    </div>
    
    

  </body>
</html>