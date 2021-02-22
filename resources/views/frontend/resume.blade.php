<!-- resume area start -->
<section>
    <div class="resume-area">
        <div class="resume-head-title text-center mb-40 pt-100">
            <div class="col-lg-6 mx-auto">
                <h1>My Experience</h1>

            </div>
        </div>
        <div class="container">
            <div class="row">

                @forelse($data['experiences'] as $experience)
                <div class="col-lg-6 mb-30">
                    <div class="single-resume">
                        <div class="single-resume-card">
                            <h3>{{ $experience->title }}</h3>
                            <div class="expreience-band">
                                <i class="{{ $experience->icon }}"></i>
                                <span>{{ $experience->date }}</span>
                            </div>
                            <p>{{ $experience->description }}</p>
                        </div>
                    </div>
                </div>

                @empty
                @endforelse

            </div>
        </div>
    </div>
</section>
<!-- resume area end -->
