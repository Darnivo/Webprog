@extends('main')


@section('content')

<!-- <div class="flex-fill" style="background-color: #E4E4E4FF;">
    <div class="d-flex flex-fill my-auto mx-5" style="background-color: #FFFFFFFF;">
        yes
    </div>    
</div> -->

<div class="d-flex flex-column flex-fill">
    <!-- Main Content Area -->
    <div class="d-flex flex-fill justify-content-center" style="background-color:#E1DEE3;">
        <div class="d-flex w-100">
            <!-- Left Column -->
            <div class="flex-grow-1">
                <!-- Left content here -->
            </div>

            <!-- Center Column (Main column, stretching to fill the space) -->
            <div class="flex-grow-2 bg-white py-2" style="width: 70%;">
                <div class="mx-4 mt-2">
                    <h1 class="h1 text-center display-4">About us<h1>
                    <hr class="border border-2 opacity-100">
                    <p class="fs-4 fw-light">
                    Welcome to our healthcare blog! Here, we aim to provide you with the latest insights, tips, and information on maintaining a healthy lifestyle. Our team of experts covers a wide range of topics, from nutrition and fitness to mental health and wellness. We believe that staying informed is key to making the best decisions for your health. Whether you're looking for advice on managing stress, finding the right diet, or understanding the latest medical research, we've got you covered. Join us on this journey to better health and well-being!
                    </p>

                    <br>
                    <h2 class=>Follow us on:</h2>

                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#000000" class="bi bi-twitter me-1" viewBox="0 0 16 16">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#000000" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                    </svg>

                </div>
            </div>

            <!-- Right Column -->
            <div class="flex-grow-1">
                <!-- Right content here -->
            </div>
        </div>
    </div>
</div>




@endsection