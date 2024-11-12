<head>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<style>
    .acc {
        background-color: #9A0C4CFF;
    }

    .acc2{
        background-color: #9A0C4CFF;
    }
    .acc2:hover{
        background-color: #710435FF;
    }

    
        .pagination .page-link {
        color: black; /* Default link text color */
    }

    .pagination .page-item.active .page-link {
        background-color: #9A0C4CFF; /* Background color for selected page */
        color: white; /* Text color for selected page */
        border-color: #9A0C4CFF; /* Border color to match background */
    }

    .pagination .page-item.active .page-link:hover {
        background-color: #9A0C4CFF; /* Keep background color the same on hover */
        color: white; /* Keep text color white on hover */
        border-color: #9A0C4CFF; /* Keep border color consistent on hover */
    }

    .pagination .page-item:not(.active) .page-link:hover {
        color: #9A0C4CFF; /* Optional: Hover color for non-selected pages */
    }

    /* Style for the active navbar item */
    .nav-link.active {
        background-color: #8D0643FF; /* Darker color for the active link */
        color: white; /* White text color for the active link */
    }

    .nav-link:hover {
        background-color: #8D0643FF; /* Keep same hover color as active link */
        color: white;
    }


</style>

<body class="d-flex flex-column min-vh-100">

    <div class="container-fluid acc">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
            <div class="col-md-3 mb-2 mb-md-0 ms-2">
                <a class="navbar-brand" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block my-1" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="#FFFFFF"></path></svg>
                </a>    
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 h5 fw-normal">
                <li><a href="/" class="nav-link px-3 text-white @if(Request::is('/')) active @endif">Home</a></li>
                <li><a href="{{url('category/'.'1')}}" class="nav-link px-3 text-white @if(Request::is('category/1')) active @endif">Medical</a></li>
                <li><a href="{{url('category/'.'2')}}" class="nav-link px-3 text-white @if(Request::is('category/2')) active @endif">Lifestyle</a></li>
                <li><a href="{{url('category/'.'3')}}" class="nav-link px-3 text-white @if(Request::is('category/3')) active @endif">Women's Health</a></li>
                <li><a href="{{url('category/'.'4')}}" class="nav-link px-3 text-white @if(Request::is('category/4')) active @endif">Disease</a></li>
                <li><a href="/about" class="nav-link px-3 text-white @if(Request::is('about')) active @endif">About us</a></li>
            </ul>


            <!-- <div class="col-md-3 text-end">
                <form class="d-flex my-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div> -->
            <div class="col-md-3 text-end">
                <form class="d-flex my-auto" role="search" method="GET" action="{{ route('posts.search') }}">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>

        </header>
    </div>

    <main class="d-flex flex-column flex-fill">
        @yield('content')
    </main>

    <footer>
        <div class="text-center bg-indigo-100 pt-3 pb-1 acc text-white">
            <h1 class="h5 fw-normal">&copy; 2024 Medisry Health Inc.</h1>
        </div>
    </footer>

</body>