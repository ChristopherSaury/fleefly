<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" value="notranslate" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= Functions::asset('css/nav-footer.css'); ?>">
    <title><?php echo $title . ' - Fleefly' ?></title>
    <?php if(empty($_GET['route']) || $_GET['route'] === 'home'){ ?>
        <link rel="stylesheet" href="<?= Functions::asset('css/home.css'); ?>">
    <?php }elseif($_GET['route'] === 'destinations'){ ?>
        <link rel="stylesheet" href="<?= Functions::asset('css/destinations.css'); ?>">
    <?php }elseif($_GET['route'] === 'tours'){ ?>
        <link rel="stylesheet" href="<?= Functions::asset('css/tours.css'); ?>">
    <?php }elseif($_GET['route'] === 'about'){ ?>
        <link rel="stylesheet" href="<?= Functions::asset('css/about.css'); ?>">
    <?php }elseif($_GET['route'] === 'contact'){ ?>
        <link rel="stylesheet" href="<?= Functions::asset('css/contact.css'); ?>">
    <?php }elseif($_GET['route'] === 'blog'){ ?>
        <link rel="stylesheet" href="<?= Functions::asset('css/blog.css'); ?>">
    <?php }elseif($_GET['route'] === 'signup'){ ?>
        <link rel="stylesheet" href="<?= Functions::asset('css/signup.css'); ?>">
    <?php }elseif($_GET['route'] === 'login'){ ?>
        <link rel="stylesheet" href="<?= Functions::asset('css/login.css'); ?>">
    <?php } ?>
</head>
<body>

    <nav id="desktop">
        <a class="logo" href="<?= Functions::url('home'); ?>">
            Flee<span>Fly.</span>
        </a>
        <ul class="nav-link">
            <li><a href="<?= Functions::url('home'); ?>">Home</a></li>
            <li><a href="<?= Functions::url('destinations'); ?>">Destinations</a></li>
            <li><a href="<?= Functions::url('tours'); ?>">Tours</a></li>
            <li><a href="<?= Functions::url('about'); ?>">About</a></li>
            <li><a href="<?= Functions::url('blog'); ?>">Blog</a></li>
            <li><a href="<?= Functions::url('contact') ;?>">Contact</a></li>
        </ul>
        <a class="signup-btn" href="<?= Functions::url('signup'); ?>">
        <i class="fa-regular fa-user"></i>
        </a>
    </nav>
    
