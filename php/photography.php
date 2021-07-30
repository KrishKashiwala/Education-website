<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="../css/music.css">
	
	    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Photography Courses</title>
</head>

<body onload="show();">

<?php

session_start();
    
    
    
    $conn=mysqli_connect("localhost","root","","education");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    @mysqli_select_db("education",$conn);
    
		$result=mysqli_query($conn,"SELECT subject,description FROM photography where id='1' ");
        @$q2=mysqli_fetch_assoc($result);
        $subject1=$q2['subject'];
        $description1=$q2['description'];
        
		$result1=mysqli_query($conn,"SELECT subject,description FROM photography where id='2' ");
        @$q2=mysqli_fetch_assoc($result1);
        $subject2=$q2['subject'];
        $description2=$q2['description'];
		
		$result2=mysqli_query($conn,"SELECT subject,description FROM photography where id='3' ");
        @$q2=mysqli_fetch_assoc($result2);
        $subject3=$q2['subject'];
        $description3=$q2['description'];
		
		$result3=mysqli_query($conn,"SELECT subject,description FROM photography where id='4' ");
        @$q2=mysqli_fetch_assoc($result3);
        $subject4=$q2['subject'];
        $description4=$q2['description'];
		
		$result4=mysqli_query($conn,"SELECT subject,description FROM photography where id='5' ");
        @$q2=mysqli_fetch_assoc($result4);
        $subject5=$q2['subject'];
        $description5=$q2['description'];
		
		$result5=mysqli_query($conn,"SELECT subject,description FROM photography where id='6' ");
        @$q2=mysqli_fetch_assoc($result5);
        $subject6=$q2['subject'];
        $description6=$q2['description'];
		
		$result6=mysqli_query($conn,"SELECT subject,description FROM photography where id='7' ");
        @$q2=mysqli_fetch_assoc($result6);
        $subject7=$q2['subject'];
        $description7=$q2['description'];
		
		$result7=mysqli_query($conn,"SELECT subject,description FROM photography where id='8' ");
        @$q2=mysqli_fetch_assoc($result7);
        $subject8=$q2['subject'];
        $description8=$q2['description'];
    
     

?>


    <header>
        <div class="toggle-btn" onclick="myfuntion();">
            <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
        </div>
        <div class="logo">
            <h2>Educore.</h2>
        </div>

        <nav id="nav">
            <ul>
                <li><a href="#">Browse <i class="fa fa-chevron-down"></i></a></li>
                <li>
                    <form action="#" method="POST">
                        <button class="serch">
                            <i class="fa fa-search"></i>
                        </button type="submit"><input type="search" placeholder="What do you want to learn?" required>
                    </form>
                </li>
                <li><a href="#">Student Pricing</a></li>
                <li><a href="mentors.php">For Mentors</a></li>
                <li><a href="#"><i class="fa fa-bell-o "></i></a></li>
                
            </ul>
        </nav>

    </header>
    <div class="scroll">
        <div class="courselist">
            <h4 class="lin"><a href="alcourses.php">All courses</a></h4>
            <h4 class="lin"><a href="design.php">Design</a></h4>
            <h4 class="lin"><a href="music.php">Music</a></h4>
            <h4 class="lin"><a href="marketing.php">Marketing</a></h4>
            <h4 class="lin">Photography</h4>
            <h4 class="lin"><a href="programming.php">Programming</a></h4>
            <h4 class="lin"><a href="architecture.php">Architecture</a></h4>
        </div>
    </div>
    <div class="bigbox">
        <div class="freecrse">
            <h2 class="linee">Photography Course</h2>
			<section class="course" id="course">

    

<div class="box-container">

    <div class="box">
        <img src="../images/photo4.jfif" alt="">
        <h3 class="price">$50</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="corsedtail.php" class="title"><?php echo "$subject1" ?></a>
            <p><?php echo "$description1" ?></p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="../images/photo1.jfif" alt="">
        <h3 class="price">$50</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="corsedtail.php" class="title"><?php echo "$subject2" ?></a>
            <p><?php echo "$description2" ?></p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="../images/photo2.jfif" alt="">
        <h3 class="price">$50</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="corsedtail.php" class="title"><?php echo "$subject3" ?></a>
            <p><?php echo "$description3" ?></p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>
	
	<div class="box">
        <img src="../images/photo3.jfif" alt="">
        <h3 class="price">$50</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="corsedtail.php" class="title"><?php echo "$subject4" ?></a>
            <p><?php echo "$description4" ?></p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>
	
	<div class="box">
        <img src="../images/photo4.jfif" alt="">
        <h3 class="price">$50</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="corsedtail.php" class="title"><?php echo "$subject5" ?></a>
            <p><?php echo "$description5" ?></p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>
	

    <div class="box">
        <img src="../images/photo4.jfif" alt="">
        <h3 class="price">$50</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="corsedtail.php" class="title"><?php echo "$subject6" ?></a>
            <p><?php echo "$description6" ?></p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="../images/photo3.jfif" alt="">
        <h3 class="price">$50</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half"></i>
            </div>
            <a href="corsedtail.php" class="title"><?php echo "$subject7" ?></a>
            <p><?php echo "$description7" ?></p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="../images/photo2.jfif" alt="">
        <h3 class="price">$50</h3>
        <div class="content">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="corsedtail.php" class="title"><?php echo "$subject8" ?></a>
            <p><?php echo "$description8" ?></p>
            <div class="info">
                <h3> <i class="far fa-clock"></i> 2 hours </h3>
                <h3> <i class="far fa-calendar-alt"></i> 6 months </h3>
                <h3> <i class="fas fa-book"></i> 12 modules </h3>
            </div>
        </div>
    </div>

</div>

</section>
			
			
			
	
</body>



</html>