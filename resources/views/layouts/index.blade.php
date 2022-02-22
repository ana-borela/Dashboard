<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('dashboard/css/dashboard.css') }}">

    {{-- FontAwesome --}}
    <script src="https://kit.fontawesome.com/579603f7c6.js" crossorigin="anonymous"></script>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</head>

<body>

    {{-- Background --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#24a8ad" fill-opacity="1"
            d="M0,0L48,16C96,32,192,64,288,69.3C384,75,480,53,576,37.3C672,21,768,11,864,42.7C960,75,1056,149,1152,170.7C1248,192,1344,160,1392,144L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
    <header>
        <div class="px-3 pt-3 text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center">
                    <a href="/login"
                        class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-dark text-decoration-none">
                        <img src="{{ asset('dashboard/material/logo.png') }}" alt="" class="mw-100 logo">
                    </a>

                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                        <li>
                            <a href="/login" class="nav-link text-secondary">
                                <i class="fa-solid fa-arrow-right-to-bracket"></i>
                                Login
                            </a>
                        </li>
                        <li>
                            <a href="/criar-conta" class="nav-link text-secondary">
                                <i class="fa-regular fa-circle-user"></i>
                                Criar conta
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')

    </main>

    <footer>
        <div class="col-12 text-center pb-5">
            <i class="fa-solid fa-copyright"></i>
            {{ date('Y') }} By
            <a href="https://www.gunika.co" target="_blank" class="link fs-4">
                Grupo Unika
            </a>
        </div>
    </footer>

    {{-- Scripts --}}
    <script src="{{ asset('dashboard/js/dashboard.js') }}"></script>
</body>

</html>