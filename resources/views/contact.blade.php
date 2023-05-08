{{-- resources\views\site\contact.blade.php --}}
@extends('layouts.app')

@section('pageMeta')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="index, follow">
@endsection

@section('title', 'Contact Us')

@section('pageStyles')
    {{-- CSS Styles go here --}}
@endsection

@section('fonts')
    {{-- Page Specific Fonts go here --}}
@endsection

@section('headersScripts')
    {{-- Page Specific Scripts that need to be in the head go here --}}
@endsection

@section('bodyClasses', '')
@section('bodyStyles', '')

@section('pageTitle')
    <h1>Contact Us</h1>
    <span>Let's Talk</span>
@endsection

@section('content')
    {{-- Page Content goes here --}}
    <section id="map-overlay">
        <!-- Google Map
                            ============================================= -->
        {{-- <section id="google-map" class="gmap"></section> --}}

        <div class="container clearfix">
            <!-- Contact Form Overlay
                                ============================================= -->
            <div id="contact-form-overlay-mini" class="clearfix">

                <div class="fancy-title title-dotted-border">
                    <h3>Send us an Email</h3>
                </div>
                {{-- @include('layouts.cynosure.partials.errors') --}}
                @include('flash::message')
                <form method="POST" action="{{ route('contact_store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Your Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Your name"
                            value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Your E-Mail Address</label>
                        <input class="form-control" type="text" name="email" placeholder="Your e-mail address"
                            value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Your Phone Number</label>
                        <input class="form-control" type="text" name="phone" placeholder="Your phone number"
                            value="{{ old('phone') }}">
                        @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Subject</label>
                        <input class="form-control" type="text" name="subject" placeholder="Subject"
                            value="{{ old('subject') }}">
                        @if ($errors->has('subject'))
                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>Your Message</label>
                        <textarea rows="3" name="contact_message" placeholder="Your Message" class="form-control"
                            value="{{ old('contact_message') }}"></textarea>
                        @if ($errors->has('contact_message'))
                            <span class="text-danger">{{ $errors->first('contact_message') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Hello" class="btn btn-outline-secondary pull-right"
                            style="color: ##F60">
                    </div>
                </form>
            </div>
        </div>

        <!-- Google Map
                           ============================================= -->
        <section class="gmap" data-latitude="-37.813629" data-longitude="144.963058" data-scrollwheel="false"
            data-markers='[{latitude:-37.813629, longitude:144.963058, html: "<div class=\"p-2\" style=\"width: 300px;\"><h4 class=\"mb-2\">Hi! We are <span>Envato!</span></h4><p class=\"mb-0\" style=\"font-size:1rem;\">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day.</p></div>", icon:{ image: "images/icons/map-icon-red.png", iconsize: [32, 39], iconanchor: [32,39] } }]'>
        </section>

    </section><!-- Contact Form & Map Overlay Section End -->
@stop

@push('footerScripts')
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyCKobZQw3Avj2HnaPLIGwdJBUH9pYjo5wk"></script>
    <script src="{{ asset('js/jquery.gmap.js') }}"></script>
    <script>
        jQuery('#google-map').gMap({

            latitude: 42.1014372,
            longitude: -72.5820543,
            maptype: 'ROADMAP',
            zoom: 14,
            markers: [{
                address: "Springfield, MA",
                html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
                icon: {
                    image: "{{ asset('/images/icons/map-icon-red.png') }}",
                    iconsize: [32, 39],
                    iconanchor: [13, 39]
                }
            }],
            doubleclickzoom: false,
            controls: {
                panControl: false,
                zoomControl: false,
                mapTypeControl: false,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }
        });
    </script>
@endpush
