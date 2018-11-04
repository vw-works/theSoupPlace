<!-- END CHANGEABLE CONTENT -->
</main>
      <footer>
        <div class="container py-5">
          <div class="row justify-content-between">
            <!-- CONTACT INFORMATION -->
            
            <div class="col-md-3">
              <span>
                  (011) 4964-2888</br>
                  995 Nosoupforelaine Bvld</br>
                  Recoleta Buenos Aires</br>
                  Argentina</br>
              </span>
            </div>

            <!-- SITE MAP SECTION -->
            <div class="col-md-3 mt-3 mt-md-0">
              <ul>
                  <li><a href="index.php#procedure">Procedure &amp; Rules</a></li>
                  <li><a href="#">Menu</a></li>
                  <li><a href="#">Hours &amp; Location</a></li>
              </ul>
                
            </div>
          </div>
          <!-- Disclaimer -->
          <div class="row mt-4 copyright">
            <div class="col">
              <span class="d-block">Any content related to the Soup Nazi is the property of the TV series, <a href="http://www.seinfeldscripts.com/TheSoupNazi.htm" target="_blank" title="Go to Seinfeld Soup Nazi transcript page">Seinfeld</a>. Please don't sue me.</span>
              <span>&copy;
                    <?php
                        $startYear = 2018;
                        $thisYear = date('Y');
                        if ($startYear == $thisYear) {
                            print $startYear;
                        } else {
                            print "{$startYear}&#8211;{$thisYear}";
                        }
                    ?> Design/Development by Vila Wong </span>
            </div>
          </div>
 
        
      </footer>
  
      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
  </html>