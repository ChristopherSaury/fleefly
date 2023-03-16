<?php require Functions::view('components/header.html'); ?>

<section id="contact">
    <div class="ctScreen">
        <h2>Contact</h2>
    </div>
    <div class="ct-details">
        <div class="ct-card">
            <div class="ct-icon">
                <span>
                    <i class="fa-solid fa-location-dot"></i>
                </span>
            </div>
            <div class="ct-text">
                <h5 class="ct-title-dt">Address</h5>
                <p>10 Lorem Ipsum Street</p>
            </div>
        </div>
        <div class="ct-card">
            <div class="ct-icon">
                <span>
                    <i class="fa-solid fa-phone"></i>
                </span>
            </div>
            <div class="ct-text">
                <h5 class="ct-title-dt">Phone</h5>
                <p>+ 44 XX XX XX XX XX</p>
            </div>
        </div>
        <div class="ct-card">
            <div class="ct-icon">
                <span>
                    <i class="fa-solid fa-envelope"></i>
                </span>
            </div>
            <div class="ct-text">
                <h5 class="ct-title-dt">Email</h5>
                <p>fleefly@lorem.com</p>
            </div>
        </div>
    </div>

    <!-- FORM SECTION -->
    <div class="ct-form-section">
        <div class="ct-intro">
            <p>Get in Touch</p>
            <h3>Feel Free to Contact with us</h3>
            <p style="color: #808080;">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni consequuntur ullam dolorum a perferendis totam unde ipsa iusto ipsum fugit ex harum earum pariatur ducimus cupiditate veritatis, error reiciendis dolor!
            </p>
            <div class="btn-wrapper">
                <span style="background-color: #3B5998;"><i class="fa-brands fa-facebook-f"></i></span>
                <span style="background-color: #0072B1 ;"><i class="fa-brands fa-linkedin-in"></i></span>
                <span style="background-color: #00ACEE;"><i class="fa-brands fa-twitter"></i></span>
            </div>
        </div>
        <div class="ct-form-ct">
            <form action="#">
                <!-- FIRST ROW -->
                <div class="form-row">
                    <div class="name-row">
                        <input type="text" id="name" name="name" placeholder="Your name">
                    </div>
                    <div class="email-row">
                        <input type="email" id="email-address" name="email-address" placeholder="Email Address">
                    </div>
                </div>
                <!-- SECOND ROW -->
                <div class="form-row">
                    <div class="phone-row">
                            <input type="number" id="phone" name="phone" placeholder="Phone Number">
                    </div>
                    <div class="subject-row">
                            <input type="text" id="subject" name="subject" placeholder="Subject">
                    </div>
                </div>
                <!-- TEXTAREA -->
                <div class="ct-txt-area">
                    <textarea name="ct-text" id="ct-text" placeholder="Write Message"></textarea>
                </div>
                <a class="btn-ct-sub" href="#">Submit</a>
            </form>
        </div>
    </div>
</section>

<?php require Functions::view('components/footer.html'); ?>