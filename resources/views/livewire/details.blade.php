@section('title', $post->title)
@section('keywords', $post->meta_keywords)
@section('description', $post->meta_description)
@section('image', url('uploads/user', $post->thumbnail ))
@section('url', url($post->slug))
<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{ url('uploads/user', $post->thumbnail ) }}"
                            alt="{{ $post->title }}">
                    </div>
                    <div class="blog_details">
                        <h2>{{ $post->title }}</h2>
                        <ul class="blog-info-link mt-3 mb-4">

                            @foreach($post->categories as $cat)
                            <li><a wire:navigate href="/category/<?php echo $cat->slug; ?>">
                                    {{ $cat->title }}
                                </a></li>
                            @endforeach

                            <!-- <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li> -->
                        </ul>
                        <p class="excert">
                            {!! Str::markdown($post->content) !!}
                        </p>

                    </div>
                </div>

                <!-- <div class="blog-author">
                       <div class="media align-items-center">
                           <img src="assets/img/blog/author.png" alt="">
                           <div class="media-body">
                               <a href="#">
                                   <h4>Harvard milan</h4>
                               </a>
                               <p>Second divided from form fish beast made. Every of seas all gathered use saying
                                   you're, he
                                   our dominion twon Second divided from</p>
                           </div>
                       </div>
                   </div> -->
                <!-- <div class="comments-area">
                       <h4>05 Comments</h4>

                   </div> -->

            </div>
            @livewire('post-sidebar')
        </div>
    </div>
</section>
<!--================ Blog Area end =================-->