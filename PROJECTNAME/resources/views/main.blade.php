<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.bundle.min.js"></script>
 
    <title>Document</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <header class="bg-warning text-center text-white py-4">
        <h1 class="display-4">Giant Books Supplier</h1>
    </header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid d-flex">
        <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll fw-bold">

            <li class="nav-item">
            <a class="nav-link active text-primary" aria-current="page" href="/">Home</a>
            </li>

            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Category
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{url('category/'.'1')}}">Fiction</a></li>
                <li><a class="dropdown-item" href="{{url('category/'.'2')}}">Non-Fiction</a></li>
                <li><a class="dropdown-item" href="{{url('category/'.'3')}}">Science</a></li>
                <li><a class="dropdown-item" href="{{url('category/'.'4')}}">Biography</a></li>
            </ul>
            </li>

            <li class="nav-item">
            <a class="nav-link text-primary" href="/publisher/">Publisher</a>
            </li>

            <li class="nav-item">
            <a class="nav-link text-primary" href="/contact/">Contact</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <!-- This is where the child view content will be inserted -->
    <main class="flex-fill">
        @yield('content')
    </main>

    <footer class="bg-primary">
        <div class = "text-center p3 py-2 text-white"> 
            &copy; 2021 Giant Books Supplier
    </footer>

</html>