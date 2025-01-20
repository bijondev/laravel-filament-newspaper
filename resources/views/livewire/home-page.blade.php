<div>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Trending now</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    @foreach ($topPosts as $topost)
                                    <li class="news-item"><a href="{{ $topost->slug }}">{{ $topost->title }}</a></li>
                                    @endforeach

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="{{ url('storage', $stiky->thumbnail )}}" alt="{{ $stiky->title }}">
                                <div class="trend-top-cap">
                                    <span>{{ $stiky->categories[0]->title }}</span>
                                    <h2><a href="/{{ $stiky->slug }}">{{ $stiky->title }}</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                @foreach ($recents as $recent)
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="{{ url('storage', $recent->thumbnail )}}" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color1">{{ $recent->categories[0]->title }}</span>
                                            <h4><a href="/{{ $recent->slug }}">{{ $recent->title }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        @foreach ($stikyseconds as $second)
                        <div class="trand-right-single d-flex">
                            <div class="trend-bottom-img mb-10">
                                <img class="recent-second" src="{{ url('storage', $second->thumbnail )}}"
                                    alt="{{ $second->title }}">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">{{ $second->categories[0]->title }}</span>
                                <h4><a href="/{{ $second->slug }}">{{ $second->title }}</a></h4>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!--   Weekly-News start -->
    <div class="weekly-news-area pt-50">
        <div class="container">
            <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Top News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">

                            @foreach ($topPosts as $topost)
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <img src="{{ url('storage', $topost->thumbnail )}}" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1">{{ $topost->categories[0]->title }}</span>
                                    <h4><a href="{{ $topost->slug }}">{{ $topost->title }}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Weekly-News -->
    <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-3 col-md-3">
                            <div class="section-tittle mb-30">
                                <h3>Whats New</h3>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="properties__button">
                                <!--Nav Button  -->
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                            href="#nav-home" role="tab" aria-controls="nav-home"
                                            aria-selected="true">All</a>
                                        @foreach ($Categories as $cat)
                                        <a class="nav-item nav-link" id="nav-{{ $cat->slug }}-tab" data-toggle="tab"
                                            href="#nav-{{ $cat->slug }}" role="tab" aria-controls="nav-{{ $cat->slug }}"
                                            aria-selected="false">{{ $cat->title }}</a>
                                        @endforeach
                                    </div>
                                </nav>
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- card one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            @foreach ($fPosts as $fpost)
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="{{ url('storage', $fpost->thumbnail )}}" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">{{ $fpost->categories[0]->title }}</span>
                                                        <h4><a href="{{ $fpost->slug }}">{{ $fpost->title }}</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>

                                @foreach ($Categories as $cat)
                                <!-- Card two -->
                                <div class="tab-pane fade" id="nav-{{ $cat->slug }}" role="tabpanel"
                                    aria-labelledby="nav-{{ $cat->slug }}-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">



                                            @foreach ($fPosts as $fpost)
                                            @if ($fpost->categories->contains('title', $cat->title))
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img src="{{ url('storage', $fpost->thumbnail )}}" alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <span class="color1">{{ $fpost->categories[0]->title }}</span>
                                                        <h4><a href="{{ $fpost->slug }}">{{ $fpost->title }}</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach


                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <!-- End Nav Card -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-40">
                        <h3>Follow Us</h3>
                    </div>
                    <!-- Flow Socail -->
                    <div class="single-follow mb-45">
                        <div class="single-box">
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- New Poster -->
                    <div class="news-poster d-none d-lg-block">
                        <img src="assets/img/news/news_card.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->

    <!--  Recent Articles start -->
    <div class="recent-articles">
        <div class="container">
            <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Recent Articles</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex dot-style">

                            @foreach ($latests as $latest)
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="{{ url('storage', $latest->thumbnail )}}" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">{{ $latest->categories[0]->title }}</span>
                                    <h4><a href="{{ $latest->slug }}">{{ $latest->title }}</a></h4>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Recent Articles End -->


</div>