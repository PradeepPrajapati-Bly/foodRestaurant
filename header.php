<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delicious Dishes/Food</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="icon" href="images/restaurant-logo.png">
    <link rel="stylesheet" href="menu.css?v=2.0">
    <link rel="stylesheet" href="styles.css?v=2.0" type="text/css">
</head>

<body>
    <div id="max">
        <div class="background"></div>

        <!-- Navigation Bar -->
        <header>
            <h1><a href="index.php">Delicious Dishes/Food</a></h1>
            <nav>
                <ul>
                    <li><a href="menu.php">Menus/Gallary</a></li>
                    <li><a href="#about.php">About</a></li>
                    <li><a href="#contact.php">Contact</a></li>
                    <li><a href="reserveSeate.php" class="btn">Reserve a Table</a></li>
                    <li><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" onclick="min()">Menu
                            List</button></li>
                </ul>
            </nav>
        </header>

            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasScrolling"
                data-bs-backdrop="false">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
                    onclick="max()"></button>
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">ORDER CATEGORIES</h5>
                </div>
                <div class="offcanvas-body">
                    <ul class="list-group">
                        <a href="breakFast.php" target="_blank">
                            <li class="list-group-item">Breakfast</li>
                        </a>
                        <a href="lunchFood.php" target="_blank">
                            <li class="list-group-item">Lunch Food</li>
                        </a>
                        <a href="dinnerFoode.php" target="_blank">
                            <li class="list-group-item">Dinner Food</li>
                        </a>
                        <a href="#" target="_blank">
                            <li class="list-group-item">Vegetarian Food</li>
                        </a>
                        <a href="#" target="_blank">
                            <li class="list-group-item">Non-Vegetarian Food</li>
                        </a>
                        <a href="#" target="_blank">
                            <li class="list-group-item">Fast Food</li>
                        </a>
                        <a href="drinkes.php" target="_blank">
                            <li class="list-group-item">Drinks</li>
                        </a>
                        <a href="coldDrink.php" target="_blank">
                            <li class="list-group-item">Cold Drinks</li>
                        </a>
                        <a href="#" target="_blank">
                            <li class="list-group-item">Others</li>
                        </a>
                    </ul>
                </div>
            </div>