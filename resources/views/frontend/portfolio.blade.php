<!-- portfolio area start -->
<section id="portfolio">
    <div class="portfolio-area pt-100">
        <div class="portfolio-head-title text-center mb-40">
            <div class="col-lg-6 mx-auto">
                <h1>My Works</h1>
                <p>{{ setting('site.work_heading') }}</p>
            </div>
        </div>
        <div class="portfolio-main-area">
            <div class="container">
                <div class="">
                    <div class="text-center mx-auto mb-40">
                        <div class="portfolio-category">
                            <nav>
                                <ul>
                                    <li class="active"><a href="#" data-filter="*">All</a></li>
                                    @forelse($data['categories'] as $category)
                                    <li><a href="#" data-filter=".cat{{ $category->id }}">{{ $category->name }}</a></li>
                                    @empty
                                    @endforelse
                                </ul>
                            </nav>
                        </div>
                    </div>


                    <div class="row grid portfolio-item">
                        @forelse($data['portfolios'] as $portfolio)
                        <div class="col-lg-4 grid-item cat{{ $portfolio->category_id }} mb-30">
                            <div class="portfolio ">
                                <div class="portfolio-img">
                                    <img class="lazy" src="{{ asset('storage/'.$portfolio->image) }}"
                                         data-src="{{ asset('storage/'.$portfolio->image) }}"
                                         alt="{{ $portfolio->title }}">
                                </div>
                                <div class="overlay">
                                    <div class="hover-effect">
                                        <div class="icon-hover">
                                                <span><a class="popup" href="{{ asset('storage/'.$portfolio->image) }}"><i
                                                            class="fas fa-plus-circle"></i></a></span>
                                        </div>
                                        <div class="hover-content">

                                            <h1><a href="{{ $portfolio->link }}" target="_blank" id="link">{{ $portfolio->title }}</a></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @empty
                        @endforelse

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- portfolio area end -->
