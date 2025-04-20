@section('title', $category->title)
<!-- Whats New Start -->
<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-tittle mb-30">
                            <h3>Category : {{ $category->title }}</h3>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            @forelse($posts as $post)
                            <div class="col-lg-6 col-md-6">
                                <div class="single-what-news mb-100">
                                    <div class="what-img">
                                        <img class="category-image" src="{{ url('uploads/user', $post->thumbnail )}}"
                                            alt="{{ $post->title }}">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1">Night party</span>
                                        <h4><a href="/{{ $post->slug }}">{{ $post->title }}</a></h4>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <p>No posts found in this category.</p>
                            @endforelse

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">


                <!-- New Poster -->
                <div class="news-poster d-none d-lg-block">
                    <img src="assets/img/news/news_card.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="pagination-area pb-45 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap d-flex justify-content-center">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Whats New End -->


<!--Start pagination -->

<!-- End pagination  -->
