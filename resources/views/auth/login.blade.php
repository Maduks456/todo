<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('style.css') }}">
      <title>{{$title ?? "Login"}}</title>
  </head>
  <body>
    <div class="box">
        <div class="box_title">
            <h1>Login</h1>
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
                    <label>Email: <input type="email" name="email" required></label><br>
                    <label>Password: <input type="password" name="password" required></label><br>
            </div>
            <div class="line"></div>
                <div class="box_logreg_inputbox">
                    <button class=" input_button green">Login</button>
                </div>
                
            </form>
        </div>
    </div>
  </body>
</html>