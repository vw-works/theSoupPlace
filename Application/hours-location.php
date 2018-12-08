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
            <div class="col text-center text-white">
                <h1>Hours &amp; Location</h1>
            </div>
        </div>
    </div>
</div>

<div id="info" class="bg-light">
    <div class="container pt-5 pb-3">
        <div class="row">    
            <div class="col-md-4">
                <h3>Hours</h3>
                <p>Monday-Friday: 10:00AM–9:00PM</p>
                <p>Saturday: 11:00AM–10:00PM</p>
                <p>Sunday: Closed</p>
            </div>
            <div class="col-md-4">
                <h3>Address</h3>
                <address>
                    Av. Independencia 880 <br>
                    C1099AAV CABA<br>
                    Argentina
                </address>
            </div>
            <div class="col-md-4">
                <h3>Contact Information</h3>
                <p>Phone: (011) 4964-2888</p>
                <p>Email: soupnazi@fakeemail.com</p>
            </div>
        </div>
        <hr>
    </div>
</div>

<div id="map" class="bg-light">
    <div class="container pb-5">
        <h2 class="mb-4 mb-md-5">Map</h2>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item embed-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.4642365256923!2d-58.380641684792586!3d-34.61770696574543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5c3a81a8c0b%3A0xcb931c200486507e!2sAv.+Independencia+880%2C+C1099AAV+CABA%2C+Argentina!5e0!3m2!1sen!2sus!4v1541381666953" width="800" height="600" allowfullscreen>
            </iframe>
        </div> 
    </div>
    
</div>

<?php
    include('includes/footer.php');
?>