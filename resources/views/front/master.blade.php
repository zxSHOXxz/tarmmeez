<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('front/image/trmeez-icon.png') }}" type="image/x-icon">
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

      @if (app()->currentLocale() == 'ar')
      <link rel="stylesheet" href="{{ asset('front/css/style-rtl.css') }}">
      @elseif (app()->currentLocale() == 'en')
      <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
      @endif

    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}" />
    <title> @yield('title') </title>
</head>

<body>
    <!-- start nav bar trmeeztech -->
    <nav class="navbar navbar-expand-xl">
        <div class="container-fluid">
            <div class="nav-item dropdown dropdown1">
                <a class="nav-link dropdown-toggle" href="/en" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ __("index.Language") }}
                </a>
                <ul class="dropdown-menu">
                    <li>@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                        <img width="23" src="{{ asset('front/image/'.$properties['flag']) }}" alt="" {{ $properties['native'] }}>
                            {{ $properties['native'] }}
                        </a>
                      @endforeach</li>
                    {{-- <li><a class="dropdown-item" href="/ar">العربية</a></li> --}}
                </ul>
            </div>
            @if (app()->currentLocale() == 'ar')
            <a class="navbar-brand" href="{{ route("download_ar") }}">

            @elseif (app()->currentLocale() == 'en')
            <a class="navbar-brand" href="{{ route("download_en") }}">
            @endif

                <img class="logo-head" src="{{ asset('front/image/logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">{{ __("index.Home") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index-about') }}">{{ __("index.About us") }}</a>
                    </li>
                    <li class="nav-item">
                        <div class="nav-item dropdown-services">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{__("index.Services")}}
                            </a>
                            <div class="dropdown-menu menu-services">
                                <div class="container cont-services">
                                    <span>
                                        <div class="img-down">
                                            <img src="{{ asset('front/image/Online Shop.png') }}" alt="">
                                        </div>
                                        <a class="dropdown-link" href="{{ route('index-online-store') }}">{{ __("index.Online store design") }}</a>
                                    </span>
                                    <span>
                                        <div class="img-down">
                                            <img src="{{ asset('front/image/Web Design.png') }}" alt="">
                                        </div>
                                        <a class="dropdown-link" href="{{ route('index-web') }}">{{ __("index.Web Design") }}</a>
                                    </span>
                                    <span>
                                        <div class="img-down">
                                            <img src="{{ asset('front/image/Responsive Website.png') }}"
                                                alt="">
                                        </div>
                                        <a class="dropdown-link" href="{{ route('index-mobile-application') }}">{{ __("index.Mobile application design") }}</a>
                                    </span>
                                    <span>
                                        <div class="img-down">
                                            <img src="{{ asset('front/image/Business Card.png') }}" alt="">
                                        </div>
                                        <a class="dropdown-link" href="{{ route('index-business-identity') }}">{{ __("index.Business identity") }}</a>
                                    </span>
                                    <span>
                                        <div class="img-down">
                                            <img src="{{ asset('front/image/Seo.png') }}" alt="">
                                        </div>
                                        <a class="dropdown-link" href="{{ route('index-engine-optimization') }}">{{ __("index.search engine optimization") }}</a>
                                    </span>
                                    <span>
                                        <div class="img-down">
                                            <img src="{{ asset('front/image/Voice.png') }}" alt="">
                                        </div>
                                        <a class="dropdown-link" href="{{ route('index-voice-over') }}">{{ __("index.Content writing and voiceover") }}</a>
                                    </span>
                                    <span>
                                        <div class="img-down">
                                            <img src="{{ asset('front/image/app developmentAsset 9 1.png') }}" alt="">
                                        </div>
                                        <a class="dropdown-link" href="{{ route('index-social') }}">{{ __("index.Social media management") }}</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('index-work') }}">{{ __("index.Work") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('index-blog') }}">{{ __("index.Blog") }}</a>
                  </li>
                   <li class="nav-item">
                        <a class="nav-link " href="{{ route('index-booking') }}">{{ __("index.Booking") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('index-jop') }}">{{ __("index.Jop") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('index-contact') }}">{{ __("index.Contact Us") }}</a>
                    </li>
                </ul>
                <form>
                    <div class="contact d-flex justify-content-center align-items-center">
                        <a class="nav-link p-0" href="tel:+1 1245 698 9872">+1-1245-698-9872 <img
                                src="{{ asset('front/image/phone-icon.png') }}" alt="" width="15px"
                                height="15px"></a>
                    </div>
                    <div class="nav-item dropdown d-none d-sm-none d-md-none d-lg-none d-xl-flex">
                        <a class="nav-link dropdown-toggle" href="/en" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ __("index.Language") }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                                <img width="23" src="{{ asset('front/image/'.$properties['flag']) }}" alt="" {{ $properties['native'] }}>
                                    {{ $properties['native'] }}
                                </a>
                              @endforeach</li>
                            {{-- <li><a class="dropdown-item" href="/ar">العربية</a></li> --}}
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <!-- end nav bar trmeeztech -->

    <!-- start section content -->
    <section class="content">
        @yield('content')
    </section>
    <!-- end section content -->

    <!-- start footer -->
    <footer>
        <div class="content d-flex flex-wrap" style="padding: 50px;">
            <div class="srart col-12 col-sm-12 col-md-6 col-lg-6">
                <a href="">
                    <img src="{{ asset('front/image/logo.png') }}" alt="">
                </a>
                <div class="cnt" style="padding: 40px 0;">
                    <div class="d-flex" style="padding: 15px 0;">
                        <i class="fa-solid fa-envelope"
                            style="color: #003366; font-size: 45px;
                    padding: 5px 10px; margin: -5px 0;"></i>
                        <div>
                            <p style="color: #003366; font-size: 20px; margin: 0;">{{ __("index.Mail") }}</p>
                            <a style="color: #003366; font-size: 20px; margin: 0; padding: 0; text-decoration: none;"
                                href="mailto: info@tarmeeztech.com">info@tarmeecteh.com</a>
                        </div>
                    </div>
                    <div class="d-flex" style="padding: 15px 0;">
                        <i class="fa-solid fa-mobile-screen-button"
                            style="color: #003366; font-size: 45px; padding: 5px 10px; margin: -5px 0;"></i>
                        <div>
                            <p style="color: #003366; font-size: 20px; margin: 0;">{{ __("index.Mobile") }}</p>
                            <a style="color: #003366; font-size: 20px; margin: 0; padding: 0; text-decoration: none;"
                                href="tel: (+966) 56 138 8363">(+966) 56 138 8363 -</a>
                            <a style="color: #003366; font-size: 20px; margin: 0; padding: 0; text-decoration: none;"
                                href="tel: (+1) 307 392 4176"> (+1) 307 392 4176</a>
                        </div>
                    </div>
                    <div class="d-flex" style="padding: 15px 0;">
                        <i class="fa-solid fa-location-dot"
                            style="color: #003366; font-size: 45px; padding: 5px 10px; margin: -5px 0;"></i>
                        <div>
                            <p style="color: #003366; font-size: 20px; margin: 0;">{{ __("index.Location") }}</p>
                            <a style="color: #003366; font-size: 20px; margin: 0; padding: 0; text-decoration: none;">4030
                                Plaza Dr 3 Casper, WY 82604 USA</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="end col-12 col-sm-12 col-md-6 col-lg-6" style="padding: 40px 0;">
                <h2
                    style="font-size: 41px; font-weight: 700; line-height: 77px; letter-spacing: 0em; text-align: center; color: #003366; border-bottom: 2px solid #003366; width: fit-content;">
                   {{__("index.Contact Us")}}</h2>
                <p style="color: #003366; font-size: 20px; padding: 25px 0;">{{__("index.The key to being a brand that not only makes a good impression, but also refuses to evaporate from the eve")}}</p>

                <div class="link-footer">
                    <a href="{{ route('index-policy') }}">{{__("index.Special Policy")}}</a>
                    <a href="{{ route('index-terms-and-conditions') }}">{{ __("index.Terms and Conditions") }}</a>
                    <a href="{{ route('index-about') }}">{{__("index.About us")}}</a>
                    <a href="{{ route('index-contact') }}">{{ __("index.Contact Us") }}</a>
                </div>

                <div class="social d-flex">
                    <p>{{ __("index.Follow us") }}</p>
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-square-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-github"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="side-icons">
            <div class="whatsapp icon">
                <i class="fa-brands fa-whatsapp"></i>
                <span class="content">
                    <a href="https://wa.link/igzsii" target="_blank">(+966) 56 138 8363</a>
                </span>
            </div>
            <div class="phone icon">
                <i class="fa fa-phone"></i>
                <span class="content">
                    <a href="tel: (+966) 56 138 8363">(+966) 56 138 8363</a>
                </span>
            </div>

            @if (app()->currentLocale() == 'ar')
            <div class="tarmeez icon">
                <a href="{{ asset('front/company_profile-arabic.pdf') }}" target="_blank"><img
                        src="{{ asset('front/image/trmeez-icon.png') }}" style="padding: 10px;"></a>
            </div>
            @elseif (app()->currentLocale() == 'en')
            <div class="tarmeez icon">
                <a href="{{ asset('front/company_profile.pdf') }}" target="_blank"><img
                        src="{{ asset('front/image/trmeez-icon.png') }}" style="padding: 10px;"></a>
            </div>
            @endif
        </div>
        <div class="bottom-footer w-100 bg-white text-center">
            <p style="color: #003366; font-size: 20px; margin: 0; padding: 17px;">Copy@2023-2022</p>
        </div>

        <button type="button" class="btn top" id="btn-back-to-top">
            <i class="fas fa-arrow-up"></i>
        </button>
    </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.services-slider').slick({
                arrows: false,
                autoplay: true,
                dots: true,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 380,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    }
                ]
            });

            $('.partners-slide').slick({
                arrows: false,
                autoplay: true,
                dots: true,
                slidesToShow: 6,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('website-slide').slick({
                arrows: false,
                autoplay: true,
                dots: true,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    }
                ]
            });
        });
    </script>
    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/js/app.js') }}"></script>
    <script src="{{ asset('adminassets/js/crud.js') }}"></script>
    <script src="{{ asset('adminassets/js/axios.js') }}"></script>
    <script src="{{ asset('adminassets/js/sweet-alert.js') }}"></script>
    @yield('scripts')
</body>

</html>
