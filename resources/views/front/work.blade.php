@extends('front.master')

@section('title', 'Work -' . config('app.name'))

<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}" />
@section('content')

    <!-- start section title-page -->
    <section class="title-page">
        <div class="container">
            <div class="row">
                <h2>{{ __('index.Work') }}</h2>
            </div>
        </div>
        <img class="interested-img interested-left" src="{{ asset('front/image/Vector 1.png') }}" alt="">
        <img class="interested-img interested-right" src="{{ asset('front/image/Vector 2.png') }}" alt="">
    </section>
    <!-- end section title-page -->

    <!-- start section work -->
    <section class="work col-12">
        <div class="work-paragraph col-12 col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap">
            <div class="left col-12 col-sm-12 col-md-12 col-lg-6">
                <h2>{{ __('index.Web Design Portfolioof Customized Web Solutions') }}</h2>
            </div>
            <div class="right col-12 col-sm-12 col-md-12 col-lg-6">
                <p>{{ __('index.You can now request a new website design or develop your existing website if you already have a website.All you have to do is tell us all the details that you need, and we will provide you with a distinguished group of designs to choose the appropriate shape, and we will help you in that with our experience,We do not work randomly, but rather we work according to carefully studied strategies and plans to stand out from your competitors') }}
                </p>
            </div>
        </div>
    </section>
    <!-- end section work -->

    <div class="div-title" style="margin: 30px 0;">
        <h2>{{ __('index.Website design') }}</h2>
        <img class="img1" src="{{ asset('front/image/work1.png') }}" alt="">
        <img class="img2" src="{{ asset('front/image/work2.png') }}" alt="">
    </div>

    <!-- start section Website -->
    <section class="Website">
        <div class="container">
            <div class="services-slider">
                @foreach ($works as $work)
                    {{-- @if ($service->id == $work->service_id) --}}
                    @if (App\Models\Service::find($work->service_id)->name === 'Website design')
                        <div>
                            <div class="card" style="width: 18rem;">
                                <div class="card-header" style="padding: 20px 10px;">

                                    <img src="{{ asset('upload/images/work/' . $work->image) }}" class="card-img-top"
                                        alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $work->trans_name }}</h5>
                                    <p class="card-text">{{ $work->trans_description }} </p>
                                    <div class="con-btn">
                                        <a href="{{ route("professional-approach",$work->id) }}"> {{ __("Read More") }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>
    <!-- end section Website -->

    <div class="div-title" style="margin: 30px 0;">
        <h2>{{ __('index.Mobile Application design') }}</h2>
        <img class="img1" src="{{ asset('front/image/work1.png') }}" alt="">
        <img class="img2" src="{{ asset('front/image/work2.png') }}" alt="">
    </div>

    <!-- start section Mobile Application -->
    <section class="mobile-application">
        <div class="container">
            <div class="services-slider">
                @foreach ($works as $work)
                    {{-- @if ($service->id == $work->service_id) --}}
                    @if (App\Models\Service::find($work->service_id)->name === 'Mobile Application design')
                        <div>
                            <div class="card" style="width: 18rem;">
                                <div class="card-header" style="padding: 20px 10px;">

                                    <img src="{{ asset('upload/images/work/' . $work->image) }}" class="card-img-top"
                                        alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $work->name }}</h5>
                                    <p class="card-text">{{ $work->description }} </p>
                                    <div class="con-btn">
                                        <a href="{{ route("professional-approach",$work->id) }}"> {{ __("Read More") }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- end section Mobile Application -->

    <div class="div-title" style="margin: 30px 0;">
        <h2>{{ __('index.Business identity') }}</h2>
        <img class="img1" src="{{ asset('front/image/work1.png') }}" alt="">
        <img class="img2" src="{{ asset('front/image/work2.png') }}" alt="">
    </div>

    <!-- start section Business -->
    <section class="Business">
        <div class="container">
            <div class="services-slider">
              @foreach ($works as $work)
              {{-- @if ($service->id == $work->service_id) --}}
              @if (App\Models\Service::find($work->service_id)->name === 'Business identity')
                  <div>
                      <div class="card" style="width: 18rem;">
                          <div class="card-header" style="padding: 20px 10px;">

                              <img src="{{ asset('upload/images/work/' . $work->image) }}" class="card-img-top"
                                  alt="...">
                          </div>
                          <div class="card-body">
                              <h5 class="card-title">{{ $work->name }}</h5>
                              <p class="card-text">{{ $work->description }} </p>
                              <div class="con-btn">
                                <a href="{{ route("professional-approach",$work->id) }}"> {{ __("Read More") }}</a>
                              </div>
                          </div>
                      </div>
                  </div>
              @endif
          @endforeach
            </div>
        </div>
    </section>
    <!-- end section Business -->

    <!-- start section consultation -->
    <section class="consultation">
        <div class="form-consultation">
            <div class="title">
                <h1>{{ __('index.Get a free consultation') }}</h1>
                <div class="img-consultation">
                    <img class="back-consultation" src="{{ asset('front/image/Group 11042.png') }}" alt="">
                    <img class="image-consultation" src="{{ asset('front/image/image 13.png') }}" alt="">
                </div>
            </div>
            <div class="title">
                <div class="paragraph" style="width: 70%; margin: 0;">
                    <p class="text-start">
                        {{ __('index.The key to being a brand that not only makes a good impression, but also') }}</p>
                </div>
            </div>
            <form action="">
                <input type="text" name="" placeholder="{{ __('index.Name') }}" id="name">
                <input type="text" name="" placeholder="{{ __('index.Phone') }}" id="phone">
                <input type="email" name="" placeholder="{{ __('index.Email') }}" id="email">
                <select name="" id="service_id" class="form-control">
                    @foreach ($services as $service)
                        <option value="{{ $service->id }}">{{ __("index.$service->name") }}</option>
                    @endforeach
                </select>
                {{-- <input type="text" name="" placeholder="Service" id="name"> --}}
                <input type="text" name="" placeholder="{{ __('index.Message') }}" style="height: 50px;"
                    id="message">
                <div class="bb">
                    <button type="button" onclick="performStore()"
                        class="btn-consultation">{{ __('index.Done') }}</button>
                </div>
            </form>
        </div>

    </section>
    <!-- end section consultation -->


@endsection

<script>
    function performStore() {
        let formData = new FormData();
        formData.append('name', document.getElementById('name').value);
        formData.append('email', document.getElementById('email').value);
        formData.append('phone', document.getElementById('phone').value);
        formData.append('service_id', document.getElementById('service_id').value);
        formData.append('message', document.getElementById('message').value);
        store('consultation', formData);
    }
</script>
