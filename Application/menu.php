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
        <a id="content" class="sr-only" title="Main content starts here"></a>
        <h2 class="mb-4 mb-md-5">Soups</h2>
        <div class="row">    
            <div class="col-md-6 pr-md-5">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <label class="content-title">Jambalaya 
                        </label>
                        <span class="float-right price">
                            <span class="sr-only">(price)</span>13.95<span class="sr-only">(dollars)</span>
                        </span>
                    </div>
                    <p class="text-capitalize">
                        <span class="sr-only">(Ingredients:)</span>
                        Andouille sausage, chicken, shrimp, okra, garlic, tomato, onion, red bell pepper, celery, rice, spices</p>
                </div>
                <div class="menu-item">
                    <div class="menu-item-header">
                        <label class="content-title">Crab Chowder
                        </label>
                        <span class="float-right price">
                            <span class="sr-only">(price)</span>13.95<span class="sr-only">(dollars)</span>
                        </span>
                    </div>
                    <p class="text-capitalize"><span class="sr-only">(Ingredients:)</span>
                        Crab, potatoes, milk, onion, garlic, spices</p>
                </div>
                <div class="menu-item">
                    <div class="menu-item-header">
                        <label class="content-title">Crab Bisque 
                        </label>
                        <span class="float-right price">
                            <span class="sr-only">(price)</span>13.95<span class="sr-only">(dollars)</span>
                        </span>
                    </div>
                    <p class="text-capitalize"><span class="sr-only">(Ingredients:)</span>
                        crab, onion, carrot, lemon juice, chives, spices, heavy cream</p>
                </div>
            </div>
            <div class="col-md-6 pl-md-5">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <label class="content-title">Muligatawny 
                        </label>

                        <span class="float-right price">
                            <span class="sr-only">(price)</span>11.95<span class="sr-only">(dollars)</span>
                        </span>

                    </div>
                    <p class="text-capitalize"><span class="sr-only">(Ingredients:)</span>
                        chicken, rice, apple, onion, celery, carrot, herbs, spices, heavy cream</p>
                </div>
                <div class="menu-item">
                    <div class="menu-item-header">
                    <label class="content-title">Turkey Chili 
                        </label>
                        <span class="float-right price">
                            <span class="sr-only">(price)</span>11.95<span class="sr-only">(dollars)</span>
                        </span>
                        
                    </div>
                    <p class="text-capitalize">
                        <span class="sr-only">(Ingredients:)</span>
                        turkey, red bell pepper, onion, garlic, tomato, cannellini beans, spices</p>
                </div>
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
                    <label class="content-title">Gazpacho 
                        <sup>*Daily Special</sup>
                    </label>
                    <span class="float-right price">
                        <span class="sr-only">(price)</span>7.95<span class="sr-only">(dollars)</span>
                    </span>
                    </div>
                    <p class="text-capitalize">
                        <span class="sr-only">(Ingredients:)</span>Tomatoes, cucumber, red bell pepper, onion, jalapeño, garlic, spices</p>
                    <p class="text-capitalize">includes bread</p>
                </div>
                <div class="menu-item">
                    <div class="menu-item-header">
                        <label class="content-title">Cold Cucumber 
                        </label>
                        <span class="float-right price">
                            <span class="sr-only">(price)</span>8.95<span class="sr-only">(dollars)</span>
                        </span>
                    </div>
                    <p class="text-capitalize"><span class="sr-only">(Ingredients:)</span>
                        Cucumber, greek yogurt, shallots, lemon, fresh herbs</p>
                </div>
            </div>
            <div class="col-md-6 pl-md-5">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <label class="content-title">Corn Chowder 
                        </label>
                        <span class="sr-only">(price)</span>
                        <span class="float-right price">
                            <span class="sr-only">(price)</span>8.95<span class="sr-only">(dollars)</span>
                        </span>
                    </div>
                    <p class="text-capitalize"><span class="sr-only">(Ingredients:)</span>
                        Corn, potatoes, heavy cream, onion, garlic, fresh herbs, spices</p>
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
                        <label class="content-title">Fresh Bread Roll 
                        </label>
                        <span class="float-right price">
                            <span class="sr-only">(price)</span>1.95<span class="sr-only">(dollars)</span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-md-5">
                <div class="menu-item">
                    <div class="menu-item-header">
                        <label class="content-title">Fresh Bread Bowl
                        </label>
                        <span class="float-right price">
                            <span class="sr-only">(price)</span>4.95<span class="sr-only">(dollars)</span>
                        </span>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<?php
    include('includes/footer.php');
?>