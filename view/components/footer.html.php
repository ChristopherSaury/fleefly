<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<footer>
    <div class="first-row">
        <div class="fabout">
            <h4 class="flogo" style="color: #FFF; display: block;">Flee<span style="color: #F6A62D;">Fly</span></h4>
            <p class="mt-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus tempor tellus, nec luctus risus elementum vitae. Ut ut metus lorem. In laoreet, sapien eget porta laoreet, odio ex viverra mauris, egestas sollicitudin nisl nunc at est.
            </p>
        </div>

        <div class="fsite-plan">
            <h4>Site Plan</h4>
            <ul class="flinks mt-4">
                <li><a href="<?= Functions::url('home'); ?>">Home</a></li>
                <li><a href="<?= Functions::url('destinations'); ?>">Destinations</a></li>
                <li><a href="<?= Functions::url('tours'); ?>">Tours</a></li>
                <li><a href="<?= Functions::url('about'); ?>">About</a></li>
                <li><a href="<?= Functions::url('blog'); ?>">Blog</a></li>
                <li><a href="#">Sign In</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a href="<?= Functions::url('contact') ;?>">Contact</a></li>
            </ul>
        </div>

        <div class="footer-gallery">
            <h4>Gallery</h4>
                            <div class="gallery-container">
                                <div class="gallery"><a href="<?= Functions::asset('img/gallery/gallery1.jpg'); ?>" data-lightbox="footer-gallery"><img src="<?= Functions::asset('img/gallery/gallery1.jpg'); ?>" alt="Woman clothing model"></a></div>
                                <div class="gallery"><a href="<?= Functions::asset('img/gallery/gallery2.jpg'); ?>"><img src="<?= Functions::asset('img/gallery/gallery2.jpg'); ?>" alt="Woman clothing model"></a></div>
                                <div class="gallery"><a href="<?= Functions::asset('img/gallery/gallery3.jpg'); ?>"><img src="<?= Functions::asset('img/gallery/gallery3.jpg'); ?>" alt="Man clothing model"></a></div>
                                <div class="gallery"><a href="<?= Functions::asset('img/gallery/gallery4.jpg'); ?>"><img src="<?= Functions::asset('img/gallery/gallery4.jpg'); ?>" alt="Nike sneakers"></a></div>
                                <div class="gallery"><a href="<?= Functions::asset('img/gallery/gallery5.jpg'); ?>"><img src="<?= Functions::asset('img/gallery/gallery5.jpg'); ?>" alt="Nike sneakers"></a></div>
                                <div class="gallery"><a href="<?= Functions::asset('img/gallery/gallery6.jpg'); ?>"><img src="<?= Functions::asset('img/gallery/gallery6.jpg'); ?>" alt="Nike sneakers"></a></div>
                            </div>
                            <div id="modal" class="modal">
                                <span class="close">&times;</span>
                                <div class="modal-content">
                                    <img src="" alt="">
                                </div>
                            </div>
        </div>

        <div class="fcontact">
            <h4>Contact</h4>
            <div class="fcinfo">
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                    <p>
                        10 Lorem Ipsum Street
                    </p>
                </div>
                <div>
                    <i class="fa-solid fa-microphone"></i>
                    <p>
                        + 44 XX XX XX XX XX
                    </p>
                </div>
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <p>
                        fleefly@lorem.com
                    </p>
                </div>
            </div>
        </div>
    </div>



    <div class="credits">
            <p style="text-align: center;">&copy; Christopher Saury <span id="currentYear"></span> / All rights reserved</p>
            <p style="text-align: center;">Exhibition project with no commercial purpose</p>
    </div>
</footer>
<script src="<?= Functions::asset('js/nav-footer.js'); ?>"></script>
</body>
</html>