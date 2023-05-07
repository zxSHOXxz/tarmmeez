@extends('front.master')

@section('title', 'Desgin Web -' . config('app.name'))

@section('content')

<!-- start section title-page -->
<section class="title-page" style="z-index: 1;">
  <div class="container">
      <div class="row">
          <h2>{{ __("services.Web Design") }}</h2>
      </div>
  </div>
</section>
<!-- end section title-page -->

<section class="voice">
  <div class="container d-flex flex-wrap">
    <div class="left col-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
      <img src="{{ asset('front/image/pexels-photo-10415146 1 (2).png') }}" alt="" width="100%" height="fit-content">
    </div>
    <div class="right col-12 col-sm-12 col-md-12 col-lg-6">
      <h2>{{ __("services.Unleash the full potential of your brand with our content writing and voiceover services") }}</h2>
      <p>{{ __("services.Everyone stands out in this world and the business is no exception. To gain a good customer base, one must create eye-catching and captivating advertisements, among other things. These factors can make all the difference in your bottom line. That is why proper voiceover and content writing are crucial to commercial success") }}</p>
      <a href="">{{ __("services.Request a free quote now") }}</a>
    </div>
  </div>
</section>

<section class="how-do" style="padding: 60px 0;">
    <div class="container d-flex flex-wrap justify-content-center">
        <div class="left col-12 col-sm-12 col-md-12 col-lg-6">
            <h2>{{ __("services.How do we do that?") }}</h2>
            <div class="card-how card-how-left">
              <img src="{{ asset('front/image/Union.png') }}" class="card-do" alt="">
              <div class="cont-how">
                <img src="{{ asset('front/image/جمع المعلوماتAsset 6 1.png') }}" alt="" width="64px" height="64px
                ">
                <p class="number">1</p>
                <img src="{{ asset('front/image/Vector (9).png') }}" alt="" height="75px">
                <div class="paragraph-how text-center">
                  <h4>{{ __("services.Data collection") }}</h4>
                  <p>{{ __("services.Create a list of client needs and study them") }}</p>
                </div>
              </div>
            </div>

            <div class="card-how card-how-right">
              <img src="{{ asset('front/image/Union (1).png') }}" class="card-do" alt="">
              <div class="cont-how">
                <img src="{{ asset('front/image/app developmentAsset 9 1.png') }}" alt="" width="64px" height="64px
                ">
                <p class="number">2</p>
                <img src="{{ asset('front/image/Vector (8).png') }}" alt="" height="75px">
                <div class="paragraph-how text-center">
                  <h4>{{ __("services.Studying competitors") }}</h4>
                  <p>{{ __("services.Finding and analyzing competitor advantages") }}</p>
                </div>
              </div>
            </div>

            <div class="card-how card-how-left">
              <img src="{{ asset('front/image/Union.png') }}" class="card-do" alt="">
              <div class="cont-how">
                <img src="{{ asset('front/image/انطلاقAsset 11 (1) 1.png') }}" alt="" width="64px" height="64px
                ">
                <p class="number">3</p>
                <img src="{{ asset('front/image/Vector (9).png') }}" alt="" height="75px">
                <div class="paragraph-how text-center">
                  <h4>{{ __("services.An action plan") }}</h4>
                  <p>{{ __("services.Implementation of a strategic action plan that will lead to the success of the project") }}</p>
                </div>
              </div>
            </div>

            <div class="card-how card-how-right">
              <img src="{{ asset('front/image/Union (1).png') }}" class="card-do" alt="">
              <div class="cont-how">
                <img src="{{ asset('front/image/app testingAsset 8 1.png') }}" alt="" width="64px" height="64px
                ">
                <p class="number">4</p>
                <img src="{{ asset('front/image/Vector (8).png') }}" alt="" height="75px">
                <div class="paragraph-how text-center">
                  <h4>{{ __("services.width") }}</h4>
                  <p>{{ __("services.Show all results to the client") }}</p>
                </div>
              </div>
            </div>

            <div class="card-how card-how-left">
              <img src="{{ asset('front/image/Union.png') }}" class="card-do" alt="">
              <div class="cont-how">
                <img src="{{ asset('front/image/supportAsset 12 1.png') }}" alt="" width="64px" height="64px
                ">
                <p class="number">5</p>
                <img src="{{ asset('front/image/Vector (9).png') }}" alt="" height="75px">
                <div class="paragraph-how text-center">
                  <h4>{{ __("services.score") }}</h4>
                  <p>{{ __("services.Agreement with the client to start implementing the project") }}</p>
                </div>
              </div>
            </div>

            <div class="card-how card-how-right">
              <img src="{{ asset('front/image/Union (1).png') }}" class="card-do" alt="">
              <div class="cont-how">
                <img src="{{ asset('front/image/Layer 2.png') }}" alt="" width="64px" height="64px
                ">
                <p class="number">6</p>
                <img src="{{ asset('front/image/Vector (8).png') }}" alt="" height="75px">
                <div class="paragraph-how text-center">
                  <h4>{{ __("services.Quality Assurance") }}</h4>
                  <p>{{ __("services.We are based on foundations and principles that will make the business a success") }}</p>
                </div>
              </div>
            </div>
          </div>
      <div class="right col-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center align-items-center">
        <img src="{{ asset('front/image/Web design (1).png') }}" alt="" width="100%">
      </div>
    </div>
  </section>

<section class="engine" style="padding: 50px;">
  <div class="container">
    <h2>{{ __("services.programs that we use") }}</h2>
    <p>{{ __("services.We are always excited to hear about great ideas and help turn them into a successful project") }}</p>
    <div class="cont-programs">
      <div class="card" style="width: 18rem;">
        <div class="card-header">
            <img src="{{ asset('front/image/laravel.png') }}" class="card-img-top" alt="..." width="25px" height="80px">
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ __("services.Laravel") }}</h5>
          <p class="card-text">Lorem ipsum dolor sit amet,
            consetetur sadipscing elitr, sed diam
            nonumy eirmod tempor invidunt ut{{ __("services.") }} </p>

        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <div class="card-header">
            <img src="{{ asset('front/image/Node Js.png') }}" class="card-img-top" alt="..." width="40px" height="80px">
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ __("services.Node Js") }}</h5>
          <p class="card-text">Lorem ipsum dolor sit amet,
            consetetur sadipscing elitr, sed diam
            nonumy eirmod tempor invidunt ut{{ __("services.") }} </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- start section Website -->
<section class="Website">
    <div class="container">
        <div class="services-slider">
            <div>
                <div class="card" style="width: 18rem;">
                    <div class="card-header" style="padding: 20px 10px;">
                        <img src="{{ asset('front/image/Group 11098.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Web site for Mushtaha Furnture{{ __("services.") }}</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet,
                        consetetur sadipscing elitr, sed diam
                        nonumy eirmod tempor invidunt ut{{ __("services.") }} </p>
                      <div class="con-btn">
                      </div>
                    </div>
                  </div>
                </div>
            <div>
                <div class="card" style="width: 18rem;">
                    <div class="card-header" style="padding: 20px 10px;">
                        <img src="{{ asset('front/image/Group 11098.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Web site for Mushtaha Furnture{{ __("services.") }}</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet,
                        consetetur sadipscing elitr, sed diam
                        nonumy eirmod tempor invidunt ut{{ __("services.") }} </p>
                      <div class="con-btn">
                      </div>
                    </div>
                  </div>
                </div>
            <div>
                <div class="card" style="width: 18rem;">
                    <div class="card-header" style="padding: 20px 10px;">
                        <img src="{{ asset('front/image/Group 11098.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Web site for Mushtaha Furnture{{ __("services.") }}</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet,
                        consetetur sadipscing elitr, sed diam
                        nonumy eirmod tempor invidunt ut{{ __("services.") }} </p>
                      <div class="con-btn">
                      </div>
                    </div>
                  </div>
                </div>
            <div>
                <div class="card" style="width: 18rem;">
                    <div class="card-header" style="padding: 20px 10px;">
                        <img src="{{ asset('front/image/Group 11098.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Web site for Mushtaha Furnture{{ __("services.") }}</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet,
                        consetetur sadipscing elitr, sed diam
                        nonumy eirmod tempor invidunt ut{{ __("services.") }} </p>
                      <div class="con-btn">
                      </div>
                    </div>
                  </div>
                </div>
            <div>
                <div class="card" style="width: 18rem;">
                    <div class="card-header" style="padding: 20px 10px;">
                        <img src="{{ asset('front/image/Group 11098.png') }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Web site for Mushtaha Furnture{{ __("services.") }}</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet,
                        consetetur sadipscing elitr, sed diam
                        nonumy eirmod tempor invidunt ut{{ __("services.") }} </p>
                      <div class="con-btn">
                      </div>
                    </div>
                  </div>
                </div>
        </div>
    </div>
</section>
<!-- end section Website -->

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
