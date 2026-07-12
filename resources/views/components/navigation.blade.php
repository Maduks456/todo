<header>
<nav>
    <div class="nav">
        <div class="nav_left">
            <div>
                <a href="/">
                    <button>
                        Start Page
                    </button>
                </a>
            </div>
            <div>
                <a href="/todos">
                    <button>
                        Your Tasks
                    </button>
                </a>
            </div>
            <div>
                <a href="/diaries">
                    <button>
                        Diaries
                    </button>
                </a>
            </div>
            <div>
                <a href="/todos/create">
                    <button>
                        Create A Task
                    </button>
                </a>
            </div>
            <div>
                <a href="/diaries/create">
                    <button>
                        Create A Diary
                    </button>
                </a>
            </div>
        </div>
        <div class="nav_right">
             @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @endauth
        </div>
    </div>
</nav>
</header>