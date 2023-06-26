<nav>
    <h1>MENU</h1>
    <ul>
        @foreach (config('menu') as $item)
            <li><a href="{{ route($item['route']) }}">{{ $item['name'] }}</a></li>
        @endforeach
    </ul>
</nav>
