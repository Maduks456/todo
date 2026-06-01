<header>
<nav>
    <ul>
        <li><a href="/">Sākums</a></li>
        <li><a href="/todos">Visi uzdevumi</a></li>
        
        <li><a href="/diaries">Dienasgrāmata</a></li>
        <li><a href="/todos/create">Izveidot ierakstu</a></li>
        <li><a href="/diaries/create">Izveidot dienasgrāmatu</a></li>
        @auth
            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">Izrakstīties</button>
                </form>
            </li>
        @endauth
    </ul>
</nav>
</header>