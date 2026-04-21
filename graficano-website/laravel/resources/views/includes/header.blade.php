
<nav class="navbar navbar-expand-lg navbar-light">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="/">
        <img src="{{ asset('assets/images/Logo.png') }}" alt="graficano-logo-icon" class="img-fluid logo">
    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item">
        <a class="nav-link" href="#">ShowReal
        </a>
      </li> -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('blogs.home') }}">Blogs</a>
            </li>
           
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-mdb-toggle="dropdown" aria-expanded="false">
                    Portfolio
                </a>
                <!-- Dropdown menu -->
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('frontportfolios','branding') }}">Branding </a>
                    </li>
					<li>
                        <a class="dropdown-item" href="{{ route('frontportfolios','printing') }}">Printing </a>
                    </li>
					<li>
                        <a class="dropdown-item" href="{{ route('frontportfolios','video-3d') }}">Video & 3d </a>
                    </li>
					<li>
                        <a class="dropdown-item" href="{{ route('frontportfolios','web-and-digital') }}">Web and digital </a>
                    </li>
					<li>
                        <a class="dropdown-item" href="{{ route('frontportfolios','packaging') }}">Packaging </a>
                    </li>
					<li>
                        <a class="dropdown-item" href="{{ route('frontportfolios','photography') }}">Photography </a>
                    </li>
                   
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('clients') }}">Our Clients</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
            </li>

        </ul>
        <!-- Links -->
    </div>
    <!-- Collapsible content -->
</nav>
