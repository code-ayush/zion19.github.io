<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Ayush">
        <meta name="keywords" content="zion,fest,college,new,2017,utu,coer,college of engineering roorkee,annual,cultural,dance,acting,rampwalk,modeling,singing">
        <meta name="googlebot" content="Team ZION'17" />
        <meta name="robots" content="Team ZION'17" />
		<title>Registration ZION'17</title>
		
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-skin-boxes.css" />
		<script src="js/modernizr.custom.js"></script>

        
    </head>
    
    <?php
$servername = "mysql.hostinger.in";
$database = "u536038593_pros";
$username = "u536038593_mukul";
$password = "coerdb";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}

if(isset($_POST['name'])&&isset($_POST['gender'])&&isset($_POST['contact'])&&isset($_POST['email'])&&isset($_POST['clgname'])&&isset($_POST['address'])&&isset($_POST['pv'])&&isset($_POST['accomod'])){
     
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $clgname = $_POST['clgname'];
        $pv = $_POST['pv'];
        $address = $_POST['address'];
        $accomod = $_POST['accomod'];
        $event = $_POST['event'];
        $b = " ";
       for ($i=0 ; $i<sizeof($event) ; $i++)
       {
          $b = $b . $event[$i];
        }

        $sql = "INSERT INTO `register`( `Name`, `Gender`, `contact`, `clgName`, `clgAddress`, `PorV`, `Event`, `Accomod`, `email`) VALUES ( '$name', '$gender' , '$contact', '$clgname' ,'$address', '$pv', '$b' , '$accomod' , '$email')";

        if (mysqli_query($conn, $sql)) {
        echo "You Are Registered Successfully We Will Contact You Soon.";
          } 
         else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);}

       


    }





?>
	<body>
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<form id="myform" class="fs-form fs-form-full" autocomplete="off" method="post" action="index.php">
					<ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">What's your name?</label>
							<input class="fs-anim-lower" id="q1" value="" name="name" type="text" placeholder="Name" required/>
						</li>
                        <li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q2" data-info="This will help us know what kind of service you need">What's your Gender?</label>
							<div class="fs-radio-group clearfix fs-anim-lower">
								<span><input id="q3m" type="radio" name="gender" value="m" required/><label for="q3m" class="radio-male">Male</label></span>
								<span><input id="q3f" type="radio" name="gender" value="f" required/><label for="q3f" class="radio-female">Female</label></span>
							</div>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="We won't send you spam, we promise...">What's your email address?</label>
							<input class="fs-anim-lower" id="q2" value="" name="email" type="email" placeholder="Zion17@coer.com" required/>
						</li>
                        <li>
							<label class="fs-field-label fs-anim-upper" for="q4" >What's your Contact Number?</label>
							<input class="fs-anim-lower" id="q2" name="contact" value="" type="number" placeholder="9876543210" required/>
						</li>
                        <li>
							<label class="fs-field-label fs-anim-upper" for="q5" >What's your College Name?</label>
							<input class="fs-anim-lower" id="q2" name="clgname" type="text" value="" placeholder="College of Engineering Roorkee" required/>
						</li>
                        <li>
							<label class="fs-field-label fs-anim-upper" for="q6">What's your College Address?</label>
							<textarea class="fs-anim-lower" id="q4" name="address" placeholder="Address"></textarea>
						</li>
                        
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q7" data-info="This will help us know what kind of service you need">Are you a Participant OR Visitor?</label>
							<div class="fs-radio-group clearfix fs-anim-lower">
								<span><input id="q7p" name="pv" value="p" type="radio" checked required/><label for="q7p" class="radio-part">Participant</label></span> 
								<span><input id="q7v" name="pv" value="v" type="radio" required/><label for="q7v" class="radio-vis">Visitor</label></span>
							</div>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q8" data-info="This will help us know what kind of service you need">In which Event's you want to Partcipate?</label>
							<div class="fs-radio-group clearfix fs-anim-lower">
								<span><input id="q8r" name="event[]" value="Rocki+" type="checkbox"/><label for="q8r" class="radio-rock">ROCKEDENCE</label></span>
								<span><input id="q8m" name="event[]" value="mil+" type="checkbox"/><label for="q8m" class="radio-milan">MILAN STREET</label></span>
                                <span><input id="q8d" name="event[]" value="dan+" type="checkbox"/><label for="q8d" class="radio-dvibez">D-VIBEZ</label></span>
								<span><input id="q8a" name="event[]" value="aco+" type="checkbox"/><label for="q8a" class="radio-auco">ACOUSTICA</label></span>
                                <span><input id="q8b" name="event[]" value="buck+" type="checkbox"/><label for="q8b" class="radio-buck">BUCKLOLZ</label></span>
								<span><input id="q8dir" name="event[]" value="Dir+" type="checkbox"/><label for="q8dir" class="radio-dircut">DIRECTOR'S CUT</label></span>
                                <span><input id="q8c" name="event[]" value="Can+" type="checkbox"/><label for="q8c" class="radio-canvas">CANVAS</label></span>
								<span><input id="q8cin" name="event[]" value="Cene+" type="checkbox"/><label for="q8cin" class="radio-ceni">CENIMAGIC</label></span>
							</div>
						</li>
						
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q9" data-info="This will help us know what kind of service you need">Do you need Accomodation?</label>
							<div class="fs-radio-group clearfix fs-anim-lower">
								<span><input id="q9y" type="radio" name="accomod" value="y" checked required/><label for="q9y" class="radio-yes">Yes</label></span>
								<span><input id="q9n" type="radio" aria-required="true" name="accomod" value="n" required/><label for="q9n" class="radio-no">No</label></span>
							</div>
						</li>
					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit" value="Register" name="contact_submit">Register</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->
		</div><!-- /container -->
        
		<script src="js/classie.js"></script>
		<script src="js/selectFx.js"></script>
		<script src="js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
		



	</body>

</html>