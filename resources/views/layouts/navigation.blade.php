<div class="p-0 container-xxl position-relative">
    <nav
        class="px-4 py-3 navbar navbar-expand-lg navbar-dark bg-dark px-lg-5 py-lg-0">
        <a href="" class="p-0 navbar-brand">
            <h1 class="m-0 text-primary">
                <i class="fa fa-utensils me-3"></i>Hello Machan
            </h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="py-0 navbar-nav ms-auto pe-4">
                <a href="" class="nav-item nav-link active">Home</a>
                <a href="" class="nav-item nav-link">About</a>
                <a href="" class="nav-item nav-link">Menu</a>
                <a href="" class="nav-item nav-link">Contact</a>

            </div>
            @if(Auth::check())
            <div class="py-0 navbar-nav ms-auto pe-4"></div>
            <a href="{{ route('dashboard') }}" class="nav-item nav-link">Dashboard</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="nav-item nav-link btn btn-link text-decoration-none">Logout</button>
            </form>
            @else
            <div class="py-0 navbar-nav ms-auto pe-4"></div>
            <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
            <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
            @endif
            <a href="" class="ms-3 btn btn-primary">
                <i class="fa fa-shopping-cart me-2"></i>Cart</a>
        </div>
    </nav>
</div>