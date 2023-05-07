@extends('front.master')

@section('title', 'Contact -' . config('app.name'))

@section('content')

<!-- start section title-page -->
<section class="title-page">
  <div class="container">
      <div class="row">
          <h2>{{ __("index.Contact us") }}</h2>
      </div>
  </div>
  <img class="interested-img interested-left" src="{{asset("front/image/Vector 1.png")}}" alt="">
  <img class="interested-img interested-right" src="{{asset("front/image/Vector 2.png")}}" alt="">
</section>
<!-- end section title-page -->

<section class="contact">
  <div class="container d-flex justify-content-center">
    <div class="card d-flex flex-wrap flex-row" style="border-top: 5px solid #003366;">
      <div class="left col-12 col-sm-12 col-md-12 col-lg-6 p-5" style="background-color: #003366;">
        <h2 class="text-white">{{ __("index.Get in touch") }}</h2>
        <div class="cnt" style="padding: 40px 0;">
          <div class="d-flex" style="padding: 15px 0;">
              <i class="fa-solid fa-envelope" style="color: white; font-size: 50px;
              padding: 5px 10px; margin: -5px 0;"></i>
              <div>
                  <p style="color: white; font-size: 20px; margin: 0;">{{ __("index.Mail") }}</p>
                  <a style="color: white; font-size: 20px; margin: 0; padding: 0; text-decoration: none;" href="">info@tarmeecteh.com</a>
              </div>
          </div>
          <div class="d-flex" style="padding: 15px 0;">
              <i class="fa-solid fa-mobile-screen-button" style="color: white; font-size: 60px; padding: 5px 10px; margin: -5px 0;"></i>
              <div>
                  <p style="color: white; font-size: 20px; margin: 0;">{{ __("index.Mobile") }}</p>
                  <a style="color: white; font-size: 20px; margin: 0; padding: 0; text-decoration: none;" href="">(+966) 56 138 8363 - (+1) 307 392 4176</a>
              </div>
          </div>
          <div class="d-flex" style="padding: 15px 0;">
            <img src="{{ asset('front/image/Usa Flag.png') }}" alt="" width="50px" height="40px" style="margin: 10px 5px;">
              <div>
                  <p style="color: white; font-size: 20px; margin: 0;">{{ __("index.Location") }}</p>
                  <a style="color: white; font-size: 20px; margin: 0; padding: 0; text-decoration: none;" href="">4030 Plaza Dr 3 Casper, WY 82604 USA</a>
              </div>
          </div>

          <div class="d-flex" style="padding: 15px 0;">
            <img src="{{ asset('front/image/Saudi.png') }}" alt="" width="50px" height="40px" style="margin: 10px 5px;">
            <div>
                <p style="color: white; font-size: 20px; margin: 0;">{{ __("index.Location") }}</p>
                <a style="color: white; font-size: 20px; margin: 0; padding: 0; text-decoration: none;" href="">{{ __("index.Saudi Arabia") }}</a>
            </div>
        </div>
      </div>
      </div>
      <div class="right col-12 col-sm-12 col-md-12 col-lg-6 p-5">
        <form >
          <div class="mb-3">
            <input type="text" class="form-control name" id="name" placeholder="{{ __("index.name") }}" style="background-color: #F2F9F9;">
          </div>

          <div class="mb-3">
            <input type="text" class="form-control phone" id="phone" placeholder="{{ __("index.Phone") }}" style="background-color: #F2F9F9;">
          </div>

          <div class="mb-3">
            <input type="text" class="form-control email" id="email" placeholder="{{ __("index.Email") }}" style="background-color: #F2F9F9;">
          </div>

          <div class="mb-3">
            <input type="text" class="form-control company-name" id="company_name" placeholder="{{ __("index.Company name") }}" style="background-color: #F2F9F9;">
          </div>

          <div class="mb-3">
            <input type="text" class="form-control inquire-about" id="inquire_about" placeholder="{{ __("index.Inquire about") }}" style="background-color: #F2F9F9;">
          </div>

          <div class="mb-3">
            <textarea name="" id="project_summary" placeholder="{{ __("index.Project Summary") }}" style="background-color: rgb(242, 249, 249);
            border: 1px solid rgb(206, 212, 218);
            border-radius: 6px;
            padding: 10px;
            width: 100%;
            height: 100px;"></textarea>
          </div>

          <button onclick="performStore()" type="button" class="" style="background: #003366;box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;color: white;font-weight: 500;font-size: 20px;line-height: 37px;padding: 2px 50px;position: relative;left: 50%;transform: translate(-50%, 10px); border: 0;">{{ __("index.Send") }} <i class="fa-solid fa-paper-plane-top"></i></button>

        </form>
      </div>
    </div>
  </div>
</section>

@endsection
@section('scripts')
  <script>

    function performStore() {
          let formData = new FormData();
        formData.append('name', document.getElementById('name').value);
        formData.append('email', document.getElementById('email').value);
        formData.append('company_name', document.getElementById('company_name').value);
        formData.append('phone', document.getElementById('phone').value);
        formData.append('inquire_about', document.getElementById('inquire_about').value);
        formData.append('project_summary', document.getElementById('project_summary').value);

        store('contact', formData);

      }
  </script>
@endsection
