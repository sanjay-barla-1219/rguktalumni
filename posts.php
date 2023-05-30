<?php
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "alumni";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
	if (isset($_POST['post_job'])) {

		$name = $_POST['name'];
        $jobtitle = $_POST['jt'];
        $company = $_POST['company'];
		$message = $_POST['message'];
        $deadline = $_POST['deadline'];
		
		$sql = "INSERT INTO openings (name,jobtitle,company,message,deadline) VALUES('$name','$jobtitle','$company','$message','$deadline')";

		if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Thank You For Your Valuable Information!!');</script>";
		} else {
		//   echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<script>alert('Something Went Wrong Buddy!! Check Once')</script>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="stylee.css">
    <link rel="icon" href="./assets/images/main.png">
    <meta name="keywords" content="alumnirgukt,iiit sklm,alumni openings,openings">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>OPENINGS</title>
</head>
<body>
<div class="btm">
<button class="btn"><i class="fa fa-home"></i><a href="./index.html" class="home">Home</a></button>
</div>
<h2 class='head'><b><span style="color:red;">|| Attention Alumni ||</span></b><br><br>Share Your Company's Job Openings and Empower Our Talented Graduates!</h2><br>
	<div class="wrapper">
		<form action="posts.php" method="post" class="form">
		<label for="deadline"><b>Name:</b></label><br>
			<span style="margin-top:20px;"><input type="text" class="name" name="name" placeholder="Enter Your Name" required></span>
			<br>
			<label for="deadline"><b>Job Title</b></label><br>
            <input type="text" class="name" name="jt" placeholder="Enter Job Title" required>
			<br>
			<label for="deadline"><b>Company/Organization Name</b></label><br>
            <input type="text" class="name" name="company" placeholder="Company/Organization Name" required>
			<br>
			<label for="deadline"><b>Job Description</b></label><br>
			<textarea name="message" cols="30" rows="5" class="message" placeholder="Job description" style="resize:none;" required></textarea>
			<br>
            <label for="deadline"><b>Application Deadline</b></label><br>
            <input type="date" class="name" name="deadline" id="deadline" placeholder="Application Deadline" required>
			<br>
			<button type="submit" class="btn" name="post_job">POST</button>
		</form>
	</div>
</body>
</html>