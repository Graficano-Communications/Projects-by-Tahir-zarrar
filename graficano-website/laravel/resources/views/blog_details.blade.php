@extends('layouts.master')
@section('meta_title', $blog->meta_title)
@section('meta_description', $blog->meta_description)
@section('meta_tags', $blog->meta_tags)
@section('title', $blog->title)


@section('content')
<style>
    .postbox-details-text p span {
    color: #ffffff;
    }
    .postbox-details-text span span {
    color: #ffffff;
    }
    .postbox-details-text p  {
    color: #ffffff;
    }
</style>

    <!-- breadcurmb area start -->
    <div class="tp-breadcrumb-area tp-breadcrumb-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-12">
                    <div class="tp-breadcrumb-content text-center">
                        <h3 class="tp-breadcrumb-title">Blog Details</h3>
                        <div class="tp-breadcrumb-list mb-35">
                            <span><a href="{{ route('index') }}">Home</a></span>
                            <span class="dvdr"><i>|</i></span>
                            <span>Blogs</span>
                            <span class="dvdr"><i>|</i></span>
                            <span>Blog Details</span>
                        </div>
                        <div class="tp-breadcrumb-scrolldown smooth">
                            <a href="#postbox">
                                <span>
                                    <svg width="16" height="9" viewBox="0 0 16 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L8 8L15 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcurmb area end -->

    <!-- postbox area start -->
    <section id="postbox" class="postbox-area pt-110 pb-80">
        <div class="container container-1330">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="postbox-wrapper mb-115">
                        <article class="postbox-details-item item-border mb-20">
                            <div class="postbox-details-info-wrap">
                                <div class="postbox-tag postbox-details-tag">
                                    <span>
                                        <i>
                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.39101 4.39135H4.39936M13.6089 8.73899L8.74578 13.6021C8.61979 13.7283 8.47018 13.8283 8.3055 13.8966C8.14082 13.9649 7.9643 14 7.78603 14C7.60777 14 7.43124 13.9649 7.26656 13.8966C7.10188 13.8283 6.95228 13.7283 6.82629 13.6021L1 7.78264V1H7.78264L13.6089 6.82629C13.8616 7.08045 14.0034 7.42427 14.0034 7.78264C14.0034 8.14102 13.8616 8.48483 13.6089 8.73899Z"
                                                    stroke="white" stroke-opacity="0.6" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </i>
                                        Blog
                                    </span>
                                </div>
                                <h4 class="postbox-title fs-54">{{ $blog->title }}</h4>
                                <div class="postbox-details-meta d-flex align-items-center">
                                    <div class="postbox-author-box d-flex align-items-center ">
                                        <div class="postbox-author-img">
                                            <img src="{{ asset('images/blogs/' . $blog->avatar_photo) }}" alt="">
                                        </div>
                                        <div class="postbox-author-info">
                                            <h4 class="postbox-author-name">{{ $blog->writer_name }}</h4>
                                        </div>
                                    </div>
                                    <div class="postbox-meta">
                                        <i>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 4.19997V8.99997L12.2 10.6M17 9C17 13.4183 13.4183 17 9 17C4.58172 17 1 13.4183 1 9C1 4.58172 4.58172 1 9 1C13.4183 1 17 4.58172 17 9Z"
                                                    stroke="white" stroke-opacity="0.6" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </i>
                                        <span>{{ $blog->created_at }}</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div class="postbox-details-thumb mb-45">
                            @isset($blog->image1)
                                <img class="w-100" src="{{ asset('images/blogs/' . $blog->image1) }}" alt="">
                            @endisset
                        </div>
                        <div class="postbox-details-text mb-45">
                            <p style="color: white !important;">
                                {!! $blog->description !!}
                            </p>
                        </div>

                        @isset($blog->quot)
                            <div class="postbox-details-quote-box mb-45">
                                <blockquote>
                                    <div class="postbox-details-quote-box d-flex align-items-start">
                                        <i>
                                            <svg width="63" height="50" viewBox="0 0 63 50" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M36.7657 50V39.1608C42.0105 38.4615 45.507 36.7133 47.2552 33.9161C49.0035 31.0023 49.8776 26.9231 49.8776 21.6783L58.4441 23.4266H37.1154V0H62.6399V17.4825C62.6399 25.8741 60.542 33.042 56.3461 38.986C52.2669 44.9301 45.7401 48.6014 36.7657 50ZM0 50V39.1608C5.24476 38.4615 8.74126 36.7133 10.4895 33.9161C12.2378 31.0023 13.1119 26.9231 13.1119 21.6783L21.6783 23.4266H0.34965V0H25.8741V17.4825C25.8741 25.8741 23.7762 33.042 19.5804 38.986C15.5012 44.9301 8.97436 48.6014 0 50Z"
                                                    fill="white" fill-opacity="0.1" />
                                            </svg>
                                        </i>
                                        <div class="postbox-details-quote">
                                            <p>
                                                “{{ $blog->quot }}”
                                            </p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        @endisset
                        <div class="postbox-details-text mb-45">
                            <p>
                                {{ $blog->description1 }}
                            </p>
                        </div>
                        @isset($blog->image2)
                            <img class="w-100" src="{{ asset('images/blogs/' . $blog->image2) }}" alt="">
                        @endisset
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="sidebar-wrapper">
                        <div class="sidebar-widget mb-45">
                            <div class="sidebar-widget-author text-center">
                                <div class="sidebar-widget-author-img">
                                    <img src="{{ asset('assets/img/front-images/avatar.jpg') }}" alt="">
                                </div>
                                <div class="sidebar-widget-author-content">
                                    <h4 class="sidebar-widget-author-name">Noman Ahmed Zaka</h4>
                                    <span>CEO at Graficano</span>
                                    <p>Crafting Digital Experiences <br> with Purpose!</p>
                                </div>
                                <div class="sidebar-widget-author-social mb-30">
                                    {{-- <a href="#">
                                        <span>
                                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.67227 0H0L6.72535 8.79151L0.430223 16.1665H3.33876L8.09997 10.5886L12.3277 16.1153H18L11.0793 7.06826L11.0915 7.08386L17.0504 0.102701H14.1418L9.71667 5.28701L5.67227 0ZM3.131 1.53968H4.89685L14.869 14.5755H13.1032L3.131 1.53968Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </span>
                                    </a> --}}
                                    <a href="https://www.linkedin.com/in/noman-ahmed-zaka/" target="_blank">
                                        <span>
                                            <span>
                                    <img width="20px" src="{{ asset('assets/img/front-images/linkedin.png') }}"
                                        alt="">
                                </span>
                                        </span>
                                    </a>
                                    <a href="https://www.instagram.com/noman_ahmed_zaka/">
                                        <span>
                                            <img width="20px" src="{{ asset('assets/img/front-images/insta.png') }}"
                                        alt="">
                                        </span>
                                    </a>
                                </div>
                                <div class="sidebar-widget-author-btn">
                                    <a class="tp-btn-yellow-green sidebar-btn w-100" href="{{ route('getqoute') }}">
                                        <span>
                                            <span class="text-1">Contact Us</span>
                                            <span class="text-2">Contact Us</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-45">
                            <h3 class="sidebar-widget-title">Popular Blogs</h3>
                            <div class="rc-post-wrap">
                                @foreach ($blogs as $otherBlog)
                                    <div class="rc-post d-flex align-items-center">
                                        <div class="rc-post-thumb">
                                            <a href="{{ route('blog.details', $otherBlog->slug) }}">
                                                <img height="140px" width="140px"
                                                    src="{{ asset('images/blogs/' . $otherBlog->image) }}"
                                                    alt="{{ $otherBlog->title }}">
                                            </a>
                                        </div>
                                        <div class="rc-post-content">
                                            <div class="rc-post-category">
                                                <a href="#">Blog</a>
                                            </div>
                                            <h3 class="rc-post-title">
                                                <a
                                                    href="{{ route('blog.details', $otherBlog->slug) }}">{{ $otherBlog->title }}</a>
                                            </h3>
                                            <div class="rc-post-meta">
                                                <span>{{ $otherBlog->formatted_date }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- postbox area end -->

    <div class="d-flex align-tems-center justify-content-center col-12 text-center my-3 gap-3">
        <button class="btn btn-warning" id="shareButton">Share <i style=" font-weight: bold;"
                class="line-icon-Share icon-extra-small "></i></button>
        <a href="https://wa.me/923129320163?text=Hello,%20I%20would%20like%20to%20inquire%20about..."
            class="btn btn-warning">
            Chat Us on Whatsapp <i style="font-weight: bold;" class="line-icon-Notepad icon-extra-small"></i>
        </a>

    </div>

    {{-- <div class="col-12 text-center mt-3">
        <button class="btn btn-warning" id="shareButton">Share</button>
    </div> --}}
    <!-- end section -->


@endsection
@section('SpecificScripts')
    <script>
        document.getElementById('shareButton').addEventListener('click', function() {
            // Get the URL and title of the current page
            var currentUrl = window.location.href;
            var pageTitle = "{{ $blog->title }}";

            // Create shareable URLs for Facebook, Twitter, and WhatsApp
            var facebookUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(currentUrl);
            var twitterUrl = 'https://twitter.com/intent/tweet?url=' + encodeURIComponent(currentUrl) + '&text=' +
                encodeURIComponent(pageTitle);
            var whatsappUrl = 'whatsapp://send?text=' + encodeURIComponent(pageTitle + ' - ' + currentUrl);

            // Open a modal with social media sharing options
            var shareModal = window.open('', '_blank', 'width=400,height=300');

            // Build the content for the modal
            var modalContent = `
                <style>
                    body { font-family: Arial, sans-serif; text-align: center; margin: 20px; }
                    h2 { color: #333; }
                    a { display: inline-block; margin: 10px; padding: 8px 15px; text-decoration: none; background-color: #4CAF50; color: #fff; border-radius: 5px; }
                </style>
                <h2>Share on:</h2>
                <a href="${facebookUrl}" target="_blank">Facebook</a>
                <a href="${twitterUrl}" target="_blank">Twitter</a>
                <a href="${whatsappUrl}" target="_blank">WhatsApp</a>
            `;

            // Set the modal content
            shareModal.document.write(modalContent);
        });
    </script>
    <script>
        $('#shareButton').on('click', function() {
            if (navigator.share) {
                navigator.share({
                        title: '{{ $blog->meta_title }}',

                        url: '{{ Request::fullUrl() }}',
                    })
                    .then(() => console.log('Successful share'))
                    .catch((error) => console.log('Error sharing', error));
            } else {
                alert('Web Share API not supported in this browser.');
            }
        });
    </script>
@stop
