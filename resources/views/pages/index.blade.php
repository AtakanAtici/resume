@extends('layouts.front')

@section('title')
    ATAKAN ATICI - Web Developer
@endsection
@section('css')
@endsection

@section('content')
    <div class="col-md-12">
        <div id="content" class="panel-container">

            <!-- Home Page
            ================================================== -->
            <div id="home">
                <!-- Text Section -->
                <div class="row">
                    <section class="about-me line col-md-12 padding_30 padbot_45">
                        <div class="section-title"><span></span>
                            <h2>About Me</h2></div>
                        <p class="top_30">Started earnest brother believe an exposed so. Me he believing daughters if
                            forfeited at furniture. Age again and stuff downs spoke. Late hour new nay able fat each
                            sell. Nor themselves age introduced frequently use unsatiable devonshire get. They why quit
                            gay cold rose deal park. One same they four did ask busy. Reserved opinions fat him nay
                            position. Breakfast as zealously incommode do agreeable furniture. One too nay led fanny
                            allow plate.
                            <br>
                            <br> Quick six blind smart out burst. Perfectly on furniture dejection determine my
                            depending an to. Add short water court fat. Her bachelor honoured perceive securing but
                            desirous ham required. Questions deficient acuteness to engrossed as. Entirely led ten
                            humoured greatest and yourself. Besides ye country on observe. She continue appetite
                            endeavor she judgment interest the met. For she surrounded motionless fat resolution may.
                        </p>
                    </section>
                </div>
                <!-- My Services Section -->
                <div class="row">
                    <section class="services line graybg col-md-12 padding_50 padbot_50">
                        <div class="section-title bottom_45"><span></span>
                            <h2>My Services</h2></div>
                        <div class="row">
                            <!-- a service -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service">
                                    <div class="icon">
                                        <i class="flaticon-html"></i>
                                    </div>
                                    <span class="title">Web Development</span>
                                    <p class="little-text">I have been working on web design for 10 years.</p>
                                </div>
                            </div>
                            <!-- a service -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service">
                                    <div class="icon">
                                        <i class="flaticon-attach"></i>
                                    </div>
                                    <span class="title">Branding Identity</span>
                                    <p class="little-text">We will make you a brand that is catchy and leaves a
                                        trace.</p>
                                </div>
                            </div>
                            <!-- a service -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service">
                                    <div class="icon">
                                        <i class="flaticon-vector"></i>
                                    </div>
                                    <span class="title">Illustrator</span>
                                    <p class="little-text">I have been working on illustration design for 6 years.</p>
                                </div>
                            </div>
                            <!-- a service -->
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="service">
                                    <div class="icon">
                                        <i class="flaticon-schedule"></i>
                                    </div>
                                    <span class="title">Fast Delivery</span>
                                    <p class="little-text">I deliver your business as fast as possible.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Skills Section -->
                <div class="row">
                    <section class="design-skills col-md-6 padding_60 padbot_50">
                        <div class="section-title bottom_45"><span></span>
                            <h2>Design Skills</h2></div>
                        <ul class="skill-list">
                            <li>
                                <h3>Photoshop</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:80%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>Sketch</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:60%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>Adobe Xd</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:30%;"></div>
                                </div>
                            </li>
                        </ul>
                    </section>
                    <section class="code-skills col-md-6 padding_60">
                        <div class="section-title bottom_45"><span></span>
                            <h2>Code Skills</h2></div>
                        <ul class="skill-list">
                            <li>
                                <h3>Javascript</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:80%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>HTML5</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:60%;"></div>
                                </div>
                            </li>
                            <li>
                                <h3>CSS3</h3>
                                <div class="progress">
                                    <div class="percentage" style="width:30%;"></div>
                                </div>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>

            <!-- Resume Page
            ================================================== -->
            <div id="resume">
                <!-- Resume Section -->
                <div class="row">
                    <section class="education">
                        <div class="section-title top_30"><span></span>
                            <h2>Resume</h2></div>
                        <div class="row">
                            <!-- Working History -->
                            <div class="working-history col-md-6 padding_15 padbot_30">
                                <ul class="timeline col-md-12 top_30">
                                    <li>
                                        <i class="fa fa-suitcase" aria-hidden="true"></i>
                                        <h2 class="timeline-title">Working History</h2>
                                    </li>
                                    <!-- a work -->
                                    @foreach($experienceList as $item)
                                    <li>
                                        <h3 class="line-title">{{ $item->company }} - {{ $item->task_name }}</h3>
                                        <span>{{ $item->date }}</span>
                                        <p class="little-text">{{ $item->description }}</p>
                                    </li>
                                        @endforeach

                                </ul>
                            </div>
                            <!-- Education History -->
                            <div class="education-history col-md-6 padding_15 padbot_30">
                                <ul class="timeline col-md-12 top_30">
                                    <li>
                                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        <h2 class="timeline-title">Education History</h2>
                                    </li>
                                    <!-- a work -->
                                    @foreach($educationList as $item)
                                    <li>
                                        <h3 class="line-title">{{ $item->school_name }}</h3>
                                        <span>{{ $item->education_department." (".$item->education_date.")" }}</span>
                                        <p class="little-text">{{ $item->education_explanation }}</p>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Clients Section -->
                <div class="row">
                    <section class="clients col-md-12 graybg padding_45 padbot_45">
                        <div class="section-title bottom_30"><span></span>
                            <h2>Clients</h2></div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="client">
                                    <img src="{{ asset('assets/images/client-01.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="client">
                                    <img src="{{ asset('assets/images/client-02.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="client">
                                    <img src="{{ asset('assets/images/client-03.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="client">
                                    <img src="{{ asset('assets/images/client-04.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Testimonials -->
                <div class="row">
                    <section class="testimonials bottom_30">
                        <div class="section-title top_60 bottom_30"><span></span>
                            <h2>Testimonials</h2></div>
                        <div class="owl-carousel row" data-items="3" data-autoplay="3000" data-pagination="true">
                            <!-- a item -->
                            <div class="col-md-12 item">
                                <div class="comment">
                                    <div class="top-section">
                                        <figure>
                                            <img src="{{ asset('assets/images/testimonial-1.jpg') }}" alt="">
                                        </figure>
                                        <div class="name-info">
                                            <span class="name">Jack Garratt</span>
                                            <span class="job">Freelancer</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Great designer! he finished our work wonderfully and just in time. thanks for
                                        everything.</p>
                                </div>
                            </div>
                            <!-- a item -->
                            <div class="col-md-12 item">
                                <div class="comment">
                                    <div class="top-section">
                                        <figure>
                                            <img src="{{ asset('assets/images/testimonial-2.jpg') }}" alt="">
                                        </figure>
                                        <div class="name-info">
                                            <span class="name">April M. Griffin</span>
                                            <span class="job">Founder</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Our logo and business card design look great. Thanks Henry</p>
                                </div>
                            </div>
                            <!-- a item -->
                            <div class="col-md-12 item">
                                <div class="comment">
                                    <div class="top-section">
                                        <figure>
                                            <img src="{{ asset('assets/images/testimonial-3.jpg') }}" alt="">
                                        </figure>
                                        <div class="name-info">
                                            <span class="name">Larry M. Johnson</span>
                                            <span class="job">Freelancer</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Henry is a very creative and talented designer. I do not hesitate to work
                                        again.</p>
                                </div>
                            </div>
                            <!-- a item -->
                            <div class="col-md-12 item">
                                <div class="comment">
                                    <div class="top-section">
                                        <figure>
                                            <img src="{{ asset('assets/images/testimonial-1.jpg') }}" alt="">
                                        </figure>
                                        <div class="name-info">
                                            <span class="name">Jack Garratt</span>
                                            <span class="job">Freelancer</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Great designer! he finished our work wonderfully and just in time. thanks for
                                        everything.</p>
                                </div>
                            </div>
                            <!-- a item -->
                            <div class="col-md-12 item">
                                <div class="comment">
                                    <div class="top-section">
                                        <figure>
                                            <img src="{{ asset('assets/images/testimonial-2.jpg') }}" alt="">
                                        </figure>
                                        <div class="name-info">
                                            <span class="name">April M. Griffin</span>
                                            <span class="job">Founder</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Our logo and business card design look great. Thanks Henry</p>
                                </div>
                            </div>
                            <!-- a item -->
                            <div class="col-md-12 item">
                                <div class="comment">
                                    <div class="top-section">
                                        <figure>
                                            <img src="{{ asset('assets/images/testimonial-3.jpg') }}" alt="">
                                        </figure>
                                        <div class="name-info">
                                            <span class="name">Larry M. Johnson</span>
                                            <span class="job">Freelancer</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Henry is a very creative and talented designer. I do not hesitate to work
                                        again.</p>
                                </div>
                            </div>
                            <!-- a item -->
                            <div class="col-md-12 item">
                                <div class="comment">
                                    <div class="top-section">
                                        <figure>
                                            <img src="{{ asset('assets/images/testimonial-1.jpg') }}" alt="">
                                        </figure>
                                        <div class="name-info">
                                            <span class="name">Jack Garratt</span>
                                            <span class="job">Freelancer</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Great designer! he finished our work wonderfully and just in time. thanks for
                                        everything.</p>
                                </div>
                            </div>
                            <!-- a item -->
                            <div class="col-md-12 item">
                                <div class="comment">
                                    <div class="top-section">
                                        <figure>
                                            <img src="{{ asset('assets/images/testimonial-2.jpg') }}" alt="">
                                        </figure>
                                        <div class="name-info">
                                            <span class="name">April M. Griffin</span>
                                            <span class="job">Founder</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Our logo and business card design look great. Thanks Henry</p>
                                </div>
                            </div>
                            <!-- a item -->
                            <div class="col-md-12 item">
                                <div class="comment">
                                    <div class="top-section">
                                        <figure>
                                            <img src="{{ asset('assets/images/testimonial-3.jpg') }}" alt="">
                                        </figure>
                                        <div class="name-info">
                                            <span class="name">Larry M. Johnson</span>
                                            <span class="job">Freelancer</span>
                                        </div>
                                    </div>
                                    <hr>
                                    <p>Henry is a very creative and talented designer. I do not hesitate to work
                                        again.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- Portfolio Page
            ================================================== -->
            <div id="portfolio" class="row bottom_45">
                <section class="col-md-12">
                    <div class="col-md-12 content-header bottom_15">
                        <div class="section-title top_30 bottom_30"><span></span>
                            <h2>Portfolio</h2></div>
                        <div id="filters-container">
                            <!-- '*' means shows all item elements -->
                            <div data-filter="*" class="cbp-filter-item cbp-filter-item-active">All</div>
                            <div data-filter=".webdesign" class="cbp-filter-item">Web Design</div>
                            <div data-filter=".motion" class="cbp-filter-item">Motion Graphic</div>
                            <div data-filter=".illustration" class="cbp-filter-item">Illustration</div>
                            <div data-filter=".photography" class="cbp-filter-item">Photography</div>
                        </div>
                    </div>
                    <div id="grid-container" class="top_60">
                        <!-- a work -->
                        <div class="cbp-item webdesign">
                            <a href="portfolio-detail/work-01.html" class=" cbp-singlePage">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                    </div>
                                    <img src="{{ asset('assets/images/works/work-01.jpg') }}" alt="">
                                    <figcaption>
                                        <span class="title">Babel Admin</span><br>
                                        <span class="info">An admin template design.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <!-- a video work -->
                        <div class="cbp-item cbp-lightbox motion">
                            <a href="../../../watch.html?v=bpOSxM0rNPM&rel=0&autoplay=1" class="cbp-lightbox">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </div>
                                    <img src="{{ asset('assets/images/works/work-02.jpg') }}" alt="">
                                    <figcaption>
                                        <span class="title">George Motion</span><br>
                                        <span class="info">An motion graphic design.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <!-- a image work -->
                        <div class="cbp-item cbp-lightbox photography">
                            <a href="images/works/work-06.jpg" class="cbp-lightbox">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                                    </div>
                                    <img src="{{ asset('assets/images/works/work-06.jpg') }}" alt="">
                                    <figcaption>
                                        <span class="title">Amazon Travel</span><br>
                                        <span class="info">Nature photography work.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <!-- a work -->
                        <div class="cbp-item webdesign">
                            <a href="portfolio-detail/work-02.html" class="cbp-singlePage">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                    </div>
                                    <img src="{{ asset('assets/images/works/work-03.jpg') }}" alt="">
                                    <figcaption>
                                        <span class="title">My Workspace</span><br>
                                        <span class="info">My current workspace design.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <!-- a video work -->
                        <div class="cbp-item motion">
                            <a href="../../../199074744.html" class="cbp-lightbox">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </div>
                                    <img src="{{ asset('assets/images/works/work-04.jpg') }}" alt="">
                                    <figcaption>
                                        <span class="title">Recoba Template</span><br>
                                        <span class="info">Html template design.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <!-- a work -->
                        <div class="cbp-item webdesign">
                            <a href="portfolio-detail/work-01.html" class="cbp-singlePage">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                    </div>
                                    <img src="{{ asset('assets/images/works/work-05.jpg') }}" alt="">
                                    <figcaption>
                                        <span class="title">Doddy App</span><br>
                                        <span class="info">Mobile app ui kit design.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <!-- a work -->
                        <div class="cbp-item illustration">
                            <a href="portfolio-detail/work-01.html" class="cbp-singlePage">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                    </div>
                                    <img src="{{ asset('assets/images/works/work-07.jpg') }}" alt="">
                                    <figcaption>
                                        <span class="title">Bob Stayler </span><br>
                                        <span class="info">Illustration characher design.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <!-- a work -->
                        <div class="cbp-item illustration">
                            <a href="portfolio-detail/work-01.html" class="cbp-singlePage">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                    </div>
                                    <img src="{{ asset('assets/images/works/work-08.jpg') }}" alt="">
                                    <figcaption>
                                        <span class="title">Exemag Wordpress Theme</span><br>
                                        <span class="info">Multiconcept Blog Theme.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        <!-- a work -->
                        <div class="cbp-item illustration">
                            <a href="portfolio-detail/work-01.html" class="cbp-singlePage">
                                <figure>
                                    <div class="icon">
                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                    </div>
                                    <img src="{{ asset('assets/images/works/work-09.jpg') }}" alt="">
                                    <figcaption>
                                        <span class="title">Babel Admin Html Code</span><br>
                                        <span class="info">An admin template design.</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- load more button -->
                    <div id="js-loadMore-agency" class="cbp-l-loadMore-button top_30">
                        <a href="load-more/portfolio.html" class="cbp-l-loadMore-link site-btn" rel="nofollow">
                            <span class="cbp-l-loadMore-defaultText">Load More (<span
                                        class="cbp-l-loadMore-loadItems">3</span>)</span>
                            <span class="cbp-l-loadMore-loadingText">Loading...</span>
                            <span class="cbp-l-loadMore-noMoreLoading">No More Works</span>
                        </a>
                    </div>
                </section>
            </div>

            <!-- Blog Page
            ================================================== -->
            <div id="blog">
                <div class="row">
                    <section class="blog col-md-12 bottom_30">
                        <div class="col-md-12 content-header">
                            <div class="section-title top_30 bottom_15"><span></span>
                                <h2>Blog Posts</h2></div>
                        </div>
                        <div id="grid-blog" class="row">
                            <!-- a blog -->
                            <div class="cbp-item">
                                <a href="blog-posts/blog-1.html" class="blog-box">
                                    <div class="blog-img">
                                        <img src="{{ asset('assets/images/blogs/blog-6.jpg') }}" alt="">
                                    </div>
                                    <div class="blog-box-info">
                                        <span class="category">General</span>
                                        <h2 class="title">See my current workspace</h2>
                                        <p class="little-text">The first thing to remember about success is that it is a
                                            process.</p>
                                        <span class="date">8 Nov 17</span>
                                    </div>
                                </a>
                            </div>
                            <!-- a blog -->
                            <div class="cbp-item">
                                <a href="blog-posts/blog-video-version.html" class="blog-box">
                                    <div class="blog-img">
                                        <img src="{{ asset('assets/images/blogs/blog-2.jpg') }}" alt="">
                                    </div>
                                    <div class="blog-box-info">
                                        <span class="category">Web Design</span>
                                        <h2 class="title">How to become a web designer?</h2>
                                        <p class="little-text">He must have tried it a hundred times, shut his eyes so
                                            that he wouldn't have to look at the floundering.</p>
                                        <span class="date">27 Oct 17</span>
                                    </div>
                                </a>
                            </div>
                            <!-- a blog -->
                            <div class="cbp-item">
                                <a href="blog-posts/blog-music-version.html" class="blog-box">
                                    <div class="blog-img">
                                        <img src="{{ asset('assets/images/blogs/blog-3.jpg') }}" alt="">
                                    </div>
                                    <div class="blog-box-info">
                                        <span class="category">User İnterface</span>
                                        <h2 class="title">Why is it better to work nights?</h2>
                                        <p class="little-text">Legs, and only stopped when he began to feel a mild, dull
                                            pain there that he had never felt.</p>
                                        <span class="date">19 Oct 17</span>
                                    </div>
                                </a>
                            </div>
                            <!-- a blog -->
                            <div class="cbp-item">
                                <a href="blog-posts/blog-video-version.html" class="blog-box">
                                    <div class="blog-img">
                                        <img src="{{ asset('assets/images/blogs/blog-4.jpg') }}" alt="">
                                    </div>
                                    <div class="blog-box-info">
                                        <span class="category">Photography</span>
                                        <h2 class="title">Can you work everywhere?</h2>
                                        <p class="little-text">Drops of rain could be heard hitting the pane, which made
                                            him feel quite sad..</p>
                                        <span class="date">28 Sep 17</span>
                                    </div>
                                </a>
                            </div>
                            <!-- a blog -->
                            <div class="cbp-item">
                                <a href="blog-posts/blog-1.html" class="blog-box">
                                    <div class="blog-img">
                                        <img src="{{ asset('assets/images/blogs/blog-5.jpg') }}" alt="">
                                    </div>
                                    <div class="blog-box-info">
                                        <span class="category">Other</span>
                                        <h2 class="title">How to connect your imac or macBook</h2>
                                        <p class="little-text">However hard he threw himself onto his right, he always
                                            rolled back to where he was.</p>
                                        <span class="date">19 Agu 17</span>
                                    </div>
                                </a>
                            </div>
                            <!-- a blog -->
                            <div class="cbp-item">
                                <a href="blog-posts/blog-1.html" class="blog-box">
                                    <div class="blog-img">
                                        <img src="{{ asset('assets/images/blogs/blog-6.jpg') }}" alt="">
                                    </div>
                                    <div class="blog-box-info">
                                        <span class="category">Work Space</span>
                                        <h2 class="title">I'm starting a new project</h2>
                                        <p class="little-text">The first thing to remember about success is that it is a
                                            process...</p>
                                        <span class="date">1 Jul 17</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- load more button -->
                        <div id="load-posts" class="cbp-l-loadMore-button top_60">
                            <a href="load-more/blog-posts.html" class="cbp-l-loadMore-link site-btn" rel="nofollow">
                                <span class="cbp-l-loadMore-defaultText">Load More (<span
                                            class="cbp-l-loadMore-loadItems">3</span>)</span>
                                <span class="cbp-l-loadMore-loadingText">Loading...</span>
                                <span class="cbp-l-loadMore-noMoreLoading">No More Works</span>
                            </a>
                        </div>
                    </section>
                </div>
            </div>

            <!-- Contact Page
            ================================================== -->
            <div id="contact">
                <div class="row">
                    <!-- Contact Form -->
                    <section class="contact-form col-md-6 padding_30 padbot_45">
                        <div class="section-title top_15 bottom_30"><span></span>
                            <h2>Contact Form</h2></div>
                        <form class="site-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="site-input" placeholder="Name">
                                </div>
                                <div class="col-md-6">
                                    <input class="site-input" placeholder="E-mail">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="site-area" placeholder="Message"></textarea>
                                </div>
                                <div class="col-md-12 top_15 bottom_30">
                                    <button class="site-btn" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </section>
                    <!-- Contact Informations -->
                    <section class="contact-info col-md-6 padding_30 padbot_45">
                        <div class="section-title top_15 bottom_30"><span></span>
                            <h2>Contact Informations</h2></div>
                        <ul>
                            <li><span>Address:</span> 107727 Santa Monica Boulevard Los Angeles</li>
                            <li><span>Phone:</span> +38 012-3456-7890</li>
                            <li><span>Job:</span> Freelancer</li>
                            <li><span>E-mail:</span> chris@domain.com</li>
                            <li><span>Skype:</span> chrisjohnson85</li>
                            <li>
                                <div class="social-icons top_15">
                                    <a class="fb" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a class="tw" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a class="ins" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a class="dr" href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                </div>
                            </li>
                        </ul>
                    </section>
                    <!-- Contact Map -->
                    <section class="contact-map col-md-12 top_15 bottom_15">
                        <div class="section-title bottom_30"><span></span>
                            <h2>Contact Map.</h2></div>
                        <iframe src="../../../maps/embed.html?pb=!1m18!1m12!1m3!1d24396.455763004884!2d-115.13108354428735!3d36.18912977254862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+Kaliforniya%2C+Birle%C5%9Fik+Devletler!5e0!3m2!1str!2str!4v1509525039851"
                                height="350" style="border:0" allowfullscreen=""></iframe>
                    </section>
                </div>
            </div>

        </div><!-- Content - End -->
    </div> <!-- col-md-12 end -->
@endsection

@section('js')
@endsection

