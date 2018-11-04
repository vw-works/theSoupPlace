<?php

/* Vila Wong
 * The home page for site
*/

#set page title and include header file:
define('TITLE', 'The Soup Place - Home');
include('includes/header.php');
?>

<!-- Main jumbotron for daily soup special -->
<div class="jumbotron home-jumbotron mb-0">
    <div class="container p-0">
        <div class="col-md-6">
            <h1>Daily Special | Soup Special</h1>
            <p>List of ingredients in daily soup special, ingredients</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">See Entire Menu &raquo;</a></p>
        </div>
    </div>
</div>

<div id="procedure" class="bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col">
            <!-- PROCEDURE SECTION -->
            <h2>Ordering Procedure</h2>
            <h5>Follow procedure, get soup.</h5>
                <ol>
                    <li>Refert tamen, quo modo.</li>
                    <li>Philosophi autem in suis lectulis plerumque moriuntur.</li>
                    <li>Sed venio ad inconstantiae crimen, ne saepius dicas me aberrare;</li>
                    <li>Ex rebus enim timiditas, non ex vocabulis nascitur.</li>
                    <li>Id quaeris, inquam, in quo, utrum respondero, verses te huc atque illuc necesse est.</li>
                    <li>Audax negotium, dicerem impudens, nisi hoc institutum postea translatum ad philosophos nostros esset.</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div id="rules" class="bg-dark text-white">
    <div class="container py-5">
        <div class="row">
            <div class="col">
            <!-- RULES SECTION -->
                <h2>Rules</h2>
                <h5>Don't follow rules, then NO SOUP FOR YOU!</h5>
                <ul>
                    <li>Refert tamen, quo modo.</li>
                    <li>Philosophi autem in suis lectulis plerumque moriuntur.</li>
                    <li>Sed venio ad inconstantiae crimen, ne saepius dicas me aberrare;</li>
                    <li>Ex rebus enim timiditas, non ex vocabulis nascitur.</li>
                    <li>Id quaeris, inquam, in quo, utrum respondero, verses te huc atque illuc necesse est.</li>
                    <li>Audax negotium, dicerem impudens, nisi hoc institutum postea translatum ad philosophos nostros esset.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
    include('includes/footer.php');
?>