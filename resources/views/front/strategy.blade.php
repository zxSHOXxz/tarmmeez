@extends('front.master')
@section('title', 'Web Development -' . config('app.name'))
@section('content')
@if (app()->currentLocale() == 'ar')
<style>
    .our-project .container .projects .project .text p {
        text-align: justify;
    }
</style>
<div class="header"
style="background:  url('{{asset('front/image/Group 186.svg')}}') no-repeat center center / cover">
</div>
@endif
@if (app()->currentLocale() == 'en')
<div class="header"
style="background:  url('{{asset('front/image/Group 185.svg')}}') no-repeat center center / cover">
</div>
@endif
@php
    use App\Models\Service;
    use App\Models\Work;
    use App\Models\Solution;
@endphp

<style>
    .our-project .container .projects .project .text p {
        margin-top: 30px !important
    }
</style>

        <!-- Our Project -->
        <section class="our-project">
            <div class="container">
                <div class="text ">
                    <h2 class="title wow animate__animated animate__backInLeft">
                        {{__('Three steps')}}
                    </h2>
                </div>
                <div class="projects">
                    <div class="project project1">
                        <embed style="width: 300px; height:300px" src="{{ asset('front/image/design.svg') }}" alt="image project">
                        <div class="text">
                            <h1>{{__("UX/UI")}}</h1>
                            <div class="line"></div>
                            <p>{{__("The first strategies in your branding company Now you will start your journey with us for your commercial project. The first step will be designing the ui ux user interface, where we design and manage the two businesses with the hands of the best designers and experts. We develop a plan informed by data and visions to create better experiences and influence customer behavior. Work is done on designing and developing in a responsive manner that supports all computers")}}</p>
                        </div>
                    </div>
                    <div class="project project2">
                        <embed style="width: 300px; height:300px" src="{{ asset('front/image/build.svg') }}" alt="image project">
                        <div class="text">
                            <h1>{{__("Front End")}}</h1>
                            <div class="line"></div>
                            <p>{{__("The second strategy for Markeztak now is to build the front end of your website after completing a design in several programming languages from scratch, step by step, to ensure that your website is compatible with all screen devices and to ensure that no technical problems occur in the future. After completion, the backend interface of your site is built, which is the part responsible for storing and organizing information systems and making sure that everything in the site interface works with the highest possible efficiency, high quality and speed.")}}</p>
                        </div>
                    </div>
                    <div class="project project1">
                        <embed style="width: 300px; height:300px" src="{{ asset('front/image/run.svg') }}" alt="image project">
                        <div class="text">
                            <h1>{{__("Launching the project")}}</h1>
                            <div class="line"></div>
                            <p>{{__("The third strategy in your markup company here will be the launch of your commercial project after designing and building according to an approach that keeps pace with the new era. Speed and ease of use, uh, have now begun your first steps towards success in achieving your goals for your commercial project. Now our business will speak about you and your markup with pride.")}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



@stop
