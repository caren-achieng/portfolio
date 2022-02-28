<!-- Contact Me
    ============================================= -->
<section id="contact" class="section bg-light">
    <div class="container px-lg-5">
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
            <h2 class="text-24 text-light opacity-4 text-uppercase fw-600 w-100 mb-0">Contact</h2>
            <p class="text-9 text-dark fw-600 position-absolute w-100 align-self-center lh-base mb-0">Get in Touch<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        <div class="row gy-5">
            <div class="col-md-4 col-xl-3 order-1 order-md-0 text-center text-md-start">
                <h2 class="mb-3 text-5 text-uppercase">Address</h2>
                <p class="text-3 mb-4">4th Floor, Plot No.22,<br>
                    145 Murphy Canyon Rd.<br>
                    San Diego CA 2028 </p>
                <p class="text-3 mb-1"><span class="text-primary text-4 me-2"><i class="fas fa-phone"></i></span>(060) 444 434 444</p>
                <p class="text-3 mb-1"><span class="text-primary text-4 me-2"><i class="fas fa-fax"></i></span>(060) 555 545 555</p>
                <p class="text-3 mb-4"><span class="text-primary text-4 me-2"><i class="fas fa-envelope"></i></span>chat@simone.com</p>
                <h2 class="mb-3 text-5 text-uppercase">Follow Me</h2>
                <ul class="social-icons justify-content-center justify-content-md-start">
                    <li class="social-icons-dribbble">
                        <a data-bs-toggle="tooltip" href="https://www.dribbble.com/harnishdesign/" target="_blank" title="Dribbble">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>
                    <li class="social-icons-twitter">
                        <a data-bs-toggle="tooltip" href="https://twitter.com/harnishdesign/" target="_blank" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="social-icons-facebook">
                        <a data-bs-toggle="tooltip" href="https://www.facebook.com/harnishdesign/" target="_blank" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="social-icons-google">
                        <a data-bs-toggle="tooltip" href="https://www.google.com/" target="_blank" title="Google">
                            <i class="fab fa-google"></i>
                        </a>
                    </li>
                    <li class="social-icons-github">
                        <a data-bs-toggle="tooltip" href="https://www.github.com/" target="_blank" title="GitHub">
                            <i class="fab fa-github"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 col-xl-9 order-0 order-md-1">
                <h2 class="mb-3 text-5 text-uppercase text-center text-md-start">Send me a note</h2>
                <form id="contact-form" action="{{ route('contact') }}" method="post">
                    <div class="row g-4">
                        <div class="col-xl-6">
                            <input name="name" type="text" class="form-control" required placeholder="Name" aria-label>
                        </div>
                        <div class="col-xl-6">
                            <input name="email" type="email" class="form-control" required placeholder="Email" aria-label>
                        </div>
                        <div class="col">
                            <textarea name="message" class="form-control" rows="5" required placeholder="Tell me more about your needs........" aria-label></textarea>
                        </div>
                    </div>

                    <p class="text-center mt-4 mb-0">
                        <button id="submit-btn" class="btn btn-primary rounded-pill" type="submit">
                            Send Message <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Me end -->
