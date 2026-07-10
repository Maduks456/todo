
@auth
<x-layout>
    <h1>Hello {{ Auth::user()->first_name}}</h1>
</x-layout>
@endauth
@guest
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('style.css') }}">
      <title>{{$title ?? "Guest page}}</title>
  </head>
  <body>
    <p>Hello, guest!</p>
    <a href="/login">
      <button>
        Login
      </button>
    </a>
    <a href="/register">
      <button>
        Register
      </button>
    </a>
  </body>
</html>
@endguest