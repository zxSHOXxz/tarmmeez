@extends('front.master')

@section('title', 'Blog -' . config('app.name'))

@section('content')

<!-- start section title-page -->
<section class="title-page">
  <div class="container">
      <div class="row">
          <h2>{{ __("blog.Blog") }}</h2>
      </div>
  </div>
  <img class="interested-img interested-left" src="{{ asset('front/image/Vector 1.png') }}" alt="">
  <img class="interested-img interested-right" src="{{ asset('front/image/Vector 2.png') }}" alt="">
</section>
<!-- end section title-page -->

<section class="blog">
  <div class="container">
    <div class="row">
      @foreach ( $blogs as $blog )

      <div class="card-blog">
        {{-- <img src="{{ asset('front/image/Building site content.jpg') }}" alt="" class="col-12 col-sm-12 col-md-12 col-lg-5">
        <div class="card col-12 col-sm-12 col-md-12 col-lg-6">
          <h2>{{ __("blog.Building content for the site") }}</h2> --}}
          {{-- <p>{{ __("blog.Building website content means having a professional strategy to create the content on your website pages that is compatible with your goals and the aspirations of your customers, providing information that benefits visitors and followers, using content marketing as an effective means for digital marketing, improving content in line with search engine parameters, and in order to build distinctive website content Large organizations, global brands and specialized websites turn to people with a passion for creativity and knowledge") }}</p> --}}
        <img src="{{ asset('upload/images/blog/'.$blog->image) }}" alt="" class="col-12 col-sm-12 col-md-12 col-lg-5">
        <div class="card col-12 col-sm-12 col-md-12 col-lg-6">
          <h2>{{ $blog->name }}</h2>
          <p>{{ $blog->description }}</p>
        </div>
      </div>
      @endforeach

      {{-- <div class="card-blog">
        <img src="{{ asset('front/image/Best website design company.jpg') }}" alt="" class="col-12 col-sm-12 col-md-12 col-lg-5">
        <div class="card col-12 col-sm-12 col-md-12 col-lg-6">
          <h2>{{ __("blog.Website content management") }}</h2>
          <p>{{ __("blog.CMS content management is the system that enables you to create content, modify it, and simply control the materials and media provided through various websites, so that it gives the opportunity to create websites and deal with different forms of content directly without the need to write code or study different programming languages, because it contains It contains pre-made instructions, and allows building web pages, publishing content, and saving.") }}</p>
        </div>
      </div>

      <div class="card-blog">
        <img src="{{ asset('front/image/Commercial website design.jpg') }}" alt="" class="col-12 col-sm-12 col-md-12 col-lg-5">
        <div class="card col-12 col-sm-12 col-md-12 col-lg-6">
          <h2>{{ __("blog.Commercial website design") }}</h2>
          <p>{{ __("blog.Designing a commercial website is one of the most important tools for online profit, and one of the best and most effective e-marketing tools. Because it has many advantages that are not found in traditional marketing tools, and it is noted that all segments of society have begun to request the services and products they need via the Internet, and in the Arab world the number of individuals who have purchased products and services through the network.") }}</p>
        </div>
      </div>

      <div class="card-blog">
        <img src="{{ asset('front/image/Website hosting services.jpg') }}" alt="" class="col-12 col-sm-12 col-md-12 col-lg-5">
        <div class="card col-12 col-sm-12 col-md-12 col-lg-6">
          <h2>{{ __("blog.Web hosting services") }}</h2>
          <p>{{ __("blog.Web hosting services help websites to exist online; It is like buying a dedicated or shared space on the Internet in order to launch various websites, create e-mail, save files and all forms of electronic content for large institutions, brands, online stores and people as well. Website hosting services vary according to the type and duration of hosting, the size of the site, and the quality of servers and servers; And of course, affect the speed.") }}</p>
        </div>
      </div>

      <div class="card-blog">
        <img src="{{ asset('front/image/Writing promotional content.jpg') }}" alt="" class="col-12 col-sm-12 col-md-12 col-lg-5">
        <div class="card col-12 col-sm-12 col-md-12 col-lg-6">
          <h2>{{ __("blog.Writing promotional content") }}</h2>
          <p>{{ __("blog.Writing promotional and marketing content is one of the most important elements of e-marketing. Out of every 5 potential customers, 3 read the marketing content on the internet pages before making a purchase decision. It is not limited to small and emerging companies and institutions, but famous brands are subject to scrutiny through the content they have. Accordingly, the degree of trust that can be obtained, and writing the appropriate promotional content.") }}</p>
        </div>
      </div>

      <div class="card-blog">
        <img src="{{ asset('front/image/Android applications development.jpg') }}" alt="" class="col-12 col-sm-12 col-md-12 col-lg-5">
        <div class="card col-12 col-sm-12 col-md-12 col-lg-6">
          <h2>{{ __("blog.Android application development") }}</h2>
          <p>{{ __("blog.Developing Android applications means creating applications for smart phones and devices that run on the Android system, and it is noted that these devices are constantly increasing and developing; Google was not satisfied with what it provided of software and technical tools related to the Internet and computers only, but rather its keenness to issue the Android operating program for tablets, phones, watches and smart TVs was one of the most important technologies it provided in the years… ") }}</p>
        </div>
      </div>

      <div class="card-blog">
        <img src="{{ asset('front/image/Best website design company.jpg') }}" alt="" class="col-12 col-sm-12 col-md-12 col-lg-5">
        <div class="card col-12 col-sm-12 col-md-12 col-lg-6">
          <h2>{{ __("blog.Best website design company") }}</h2>
          <p>{{ __("blog.Promotion now depends on the existence of websites for all existing goods. Anyone who is keen to create a new brand first resorts to how to market this brand. until it sweeps the market, and through it can reach customers; So, they are interested in looking for a web design company; In order to ensure the spread, and reach the customer in a short period. Designing websites to display trademarks Displaying the trademark So, Tarmeez Tech gives you the solution in the simplest way by creating an attractive and smooth website with an easy-to-use control panel.") }}</p>
        </div>
      </div>

      <div class="card-blog">
        <img src="{{ asset('front/image/Widespread in America and the Arab world.jpg') }}" alt="" class="col-12 col-sm-12 col-md-12 col-lg-5">
        <div class="card col-12 col-sm-12 col-md-12 col-lg-6">
          <h2>{{ __("blog.The most powerful software company in America and the Arab world") }}</h2>
          <p>{{ __("blog.In light of the current technological development, many software companies must emerge, which have an indispensable role in designing and developing many websites and programs, as they have a role in organizing instructions for running programs, as well as updating the version of programs, and following up on how they work from Through an integrated team of programmers, who have sufficient training and skills that enable them to test the best and latest tools and programming languages, we at Tarmeez Tech always strive to be the best among the many companies in the arena.") }}</p>
        </div>
      </div>

      <div class="card-blog">
        <img src="{{ asset('front/image/Create a professional online store.jpg') }}" alt="" class="col-12 col-sm-12 col-md-12 col-lg-5">
        <div class="card col-12 col-sm-12 col-md-12 col-lg-6">
          <h2>{{ __("blog.Create a professional online store") }}</h2>
          <p>{{ __("blog.Do you dream of creating your own online store to expand your business? Especially after the increase in the percentage of sales that take place electronically, which is expected to accelerate in the coming years, we are well aware that the idea of ​​creating a professional online store is somewhat terrifying, especially if you do not have sufficient background in the technical field, but do not worry, as we will present a guide today Comprehensive on how to create through the free consultation that was prepared for you, do not hesitate to contact us in order to answer all your inquiries on this subject.") }}</p>
        </div>
      </div>

      <div class="card-blog">
        <img src="{{ asset('front/image/Business identity design.jpg') }}" alt="" class="col-12 col-sm-12 col-md-12 col-lg-5">
        <div class="card col-12 col-sm-12 col-md-12 col-lg-6">
          <h2>{{ __("blog.Business identity design") }}</h2>
          <p>{{ __("blog.A simple brand identification is the name, design, symbol or any feature that identifies your products or services in a way that makes you stand out and unique.
            Think of it as the idea or image that comes to people's minds when they think of a product or service. A brand is not only about the attributes of a product or service but also about the feelings and emotions it brings to the user. Where people tend to build emotional bonds towards products and brands. It is their affections for the company or its products that build their loyalty. Once they see a name, logo, message, or visual identity, their feelings will be affected.") }}</p>
        </div>
      </div>

      <div class="card-blog">
        <img src="{{ asset('front/image/Search engine optimization.png') }}" alt="" class="col-12 col-sm-12 col-md-12 col-lg-5">
        <div class="card col-12 col-sm-12 col-md-12 col-lg-6">
          <h2>{{ __("blog.What is the best SEO company in the world and the Arab world?") }}</h2>
          <p>{{ __("blog.Promotion is the basis of any process now, and through it the economy of many is built; Therefore, interest in the best SEO companies in the Arab world is a means to reach the goal of global marketing, and the Tarmeez Tech company is a leader in the world of SEO, which gives you results through unique SEO services that are compatible with all the standards that have been set, as the company guarantees you the lead in search results in record time Your site will appear in the results.") }}</p>
        </div>
      </div>

      <div class="card-blog">
        <img src="{{ asset('front/image/Social media (1).png') }}" alt="" class="col-12 col-sm-12 col-md-12 col-lg-5">
        <div class="card col-12 col-sm-12 col-md-12 col-lg-6">
          <h2>{{ __("blog.Social media management") }}</h2>
          <p>{{ __("blog.Promotion is the basis of any process now, and through it the economy of many is built; Therefore, interest in the best SEO companies in the Arab world is a means to reach the goal of global marketing, and the Tarmeez Tech company is a leader in the world of SEO, which gives you results through unique SEO services that are compatible with all the standards that have been set, as the company guarantees you the lead in search results in record time Your site will appear in the results.") }}</p>
        </div>
      </div> --}}
    </div>
  </div>
</section>

@endsection
