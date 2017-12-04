<?php

require "connect.php";


		
		if(isset($_POST['user_email']))
		{
			$iemail=mysqli_real_escape_string($conn, $_POST['user_email']);

			$checkemailquery="SELECT email from user where email='$iemail'";
			
			$result=mysqli_query($conn,$checkemailquery);

			if(mysqli_num_rows($result)>0)
			{
				echo "Email Already Registered";
				return 0;
				
			}
			else
			{
				echo "Email Not Registered";
				return 1;
			}

			

		}



?>