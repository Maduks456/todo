
@auth
<x-layout>
    <h1>Hello {{ Auth::user()->first_name}}</h1>
</x-layout>
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