<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= Functions::asset('css/nav-footer.css'); ?>">
    <title><?php echo $title . ' - Fleefly' ?></title>
    <?php if(empty($_GET['route']) || $_GET['route'] === 'home'){ ?>
        <link rel="stylesheet" href="<?= Functions::asset('css/home.css'); ?>">
    <?php } ?>
</head>
<body>

    <nav id="desktop">
        <a class="logo" href="<?= Functions::url('home'); ?>">
            Flee<span>Fly.</span>
        </a>
        <ul class="nav-link">
            <li><a href="<?= Functions::url('home'); ?>">Home</a></li>
            <li><a href="">Destinations</a></li>
            <li><a href="">Tour</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <a class="login-btn" href="#">
        <i class="fa-regular fa-user"></i>
        </a>
    </nav>
    
