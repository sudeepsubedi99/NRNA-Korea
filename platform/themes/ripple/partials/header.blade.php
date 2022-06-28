<!DOCTYPE html>
{{-- <html lang="en"> --}}
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="{{ url('storage/images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel='stylesheet' id='font-awesome-css'
        href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css?ver=5.8.1' media='all' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    {!! Theme::header() !!}

</head>

<body @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>
    {!! apply_filters(THEME_FRONT_BODY, null) !!}

    <div class="site-content">
        <header>
            <div class="header-content">
                <div class="secondary-menu">
                    <div class="container">
                        <div class="row align-items-center">
                            @if (theme_option('social_links'))
                                <div class="col-lg-6">
                                    <div class="site-logo">
                                        <h1 class="m-0">
                                            <a class="navbar-brand" href="index.php">
                                                <!-- LOGO-->
                                                <div class="page-header__left">
                                                    <a href="{{ route('public.single') }}" class="page-logo">
                                                        @if (theme_option('logo'))
                                                            <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}"
                                                                alt="{{ theme_option('site_title') }}" height="50">
                                                        @endif
                                                        <span>{{ theme_option('site_title') }}</span>
                                                    </a>
                                                </div>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                                <div class="top-menu">
                                    <ul class="nav-list">
                                        <li><i class="fas fa-envelope"></i> <a
                                                href="mailto:kr.generalsecretary@nrna.org">kr.generalsecretary@nrna.org</a>
                                        </li>
                                        <li><i class="fas fa-phone-volume"></i> <a href="tel:+82 10-4266-2281">+82
                                                10-4266-2281</a></li>
                                        <li><i class="far fa-user-circle"></i> <a href="{{ route('public.member.login') }}">Sign in</></li>
                                    </ul>
                                </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="page-header__right">
                <!-- MOBILE MENU-->
                <div class="navigation-toggle navigation-toggle--dark" style="display: none"><span></span></div>
                <div class="pull-left">
                    <!-- SEARCH-->
                    <div class="search-btn c-search-toggler"><i class="fa fa-search close-search"></i></div>
                    <!-- NAVIGATION-->
                    <nav class="navigation navigation--light navigation--fade navigation--fadeLeft">
                        {!! Menu::renderMenuLocation('main-menu', [
    'options' => ['class' => 'menu sub-menu--slideLeft'],
    'view' => 'main-menu',
]) !!}
                    </nav>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            {{-- <div class="main-menu">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                            <ul class="navbar-nav ">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('public.single') }}">Home
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
                            </ul>
                            <div class="menu-btn d-flex">
                                <a href="#" class="page-btn bg-yellow ">Donate Us <img
                                        src="{{ url('storage/images/bx_donate-blood.png') }}"
                                        class="img-fluid"></a>
                                <a href="#" class="page-btn bg ">Become a member</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div> --}}
    </div>
    </header>
    <div id="page-wrap">


        {{-- <!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" lang="{{ app()->getLocale() }}"><![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="{{ app()->getLocale() }}"><![endif]-->
<!--[if IE 9]><html class="ie ie9" lang="{{ app()->getLocale() }}"><![endif]-->
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <!-- Fonts-->
        <link href="https://fonts.googleapis.com/css?family={{ urlencode(theme_option('primary_font', 'Roboto')) }}" rel="stylesheet" type="text/css">
        <!-- CSS Library-->

        <style>
            :root {
                --color-1st: {{ theme_option('primary_color', '#bead8e') }};
                --primary-font: '{{ theme_option('primary_font', 'Roboto') }}', sans-serif;
            }
        </style>

        {!! Theme::header() !!}

        <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
        <!--WARNING: Respond.js doesn't work if you view the page via file://-->
        <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
    <body @if (BaseHelper::siteLanguageDirection() == 'rtl') dir="rtl" @endif>
    {!! apply_filters(THEME_FRONT_BODY, null) !!}
    <header class="header" id="header">
        <div class="header-wrap">
            <nav class="nav-top">
                <div class="container">
                    <div class="row">
                        @if (theme_option('social_links'))
                            <div class="col-md-6">
                                <div class="hi-icon-wrap hi-icon-effect-3 hi-icon-effect-3a d-inline-block">
                                    @foreach (json_decode(theme_option('social_links'), true) as $socialLink)
                                        @if (count($socialLink) == 3)
                                            <a href="{{ $socialLink[2]['value'] }}"
                                               title="{{ $socialLink[0]['value'] }}" class="hi-icon {{ $socialLink[1]['value'] }}" target="_blank">
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <div class="col-md-6 text-end">
                            @if (is_plugin_active('member'))
                                <ul class="d-inline-block">
                                    @if (auth('member')->check())
                                        <li><a href="{{ route('public.member.dashboard') }}" rel="nofollow"><img src="{{ auth('member')->user()->avatar_url }}" class="img-circle" width="20" alt="{{ auth('member')->user()->name }}"> &nbsp;<span>{{ auth('member')->user()->name }}</span></a></li>
                                        <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" rel="nofollow"><i class="fa fa-sign-out"></i> {{ __('Logout') }}</a></li>
                                    @else
                                        <li><a href="{{ route('public.member.login') }}" rel="nofollow"><i class="fa fa-sign-in"></i> {{ __('Login') }}</a></li>
                                    @endif
                                </ul>
                                @if (auth('member')->check())
                                    <form id="logout-form" action="{{ route('public.member.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @endif
                            @endif

                            <div class="language-wrapper d-inline-block">
                                {!! apply_filters('language_switcher') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <header data-sticky="false" data-sticky-checkpoint="200" data-responsive="991" class="page-header page-header--light">
        <div class="container">
            <!-- LOGO-->
            <div class="page-header__left">
                <a href="{{ route('public.single') }}" class="page-logo">
                    @if (theme_option('logo'))
                        <img src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="{{ theme_option('site_title') }}" height="50">
                    @endif
                </a>
            </div>
            <div class="page-header__right">
                <!-- MOBILE MENU-->
                <div class="navigation-toggle navigation-toggle--dark" style="display: none"><span></span></div>
                <div class="pull-left">
                    <!-- SEARCH-->
                    <div class="search-btn c-search-toggler"><i class="fa fa-search close-search"></i></div>
                    <!-- NAVIGATION-->
                    <nav class="navigation navigation--light navigation--fade navigation--fadeLeft">
                        {!!
                            Menu::renderMenuLocation('main-menu', [
                                'options' => ['class' => 'menu sub-menu--slideLeft'],
                                'view'    => 'main-menu',
                            ])
                        !!}
                    </nav>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        @if (is_plugin_active('blog'))
            <div class="super-search hide" data-search-url="{{ route('public.ajax.search') }}">
                <form class="quick-search" action="{{ route('public.search') }}">
                    <input type="text" name="q" placeholder="{{ __('Type to search...') }}" class="form-control search-input" autocomplete="off">
                    <span class="close-search">&times;</span>
                </form>
                <div class="search-result"></div>
            </div>
        @endif
    </header>
    <div id="page-wrap"> --}}
