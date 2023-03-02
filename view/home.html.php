<?php require Functions::view('components/header.html'); ?>

<section id="home">
    <div class="title-screen">
        <div class="htitle-ct">
            <h1 class="htitle">Fleefly</h1>
            <p>The world at hand</p>
        </div>
    </div>
    <!-- HOME DESTINATIONS -->
    <div class="hdestination">
        <h2 class="text-center mt-2">Find your destination</h2>
        <div class="hform-ct">
            <form action="#">
                <input type="text" placeholder="Where to?">
                <input type="text" placeholder="When?">
                <input type="text" placeholder="Tour Type">
                <button type="submit">Find Now</button>
            </form>
        </div>
    </div>
    <!-- POPULAR DESTINATIONS -->
    <div class="hpdestination">
            <h2 class="text-center">Popular destinations</h2>
        <div class="hpdcard-ct">
            <!-- CARD1 -->
            <div class="hcard">
                    <img class="hcard-pic" src="<?= Functions::asset('img/home/vietnam.jpg') ?>" alt="">
                <div class="hcard-content">
                    <div class="d-flex flex-row">
                        <div>
                            <span><i class="fa-solid fa-star checked"></i></span>
                            <span><i class="fa-solid fa-star checked"></i></span>
                            <span><i class="fa-solid fa-star checked"></i></span>
                            <span><i class="fa-solid fa-star checked"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>
                        <p class="ms-3">
                            Review
                        </p>
                    </div>
                    <h3 class="hcardtitle">Vietnam - Tour</h3>
                    <p class="price">
                        £150 / Per person
                    </p>
                    <span class="duration">
                    <i class="fa-regular fa-clock"></i>
                        <p style="margin: 0;" class="ms-2">Duration : 10 days</p>
                    </span>
                    <p class="text-hcard">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent maximus tortor quis ipsum tincidunt, vel tristique metus fermentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque mattis libero in blandit ullamcorper.
                    </p>
                    <a href="#" class="hdetail">See Details</a>
                </div>
            </div>
            <!-- CARD2 -->
            <div class="hcard">
                    <img class="hcard-pic" src="<?= Functions::asset('img/home/south-africa.jpg') ?>" alt="">
                <div class="hcard-content">
                    <div class="d-flex flex-row">
                        <div>
                            <span><i class="fa-solid fa-star checked"></i></span>
                            <span><i class="fa-solid fa-star checked"></i></span>
                            <span><i class="fa-solid fa-star checked"></i></span>
                            <span><i class="fa-solid fa-star checked"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>
                        <p class="ms-3">
                            Review
                        </p>
                    </div>
                    <h3 class="hcardtitle">South Africa - Tour</h3>
                    <p class="price">
                        £150 / Per person
                    </p>
                    <span class="duration">
                    <i class="fa-regular fa-clock"></i>
                        <p style="margin: 0;" class="ms-2">Duration : 7 days</p>
                    </span>
                    <p class="text-hcard">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent maximus tortor quis ipsum tincidunt, vel tristique metus fermentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque mattis libero in blandit ullamcorper.
                    </p>
                    <a href="#" class="hdetail">See Details</a>
                </div>
            </div>
            <!-- CARD3 -->
            <div class="hcard">
                    <img class="hcard-pic" src="<?= Functions::asset('img/home/peru.jpg') ?>" alt="">
                <div class="hcard-content">
                    <div class="d-flex flex-row">
                        <div>
                            <span><i class="fa-solid fa-star checked"></i></span>
                            <span><i class="fa-solid fa-star checked"></i></span>
                            <span><i class="fa-solid fa-star checked"></i></span>
                            <span><i class="fa-solid fa-star checked"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>
                        <p class="ms-3">
                            Review
                        </p>
                    </div>
                    <h3 class="hcardtitle">Peru - Tour</h3>
                    <p class="price">
                        £150 / Per person
                    </p>
                    <span class="duration">
                    <i class="fa-regular fa-clock"></i>
                        <p style="margin: 0;" class="ms-2">Duration : 5 days</p>
                    </span>
                    <p class="text-hcard">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent maximus tortor quis ipsum tincidunt, vel tristique metus fermentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque mattis libero in blandit ullamcorper.
                    </p>
                    <a href="#" class="hdetail">See Details</a>
                </div>
            </div>
        </div>
    </div>
    <!-- BAHIA DE BRAZIL -->
    <div class="bahia">
        <div class="hbcard">
            <h3>Salvador de Bahia</h3>
            <div class="price">
                <p>£250</p>
                <p style="text-decoration: line-through; color: #000;">£500</p>
            </div>
            <div class="hbahia-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent maximus tortor quis ipsum tincidunt, vel tristique metus fermentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque mattis libero in blandit ullamcorper.
            </div>
            <div class="btn-wrapper">
                <a href="#" class="hbdetail">See Details</a>
            </div>
        </div>
    </div>
    <!-- TESTIMONIALS -->
</section>

<?php require Functions::view('components/footer.html');?>