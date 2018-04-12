<?php include 'admin/core/init.php';?>
<?php
$success = false;
$error = false;
$nosubNav = true;
?> 
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js">
<head>  
<?php include 'includes/head-common.php';?>
    <title>Plan your trip - <?=EVENT?></title>	 
    
    <link rel="stylesheet" href="intlTelInput/build/css/intlTelInput.css">
    <script src="intlTelInput/build/js/intlTelInput.js"></script>
</head>
<body class="home page page-id-2">
    <?php include 'views/header-common1.php';?>
               
	<div id="wrapper" class="home"> 
        <div class="container-fluid">
          <div class="row">
              <img class="img img-responsive" style="width: 100%" src="<?=DN?>/img/plan.jpg"/>
          </div>
        </div>
        <div class="sectiongrey">
            <section>
                <div class="separator"> 
                    <div class="line"></div>

                    <?php
                        $hotel_id = Input::get('id','get');
                        // hotel name
                        $hotelTablee = new Hotels();
                        $hotelTablee->selectQuery("SELECT * FROM `hotels` WHERE `ID`= $hotel_id");
                                    $i = 0;
                        foreach($hotelTablee->data() as $hotel_data){
                            $i++;
                            $hotel_name = $hotel_data->name;

                        }
                        ?>
                    <h2><?=$hotel_name?></h2>
                    <div class="line"></div>

                </div>
                <!-- <h4>
                    <span class="lnr lnr-chevron-right"></span> 
                    <span class="light"><small>Getting to <?=EVENT_SHORT?> 2017</small></span>
                  
                </h4> -->
                <div class="col-sm-12 col-md-12">
                    <p class="text-center text-default">Please select the room. </p>
                    <hr class="hr-book-layout" />

                    <table class="table table-hover text-left">
                      <thead>
                        <tr>
                          <th>Room</th>
                          <th>Price</th>
                          <th>Available</th>
                          <th class="text-right">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $accommodationTable = new Rooms();
                            $accommodationTable->selectQuery("SELECT * FROM `rooms` WHERE `hotel_ID`= $hotel_id");
                            $accommodationApprovalNumber = $accommodationTable ->count();

                            if($accommodationTable->count()){
                              $i = 0;
                              foreach($accommodationTable->data() as $accommodation_data){
                                $i++;
                                $accommodation_ID = $accommodation_data->ID;
                        ?>
                        <tr>
                          <td><?=$accommodation_data->name?></td>
                          <td><?=$accommodation_data->price?></td>
                          <td><?php echo $accommodation_data->available;?></td>
                          <td>
                            <a href="<?=DN?>/register/accommodation/<?=$accommodation_data->ID?>" target="_blank" class="submit_btn btn orange-bg white-color btn-default btn-md pull-right"><i class="glyphicon glyphicon-share"></i> Book now</a>
                          </td>
                        </tr>
                        <?php } } ?>
                      </tbody>
                    </table>

                    <!-- <p class="text-center text-default">Join over 4,000 visitors at the <?=EVENT?> and network with like minded industry players transforming the ICT sector in Africa. Engage with innovators, pioneers &amp; leaders from both the pubic &amp; private sector not only from Africa, but across the globe.</p> -->
                    <hr class="hr-book-layout" />
                </div>
            </section>
        </div>

        <?php include 'views/social.php';?>            
    </div><!--wrapper--> 
    <?php include 'views/footer-common.php';?>
    
</body>
</html>