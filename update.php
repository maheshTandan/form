
<?php $title = "Update Data";
require 'header.php'; ?>

<?php require 'php/update.php'; ?>

  <div class="container-fluid">
    <div class="row">

      <!------HERE IS LEFT NAVBAR----->
      <?php require 'left_nav.php'; ?>

      <div class="col-sm-10">
			<div class="col-sm-4 offset-4 border">
				<br />
				<center><h3 style="font-weight: bold; color: green;">Update Data</h3></center>
				<br />
        
        <form action="" method="POST" onsubmit="return validation()">
          <div class="form-group">
            <label for="name">First Name</label>
            <input value="<?php echo $result['First_name'] ?>" type="text" name="fname" class="form-control" autocomplete="off">
          </div>
          <div class="form-group">
          <label for="name">Last Name<span style="color: red;">**</span></label>
            <input id="lname" value="<?php echo $result['Last_name'] ?>" type="text" name="lname" class="form-control" autocomplete="off">
            <span id="lastname" class="text-danger font-weight-bold"></span>
          </div>
        	<div class="form-group">
				<!---HERE I CREATED THE AGE OPTION--->
				<label for="age">DOB<span style="color: red;">**</span></label>
				<select name="age" required>
					
					<?php for($i=2019; $i>1950; $i--){ ?>
						<option value="<?php echo($i)?>" <?php if($age==$i) { echo "selected"; } ?>>
						<?php echo $i; ?> </option>
					<?php } ?>
				</select>
			</div>
    		<div class="form-group">

          <label for="gender">Gender<span style="color: red;">**</span><span style="color: red;">*</span></label>
          &nbsp;&nbsp;Male &nbsp;
          <input type="radio" name="gender" value="Male" required <?php if($gender=='Male') { echo "checked"; } ?>>
          &nbsp;&nbsp;Female&nbsp;
          <input type="radio" name="gender" value="Female" required <?php if($gender=='Female') { echo "checked"; } ?>>
        </div>
        <div class="form-group">
                  <label for="Quilification">Quilification<span style="color: red;">**</span></label>
                  <select name="quilification" required>
                    <option value="10th" <?php if($quilification=='10th') { echo "selected";} ?>>10<sup>th</sup></option>
                    <option value="12th" <?php if($quilification=='12th') { echo "selected";} ?>>12<sup>th</sup></option>
                    <option value="B.A" <?php if($quilification=='B.A') { echo "selected";} ?>>B.A</option>
                    <option value="B.S.C" <?php if($quilification=='B.S.C') { echo "selected";} ?>>B.S.C</option>
                    <option value="B.C.A" <?php if($quilification=='B.C.A') { echo "selected";} ?>>B.C.A</option>
                    <option value="M.D.A" <?php if($quilification=='M.D.A') { echo "selected";} ?>>M.D.A</option>
                    <option value="B-TECH" <?php if($quilification=='B-TECH') { echo "selected";} ?>>B-TECH</option>
                    <option value="B.E" <?php if($quilification=='B.E') { echo "selected";} ?>>B.E</option>
                    <option value="M.S" <?php if($quilification=='M.S') { echo "selected";} ?>>M.S</option>
                  </select>
        </div>

        <div class="form-group">
            <label for="name">Email<span style="color: red;">**</span></label>
            <input id="email" type="email" value="<?php echo $result['Email'] ?>" name="email" class="form-control" value="" autocomplete="off">
            <span id="emailer" class="text-danger font-weight-bold"></span>
        </div>

        <div class="form-group">
            <label for="name">Phone<span style="color: red;">**</span></label>
            <input id="phone" type="text" value="<?php echo $result['Phone'] ?>" name="phone" class="form-control">
            <span id="phonenumber" class="text-danger font-weight-bold"></span>

          </div>
          
        <div class="form-group">
            <label for="address">Address<span style="color: red;">**</span></label>
            <textarea rows="3" id="address" cols="50" name="address" class="form-control" placeholder="Type Your Address..."><?php if(isset($result['Address'])) echo $result['Address']; ?></textarea>
            
          </div>
          
          <center><button type="submit" class="btn btn-success" name="update">Update</button></center>
        </form>
        <center>Or<br />
          	<a href="index.php"><button type="submit" class="btn btn-secondary" name="cancel">Cancel</button></a>
          </center>
      </div>
		</div>
	</div>

  
<?php require 'footer.php'; ?>