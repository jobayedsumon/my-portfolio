<!-- contact area start -->
<section id="contact">
    <div class="contact-area pt-100">
        <div class="contact-head-title text-center mb-40">
            <div class="col-lg-6 mx-auto">
                <h1>Contact Me</h1>

                <p>{{ setting('site.contact_heading') }}</p>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="text-center">
                        <div class="single-contact-info">
                            <i class="fas fa-mobile-alt"></i>
                            <div class="info mt-3">
                                <h5>Call Me</h5>

                                <a class="text-white" href="tel:{{ setting('site.phone_number') }}">{{ setting('site.phone_number') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <div class="single-contact-info">
                            <i class="far fa-envelope"></i>
                            <div class="info mt-3">
                                <h5>Email Me At</h5>

                                <a class="text-white" href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="text-center">
                        <div class="single-contact-info">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info mt-3">
                                <h5>Visit Office</h5>
                                <p>{{ setting('site.address') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <p class="contact-msg text-center"></p>
                    <div class="contact-form">
                        <form action="" method="POST" id="contact">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="name" class="form-control" placeholder="Name*"
                                               name="name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="email" class="form-control" placeholder="Email*"
                                               name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" id="subject" class="form-control"
                                               placeholder=" Subject..*" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                            <textarea class="form-control" id="message" name="message"
                                                      placeholder="Message.."></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn f-right">Send Message</button>
                        </form>
                        <div class="ajax-response"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact area end -->
