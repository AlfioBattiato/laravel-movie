<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='/index.css'>
    <title>@yield('title', 'Titolo di default')</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer>
    </script>
</head>

<body>
    @include('includes.nav')

    <div class="container">
        <main>
            @yield('content')
        </main>
    </div>





    <footer class="bg-black text-white pt-4 mt-5">
    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase">About MovieSite</h5>
                <p>MovieSite is your go-to source for the latest movies, trailers, and reviews. Stay updated with our comprehensive movie database and enjoy a seamless movie experience.</p>
            </div>
            <!-- Useful Links Section -->
            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase">Useful Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Home</a></li>
                    <li><a href="#" class="text-white">About Us</a></li>
                    <li><a href="#" class="text-white">Contact</a></li>
                    <li><a href="#" class="text-white">Privacy Policy</a></li>
                </ul>
            </div>
            <!-- Contact Section -->
            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase">Contact Us</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-geo-alt"></i> 123 Movie Lane, Filmtown, CA 12345</li>
                    <li><i class="bi bi-telephone"></i> +1 234 567 890</li>
                    <li><i class="bi bi-envelope"></i> info@moviesite.com</li>
                </ul>
                <!-- Social Media Links -->
                <h6 class="text-uppercase mt-3">Follow Us</h6>
                <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </div>
    <div class="bg-black text-center py-3 mt-4">
        <div class="container">
            <p class="mb-0">&copy; 2024 MovieSite. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>

</html>