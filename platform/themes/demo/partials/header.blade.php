<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ url('storage/images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('themes/demo/css/bootstrap.min.css') }}">
    <link rel='stylesheet' id='font-awesome-css'
        href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css?ver=5.8.1' media='all' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/demo/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/demo/css/slick.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('themes/demo/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('themes/demo/css/slick-theme.css') }}">
    {!! Theme::header() !!}
</head>

<body @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>
    {{-- {!! apply_filters(THEME_FRONT_BODY, null) !!} --}}
    <div class="site-content">
        <header>
            <div class="header-content">
                <div class="secondary-menu">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="site-logo">
                                    <h1 class="m-0">
                                        <a class="navbar-brand" href="/">
                                            @if (theme_option('logo'))
                                                <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}"
                                                    alt="{{ Theme::header() }}" height="50">
                                            @endif
                                            {{-- <img src="{{ url('storage/images/NRNA LOGO 1.png') }}" class="img-fluid"> --}}
                                           <span>NRNA Korea</span>
                                            {{-- <span> {!! Theme::option('') !!} </span> --}}
                                            <h1>{{ get_field($page ?? '', 'title') }} </h1>

                                        </a>
                                    </h1>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="top-menu">
                                    @if (is_plugin_active('member'))
                                    <ul class="nav-list">
                                        <li><i class="fas fa-envelope"></i> <a
                                                href="mailto:kr.generalsecretary@nrna.org">kr.generalsecretary@nrna.org</a>
                                        </li>
                                        <li><i class="fas fa-phone-volume"></i> <a href="tel:+82 10-4266-2281">+82
                                                10-4266-2281</a></li>

                                        {{-- <li><i class="far fa-user-circle"></i> <a href="{{ route('public.member.login') }}">Sign in</a></li> --}}


                                        @if (auth('member')->check())
                                        <li><a href="{{ route('public.member.dashboard') }}" rel="nofollow"><img
                                                    src="{{ auth('member')->user()->avatar_url }}" class="img-circle"
                                                    width="20" alt="{{ auth('member')->user()->name }}">
                                                &nbsp;<span>{{ auth('member')->user()->name }}</span></a></li>
                                        <li><a href="#"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                rel="nofollow"><i class="fa fa-sign-out"></i>{{ __('Logout') }}</a>
                                        </li>
                                    @else
                                        <li><a href="{{ route('public.member.login') }}" rel="nofollow"><i
                                                    class="far fa-user-circle"></i> Sign in</a></li>
                                    @endif


                                </ul>
                                @if (auth('member')->check())
                                    <form id="logout-form" action="{{ route('public.member.logout') }}"
                                        method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @endif
                            @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                                {{-- <ul class="navbar-nav ">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Home
                                        </a>
                                    </li>
                                    <li class="nav-item has-sub">
                                        <a class="nav-link" href="#">About Us
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">Who we are?</a>
                                            </li>
                                            <li>
                                                <a href="#">Executive Committee</a>
                                            </li>
                                            <li>
                                                <a href="#">Taskforces</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item has-sub">
                                        <a class="nav-link" href="#"> Media
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">Notices</a>
                                            </li>
                                            <li>
                                                <a href="#">News</a>
                                            </li>
                                            <li>
                                                <a href="#">Activities</a>
                                            </li>
                                            <li>
                                                <a href="#">Gallery</a>
                                            </li>
                                            <li>
                                                <a href="#">Albums</a>
                                            </li>
                                            <li>
                                                <a href="#">Press Release</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item has-sub">
                                        <a class="nav-link" href="#"> Resources
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">Downloads</a>
                                            </li>
                                            <li>
                                                <a href="#">NRNA Discounts</a>
                                            </li>
                                            <li>
                                                <a href="#">NRNA Constitution</a>
                                            </li>
                                            <li>
                                                <a href="#">NRNA Action Plan Booklet</a>
                                            </li>
                                            <li>
                                                <a href="#">About NRNA Card</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item has-sub">
                                        <a class="nav-link" href="#"> Report
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">GS Progress Report</a>
                                            </li>
                                            <li>
                                                <a href="#">Financial Report</a>
                                            </li>
                                            <li>
                                                <a href="#">Audit Report</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item has-sub">
                                        <a class="nav-link" href="#"> Events
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#">South Korea Regional Meeting</a>
                                            </li>
                                            <li>
                                                <a href="#">All Events</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact Us</a>
                                    </li>
                                </ul> --}}
                                    {!! Menu::renderMenuLocation('main-menu', [
                                                            'options' => [],
                                                            'theme' => true,
                                                            'view' => 'custom-menu',
                                                        ]) !!}

                                <div class="menu-btn d-flex">
                                    <a href="#" class="page-btn bg-yellow ">Donate Us <img
                                            src="{{ url('storage/images/bx_donate-blood.png') }}"
                                            class="img-fluid"></a>
                                    <a href="#" class="page-btn bg ">Become a member</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div id="page-wrap">
