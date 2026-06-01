
@auth
<x-layout>
    <h1>Sveiks {{ Auth::user()->first_name}}</h1>
</x-layout>
@endauth
@guest
<a href="/why">Kapēc</a>
  <p>Sveiks, viesi!</p>
  <a href="/login">login</a>
  <a href="/register">Register</a>
@endguest