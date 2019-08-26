<!--------DATA DELETE CODE IS HERE---------->
<?php require 'php/delete.php'; ?>


<!----LOGOUT REQUEST----->
<?php require 'php/logoutRequest.php'; ?>

<!----HEADER IS HERE----->
<?php $title = "Database";
require 'header.php'; ?>


  <div class="container-fluid">
    <div class="row">

    	<!------HERE IS LEFT NAVBAR----->
    	<?php require 'left_nav.php'; ?>

      <div class="col-sm-10">
        <div class="row">
        	<div class="col-sm-12">
	        	<span style="font-weight: bold; font-size: 30px;">Data</span>
	        	<span class="center"><?php echo $_SESSION["email"]; ?></span>
	        	<span class="float-right button">
	        		<form action="" method="POST">
	        			<button class="btn btn-info" name="logout">Logout</button>
	        		</form>
	        	</span>
	        </div>
        </div>

        <?php
          $sql = "SELECT * FROM Student";
          $result = mysqli_query($conn, $sql);

          if(mysqli_num_rows($result) > 0){ ?>
            <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Lasat Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Quilification</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
              
              </tr>
            </thead>
            <tbody>

           <?php while($row = mysqli_fetch_assoc($result)){ ?>
              <tr>
                <td> <?php echo $row['id'] ?> </td>
                <td> <?php echo $row['First_name'] ?> </td>
                <td> <?php echo $row['Last_name'] ?> </td>
                <td> <?php echo $row['Age'] ?> </td>
                <td> <?php echo $row['Gender'] ?> </td>
                <td> <?php echo $row['Quilification'] ?> </td>
                <td> <?php echo $row['Email'] ?> </td>
                <td> <?php echo $row['Phone'] ?> </td>
                <td> <?php echo $row['Address'] ?> </td>
                <td><input type="button" class="btn btn-sm btn-danger" onClick="deleteme(<?php echo $row['id']; ?>)" name="Delete" value="Delete">
                 <a class="btn btn-warning btn-sm" href="update.php?upd=<?php echo $row['id'] ?>">Edit</a></td>
                
              
              </tr>
         <?php 
        }
          }else{
            echo "0 result";  
          }
        ?>
      </tbody>
    </table>
      </div>
    </div>     
   </div>
edited
<?php require 'footer.php'; ?>
