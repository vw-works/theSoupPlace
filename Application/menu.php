<?php

/* Vila Wong
 * The menu page of site
*/

#set page title and include header file:
define('TITLE', 'The Soup Place - Menu');
include('includes/header.php');
?>

<!-- Menu jumbotron -->
<div class="jumbotron menu-jumbotron mb-0 p-0">
    <div class="overlay">
        <div class="container p-0">
            <div class="row mx-0">
                <div class="col text-center">
                    <h1>What's On Rotation</h1>
                    <p class="text-white">The Soup Artisan only works with the freshest ingredients to create his masterpieces. As a result, our soup menu will rotate frequently. </p>
                </div>
            </div>
            <div class="row justify-content-center page-nav no-gutters text-center px-md-5 mx-md-5">
                <a class="page-nav-item py-2 py-md-0 col-sm-4" href="menu.php#all">All Soups</a>
                <a class="page-nav-item py-2 py-md-0 col-sm-4" href="menu.php#veg">Vegetarian Options</a>
                <a class="page-nav-item py-2 py-md-0 col-sm-4" href="menu.php#extra">Extras</a>
            </div>
        </div>
    </div>
</div>

<div id="all" class="bg-light">
    <div class="container py-5">
        <h2 class="mb-4 mb-md-5">Soups</h2>
        <div class="row">    
            <div class="col-md-6 pr-md-5">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Manhattan Clam Chowder 
                            <sup>*Daily Special</sup>
                        </h3>
                        <span class="float-right price">XX.xx</span>
                    </div>
                    <p class="text-capitalize">clams, bacon, onion, celery, green pepper, carrot, potato, tomato, herbs</p>
                    <p class="text-capitalize">includes bread</p>
                </div>
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Soup 2 
                        </h3>
                        <span class="float-right price">XX.xx</span>
                    </div>
                    <p>ingredient, ingredient, ingredient, ingredient, ingredient</p>
                </div>
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Soup 3 
                        </h3>
                        <span class="float-right price">XX.xx</span>
                    </div>
                    <p>ingredient, ingredient, ingredient, ingredient, ingredient</p>
                </div>
            </div>
            <div class="col-md-6 pl-md-5">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Soup 4 
                        </h3>
                        <span class="float-right price">XX.xx</span>
                    </div>
                    <p>ingredient, ingredient, ingredient, ingredient, ingredient</p>
                </div>
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Soup 5 
                        </h3>
                        <span class="float-right price">XX.xx</span>
                    </div>
                    <p>ingredient, ingredient, ingredient, ingredient, ingredient</p>
                </div>
            </div> 
        </div>
</div>

<div id="veg" class="bg-dark text-white">
    <div class="container py-5">
        <h2 class="mb-4 mb-md-5">Vegetarian Options</h2>
        <div class="row">    
            <div class="col-md-6 pr-md-5">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Soup 1 
                        </h3>
                        <span class="float-right price">XX.xx</span>
                    </div>
                    <p>ingredient, ingredient, ingredient, ingredient, ingredient</p>
                </div>
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Soup 2 
                        </h3>
                        <span class="float-right price">XX.xx</span>
                    </div>
                    <p>ingredient, ingredient, ingredient, ingredient, ingredient</p>
                </div>
            </div>
            <div class="col-md-6 pl-md-5">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Soup 3 
                        </h3>
                        <span class="float-right price">XX.xx</span>
                    </div>
                    <p>ingredient, ingredient, ingredient, ingredient, ingredient</p>
                </div>
            </div> 
        </div>
    </div>
</div>
<div id="extra" class="bg-light">
    <div class="container py-5">
        <h2 class="mb-4 mb-md-5">Extras</h2>
        <div class="row">    
            <div class="col-md-6 pr-5">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Bread Roll 
                        </h3>
                        <span class="float-right price">XX.xx</span>
                    </div>
                    <p>ingredient, ingredient, ingredient, ingredient, ingredient</p>
                </div>
            </div>
            <div class="col-md-6 pl-md-5">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Bread Bowl
                        </h3>
                        <span class="float-right price">XX.xx</span>
                    </div>
                    <p>ingredient, ingredient, ingredient, ingredient, ingredient</p>
                </div>
            </div> 
        </div>
    </div>
</div>

<?php
    include('includes/footer.php');
?>