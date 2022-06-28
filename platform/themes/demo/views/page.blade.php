{{-- <h3>{{ $page->name }}</h3> --}}
{{-- {!! Theme::breadcrumb()->render() !!} --}}
{!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, BaseHelper::clean($page->content), $page) !!}

{{-- @dd(Project::class) --}}
{{-- Message Fro President --}}

{{-- @dd(MetaBox::getMetaData($page, 'test', true)) --}}
{{-- @dd($page) --}}
{{-- {{ get_field($projects,'author')}} --}}



<div class="container">
    <div class="row">
        <div class="offset-lg-6 col-lg-6">
            <div class="president-message text-center">
                <div class="section-title">
                    <h2><span>Message From <span class="text-blue"> President</span></span></h2>
                </div>
                <div class="message-detail text-justify my-5">
                    <p>
                        {{ get_field($page,'message_from_president')}}
                    </p>
                </div>
                <a href="#" class="page-btn nobg blue icon">Read more</a>
            </div>
        </div>
    </div>
</div>
<div class="advertise">
    <div class="container">
        <section class="advertise-sec">
            <a href="#" target="_blank">
                <img src="{{  RvMedia::getImageUrl(get_field($page , 'advertisement')) }}" class="img-fluid">
            </a>
        </section>
    </div>
</div>
<div class="project  bg-lb">
    <div class="container">
        <section class="project-sec small-pb">
            <div class="row">
                <div class="col-lg-3">
                    <div class="project-card text-center">
                        <a href="#">
                            <figure>
                                <img src="{{ RvMedia::getImageUrl(get_field($page , 'image')) }}" class="img-fluid">
                            </figure>
                            <span>NRNA SOUTH KOREA</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-intro px-5">
                        <div class="section-title">
                            <h2>{{ get_field($page,'title_project')}}</h2>
                        </div>
                        <p>{{ get_field($page,'subtitle')}}</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project-card text-center">
                        <a href="#">
                            <figure>
                                <img src="{{  RvMedia::getImageUrl(get_field($page , 'image'))  }}" class="img-fluid">
                            </figure>
                            <span>NRNA SOUTH KOREA</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="project-card text-center">
                        <a href="#">
                            <figure>
                                <img src="{{  RvMedia::getImageUrl(get_field($page , 'image')) }} " class="img-fluid">
                            </figure>
                            <span>NRNA SOUTH KOREA</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project-card text-center">
                        <a href="#">
                            <figure>
                                <img src="{{ RvMedia::getImageUrl(get_field($page , 'image'))  }}" class="img-fluid">
                            </figure>
                            <span>NRNA SOUTH KOREA</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project-card text-center">
                        <a href="#">
                            <figure>
                                <img src="{{  RvMedia::getImageUrl(get_field($page , 'image'))  }}" class="img-fluid">
                            </figure>
                            <span>NRNA SOUTH KOREA</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project-card text-center">
                        <a href="#">
                            <figure>
                                <img src="{{  RvMedia::getImageUrl(get_field($page , 'image'))  }}" class="img-fluid">
                            </figure>
                            <span>NRNA SOUTH KOREA</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="#" class="page-btn nobg blue icon">View All Projects</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="status">
    <div class="container">
        <section class="status-sec">
            <div class="section-intro px-5">
                <div class="section-title">
                    <h2>{{ get_field($page,'statistics')}} </h2>
                </div>
                <p>{{ get_field($page,'stat_sub')}}</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="org-status text-center">
                        <figure>
                            <img src="{{ url('storage/images/m-status.png') }}" class="img-fluid">
                            <h6>{{ get_field($page,'member')}}</h6>
                            <h2>{{ get_field($page,'member_count')}}</h2>
                        </figure>
                        <p>{{ get_field($page,'member_subtitle')}} </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="org-status text-center">
                        <figure>
                            <img src="{{ url('storage/images/p-status.png') }}" class="img-fluid">
                            <h6>{{ get_field($page,'project')}}</h6>
                            <h2>{{ get_field($page,'project_count')}}</h2>
                        </figure>
                        <p>{{ get_field($page,'project_subtitle')}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="org-status text-center">
                        <figure>
                            <img src="{{ url('storage/images/em-status.png') }}" class="img-fluid">
                            <h6>{{ get_field($page,'exe_mem')}}</h6>
                            <h2>{{ get_field($page,'executive_members_count')}}</h2>
                        </figure>
                        <p>{{ get_field($page,'executive_members_subtitle')}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="org-status text-center">
                        <figure>
                            <img src="{{ url('storage/images/e-status.png') }}" class="img-fluid">
                            <h6>{{ get_field($page,'events')}}</h6>
                            <h2>{{ get_field($page,'event_count')}}</h2>
                        </figure>
                        <p>{{ get_field($page,'event_subtitle')}}</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="member">
    <section class="member-sec president-sec large-pb large-pt ">
        <div class="bg-blue position-relative">
            <div class="container-fluid">
                <div class="row img-row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6 ">
                        <div class="member-img president-img">
                            <img src="{{ url('storage/images/Rectangle 85.jpg') }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class=" col-lg-6">
                        <div class="member-text president-message text-center">
                            <div class="section-title">
                                <h2 class="text-white">{{ get_field($page,'become_member')}}</h2>
                            </div>
                            <div class="member-detail message-detail my-5">
                                <p>{{ get_field($page,'become_member_subtitle')}}</p>
                            </div>
                            <a href="#" class="page-btn nobg icon">{{ get_field($page,'become_member')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="partners">
    <div class="container">
        <section class="partner-sec small-pb">
            <div class="section-title">
                <h2><span>{{ get_field($page,'partner_title')}}
                    {{-- <span class="text-blue">
                        Partners</span> --}}
                    </span></h2>
            </div>
            <div class="all-partners">
                <ul>
                    <li>
                        <div class="partners-list">
                            {{-- @dd(get_field($page,'partner_image')) --}}
                            <img src="{{  RvMedia::getImageUrl(get_field($page,'partner_image'))}}" class="img-flid">
                        </div>
                    </li>
                    <li>
                        <div class="partners-list">
                            <img src="{{ url('storage/images/NRNA LOGO 1-1.png') }}" class="img-flid">
                        </div>
                    </li>
                    <li>
                        <div class="partners-list">
                            <img src="{{ url('storage/images/NRNA LOGO 1-1.png') }}" class="img-flid">
                        </div>
                    </li>
                    <li>
                        <div class="partners-list">
                            <img src="{{ url('storage/images/NRNA LOGO 1-1.png') }}" class="img-flid">
                        </div>
                    </li>
                    <li>
                        <div class="partners-list">
                            <img src="{{ url('storage/images/NRNA LOGO 1-1.png') }}" class="img-flid">
                        </div>
                    </li>
                    <li>
                        <div class="partners-list">
                            <img src="{{ url('storage/images/NRNA LOGO 1-1.png') }}" class="img-flid">
                        </div>
                    </li>
                    <li>
                        <div class="partners-list">
                            <img src="{{ url('storage/images/NRNA LOGO 1-1.png') }}" class="img-flid">
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>


{{-- Recent News --}}
<div class="news">
    <div class="container">
        <section class="news-sec small-pt">
            <div class="section-intro">
                <div class="section-title">
                    <h2><span>Recent<span class="text-blue"> News</span></span></h2>
                </div>
                <p>{{ get_field($page,'recent_news_subtitle')}}</p>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    {{-- <div class="hot-news">                        @dd($page) --}}

                        {{-- @foreach ($page as $pag ) --}}
                        {{-- <img src="{{ RvMedia::getImageUrl(get_field($pag->recent_news_image)) }}" class="img-fluid"> --}}
                        {{-- @dd(RvMedia::getImageUrl(get_field($pag,'recent_news_image'))) --}}
                        <img src="{{ RvMedia::getImageUrl(get_field($page,'recent_news_image')) }}" class="img-fluid">
                        <div class="news-title">
                            <div class="hot-topic">
                                <h2>
                                    {{-- <a href="#">{{ (get_field($page,'news_title')) }}</a> --}}
                                </h2>
                                <ul class="meta-tag mb-3">
                                    <li>June 14, 2022</li>
                                    <li class="time">8:93 AM</li>
                                    <li class="cat"><a href="#">News</a></li>
                                </ul>
                                <p>{{ (get_field($page , 'news_subtitle')) }}</p>
                            </div>
                        </div>
                        {{-- @endforeach --}}
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="past-hot-news hot-news">
                        <img src="{{ url('storage/images/phn.png') }}" class="img-fluid">
                        <div class="news-title">
                            <div class="hot-topic">
                                <h2>
                                    <a href="#">4th Global Nepali Health Conference</a>
                                </h2>
                                <ul class="meta-tag mb-3">
                                    <li>June 14, 2022</li>
                                    <li class="time">8:93 AM</li>
                                    <li class="cat"><a href="#">News</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lobortis dignissim libero
                                    velit mauris
                                    felis. Risus, proin iaculis interdum sit congue scelerisque ut in.</p>
                            </div>
                        </div>
                    </div>
                    <div class="past-hot-news hot-news">
                        <img src="{{ url('storage/images/phn.png') }}" class="img-fluid">
                        <div class="news-title">
                            <div class="hot-topic">
                                <h2>
                                    <a href="#">4th Global Nepali Health Conference</a>
                                </h2>
                                <ul class="meta-tag mb-3">
                                    <li>June 14, 2022</li>
                                    <li class="time">8:93 AM</li>
                                    <li class="cat"><a href="#">News</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lobortis dignissim libero
                                    velit mauris
                                    felis. Risus, proin iaculis interdum sit congue scelerisque ut in.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="text-center mt-5">
                        <a href="#" class="page-btn nobg blue icon">View All News</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

{{-- end of Recent News  --}}


{{-- Video Here --}}
<div class="video">
    <section class="video-sec pb-0">
        <div class="section-intro">
            <div class="section-title">
                <h2><span>Featured <span class="text-blue">Video</span></span></h2>
            </div>
        </div>
        <div class="popup-video">
            <div class="thumbnail-content">
                <div class="video-thumbnail">
                    <img src="{{ url('storage/images/video.png') }}" class="img-fluid thumbnail">
                </div>
                <h2 class="video-title">
                    <a href="#video-1" data-toggle="modal">
                        <img src="{{ url('storage/images/play-button-1.png') }}">
                    </a>
                </h2>
            </div>
        </div>
        <div class="explore-video">
            <!--Modal: modalYT-->
            <div class="modal  fade" id="video-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <!--Content-->
                    <div class="modal-content">

                        <!--Body-->
                        <div class="modal-body mb-0 p-0">

                            {{-- {{$author}} --}}
                            {{-- @dd($author) --}}

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                {!! RvMedia::getImageUrl(  \MetaBox::getMetaData($page, 'embedded_video', true)) !!}
                            </div>

                        </div>

                    </div>
                    <!--/.Content-->
                </div>
            </div>
            <!--Modal: modalYT-->
        </div>
    </section>
</div>
{{-- end Video here --}}




<div class="events">
    <div class="container">
        <section class="events-sec">
            <div class="row">
                <div class="col-lg-9">
                    <div class="recent-events mb-4">
                        <div class="section-title">
                            <h2 class="justify-content-between"><span> Recent <span
                                        class="text-blue">Events</span></span>
                                <a href="#" class="read-more icon"> View More</a>
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="event-intro">
                                    <a href="#">
                                        <div class="date-info">
                                            <span class="month">June</span>
                                            <br>
                                            <span class="date">20</span>
                                        </div>
                                        <div class="event-title">
                                            <h2>4th Global Nepali Health Conference</h2>
                                            <ul class="meta-tag">
                                                <li>June 14, 2022</li>
                                                <li>8:43 AM</li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="event-intro">
                                    <a href="#">
                                        <div class="date-info">
                                            <span class="month">June</span>
                                            <br>
                                            <span class="date">20</span>
                                        </div>
                                        <div class="event-title">
                                            <h2>4th Global Nepali Health Conference</h2>
                                            <ul class="meta-tag">
                                                <li>June 14, 2022</li>
                                                <li>8:43 AM</li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="upcoming-events mb-4">
                        <div class="section-title">
                            <h2 class="justify-content-between"><span> Upcoming <span
                                        class="text-blue">Events</span></span>
                                <a href="#" class="read-more icon"> View More</a>
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="event-intro">
                                    <a href="#">
                                        <div class="date-info">
                                            <span class="month">June</span>
                                            <br>
                                            <span class="date">20</span>
                                        </div>
                                        <div class="event-title">
                                            <h2>4th Global Nepali Health Conference</h2>
                                            <ul class="meta-tag">
                                                <li>June 14, 2022</li>
                                                <li>8:43 AM</li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="event-intro">
                                    <a href="#">
                                        <div class="date-info">
                                            <span class="month">June</span>
                                            <br>
                                            <span class="date">20</span>
                                        </div>
                                        <div class="event-title">
                                            <h2>4th Global Nepali Health Conference</h2>
                                            <ul class="meta-tag">
                                                <li>June 14, 2022</li>
                                                <li>8:43 AM</li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="addvertise-two">
                        <div class="add-top mb-4">
                            <a href="#" target="_blank">
                                <img src="{{ url('storage/images/add2.gif') }}" class="img-fluid">
                            </a>
                        </div>
                        <div class="add-bottom">
                            <a href="#" target="_blank">
                                <img src="{{ url('storage/images/add2.gif') }}" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>










{{-- @dd($project) --}}

{{-- @dd($projects as $project) --}}
{{-- @foreach ($projects as $project )
@dd($project->author)
{{get_field($project,'author')}}
@endforeach --}}



