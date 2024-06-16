<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sarthak</title>
  <script src="https://kit.fontawesome.com/0d651ab2cf.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
</head>
<body>
<div class="px-md-5">
    <nav class="navbar navbar-expand-lg px-md-4 navbar-light bg-light">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{asset('logo.jpg')}}" width="160vw" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="mx-1 nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/about/">Company</a>
                        <a class="dropdown-item" href="/about/">Team</a>
                        <a class="dropdown-item" href="/about/">Branches</a>
                        <a class="dropdown-item" href="/about/">CSR</a>
                        <a class="dropdown-item" href="/about/">Career&nbsp;@&nbsp;Anandit</a>
                    </div>
                </li>
                <li class="mx-1 nav-item active">
                    <a class="nav-link" href="/about">Solutions <span class="sr-only">(current)</span></a>
                </li>
                <li class="mx-1 nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        VR Solutions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/team/">Realwear</a>
                        <a class="dropdown-item" href="/team/">Meta Quest</a>
                    </div>
                </li>
                <li class="mx-1 nav-item active">
                    <a class="nav-link" href="#">Shop</a>
                </li>
                <li class="mx-1 nav-item active">
                    <a class="nav-link" href="#">Resources</a>
                </li>

            </ul>
            <style>
                /* body{
                    font-size: 16px;
                } */
                .client {
                    font-size: 0.85rem !important;
                    background: #F5F5F5 !important;
                    cursor: pointer !important;
                }

                .client:hover {
                    background-color: rgb(222, 224, 255) !important;
                    color: #FD4710 !important;
                    transition: background-color 0.3s ease, color 0.3s ease !important;
                }

                ::selection {
                    background-color: #FD4710;
                    color: white;
                }

                .curved-image-container {
                    clip-path: polygon(0 0, 100% 0, 10% 90%, 0 100%);
                }

                /* .curved-image-container img {
                    width: 100%;
                    height: auto;
                } */
            </style>
            <!-- <form class="form-inline my-2 my-lg-0"> -->
            <div class="d-flex flex-column ">
                <p class="my-0 client rounded mx-4 px-2">
                    Client
                    Support <i class="fa-solid fa-arrow-right font-weight-bold"></i>
                </p>
                <p class="my-0 mx-4 cursor-pointer">1-800-356-8933</p>
            </div>
            <a href="#contact_us">
            <button style="background-color: #FD4710;" class="btn text-white font-weight-bold my-2 my-sm-0"
                type="submit">Contact Us</button>
                </a>
            <!-- </form> -->
        </div>
    </nav>
</div>
<style>
    html{
        scroll-behavior: smooth;
    }
</style>