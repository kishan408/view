<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}


.sidenav {
  height: 100%;
  width: 0px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #337ab7;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: white;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  box-shadow:2px 3px 3px gray;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;

  font-size: 20px;
  
}

#main {
  transition: margin-left .5s;
 
  margin-left:0px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
    <a href="#"></a>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Dashboard >></a>
  <a href="<?=base_url()?>index.php/admin/dashboard"><i class="fa fa-users"></i>&nbsp;Users Management</a>
  <a href="<?=base_url()?>index.php/admin/pending_approvel"><i class="fa fa-users"></i>&nbsp;Pending Approvel</a>
  <a href="<?=base_url()?>index.php/admin/pending_payments"><i class="fa fa-money"></i>&nbsp;Pending Payments</a>
  
  <a href="<?=base_url()?>index.php/admin/change_password"><i class="fa fa-gear"></i>Change password</a>
  <a href="<?=base_url()?>index.php/admin/logout"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
</div>

<div id="main">
    
    <nav class="navbar btn-primary" >
    <div class="container">
    <div class="navbar-header"> <span class="navbar-toggle" style="font-size:20px;cursor:pointer;color:white;" onclick="openNav()">&#9776; Menu</span>  <a href="" class="navbar-brand " style="color:white;">Admin<i>Panel</i></a></div>
    <ul class="nav navbar-nav navbar-right collapse navbar-collapse">
        <li><a href="" style="color:white;"><?php echo date('d - m - Y'); ?></a></li>
       <li style="padding-top:10px;padding-bottom:10px;line-height:20px;"><span style="font-size:30px;cursor:pointer;color:white;" onclick="openNav()">&#9776; Menu</span> </li>
    </ul>
    </div>
</nav>