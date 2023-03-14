<?php require Functions::view('components/header.html'); ?>

<section id="about">
<div class="abScreen">
        <h2>About</h2>
    </div>

    <div class="about-intro">
        <div class="ab-text">
            <div class="ab-card">
                <div class="ab-card-photo">
                    <img src="<?= Functions::asset('img/about/bali.jpg') ?>" alt="photo in bali">
                </div>
            </div>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum explicabo repellat commodi praesentium labore doloribus id eos sequi ipsum. Ea aspernatur corporis, velit quod veritatis dolore laborum. Praesentium, excepturi vero.
            </p>
        </div>
        <div class="ab-title">
            <p>About Fleefly</p>
            <h2>The Best Travel Agency</h2>
            <div class="abt-card">
                <div class="abt-card-photo">
                    <img src="<?= Functions::asset('img/about/balloon.jpg') ?>" alt="ballons photo">
                </div>
            </div>
        </div>
    </div>
</section>

<?php require Functions::view('components/footer.html'); ?>