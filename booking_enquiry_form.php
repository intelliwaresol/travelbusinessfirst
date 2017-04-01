<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="news_slider/css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<link href='booking_enquiry_form.css' rel='stylesheet' type='text/css'>
        <!-- Include jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        
        <!-- Include Date Range Picker -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Get Prices Up To 50% OFF!</h5>
					<form class="" method="post" action="#">
            	        <div class="panel-body">
                      <label class="radio-inline">
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">Round Trip
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">One way
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option2">Open Jaw
                      </label>
                    </div>					
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Contact Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>
						
                          <div class="form-group"> <!-- Date input -->
                            <label class="control-label" for="date">Departure Date</label>
                            <input class="form-control"  style="width:50%" id="date" name="date" placeholder="MM/DD/YYY" type="date"/>
                           <div class="form-group"> <!-- Date input -->
                            <label class="control-label" for="date">To</label>
                            <input class="form-control" style="width:50%" id="to_date" name="to_date" placeholder="MM/DD/YYY" type="date"/>
                          </div>
                          </div>
						<div class="form-group">
							<label for="depart_airport" class="cols-sm-2 control-label">Depart Airport</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  />
								</div>
							</div>
						</div>  
						<div class="form-group">
							<label for="destination_airport" class="cols-sm-2 control-label">Destination Airport</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  />
								</div>
							</div>
						</div> 
						<div class="form-group">
							<label for="booking_type" class="cols-sm-2 control-label">Booking Type</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<select name="cabin-class" class="form-control" style="font-size: 17px;">
									  <option value="First Class">First Class</option>
									  <option value="Business Class">Business Class</option>
									  <option value="Premium Economy">Premium Economy</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="paseengers" class="cols-sm-2 control-label">Number of Passengers</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<select name="cabin-class" class="form-control" style="font-size: 17px;" >
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="5+">5+</option>
								</select>
								</div>
							</div>
						</div> 
						<div class="form-group">
							<label for="find_us" class="control-label"  style="font-size: 17px;" >Where did you find us?*</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<select name="find-us" class="form-control">
										<option value="">---</option>
										<option value="Email">Email</option>
										<option value="Google">Google</option>
										<option value="Facebook">Facebook</option>
										<option value="Bing">Bing</option>
										<option value="Referral">Referral</option>
										<option value="Other">Other</option>
									</select>
								</div>
							</div>
						</div> 	
						<div class="form-group">
							<label for="description" class="cols-sm-2 control-label">Description</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<textarea name="additional-info" cols="40" rows="5" class="form-control" placeholder="Additional Information">
									</textarea>
								</div>
							</div>
						</div> 
						<div class="yesoptin"><span class="wpcf7-form-control-wrap checkbox-267">
							<span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item first last">
							<input type="checkbox" name="checkbox-267[]" value="Yes! Send me offers and discounts from Travel Business First." checked="checked" />&nbsp;
							<span  class="wpcf7-list-item-label">Yes! Send me offers and discounts from Travel Business First.</span></span></span></span>
						</div>						
						<div class="form-group ">
							<a href="http://deepak646.blogspot.in" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Submit</a>
						</div>
						
					</form>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>