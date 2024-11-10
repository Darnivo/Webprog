<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.bundle.min.js"></script>
</head>
    <!-- <h1> This is crazy </h1> -->
    <header>
        <div class = "bg-warning py-2">
            <h1 class="text-center"> This is crazy </h1>
    </header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Location
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{url('/byloc/'.'Jakarta')}}">Jakarta</a></li>
                <li><a class="dropdown-item" href="{{url('/byloc/'.'Tangerang')}}">Tangerang</a></li>
            </ul>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="/coming">Coming Soon</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="/about">About us</a>
            </li>
            
        </ul>
        </div>
    </div>
    </nav>

    @yield('content')

    <footer>
        <div class="bg-primary text-white">
        <p class="text-center"> &copy; 2021 </p>
    </footer>

</html>