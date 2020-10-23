<!doctype html>
<html lang="en">
	<?php include "Templates/head.php"; ?>
	<body class="container-fluid">
	    <?php include "Templates/nav.php"; ?>

		 <div class="signup">
		     <h1>Signup</h1>
			 <?php
			 	if (isset($_GET['error'])) {
			 		if ($_GET['error'] == "emptyfields") {
			 			echo '<p class="error">Fill in all of the fields!</p>';
			 		}
					elseif ($_GET['error'] == "invalidemailuid") {
						echo '<p class="error">Invalid username or email!</p>';
					}
					elseif ($_GET['error'] == "invalidemail") {
						echo '<p class="error">Invalid email!</p>';
					}
					elseif ($_GET['error'] == "invaliduid") {
						echo '<p class="error">Invalid username!</p>';
					}
					elseif ($_GET['error'] == "passwordcheck") {
						echo '<p class="error">Your passwords do not match!</p>';
					}
					elseif ($_GET['error'] == "usertaken") {
						echo '<p class="error">Username is already taken!</p>';
					}
			 	}
				elseif (isset($_GET['signup'])) {
					echo '<p class="success">Signup successful!</p>';
				}
			  ?>
		     <form class="signupform" action="Includes/signup.inc.php" method="post">
		         <input type="text" name="uid" placeholder="Username">
		         <input type="text" name="email" placeholder="Email">
		         <input type="password" name="pwd" placeholder="Password">
		         <input type="password" name="pwd2" placeholder="Repeat password">
		         <button type="submit" name="signup-submit">Signup</button>
		     </form>
		 </div>

		 <?php include "Templates/footer.php"; ?>
 	</body>
 </html>
