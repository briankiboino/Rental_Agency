<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>covid-contact-tracker</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link href="assets/img/.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" type="text/css" href="http://use.fontawesome.com/releases/v5.0.6/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<style>
  body{
    overflow: hidden;
  }
  #row{
    height: 1120px;
  }
  #activity_container{
    overflow: scroll;
    max-height: 1120px;
  }
  #tracker_button{
    background-color: #8A2BE2;
    margin-top: 10px;
    margin-right: 10px;
    border-radius: 7px;
    height: 40px;
    width: 100px;
  }
  #nested_row2{
    height: 400px;
  }
  #nested_row3{
    height: 200px;
  }
  #view_button{
    border-color: #9370DB;
    background-color: white;
    border-width: 1px;
    border-radius: 7px;
    height: 45px;
    width: 60px;
    float: right;
  }
  h6{
    margin-left: 20px;
  }
  h1{
    margin-left: 16px;
  }
  .border{
    margin-left: 33px;
    border: 2px;
  }
  p{
    margin-left: 40px;
  }
  .label{
    height: 70px;
    width: 50px;
    margin-left: 40px;
    background-color: limegreen;
    font-size: 22px;
  }
  .card{
    border: none;
    border-left: 1px solid;
    margin-left: 33px;
    width: 100%;
  }
  .card-header{
    border: none;
    background-color: transparent;
  }
  #icon{
    margin-left: 15px;
    color: #9370DB;
  }
  #tracker_icon{
    color: white;
  }
</style>

<body>
  <div class="container-fluid">
      <div class="row" id="row">
         <div class="col-sm-3 order-sm-1" id="activity_container">
           <div class="row" id="nested_row1">
             <h1><?php echo date("l"); ?></h1>
             <button class="ml-auto" id="tracker_button"><i class="fa fa-download" id="tracker_icon"> tracker</i></button>     
           </div>
           <div class="row" id="nested_row2">
             <h6>OUTBREAKS</h6>
           </div></br>
           <h6>ACTIVITY</h6>
           <script type="text/javascript">
              var request = new XMLHttpRequest()

      // Open a new connection, using the GET request on the URL endpoint
      request.open('GET', 'https://ekbaya.pythonanywhere.com/api/locations/3/', true)

      request.onload = function() {
        // Begin accessing JSON data here
        var data = JSON.parse(this.response)         
             //Pass the array containing all the coordinates to the function that loads the map
             var center_latitude = parseFloat(data[0].latitude);
             var center_longitude = parseFloat(data[0].longitude);
       request.send();
    }

           </script>
           <div class="row" id="nested_row3">
             <div class="card">
                <div class="card-header">
                    02 April 2020
                   <button class="ml-auto" id="view_button"><font color="#8A2BE2">View</font></button>     
                </div>
               <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                  <label class="label">
                  <font color="white">
                    <center>
                     <script>
                      var bri ="broo";
                    document.write(bri);
                    </script>
                    </center>
                  </font>
                </label>
              </div>
              <div class="col-sm-8">The Minister of Health informs that you must not leave the house for recreational purposes. Find out more.</div>
            </div>
          </div>
        </div>
           </div>
           <span class="fa fa-map-marker-alt" id="icon"></span>
         </br>
       </div>
         <div class="col-sm-9 order-sm-12" id="map"></div>
      </div>
    </div>
  </div>    
    <script>

      var view = document.getElementById("view_button");

      view.onclick = function(){
          
      var patientMovementCoordinates = [];
      // Create a request variable and assign a new XMLHttpRequest object to it.
      var request = new XMLHttpRequest()

      // Open a new connection, using the GET request on the URL endpoint
      request.open('GET', 'https://ekbaya.pythonanywhere.com/api/locations/3/', true)

      request.onload = function() {
        // Begin accessing JSON data here
        var data = JSON.parse(this.response)         
             //Pass the array containing all the coordinates to the function that loads the map
             var center_latitude = parseFloat(data[0].latitude);
             var center_longitude = parseFloat(data[0].longitude);
             initMap(data,center_latitude,center_longitude); 

      }


      function initMap(data,center_latitude,center_longitude) {
        //Display the default map
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: {lat: center_latitude, lng: center_longitude}
        });


        //The coordinates for all locations visited by the patient
         data.forEach(function(location){
              var latitude = parseFloat(location.latitude);
              var longitude = parseFloat(location.longitude); 
              coordinates = {lat: latitude, lng: longitude};  
              patientMovementCoordinates.push(coordinates);           
         });
         drawPath(patientMovementCoordinates);
          

        //Initialising the red line that plots all the locations visited by the patient
        function drawPath(patientMovementCoordinates){
        console.log(patientMovementCoordinates);
        var movementPath = new google.maps.Polyline({
          path: patientMovementCoordinates,
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 2
        });

        movementPath.setMap(map);

      }
      }
      // Send request
      request.send()
    }

      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: -1.292066, lng: 36.821945 },
          zoom: 7
        });
      }
    </script>
     <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBozgdcoXc0xTs3jcqUvx4oJIh2af1tjuY&callback=initMap">
    </script>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>