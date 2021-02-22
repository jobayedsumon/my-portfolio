<!-- service area start -->
<section id="service" class="pt-100">
    <div class="service-area">
        <div class="service-head-title text-center mb-40 pt-100">
            <div class="col-lg-6 mx-auto">
                <h1>My Services</h1>

                <p>{{ setting('site.service_heading') }}</p>
            </div>
        </div>
        <div class="service-main-content pb-70">
            <div class="container">
                <div class="row">
                    @forelse($data['services'] as $service)
                    <div class="col-lg-4">
                        <div class="single-service text-center">
                            <div class="service-border">
                                <div class="service-img">
                                    <img class="img-fluid lazy" src="{{ asset('storage/'. $service->icon) }}"
                                         data-src="{{ asset('storage/'. $service->icon) }}"
                                         alt="Web Development">
                                </div>
                                <div class="service-content">
                                    <h4>{{ $service->title }}</h4>
                                    <p>{{ $service->description }}</p>
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
</section>
<!-- service area end -->
