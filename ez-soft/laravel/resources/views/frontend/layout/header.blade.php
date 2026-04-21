<!--============= Header Section Starts Here =============-->
<header class="header-section header-white-dark">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/frontend/images/logo/ezsoft-org.png') }}" alt="logo">
                </a>
            </div>
            <ul class="menu">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About Us</a>
                </li>
                <li>
                    <a href="{{ route('service') }}">Services</a>
                    <ul class="submenu">
                        @php
                            $services = App\Models\Service::all();
                        @endphp
                        @foreach ($services as $service)
                            <li>
                                <a href="{{ route('service.detail', $service->slug) }}">{{ $service->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                
                <li>
                    <a href="{{ route('blog.show') }}">Blog</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="d-sm-none">
                    <a href="{{ route('demo') }}" class="button-3 long-light">Get Demo<i class="flaticon-right"></i></a>
                    {{-- <a href="{{ route('demo') }}" class="m-0 button-3 long-light">Get Demo</a> --}}
                </li>
            </ul>
            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="header-right">
                <a href="{{ route('demo') }}" class="header-button d-none d-sm-inline-block light">Get Demo</a>
            </div>
        </div>
    </div>
</header>
<!--============= Header Section Ends Here =============-->
