<header class="fixed-top mb-5">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="/">Tsunagu</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="nav navbar-nav navbar-right">

            @if (Auth::check())

                <li class="nav-item"><a href="{{ config('app.url'). '/match' }}" class="nav-link">マイページ</a></li>
                <li class="nav-item"><a href="{{ config('app.url'). '/searchInput' }}" class="nav-link">検索</a></li>
                <li class="nav-item"><a href="{{ config('app.url'). '/showLogout' }}" class="nav-link">{{ Auth::user()->last_name."さん" }}</a></li>

            @else

                <li class="nav-item"><a href="{{ config('app.url'). '/signup' }}" class="nav-link">新規登録</a></li>
                <li class="nav-item"><a href="{{ config('app.url'). '/login' }}" class="nav-link">ログイン</a></li>
                <li class="nav-item"><a href="{{ config('app.url'). '/searchInput' }}" class="nav-link">検索</a></li>

            @endif

            </ul>
        </div>

    </nav>

</header>
