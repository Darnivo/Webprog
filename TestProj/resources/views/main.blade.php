<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
    <script src="/bootstrap/bootstrap.bundle.min.js"></script>

</head>

<body class="d-flex flex-column h-100" data-bs-theme="dark">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/category/1">Snacks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/category/2">Soft Drinks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/category/3">Cookies</a>
                        </li>
                    </ul>

                    <form class="d-flex" role="search" method="GET" action="{{ route('search') }}">
                        <input class="form-control me-2 w-100" type="search" placeholder="Search" aria-label="Search" name="keyword">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>

                    <ul class="d-flex navbar-nav ms-auto mb-2 mb-lg-0">
                        <!-- placeholder section for buttons -->
                        @auth
                        <span class="navbar-text text-white me-2">
                        You're logged in,
                        Your name is {{ Auth::user()->username }}
                        </span>
                        <li class="nav-item">
                            <a class="nav-link" href="/topup">Top up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="/redeem">Redeem points</a>
                        </li>
                        
                        @if (Auth::user()->id == 16)
                        <li class="nav-item">
                            <span class="nav-link fw-bold">You are admin</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/upload">Upload</a>
                        </li>
                        @endif

                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-danger"> Logout</button>
                            </form>
                        </li>
                        @endauth

                        @guest
                        <span class="navbar-text text-white me-2">
                            Go log in fool
                        </span>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-grow-1">
        <div class="container py-3 bg-body-secondary h-100">
            @yield('content')
            <!-- example text -->
            <!-- put content here -->
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-body-tertiary">
        <div class="text-center">
            2042 &copy; Footer here

        </div>
    </footer>
</body>

</html>