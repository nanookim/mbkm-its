<?php
use yii\helpers\Url;
?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="<?= Url::home() ?>">
            <img src="<?= Url::to('@web/landing/images/logo_mbkm.png') ?>" alt="alternative">
        </a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars mr-4"></span>
            <span class="navbar-toggler-awesome fas fa-times mr-4"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#features">Persyaratan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#details">Ketentuan Pendaftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#panduan">Panduan Pengguna</a>
                </li>
                <!-- Dropdown Menu -->
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle page-scroll" href="#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">VIDEO</a>-->
<!--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                        <a class="dropdown-item" href="article-details.html"><span class="item-text">ARTICLE DETAILS</span></a>-->
<!--                        <div class="dropdown-items-divide-hr"></div>-->
<!--                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS CONDITIONS</span></a>-->
<!--                        <div class="dropdown-items-divide-hr"></div>-->
<!--                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>-->
<!--                    </div>-->
<!--                </li>-->
<!---->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link page-scroll" href="#pricing">PRICING</a>-->
<!--                </li>-->
            </ul>
            <span class="nav-item">
                    <a class="btn-outline-sm" href="<?= Url::to('site/login') ?>">LOG IN</a>
                </span>
        </div>
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->