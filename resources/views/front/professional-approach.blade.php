@extends('front.master')

@section('title', 'Professional approach -' . config('app.name'))

<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}" />
@section('content')

    <!-- start section title-page -->
    <section class="title-page">
        <div class="container">
            <div class="row">
                <h2>{{ __('index.Professional approach') }}</h2>
            </div>
        </div>
        <img class="interested-img interested-left" src="{{ asset('front/image/Vector 1.png') }}" alt="">
        <img class="interested-img interested-right" src="{{ asset('front/image/Vector 2.png') }}" alt="">
    </section>
    <!-- end section title-page -->

    <!-- start section work -->
    <section class="work col-12">
        <div class="container">
            <div class="work-services col-12 col-sm-12 col-md-12 col-lg-12">
                @foreach ($images as $image)
                    @if ($loop->iteration == 1)
                        <img src="{{ asset('upload/images/image/' . $image->image) }}" alt="" width="100%">
                    @endif
                @endforeach

            </div>
        </div>
    </section>
    <!-- end section work -->

    <section class="engine" style="padding: 50px;">
        <div class="container">
            <h2>{{ __('index.HOW IT WORKS') }}</h2>
            <p>{{ __('index.You can now request a new website design or develop your existing website if you already have a website.All you have to do is tell us all the details that you need, and we will provide you with a distinguished group of designs to choose the appropriate shape, and we will help you in that with our experience,We do not work randomly, but rather we work according to carefully studied strategies and plans to stand out from your competitors') }}
            </p>
            <div class="cont-work-id col-12 col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap justify-content-between">
                <div>
                    <h2>{{ __('index.Client') }}</h2>
                    <p class="p-5">
                        {{ $works->trans_client }}
                    </p>
                </div>

                <div>
                    <h2>{{ __('index.Date') }}</h2>
                    <p class="p-5">
                        {{ $works->date }}
                    </p>
                </div>


                {{-- @php $services= App\Models\Service::find($works->service_id)@endphp --}}
                <div>
                    <h2>{{ __('index.Services') }}</h2>
                    <p>{{ App\Models\Service::find($works->service_id)->trans_name }}</p>
                </div>



                <div>
                    <h2>{{ __('index.Website') }}</h2>
                    <a href="{{ $works->url }}">
                        {{ $works->url }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- start section Mobile Application -->
    <section class="mobile-application">
        <h2 class="text-center" style="font-weight: 700; font-size: 35px; color: #003366;">
            {{ __('index.Pictures from the same project') }}</h2>
        <div class="container">
            <div class="services-slider">
                @foreach ($images as $image)
                    <div>
                        <div class="card" style="width: 18rem; height: 550px;">
                            <div class="card-img" style="padding: 20px 10px;">

                                <img src="{{ asset('upload/images/image/' . $image->image) }}" class="card-img-top"
                                    alt="...">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end section Mobile Application -->



    <!-- start section consultation -->
    <section class="consultation">
        <div class="form-consultation">
            <div class="title">
                <h1>{{ __('index.Get a free consultation') }}</h1>
                <div class="img-consultation">
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
                        <option value="{{ $service->id }}">{{ __("index.$service->trans_name") }}</option>
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
