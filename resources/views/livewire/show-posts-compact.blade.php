<div>
    <div class="col-12">
        <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <li class="grid-sizer"></li>
            @foreach($posts as $post)
            <li class="grid-item">
                <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                    <div class="blog-image">
                        <a href="{{ route('blogs.show', $post->id) }}" class="d-block"><img src="https://via.placeholder.com/600x430" alt="" /></a>
                        {{-- <div class="blog-categories">
                            <a href="demo-corporate-blog.html" class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase fw-700">Business</a>
                        </div> --}}
                    </div>
                    <div class="card-body p-12 lg-p-10">
                        <a href="{{ route('blogs.show', $post->id) }}" class="card-title mb-15px fw-700 fs-19 text-dark-gray d-inline-block w-90 md-w-100">{!!  Str::words($post->title, 10, ' ...'); !!}</a>
                        <p>{!!  Str::words($post->content, 10, ' ...'); !!}</p>
                        <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                            <div class="me-auto">
                                <span class="blog-date d-inline-block fw-700 text-dark-gray">15 August 2021</span>
                                <div class="d-inline-block author-name fw-600 text-dark-gray">By <a href="demo-corporate-blog.html" class="text-dark-gray text-decoration-line-bottom">Den viliamson</a></div>
                            </div>
                            <div class="like-count">
                                <a href="{{ route('blogs.show', $post->id) }}"><i class="fa-regular fa-heart text-red"></i><span class="text-dark-gray align-middle fw-700">46</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <!-- end blog item -->
            @endforeach
        </ul>
    </div>
    <div class="col-12 mt-5 md-mt-7 d-flex justify-content-center" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 150, "easing": "easeOutQuad" }'>

        <!-- Pagination Links -->
        {{ $posts->links('custom-pagination') }}
    </div>

</div>
