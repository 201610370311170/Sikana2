<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simple login admin</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css')?>">
  </head>
  <body>
    <div class="login col-md-4 mx-auto text-center" style="margin-top:300px;">
      <h3> Admin Login </h3>
      <form class="" action="<?php echo site_url('admin/login/verify')?>" method="post">
        <div class="form-group">
          <input type="text" name="username" placeholder="Username" class="form-control" value="">
        </div>
        <div class="form-group">
          <input type="password" name="password" placeholder="Password" class="form-control" value="">
        </div>
        <div class="form-group">
          <input type="submit" name="submit" value="Login" class="btn btn-primary">
        </div>
      </form>

    </div>
  </body>
</html>
