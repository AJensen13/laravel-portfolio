@if (isset($allboards))
    <ul class="nav flex-column justify-content-center">
        @foreach ($allboards as $board)
            <li class="nav-item">
                <a class="nav-link" href="/board/{{ $board["id"] }}">{{ $board["title"] }}</a>
            </li>
        @endforeach
    </ul>
@endif
