<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <?= link_tag('assets/css/bootstrap.min.css'); ?>
    <script src="<?=base_url('assets/ckeditor/ckeditor.js');?>"></script>
    <script src="<?=base_url('assets/js/jquery.min.js');?>"></script>
   <?= link_tag('assets/css/style.css'); ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">



   <style>
 </style>
</head>
<body>
   
   
   	 
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Wennovation | <span style="color:green;font-style: none;">Admin Panel</span></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
   
      <ul class="nav navbar-nav navbar-right">
        <li>
          <?=anchor('login/logout','Logout')?>
        </li>
      </ul>
    </div>
  </div>
</nav>

