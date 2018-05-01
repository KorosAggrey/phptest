<!DOCTYPE html>
<html lang="en">

  <meta charset="UTF-8">

<title>Bupass- | Seats |</title>

    <!-- Theme skin -->
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">



  </head>

  <body>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-red fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Bupass</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="" style="color: #fff;">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Page Content -->
    <div class="container" style="margin-top: 10px; "> 
      <div class="row">
        <div class="col-md-8 ">
            <div class="plane">
              <div class="cockpit">
                <p style="text-align: center; margin-top: 20px;">Color Explanation </p>
                <div class="btn-group-vertical" style="margin-top: 20px;">
                  <button type="button" class="btn btn-success">Booked</button>
              <button type="button" class="btn btn-danger" style="margin-top: 10px; margin-bottom: 10px;">Not Booked</button> 
              
            </div> 
              </div>
              
              <ol class="cabin fuselage">
                  <p style="text-align: center;">Front seats </p>
                  <?php
                      $response = file_get_contents('book.json');
                         $decode = json_decode($response);
                         $front = $decode->front_seats; 
                         $seats = $front->seats;
                         $one = 1;
                         $driver = $seats->$one;
                        ?>
                          <li class="row row--1">
                            <?php 
                            foreach ($driver as $item){?>
                            
                          <ol class="seats" type="A">                 
                              <?php 
                               if($item->booked == 1)
                               {
                                 ?>
                                    <li class="seat">
                                    <input type="checkbox" id="<?php echo $item->title;?>" />
                                    <label for="<?php echo $item->title;?>" style="width: 40px !important; background-color: green;"><?php echo $item->title;?></label>
                                  </li>
                                                <?php 
                                                
                                             }else
                                              {?>
                                                   <li class="seat">
                                    <input type="checkbox" id="<?php echo $item->title;?>" />
                                    <label for="<?php echo $item->title;?>" style="width: 40px !important; background-color: red;"><?php echo $item->title;?></label>
                                  </li>
                               <?php }
                              ?>                  
                            </ol>
                          
                      <?php
                            
                        }?> <br>

                    <li style="text-align: center;">
                      <label for="8E">Other Seats</label>
                    </li>

                 <?php 

                   $other = $decode->other_seats; 
                   $seats2 = $other->seats; 

                   foreach ($seats2 as $key => $value) {
                    ?>
                    <li class="row row--2">
                     <?php
                    foreach ($value as $item) {
                      ?>
                      <ol class="seats" type="A">
                        <?php 
                          if($item->booked == 1)
                          {?>

                               <li class="seat">
                              <input type="checkbox" id="<?php echo $item->title;?>" />
                              <label for="<?php echo $item->title;?>" style="width: 40px !important; background-color: green;"><?php echo $item->title;?></label>
                            </li>
                                  <?php }else if($item->booked == 0)
                                  {?>
                                      <li class="seat">
                              <input type="checkbox" id="<?php echo $item->title;?>" />
                              <label for="<?php echo $item->title;?>" style="width: 40px !important; background-color: red;"><?php echo $item->title;?></label>
                            </li>

                          <?php } ?>
                        
                       </ol>

                      <?php
                    }
                    ?>
                    </li>
                    <?php
                  }
             ?>

               

              </ol>
            </div>
           

          
        </div>

        <div class="col-md-4">
          <p>
            i used bootstrap to map the seats beacause it is resonsive ,mobile-first and it already been developed along with css, javascript and Html it is also easy to customize , faster to develope using it  has a lot of community  supporting it and simple to intergrate with other frameworks  am not well versed with react js planning to start to read on it.
          </p>
          
        </div>

        
      </div>
      <!-- /.row -->

      

    </div>
    <!-- /.container -->

   
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
