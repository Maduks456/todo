
@auth
<x-layout>
  <div class="box">
    <div class="box_title">
      <h1>Hello {{ Auth::user()->first_name}}</h1>
    </div>
  </div>
</x-layout>
@endauth
@guest
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('style.css') }}">
      <title>{{$title ?? "Guest page"}}</title>
  </head>
  <body>
    <div class="box">
      <div class="box_title">
        <h1>Hello, guest!</h1>
      </div>
      <div class="box_logreg">
        <div class="box_buttons_logreg">
          <a href="/login">
            <button class="button_logreg">
              Login
            </button>
          </a>
        </div>
        <div class="box_buttons_logreg">
          <a href="/register">
            <button class="button_logreg">
              Register
            </button>
          </a>
        </div>
      </div>
    </div> 
  </body>
</html>
@endguest