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
                    <a href="/category/<?php echo $cat->slug; ?>" class="d-flex">
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
                <img class="recent-image" src="{{ url('uploads/user', $recent->thumbnail )}}"
                    alt="{{ $recent-> title }}">
                <div class="media-body">
                    <a href="/{{ $recent->slug }}">
                        <h3>{{ $recent-> title }}</h3>
                    </a>
                    <p>{{ $recent->created_at }}</p>
                </div>
            </div>
            @endforeach

        </aside>

    </div>
