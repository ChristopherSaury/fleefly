<?php require Functions::view('components/header.html'); ?>

<section id="blog">
    <div class="bScreen">
        <h2>Blog</h2>
    </div>

    <div class="blog-section">
        <div class="main-section">
            <?php include Functions::view('components/blog-card.html'); ?>
        </div>
        <div class="filter">
            <?php include Functions::view('components/blog-filter.html'); ?>
        </div>
    </div>
</section>

<?php require Functions::view('components/footer.html'); ?>