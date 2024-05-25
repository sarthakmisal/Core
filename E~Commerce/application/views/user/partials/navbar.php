<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="<?= base_url('uploads/Logo/icon.png') ?>" type="image/png">
<style>
    /* Make the favicon rounded */
    link[rel="shortcut icon"] img {
        border-radius: 50%;
        width: 32px; /* Adjust width as needed */
        height: 32px; /* Adjust height as needed */
    }
</style>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/0d651ab2cf.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="p-0 container-fluid">
        <div class="row">
            <div class="col-md-12 d-none d-md-inline"
                style="background-image:linear-gradient(45deg,white 0%,white 18%,black 18%,black 23%,white 23%,white 24%,black 24%,black 24.6%,white 24.6%,white 24.9%,black 24.9%,black 25.4%,white 25.4%)">
                <div class="row">
                    <div class="col-md-6">
                        <a href="<?= base_url('admin') ?>"><img src="<?= base_url('uploads/Logo/mylogo.png') ?>"
                                class="mx-4" width="170px;" alt=""></a>
                    </div>
                    <div class="col-md-6 my-auto d-flex align-items-end">
                        <a class="text-decoration-none text-right ml-auto mr-5" href="<?= base_url('aboutPage') ?>">
                            <h6 class="font-weight-bold">About</h6>
                        </a>
                        <a class="text-decoration-none text-right  mr-5" href="<?= base_url('contactPage') ?>">
                            <h6 class="font-weight-bold">Contact Us</h6>
                        </a>
                        <?php
                        if (!isset($_SESSION['user'])) {
                            ?>
                            <a class="text-decoration-none text-right  mr-5" href="<?= base_url('user/loginPage') ?>">
                                <h6 class="font-weight-bold">Login</h6>
                            </a>
                            <?php
                        } else {
                            ?>
                            <a class="text-decoration-none text-right  mr-5" href="<?= base_url('user/logOut') ?>">
                                <h6 class="font-weight-bold">LogOut</h6>
                            <a class="text-decoration-none text-right  mr-5" href="<?= base_url('user/myOrders') ?>">
                                <h6 class="font-weight-bold">Profile</h6>
                            </a>
                            <a class="text-decoration-none text-right  mr-5" href="<?= base_url('user/userCart') ?>">
                                <h6 class="font-weight-bold">Cart</h6>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <!-- <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li> -->
                            <?php
                            foreach ($category as $row):
                                ?>
                                <li class="nav-item active dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?= $row['cat_name'] ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php
                                        foreach ($row['sub_categories'] as $ros) {
                                            ?>
                                            <a class="dropdown-item"
                                                href="<?= base_url('subCatProducts') ?>?cat_id=<?= $row['cat_id'] ?>&sub_cat_id=<?= $ros['sub_cat_id'] ?>"><?= $ros['sub_cat_name'] ?></a>
                                            <?php
                                        }
                                        ?>
                                        <!-- <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a> -->
                                    </div>
                                </li>
                                <?php
                            endforeach;
                            ?>
                            <!-- <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li> -->
                        </ul>
                        <!-- <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form> -->
                    </div>
                    </bnav>
            </div>

        </div>

    </div>