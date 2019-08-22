<?php $title = "Insert Data";
require 'header.php'; ?>

  <div class="container-fluid">
    <div class="row">

    	<!------HERE IS LEFT NAVBAR----->
    	<?php require 'left_nav.php'; ?>

      <div class="col-sm-10">
			<div class="col-sm-4 offset-4 border bg-light">
				<br />
				<center><h3 style="font-weight: bold;">Data Enter</h3></center>
				
				<form name="forms" action="details.php" method="POST" onsubmit="return validation()">
					<div class="form-group">
						<label>First Name</label>
						<input type="text" name="fname" placeholder="First name" autocomplete="off" class="form-control">
						<span style="color: red;"><?php if(isset($error)) echo $error; ?></span>
					</div>
					<div class="form-group">
						<label>Last Name<span style="color: red;">**</span></label>
						<input type="text" name="lname" id="lname" placeholder="Last name" autocomplete="off" class="form-control">
						<span id="lastname" class="text-danger font-weight-bold"></span>
					</div>
					<div class="form-group">
						<!---HERE I CREATED THE AGE OPTION--->
						<label for="age">DOB<span style="color: red;">**</span></label>
						<select name="age" required>
							<option value="">Select DOB</option>
							<?php for($i=2019; $i>1950; $i--){ ?>
								<option value="<?php echo($i)?>">
								<?php echo $i; ?> </option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
			            	<label for="gender">Gender<span style="color: red;">**</span></label>
			            	&nbsp;&nbsp;Male &nbsp;
			            	<input type="radio" name="gender" value="Male" required>
			            	&nbsp;&nbsp;Female&nbsp;
			            	<input type="radio" name="gender" value="Female" required>
			        </div>
			        <div class="form-group">
			            <label for="Quilification">Quilification<span style="color: red;">**</span></label>
			            <select name="quilification" required>
			            	<option value="">Select Quilification</option>
			            	<option value="10th">10<sup>th</sup></option>
			            	<option value="12th">12<sup>th</sup></option>
			            	<option value="B.A">B.A</option>
			            	<option value="B.A">B.S.C</option>
			            	<option value="B.A">B.C.A</option>
			            	<option value="B.A">M.D.A</option>
			            	<option value="B.A">B-TECH</option>
			            	<option value="B.A">B.E</option>
			            	<option value="B.A">M.S</option>
			            </select>
			        </div>
			        <div class="form-group">
			            <label for="Email">Emale<span style="color: red;">**</span></label>
			            <input type="email" name="email" id="email" class="form-control" placeholder="Email" autocomplete="off" >
			            <span id="emailer" class="text-danger font-weight-bold"></span>
			        </div>

			        <div class="form-group">
			            <label for="Phone">Phone<span style="color: red;">**</span></label>
			            <input type="text" name="phone" id="phone" class="form-control" placeholder="Mobile Number" >
			            <span id="phonenumber" class="text-danger font-weight-bold"></span>
			          </div>
			          
			        <div class="form-group">
			        	<label for="address">Address</label>
			        	<textarea rows="3" cols="50" name="address" class="form-control" placeholder="Type Your Address..."></textarea>
			        	<br />
			        <center><button type="submit" class="btn btn-success" value="submit" name="submit">Submit</button></center>
			        <br />
				</form>
			</div>
		</div>
	</div>
<?php require 'footer.php'; ?>