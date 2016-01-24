<!DOCTYPE html>
<html lang="en">
<head>
        
    <!-- Title of the page -->
    <title>Price Comparision</title>
    
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
        
    <link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="http://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/css/jquery.dataTables.css">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
 
    <!-- NAVBAR
    ================================================== -->
    <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0px;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h3><font size="8" face="Comic Sans MS" color="#FFFFF0">compa</font><font size="9" face="Comic Sans MS" color="#1874CD">RATE</font></h3>
                </div>
                
            </div>
        </nav>

    </div>

    <!-- Use a container to wrap the slider, the purpose is to enable slider to always fit width of the wrapper while window resize -->
    <div class="container">
        <!-- Jssor Slider Begin -->
        <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
        <!-- ================================================== -->
        <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 1140px; height: 442px; overflow: hidden;">

          

            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1140px; height: 442px;
            overflow: hidden;">
                <div>
                    <img u="image" src="img/1.png" />
                </div>
                <div>
                    <img u="image" src="img/2.jpg" />
                </div>
                <div>
                    <img u="image" src="img/3.jpg" />
                </div>
                <div>
                    <img u="image" src="img/4.jpg" />
                </div>
		<div>
                    <img u="image" src="img/5.jpg" />
                </div>
		<div>
                    <img u="image" src="img/6.jpg" />
                </div>
		<div>
                    <img u="image" src="img/7.jpg" />
                </div>
		<div>
                    <img u="image" src="img/8.png" />
                </div>
		<div>
                    <img u="image" src="img/9.jpg" />
                </div>
            </div>
            
           
            
           
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                
<br/>
<br/>
                <p class="lead">Enter a product like samsung ,LG select a value 
            				from category like(tablets,refrigerators) and click on search .</p>
				<p class="lead">Surprise!! You will be populated with different vendor pricings and search term related products which you are seeking for.</p>
            </div>
           
                <h3 style="font-family:verdana;">Price comparison </h3>
				
				
				<div class="col-md-3">
<form method="post">
<h3>Enter product </h3><input type="text" required name="name"  class="form-control" >
<br/>
<select name="category" class="form-control text-primary text-uppercase">
  <option value="tablets">tablets</option>
  <option value="mobile_phones">mobile phones</option>
  <option value="landline_phones">landline phones</option>
  <option value="mobile_bluetooth_headsets">mobile bluetooth headsets</option>
  <option value="mobile_headphone_headsets">mobile headphone headsets</option>
  <option value="mobile_batteries">mobile batteries</option>
  <option value="mobile_chargers">mobile chargers</option>
  <option value="mobile_memory">mobile memory</option>
  <option value="point_shoots">point shoots</option>
  <option value="camcorders">camcorders</option>
  <option value="dslrs">dslrs</option>
  <option value="binoculars_telescopes">binoculars telescopes</option>
  <option value="digital_photo_frames">digital photo frames</option>
  <option value="desktops">desktops</option>
  <option value="laptops">laptops</option>
  <option value="monitors">monitors</option>
  <option value="printers_single">printers single</option>
  <option value="printers_multi">printers multi</option>
  <option value="scanners">scanners</option>
  <option value="projectors">projectors</option>
  <option value="lcd_tv">lcd tv</option>
  <option value="led_tv">led tv</option>
  <option value="plasma_tv">plasma tv</option>
  <option value="crt_tv">crt tv</option>
  <option value="home_theaters">home theaters</option>
  <option value="video_players">video players</option>
  <option value="speakers">speakers</option>
  <option value="music_systems">music systems</option>
  <option value="gaming_consoles">gaming consoles</option>
  <option value="ipods">ipods</option>
  <option value="mp3_players">mp3 players</option>
  <option value="mp4_players">mp4 players</option>
  <option value="washing_machines">washing machines</option>
  <option value="refrigerators">refrigerators</option>
  <option value="air_conditioners">air conditioners</option>
  <option value="irons">irons</option>
  <option value="water_purifiers">water purifiers</option>
  <option value="vacuum_cleaners">vacuum cleaners</option>
  <option value="microwave_ovens">microwave ovens</option>
  <option value="otg">otg</option>
  <option value="induction_cooktops">induction cooktops</option>
  <option value="electric_cookers">electric cookers</option>
  <option value="mixer_grinder_juicer">mixer grinder juicer</option>
  <option value="hand_blenders">hand blenders</option>
  <option value="food_processors">food processors</option>
  <option value="sandwich_makers">sandwich makers</option>
  <option value="popup_toasters">popup toasters</option>
  <option value="coffee_makers">coffee makers</option>
  <option value="electric_kettles">electric kettles</option>
  <option value="pen_drives">pen drives</option>
  <option value="external_hard_disks">external hard disks</option>
 <option value="data_cards">data cards</option>
  <option value="routers">routers</option>
  <option value="switches">switches</option>
  <option value="processors">processors</option>
  <option value="graphic_cards">graphic cards</option>
  <option value="rams">rams</option>
  <option value="motherboards">motherboards </option>
  <option value="tv_tuners">tv tuners</option>
  <option value="mouse">mouse</option>
  <option value="keyboards">keyboards</option>
  <option value="webcams">webcams</option>
  <option value="laptop_batteries">laptop batteries</option>
  <option value="laptop_adapters">laptop adapters</option>
  </select>
<br/>
<input type="submit" class="btn btn-primary" value="search">
</form></div></div>
            </div>
        </div>

       



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="script/jquery-1.9.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>

    <!-- jssor slider scripts-->
    <!-- use jssor.js + jssor.slider.js instead for development -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="script/jssor.slider.mini.js"></script>
    <script>

        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $Idle: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $Cols: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Rows: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 12,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 4,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

           
        });
    </script>







<?php
	//echo "Hello";
	if(!empty($_POST['category']))
	{
?>

<style>
	
	thead{background: #00cccc;}
	th 
	{
    		
    		color: #fff;
    		text-transform: uppercase;
    		font-size: 12px;
    		&.last {
      			border-right: none;
    	}
	table {
  		font-family: 'Arial';
  		margin: 25px auto;
  		border-collapse: collapse;
  		border: 1px solid #eee;
  		border-bottom: 2px solid #00cccc;
  		box-shadow: 0px 0px 20px rgba(0,0,0,0.10),
     		0px 10px 20px rgba(0,0,0,0.05),
     		0px 20px 20px rgba(0,0,0,0.05),
     		0px 30px 20px rgba(0,0,0,0.05);
  </style>


<?php

	$product_name=stripslashes($_POST['name']);
	$category_name=$_POST['category'];
	//echo $product_name;
	//echo $category_name;

	$post_url='';
	$post_url="http://api.pricecheckindia.com/feed/product/".$category_name."/".$product_name.".json?user=sasidust&key=KFYTNUZDSGJMGUYV";
	//echo $post_url;


	$string = file_get_contents($post_url);
	$json_a = json_decode($string, true);

?>
<div class="table-responsive">
	<table class="table table-stripped dtable" id="example"  >

	<thead>
		<tr>
			<th data-toggle="tooltip" title="click here to sort!">vendor</th>
			<th data-toggle="tooltip" title="click here to sort!">price</th>
			<th>image</th>
			<th>View</th>
		</tr>
	</thead>
	<tfoot style="visibility:hidden;">
		<tr>
			<th>vendor</th>
			<th>price</th>
			<th>image</th>
			<th>View</th>
		</tr>
	</tfoot>
	<tbody>






<?php
		
	foreach ($json_a as $key => $value) 
	{
    		foreach($value as $k =>$v) 
		{
    		
			$model=$v['model'];
			$brand=$v['brand'];
			//echo $v['brand']."</td><td>";
			//echo $v['id']."</td><td>";

			$arr=$v['stores'];
			if(empty($arr))
			{
				//echo "not available at any stores";continue;
			}		
			$length=count($arr);
			for($i=0;$i<$length;$i++)
			{
				$web_name=$arr[$i]['website'];
				$price=$arr[$i]['price'];
				$img_url=$arr[$i]['image'];
				$link_url=$arr[$i]['url'];

				echo "<tr>";	
				echo "<td><h3>".$brand."</h3><b>".$model."</b><br>".$web_name."</td>";
				echo "<td><font color='indigo'>&#8377;".$price."</font></td>";
				echo "<td style='text-align:center;'><img src='".$img_url."' width='90em' height='100em'></td>";
				echo "<td><button><a href='".$link_url."'>Click here</a></button></td>";
				//echo "<td>".$arr[$i]['offer']."</td>";

				echo"</tr>";

 			}
			//echo "</tbody></table>";


			//break;
		}
		//print_r( $value);

	}
 	echo "</tbody></table>";

?>

</div>




    
    <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
    <script src="http://aishek.github.io/jquery-animateNumber/javascripts/jquery.animateNumber.js"></script>

    <script>

    	$(document).ready(function( $ ) 
	{
		var table = $('#example').DataTable();
    		$("#example tfoot th").each( function ( i ) 
		{
        		var select = $('<select><option value=""></option></select>').appendTo( $(this).empty() ).on( 'change', function () 
			{
                		table.column( i ).search( $(this).val() ).draw();
            		} );
 
        		table.column( i ).data().unique().sort().each( function ( d, j ) 
			{
            			select.append( '<option value="'+d+'">'+d+'</option>' )
        		} );
    		} );

    	} );
    
   </script>

        

      
</body>
</html>
<?php } ?>
<br/>
<br/>
<br/>

<footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; compaRATE  </p>
        </footer>
<!-- === END Of file === -->