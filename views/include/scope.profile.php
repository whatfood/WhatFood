  <div class="userProfile">
              <div class="userProfile--img">
                  <img src="views/assets/image/logo_default.png" alt="profile">
              </div>
              <div class="userPprofile--name">
                  <h2><a href="#" class="left">
                  <?php
                      if(!isset($_SESSION["user"])){
                          echo "No ha iniciado sesion";
                      }else{
                          echo $_SESSION["user"]["name"].' '.$_SESSION["user"]["lastn"];
                      }

                  ?>
                  </a></h2>
                  <!-- <small>@UxCode</small> -->
                  <!-- <small>@Wrifit</small> -->
              </div>
              <!-- <div class="userProfile--profile">Developer</div> -->
  </div>
