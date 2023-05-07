<!DOCTYPE html>
<html @if (app()->currentLocale() == 'ar')
    lang="ar" dir="rtl"
@elseif (app()->currentLocale() == 'en')
   lang="en" dir="ltr"
@endif>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="shortcut icon" href="{{ asset('front/image/trmeez-icon.png') }}" type="image/x-icon">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>@yield('title' , config('app.name'))</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{ asset('adminassets/images/fevicon.png') }}" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('adminassets/css/bootstrap.min.css') }}" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css" integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/regular.min.css" integrity="sha512-WidMaWaNmZqjk3gDE6KBFCoDpBz9stTsTZZTeocfq/eDNkLfpakEd7qR0bPejvy/x0iT0dvzIq4IirnBtVer5A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css" integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- site css -->
      @if (app()->currentLocale() == 'ar')
      <link rel="stylesheet" href="{{ asset('adminassets/style-rtl.css') }}" />
      @elseif (app()->currentLocale() == 'en')
      <link rel="stylesheet" href="{{ asset('adminassets/style.css') }}" />
      @endif>
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('adminassets/css/responsive.css') }}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{ asset('adminassets/css/colors.css') }}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('adminassets/css/bootstrap-select.css') }}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('adminassets/css/perfect-scrollbar.css') }}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('adminassets/css/custom.css') }}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <style>

   </style>
   @yield('styles')
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="{{ asset('adminassets/images/logo/Logo.svg') }}" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="{{ asset('adminassets/images/logo/icon-logo.svg') }}" alt="#" /></div>
                        <div class="user_info">
                           <h6>{{ Auth::user()->name }}</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="sidebar_blog_2">
                  <h4 style="text-align: center">@if (app()->currentLocale() == 'ar')
                    {{ env('APP_NAME_AR') }}
                    @else
                    {{ config('app.name') }}
                  @endif</h4>
                  <ul class="list-unstyled components">
                    <li><a href="widgets.html"><i class="fa-solid fa-gauge-high"></i><span>{{ __('site.Dashbord') }}</span></a></li>

                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa-brands fa-usps"></i><span>{{ __('site.Service') }}</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="{{ route("admin.services.index") }}"> <span>{{ __('site.All Service') }}</span></a></li>
                           <li><a href="{{ route('admin.services.create') }}"> <span>{{ __('site.Add Service') }}</span></a></li>
                           <li><a href="invoice.html"> <span>{{ __('site.Trashed Service') }}</span></a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#works" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa-solid fa-file-word"></i><span>{{ __('site.Work') }}</span></a>
                        <ul class="collapse list-unstyled" id="works">
                           <li><a href="{{ route("admin.works.index") }}">> <span>{{ __('site.All Work') }}</span></a></li>
                           <li><a href="{{ route("admin.works.create") }}">> <span>{{ __('site.Add Work') }}</span></a></li>
                           <li><a href="media_gallery.html">> <span>{{ __('site.Trashed Work') }}</span></a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#imags" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa-regular fa-images"></i><span>{{ __('site.Image') }}</span></a>
                        <ul class="collapse list-unstyled" id="imags">
                           <li><a href="{{ route("admin.images.index") }}">> <span>{{ __('site.All Image') }}</span></a></li>
                           <li><a href="{{ route("admin.images.create") }}">> <span>{{ __('site.Add Image') }}</span></a></li>
                           <li><a href="media_gallery.html">> <span>{{ __('site.Trashed Image') }}</span></a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#blogs" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa-solid fa-blog"></i><span>{{ __('site.Blog') }}</span></a>
                        <ul class="collapse list-unstyled" id="blogs">
                           <li><a href="{{ route("admin.blogs.index") }}">> <span>{{ __('site.All Blog') }}</span></a></li>
                           <li><a href="{{ route("admin.blogs.create") }}">> <span>{{ __('site.Add Blog') }}</span></a></li>
                           <li><a href="media_gallery.html">> <span>{{ __('site.Trashed Blog') }}</span></a></li>
                        </ul>
                     </li>

                     <li>
                        <a href="#jops" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa-regular fa-address-book"></i><span>{{ __('site.Jop') }}</span></a>
                        <ul class="collapse list-unstyled" id="jops">
                           <li><a href="{{ route("admin.jops.index") }}">> <span>{{ __('site.All Jop') }}</span></a></li>
                           <li><a href="{{ route("admin.jops.create") }}">> <span>{{ __('site.Add Jop') }}</span></a></li>
                           <li><a href="media_gallery.html">> <span>{{ __('site.Trashed Jop') }}</span></a></li>
                        </ul>
                     </li>
                     <li><a href="{{ route("admin.bookings.index") }}"><i class="fa-solid fa-calendar-check"></i> <span>{{ __('site.Booking') }}</span></a></li>
                     <li><a href="{{ route("admin.contacts.index") }}"><i class="fa-solid fa-file-signature"></i><span>{{ __('site.Contact') }}</span></a></li>
                     <li><a href="{{ route("admin.employments.index") }}"><i class="fa-solid fa-person-walking-luggage"></i> <span>{{ __('site.Employment') }}</span></a></li>
                     <li><a href="{{ route("admin.consultations.index") }}"><i class="fa-solid fa-person-walking-luggage"></i> <span>{{ __('site.Consultation') }}</span></a></li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">

                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="{{ asset('adminassets/images/logo/Logo.svg') }}" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">

                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt="#" /><span class="name_user">{{ Auth::user()->name }}</span></a>
                                    <div class="dropdown-menu">
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">

                                        <img width="23" src="{{ asset('adminassets/images/'.$properties['flag']) }}" alt="" {{ $properties['native'] }}>
                                            {{ $properties['native'] }}
                                        </a>
                                      @endforeach
                                       <a class="dropdown-item" href="profile.html">{{ __('site.My Profile') }}</a>
                                       <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><span>{{ __('site.Logout') }}</span> <i class="fa fa-sign-out"></i></a>
                                       <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                      </form>
                                    </div>
                                 </li>
                             </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <div class="content-body">

                  <div class="container-fluid">
                      <div class="form-head mb-sm-5 mb-3 mt-5 d-flex flex-wrap align-items-center">
                          <h2 class="font-w600 title mb-2 mr-auto ">@yield('sup-title')</h2>
                      </div>
                      @yield('content')
                  </div>
              </div>

               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2022  by Tarmeeztech. All rights reserved.<br><br>
                           Distributed By:<a href="https://tarmeeztech.com/">Tarmeeztech</a>
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{ asset('adminassets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('adminassets/js/popper.min.js') }}"></script>
      <script src="{{ asset('adminassets/js/bootstrap.min.js') }}"></script>
      <!-- wow animation -->
      <script src="{{ asset('adminassets/js/animate.js') }}"></script>
      <!-- select country -->
      <script src="{{ asset('adminassets/js/bootstrap-select.js') }}"></script>
      <!-- owl carousel -->
      <script src="{{ asset('adminassets/js/owl.carousel.js') }}"></script>
      <!-- chart js -->
      <script src="{{ asset('adminassets/js/Chart.min.js') }}"></script>
      <script src="{{ asset('adminassets/js/Chart.bundle.min.js') }}"></script>
      <script src="{{ asset('adminassets/js/utils.js') }}"></script>
      <script src="{{ asset('adminassets/js/analyser.js') }}"></script>
      <!-- nice scrollbar -->
      <script src="{{ asset('adminassets/js/perfect-scrollbar.min.js') }}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{ asset('adminassets/js/custom.js') }}"></script>
      <script src="{{ asset('adminassets/js/chart_custom_style1.js') }}"></script>
      <script src="{{ asset('adminassets/js/crud.js') }}"></script>
      <script src="{{ asset('adminassets/js/axios.js') }}"></script>
      <script src="{{ asset('adminassets/js/sweet-alert.js') }}"></script>
      @yield('scripts')
   </body>

</html>
