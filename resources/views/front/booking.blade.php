@extends('front.master')

@section('title', 'Booking -' . config('app.name'))

@section('content')

<!-- start section title-page -->
<section class="title-page">
  <div class="container">
      <div class="row">
          <h2>Booking</h2>
      </div>
  </div>
  <img class="interested-img interested-left" src="{{ asset('front/image/Vector 1.png') }}" alt="">
  <img class="interested-img interested-right" src="{{ asset('front/image/Vector 2.png') }}" alt="">
</section>
<!-- end section title-page -->

<!-- start section consultation -->
<section class="consultation">
  <div class="form-consultation">
      <div class="title">
          <h1>Get a free consultation</h1>
              <div class="img-consultation">
                  <img class="back-consultation" src="{{ asset('front/image/Group 11042.png') }}" alt="">
                  <img class="image-consultation" src="{{ asset('front/image/image 13.png') }}" alt="">
              </div>
      </div>
      <div class="title">
          <div class="paragraph" style="width: 70%; margin: 0;">
              <p class="text-start">The key to being a brand that not only makes a good impression, but also</p>
          </div>
      </div>
    <form action="">
        <input type="text" name="" placeholder="Name"  id="name">
        <input type="text" name="" placeholder="Phone" id="phone">
        <input type="email" name="" placeholder="Email" id="email">
        <select name="" id="service_id" class="form-control">
          @foreach ( $services as $service )
          <option value="{{ $service->id }}">{{ $service->name }}</option>
          @endforeach
        </select>
        {{-- <input type="text" name="" placeholder="Service" id="name"> --}}
        <input type="text" name="" placeholder="Message" style="height: 50px;" id="message">
        <div class="bb">
            <button type="button" onclick="performStore()" class="btn-consultation">Done</button>
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