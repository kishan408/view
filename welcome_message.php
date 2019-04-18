<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
      @media only screen and (max-width: 992px) {
  .title {
    font-size:15px;
  }
}

  @media only screen and (min-width: 992px) {
  .title {
    font-size:30px;
  }
  .form-group{
      padding:20px;
  }
}
  </style>
</head>
<body>

<div class="jumbotron text-center">
  <span class="title"><i class="fa fa-user"></i> &nbsp; USER MANAGEMENT SYSTEM</span>
</div>
  
<div class="container">
        <div class="panel panel-primary col-md-6 col-md-offset-3">
            <div class="panel-heading">
                <legend style="color:white;">Login</legend>
            </div>
  <div class="panel-body">
      
               <?=form_open('admin/authinticate')?>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="uname" placeholder="Enter email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="pwd" placeholder="Enter password">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default center-block">Submit</button>
            </div>
          </div>
        <?=form_close()?>
      
      
  </div>
  <div class="panel-footer"></div>
</div>
</div>


<div class="jumbotron text-center">
    <i class="fa fa-copyright"></i> &nbsp; 2019 All Rights Reserved <a href="weblordinfotech.com">Weblord Infotech </a>
</div>
</body>
</html>
