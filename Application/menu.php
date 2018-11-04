<?php

/* Vila Wong
 * The home page for site
*/

#set page title and include header file:
define('TITLE', 'The Soup Place - Menu');
include('includes/header.php');
?>

<!-- Main jumbotron for daily soup special -->
<div class="jumbotron menu-jumbotron mb-0 pb-4">
    <div class="container p-0">
        <div class="row mx-0">
            <div class="col">
                <h1>What's On Rotation</h1>
                <p>The Soup Artisan only works with the freshest ingredients to create his masterpieces.
As a result, our soup menu will rotate frequently. </p>
            </div>
        </div>
        <div class="row justify-content-center page-nav no-gutters">
            <a class="page-nav-item" href="menu.php">All Soups</a>
            <a class="page-nav-item" href="menu.php#veg">Vegetarian Options</a>
            <a class="page-nav-item" href="menu.php#extra">Extras</a>
        </div>
    </div>
</div>

<?php
    include('includes/footer.php');
?>