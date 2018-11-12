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

<div id="all" class="bg-white">
    <div class="container py-5">
        <h2 class="mb-4 mb-md-5">Soups</h2>
        <div class="row">    
            <div class="col-md-6 pr-md-5">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Jambalaya 
                        </h3>
                        <span class="float-right price">13.95</span>
                    </div>
                    <p class="text-capitalize">Andouille sausage, chicken, shrimp, okra, garlic, tomato, onion, red bell pepper, celery, rice, spices</p>

                </div>
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Crab Chowder
                        </h3>
                        <span class="float-right price">13.95</span>
                    </div>
                    <p class="text-capitalize">Crab, potatoes, milk, onion, garlic, spices</p>
                </div>
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Crab Bisque 
                        </h3>
                        <span class="float-right price">13.95</span>
                    </div>
                    <p class="text-capitalize">crab, onion, carrot, lemon juice, chives, spices, heavy cream</p>
                </div>
            </div>
            <div class="col-md-6 pl-md-5">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Muligatawny 
                        </h3>
                        <span class="float-right price">11.95</span>
                    </div>
                    <p class="text-capitalize">chicken, rice, apple, onion, celery, carrot, herbs, spices, heavy cream</p>
                </div>
                <div class="menu-item">
                    <div class="menu-item-header">
                    <h3 class="d-inline-block">Turkey Chili 
                        </h3>
                        <span class="float-right price">11.95</span>
                    </div>
                    <p class="text-capitalize">turkey, red bell pepper, onion, garlic, tomato, cannellini beans, spices</p>
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
                    <h3 class="d-inline-block">Gazpacho 
                        <sup>*Daily Special</sup>
                    </h3>
                    <span class="float-right price">7.95</span>
                    </div>
                    <p class="text-capitalize">Tomatoes, cucumber, red bell pepper, onion, jalapeño, garlic, spices</p>
                    <p class="text-capitalize">includes bread</p>
                </div>
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Cold Cucumber 
                        </h3>
                        <span class="float-right price">8.95</span>
                    </div>
                    <p class="text-capitalize">Cucumber, greek yogurt, shallots, lemon, fresh herbs</p>
                </div>
            </div>
            <div class="col-md-6 pl-md-5">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Corn Chowder 
                        </h3>
                        <span class="float-right price">8.95</span>
                    </div>
                    <p class="text-capitalize">Corn, potatoes, heavy cream, onion, garlic, fresh herbs, spices</p>
                </div>
            </div> 
        </div>
    </div>
</div>
<div id="extra" class="bg-light">
    <div class="container py-5">
        <h2 class="mb-4 mb-md-5">Extras</h2>
        <div class="row">    
            <div class="col-md-6 pr-md-5">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Fresh Bread Roll 
                        </h3>
                        <span class="float-right price">1.95</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-md-5">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <h3 class="d-inline-block">Fresh Bread Bowl
                        </h3>
                        <span class="float-right price">4.95</span>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<?php
    include('includes/footer.php');
?>