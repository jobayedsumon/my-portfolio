<!-- about area start -->
<section id="about">
    <div class="about-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 valign">
                    <div class="content mb-50">
                        <div class="section-head text-left mb-30">
                            <h1>ABOUT ME</h1>
                            <span class="span"></span>
                        </div>
                        <p>{{ setting('site.description') }}</p>
                        <a href="{{ asset('storage/uploads/JobayedSumon.pdf') }}" class="btn mt-30" download>Download CV</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-hero-img">
                        <img data-tilt class="img-fluid lazy" src="{{ asset('storage/uploads/about.jpg') }}"
                             data-src="{{ asset('storage/uploads/about.jpg') }}"
                             alt="Jobayed Sumon">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="content mb-50">
                        <div class="skills-head-type">
                            <h1>My Skills.</h1>
                        </div>
                        <div class="skills-progress-bar">

                            @forelse($data['skills'] as $skill)
                            <div class="single-progress-bar">
                                <div class="progressbar-label">
                                    <h5>{{ $skill->name }} <span class="f-right">{{ $skill->percent }}%</span></h5>
                                    <div class="progress">
                                        <div class="progress-bar w-{{ $skill->percent }}" role="progressbar" aria-valuenow="{{ $skill->percent }}"
                                             aria-valuemin="0" aria-valuemax="100"></div>
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
    </div>
</section>
<!-- about area end -->
