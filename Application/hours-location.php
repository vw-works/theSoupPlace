<?php

/* Vila Wong
 * The hours and locations page of site
*/

#set page title and include header file:
define('TITLE', 'The Soup Place - Hours &amp; Location');
include('includes/header.php');
?>

<!-- Hours & Location jumbotron -->
<div class="jumbotron loc-jumbotron mb-0">
    <div class="container p-0">
        <div class="row mx-0">
            <div class="col text-center">
                <h1>Hours &amp; Location</h1>
            </div>
        </div>
    </div>
</div>

<div id="info" class="bg-light">
    <div class="container py-5">
        <div class="row">    
            <div class="col-md-4">
                <h3>Hours</h3>
                <p>Monday-Friday: XX:XX - XX:XX</p>
                <p>Saturday: XX:XX - XX:XX</p>
                <p>Sunday: Closed</p>
            </div>
            <div class="col-md-4">
                <h3>Address</h3>
                <address>
                    995 Nosoupforelaine Bvld
                    Recoleta Buenos Aires
                    Argentina
                </address>
            </div>
            <div class="col-md-4">
                <h3>Contact Information</h3>
                <p>Phone: (011) 4964-2888</p>
                <p>Email: soupnazi@fakeemail.com</p>
            </div>
        </div>
</div>

<div id="map" class="bg-dark text-white">
    <div class="container py-5">
        <h2 class="mb-4 mb-md-5">Map</h2>

    </div>
</div>

<?php
    include('includes/footer.php');
?>