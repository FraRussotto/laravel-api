<header class="bg-dark">
    <nav class="navbar navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" target="_blank" href="{{ route('home') }}"><i class="fa-solid fa-house"></i></a>
            <h2 class="logo">BOOLFOLIO</h2>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                <button class="btn btn-light" type="submit"><i class="fa-solid fa-right-from-bracket"></i></button>
            </form>
        </div>
    </nav>
</header>
