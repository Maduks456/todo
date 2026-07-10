<x-layout>
@auth

    <h1>Hello {{ Auth::user()->first_name}}</h1>

@endauth
@guest
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
@endguest
</x-layout>