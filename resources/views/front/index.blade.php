@extends('front.master')

@section('title', 'Home -' . config('app.name'))

@section('content')

      <!-- start section hero -->
<section class="hero">

    <div class="Tarmmeez-Tach-p">
        <p class="we-are">{{ __("index.We are") }} <span>{{ __("index.Tarmmeez Tach") }}</span></p>
        <p class="paragraph-hero">{{ __("index.Some people spend a lot of time searching for software companies specialized in creating and developing custom websites, electronic stores, designing mobile applications, or any service they wish to implement.") }} </p>

        <div class="link-hero d-flex">
            <a class="btn btn-more" href="{{ route('index-about') }}">{{__("index.See more")}}</a>
            <a class="btn btn-contact" href="{{ route('index-contact') }}">{{__("index.Contact Us")}}</a>
        </div>
    </div>
    <img class="back-hero" src="{{ asset('front/image/back-hero.png') }}" alt="">
    <img class="img-hero" src="{{ asset('front/image/hero1.png') }}" alt="">
    <img class="line-hero" src="{{ asset('front/image/line-hero.png') }}" alt="">
    <img class="star-hero" src="{{ asset('front/image/star-hero.png') }}" alt="">
</section>
<!-- end section hero -->

<!-- start section How -->
<section class="how">
    <div class="title">
        <h1>{{__("index.How?")}}</h1>
        <h4>{{__("index.We adopt the strategies in three steps")}}</h4>
        <div class="paragraph">
            <p>{{__("index.The key to being a brand that not only makes a good impression, but also refuses to evaporate from the ever-volatile industry, is partnering with a")}}  </p>
        </div>
        <img class="col-12 col-sm-12 col-md-12 col-lg-12" src="{{ asset('front/image/Design-Build-Run 1.png') }}" alt="">

        <a class="btn btn-more" href="{{ route('index-strategy') }}">{{ __("index.See more") }}</a>
    </div>
</section>
<!-- end section How -->

<!-- start section Services -->
<section class="services">
    <div class="title">
        <h1>{{ __("index.Our Services") }}</h1>
        <div class="paragraph">
            <p>{{__("index.The key to being a brand that not only makes a good impression, but also refuses to evaporate from the ever-volatile industry, is partnering with a")}}  </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
          @foreach ($services as $service )
          <div class="card" style="width: 18rem;">
            <div class="card-header">
                <img src="{{asset('upload/images/service/'.$service->image)}}" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $service->trans_name }}</h5>
              <p class="card-text">{{ $service->trans_description }}</p>
              <div class="con-btn">
                <a href="{{$service->url}}" class="card-link">{{ __("index.Read More") }}</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
    </div>
</section>
<!-- end section Services -->

<!-- start section interested -->
<section class="interested">
    <div class="container">
        <div class="row">
            <h2>{{ __("index.Interested to work with us ?") }}</h2>
            <p>{{ __("index.Get a free consultation") }}</p>
            <a href="mailto: info@tarmeeztech.com">info@tarmeeztech.com</a>
        </div>
    </div>
    <img class="interested-img interested-left" src="{{ asset('front/image/Vector 1.png') }}" alt="">
    <img class="interested-img interested-right" src="{{ asset('front/image/Vector 2.png') }}" alt="">
</section>
<!-- end section interested -->

<!-- start section Featured -->

<section class="section-filter">

    <h2 class="text-center title-filter">Our Featured Work</h2>

    <div class="filters">
        <span class="filter" data-filter="all"><p>{{ __("index.Show All") }}</p></span>
        <span class="filter" data-filter="website"><p>{{ __("index.Website") }}</p></span>
        <span class="filter" data-filter="application"><p>{{ __("index.Application") }}</p></span>
        <span class="filter" data-filter="graphic"><p>{{ __("index.Graphic design") }}</p></span>
    </div>

    <div class="filter-back">
        <div class="container">
            <div class="services-slider projects">
                @foreach ($works as $work)
                    @if (App\Models\Service::find($work->service_id)->trans_name === 'Website design')
                        <div class="project" data-filter="website">
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
                    @elseif (App\Models\Service::find($work->service_id)->trans_name === 'Mobile Application design')
                    <div class="project" data-filter="application">
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
                    @elseif (App\Models\Service::find($work->service_id)->trans_name === 'Business identity')
                    <div class="project" data-filter="graphic">
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
                    @elseif (App\Models\Service::find($work->service_id))
                    <div class="project" data-filter="all">
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

        <a class="btn-filter" href="">See More</a>
    </div>
</section>
<!-- end section Featured -->

<!-- start section consultation -->
<section class="consultation">
    <div class="form-consultation">
        <div class="title">
            <h1>{{ __("index.Get a free consultation") }}</h1>
                <div class="img-consultation">
                    <img class="back-consultation" src="{{ asset('front/image/Group 11042.png') }}" alt="">
                    <img class="image-consultation" src="{{ asset('front/image/image 13.png') }}" alt="">
                </div>
        </div>
        <div class="title">
            <div class="paragraph" style="width: 70%; margin: 0;">
                <p class="text-start">{{__("index.The key to being a brand that not only makes a good impression, but also")}}</p>
            </div>
        </div>
        <form action="">
            <input type="text" name="" placeholder="{{__("index.Name")}}"  id="name">
            <input type="text" name="" placeholder="{{__("index.Phone")}}" id="phone">
            <input type="email" name="" placeholder="{{__("index.Email")}}" id="email">
            <select name="" id="service_id" class="form-control">
              @foreach ( $services as $service )
              <option value="{{ $service->id }}">{{__("index.$service->name")}}</option>
              @endforeach
            </select>
            {{-- <input type="text" name="" placeholder="Service" id="name"> --}}
            <input type="text" name="" placeholder="{{__("index.Message")}}" style="height: 50px;" id="message">
            <div class="bb">
                <button type="button" onclick="performStore()" class="btn-consultation">{{__("index.Done")}}</button>
            </div>
        </form>
    </div>

  </section>
  <!-- end section consultation -->

<!-- start section success partners -->
<section class="success-partners d-flex align-items-center overflow-hidden">
    <div class="cont-success" style="width: 220px;">
        <p class="success p-3" style="margin: 0 20px; font-size: 22px; font-weight: 700; color: #1D3867;">{{__("index.Success Partners")}}</p>
    </div>
    <div class="partners-slide col-10">
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 1.png')}}" alt="">
            </div>
        </div>
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 3.png')}}" alt="">
            </div>
        </div>
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 4.png')}}" alt="">
            </div>
        </div>
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 1.png')}}" alt="">
            </div>
        </div>
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 3.png')}}" alt="">
            </div>
        </div>
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 4.png')}}" alt="">
            </div>
        </div>
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 1.png')}}" alt="">
            </div>
        </div>
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 3.png')}}" alt="">
            </div>
        </div>
        <div>
            <div class="img-success">
                <img src="{{asset('front/image/image 4.png')}}" alt="">
            </div>
        </div>
    </div>
</section>

<!-- end section success partners -->

@endsection

@section('scripts')
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
@endsection
