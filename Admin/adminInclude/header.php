<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>
  <?php echo TITLE ?>
 </title>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/bootstrap.min.css">

 <!-- Font Awesome CSS -->
 <link rel="stylesheet" href="../css/all.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">


  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

 <!-- Custom CSS -->
 <link rel="stylesheet" href="../css/adminstyle.css">

</head>

<body>
 <!-- Top Navbar -->
 <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: black; height: 60px;">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="adminDashboard.php"> Admin <small class="text-white">Management Area</small></a> 
 </nav>

 <!-- Side Bar -->
 <div class="container-fluid mb-5" style="margin-top:40px;">
  <div class="row">
   <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none" style="bcakground-color: black">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'dashboard') {echo 'active';} ?>" href="adminDashboard.php">
        <i class="fas fa-tachometer-alt"></i>
        Dashboard
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'courses') {echo 'active';} ?>" href="courses.php">
       <i class="icon-book"></i>
       

        Courses
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'lessons') {echo 'active';} ?>" href="lessons.php">
       <i class="icon-tasks"></i> 
        Lessons
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'students') {echo 'active';} ?>" href="students.php">
        <i class="fas fa-users"></i>
        Students
       </a>
      </li>
      
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'paymentstatus') {echo 'active';} ?>" href="adminPaymentStatus.php">
        <i class="fas fa-table"></i>
        Payment Status
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'feedback') {echo 'active';} ?>" href="feedback.php">
       <i class="icon-group"></i>
        Feedback
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'admincontact') {echo 'active';} ?>" href="admincontact.php">
       <i class="icon-phone-sign"></i>
        Contacts
       </a>
      </li>
      
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'sellreport') {echo 'active';} ?>" href="sellReport.php">
        <i class="fas fa-table"></i>
        Payment Summary
       </a>
      </li>
      
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'changepass') {echo 'active';} ?>" href="adminChangePass.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
      
      <li class="nav-item">
       <a class="nav-link" href="../logout.php">
        <i class="fas fa-sign-out-alt"></i>
        Logout
       </a>
      </li>
     </ul>
    </div>
   </nav>