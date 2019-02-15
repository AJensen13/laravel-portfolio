<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="chat">Chat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile">Profile</a>
            </li>
            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="logout">Logout</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li>
            @endif
        </ul>
    </div>
</nav>
