<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Win Institute</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
		body {
			font-family: 'Arial', sans-serif;
			margin: 0;
			padding: 0;
			text-align: center;
		}

		.container {
			width: 60%;
			margin: auto;
		}

		h1 {
			color: green;
			font-size: 40px;
		}

		p {
			font-size: 28px;
		}

		@media (max-width: 768px) {
			h1 {
				font-size: 30px;
			}

			p {
				font-size: 20px;
			}
		}

		@media (max-width: 576px) {
			h1 {
				font-size: 20px;
			}

			p {
				font-size: 12px;
			}
		}
	</style>
</head>
<body bgcolor="black">
    <h1> Win Institute</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <table class="table table-dark table-striped">
        <tr>
    <td><font color="yellow" size="15" align="center" class=text-light>Win Institute</font></td>
</tr>
    
</table>
<marquee> address: plot no;25,venu's nest, sannathi street, madippakkam,chennai,6000091</marquee>
<table class="table table-success table-striped">
    <tr>
    <th><a href="index.php">HOME</a></th>
    <th><a href="coursedetail\">Course Details</a> </th>
    <th><a href="placement cell.php">Placement Cell</a> </th>
    <th><a href="studentlogin.php">Student Login</a></th>
    <th><a href="stafflogin.php">Staff Login</a></th>
    </tr>
</table>
    <p><h1><font color="red" size="4">CELEBRATING 34TH YEAR OF SERVICING STUDENTS COMMUNITY IN COMPUTER TRINING</font></h1>34 years of continuous and 
uncompromised quality computer Education at affordable cost.  CSC is the one and only institute in the IT training industry to have completed 34 years.  
So  far 40 lakhs students and benefitted through CSC Brand.</p>
<p><h2><font color="red" size="4">CURRICULUM DESIGN AND DEVELOPMENT</font></h2>The curriculum has been designed by the ISO 9001:2015 certified 
committee with meticulous care, taking valuable inputs from Industries, Customers and Academia, which helps the students to easily shift to other computer 
platforms depending on the industrial needs from time to time.</p>
<p><h3><font color="red" size="4">CREDENTIALS OF CSC COMPUTER EDUCATION</font></h3><ul face="circle">
<li>An alumnus base of over 40 Lakhs students</li>
<li>3,00,000 students are trained every year.</li>
<li>ISO 9001:2015 certified curriculum design and development process.</li>
<li>Trained 1,00,000 Government officials</li>
<li>TAINED BSNL ITCOT ICDS MoRD TAMCO BC & MBC  Welfare Dept. SJSRY TNEB Indian Bank Health Care Dept  Magalir Thittam, Revenue & Survey Dept</li>
<li>Center in the vicinity of every 15 kms.</li>
<li>Project based training.</li>
<li>Well structured course material.</li>
<li>Experienced & Knowledge able faculties.</li>
<li>Unlimited computer lab timing.</li>
</ul>
<p><h4><font color="red" size="4">EDUCATIONAL PARTNERS</font></h3>
<ul face="circle"> 
<li>Tally India Pvt Ltd</li>
<li>IBT Institute Pvt Ltd (Bank/SSC/Railways/TNPSC Coaching)</li>
<li>SPEED Medical Institute (NEET/IIT-JEE Coaching)</li>
<li>Speak Easy English Training (P) Ltd.</li>
</ul>
<br>
<br>
<button type="button" class="btn btn-info"><a href="add.php" class="text-light">click here feadback form...</a></button>
<h2>feadback list: </h2>

<div class="container">
    <div class="row">
        <div class="col-md-12">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile no</th>
      <th scope="col">Address</th>
      <th scope="col">Tools</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $link=mysqli_connect('localhost','root','','ai');
    if(!$link){
        die('Connection error'.mysqli_connect_error());
    }
    
    $query="SELECT * FROM win";
    $result=mysqli_query($link,$query);
    $numrow=mysqli_num_rows($result);
    if($numrow){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $mobile=$row['mobile'];
            $address=$row['address'];


    ?>
    <tr>
        <td> <?php echo $id ?> </td>
        <td> <?php echo $name ?> </td>
        <td> <?php echo $mobile ?> </td>
        <td> <?php echo $address ?> </td>
      <td> 
      <button type="button" class="btn btn-success"><a href='edit.php ?id= <?php echo $id?>' class="text-light">Edit</a></button>
      <button type="button" class="btn btn-danger"><a href='delete.php ?id= <?php echo $id?>' class="text-light">Delete</a></button>

        </td>
    </tr>
    <?php
   
    }
    }

?>
  </tbody>
</table>
</div>
</div>
</div>
</body>
</html>