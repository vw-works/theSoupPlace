<?php

/* Vila Wong
 * The home page for site
*/

#set page title and include header file:
define('TITLE', 'The Soup Place - Home');
include('includes/header.php');
?>

<!-- Main jumbotron for daily soup special -->
<div class="jumbotron home-jumbotron mb-0 p-0">
    <div class="mobile-overlay">
        <div class="container p-0">
            <div class="col-md-6">
                <h1>Daily Special | Manhattan Clam Chowder</h1>
                <p class="text-capitalize font-weight-bold">clams, bacon, onion, celery, green pepper, carrot, potato, tomato, herbs</p>
                <p><a class="btn btn-primary btn-main btn-lg" href="menu.php" role="button">See Entire Menu &raquo;</a></p>
            </div>
        </div>
    </div>
</div>

<div  class="bg-white">
    <div class="container ">
        <div class="row">
            <div id="procedure" class="col-md-6 pt-5 pb-4 py-md-5 ">
            <!-- PROCEDURE SECTION -->
            <h2>Ordering Procedure</h2>
            <h5>Follow procedure, get soup.</h5>
                <ol>
                    <li>As you walk into the shop move immediately to your right.</li>
                    <li>Keep the line moving</li>
                    <li>Hold out your money</li>
                    <li>Speak your soup order in a loud, clear voice</li>
                    <li>Step to the left and receive</li>
                </ol>
            </div>

            <div id="rules" class="col-md-6 pt-4 pb-5 py-md-5 border-top">   
            <!-- RULES SECTION -->
                <h2>Rules</h2>
                <h5>Don't follow rules, then NO SOUP FOR YOU!</h5>
                <ul>
                    <li>No embellishing on your order.</li>
                    <li>No extraneous comments.</li>
                    <li>No questions.</li>
                    <li>No compliments. </li>
                    <li>No cutting in line.</li>
                    <li>No kissing in line.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- <div id="rules" class="bg-dark text-white">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <h2>Rules</h2>
                <h5>Don't follow rules, then NO SOUP FOR YOU!</h5>
                <ul>
                    <li>No embellishing on your order.</li>
                    <li>No extraneous comments.</li>
                    <li>No questions.</li>
                    <li>No compliments. </li>
                    <li>No cutting in line.</li>
                    <li>No kissing in line.</li>
                </ul>
            </div>
        </div>
    </div>
</div> -->

<?php
    include('includes/footer.php');
?>