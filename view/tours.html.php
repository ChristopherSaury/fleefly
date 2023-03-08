<?php require Functions::view('components/header.html'); ?>

<section id="tours">
    <div class="tscreen">
        <h2>Tours</h2>
    </div>
    <div class="card-section">

        <div class="main-section">
            <?php include Functions::view('components/tours-card.html'); ?>
        </div>

        <!-- FILTER SECTION -->
        <div class="tours-filter">

            <form action="#" method="POST" id="tfilter">
                <div class="search">
                    <h4>Search Tours</h4>
                    <div class="btn-inp">
                        <input type="text" placeholder="Search Location">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </form>

            <form id="tfilter2" action="#" method="POST">
                <div class="category-container">
                    <h4>Categories</h4>
                    <div class="cat-container">
                        <span><input type="checkbox" name="adventure_tours" id="t-adv"><label for="t-adv">Adventure Tours</label></span>
                        <span><input type="checkbox" name="city_tours" id="t-city"><label for="t-city">City Tours</label></span>
                        <span><input type="checkbox" name="couple_tours" id="t-couple"><label for="t-couple">Couple Tours</label></span>
                        <span><input type="checkbox" name="group_tours" id="t-group"><label for="t-group">Group Tours</label></span>
                        <span><input type="checkbox" name="hosted_tour" id="t-host"><label for="t-host">Hosted Tours</label></span>
                    </div>
                </div>
                <div class="p-range-container">
                    <h4>Price Range</h4>
                    <div class="p-range">
                        0
                        <input type="range" min="0" max="3000" name="tours_price">
                        3000
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php require Functions::view('components/footer.html');?>