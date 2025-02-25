<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <aside class="single_sidebar_widget search_widget">
            <form action="#">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder='Search Keyword'
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                        <div class="input-group-append">
                            <button class="btns" type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                    type="submit">Search</button>
            </form>
        </aside>
        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Category</h4>
            <ul class="list cat-list">
                @foreach ($Categories as $cat)
                <li>
                    <a wire:navigate href="/category/<?php echo $cat->slug; ?>" class="d-flex">
                        <p>{{ $cat->title }}</p>
                        <!-- <p>(37)</p> -->
                    </a>
                </li>
                @endforeach

            </ul>
        </aside>
        <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Recent Post</h3>
            @foreach ($recents as $recent)
            <div class="media post_item">
                <img class="recent-image" src="{{ url('storage', $recent->thumbnail )}}" alt="{{ $recent-> title }}">
                <div class="media-body">
                    <a href="/{{ $recent->slug }}">
                        <h3>{{ $recent-> title }}</h3>
                    </a>
                    <p>{{ $recent->created_at }}</p>
                </div>
            </div>
            @endforeach
            <div class="media post_item">
                <img src="assets/img/post/post_1.png" alt="post">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>From life was you fish...</h3>
                    </a>
                    <p>January 12, 2019</p>
                </div>
            </div>
            <div class="media post_item">
                <img src="assets/img/post/post_2.png" alt="post">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>The Amazing Hubble</h3>
                    </a>
                    <p>02 Hours ago</p>
                </div>
            </div>
            <div class="media post_item">
                <img src="assets/img/post/post_3.png" alt="post">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>Astronomy Or Astrology</h3>
                    </a>
                    <p>03 Hours ago</p>
                </div>
            </div>
            <div class="media post_item">
                <img src="assets/img/post/post_4.png" alt="post">
                <div class="media-body">
                    <a href="single-blog.html">
                        <h3>Asteroids telescope</h3>
                    </a>
                    <p>01 Hours ago</p>
                </div>
            </div>
        </aside>
        <!-- <aside class="single_sidebar_widget tag_cloud_widget">
            <h4 class="widget_title">Tag Clouds</h4>
            <ul class="list">
                <li>
                    <a href="#">project</a>
                </li>
                <li>
                    <a href="#">love</a>
                </li>
                <li>
                    <a href="#">technology</a>
                </li>
                <li>
                    <a href="#">travel</a>
                </li>
                <li>
                    <a href="#">restaurant</a>
                </li>
                <li>
                    <a href="#">life style</a>
                </li>
                <li>
                    <a href="#">design</a>
                </li>
                <li>
                    <a href="#">illustration</a>
                </li>
            </ul>
        </aside> -->
        <!-- <aside class="single_sidebar_widget instagram_feeds">
            <h4 class="widget_title">Instagram Feeds</h4>
            <ul class="instagram_row flex-wrap">
                <li>
                    <a href="#">
                        <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                    </a>
                </li>
            </ul>
        </aside> -->
        <!-- <aside class="single_sidebar_widget newsletter_widget">
            <h4 class="widget_title">Newsletter</h4>
            <form action="#">
                <div class="form-group">
                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                    type="submit">Subscribe</button>
            </form>
        </aside> -->
    </div>
</div>