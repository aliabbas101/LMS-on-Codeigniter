<?php include('public_header.php'); ?>



<nav class="navbar navbar-light lighten-4">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="https://aliabbasblogs.tk">Ali Abbas Blogs</a>

  <!-- Collapse button -->
  <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
    aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
        class="fas fa-bars fa-1x"></i></span></button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Learn</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">All posts</a>
      </li>
    </ul>
    <!-- Links -->

  </div>
  <!-- Collapsible content -->

</nav>

 <?php foreach($details as $detail): ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/user/fetchsections/<?=$detail->sid?>#section1"><?=$section_name[0]->title?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?=$detail->title?></li>
  </ol>
</nav> 
<div class="container">
	
	<div class="row">
		<div class="col-md-8">
			<div style="padding:10px;" class="course-box panel panel-success">
			  <div style="padding:10px;font-size:30px;" class="panel-heading">
			  <?=$detail->title?>
			  </div>
			  <div class="panel-body">
                          <div class="embed-responsive embed-responsive-16by9">
			    <div class="embed-responsive-item">
                            <?=$detail->yt_frame?>
                            </div>
                          </div>

			    <div class="card-trans">
			    	

			    	<ul class="nav nav-pills">
			    		
				  <a class="gitlink btn btn-primary" href="<?=$detail->filelink?>">Download Files from Github   <span class="badge"> 3</span></a>
				  <li><a href="#">Q/A <span class="badge"></span></a></li>
				  <li><a href="#">Change Log</a></li>
				</ul>
			    </div>
                           

                          
			  </div>
			</div>
         
  
       

          <div class="card">
			  <div class="card-body">
                           <div class="g-ytsubscribe" data-channelid="UCcQiV5BbNOHXbB0qMsVjP7w" data-layout="full"  data-count="default"></div>
                           
			    <?=$detail->description;?>
			  </div>
                                                   
                      
                         
			</div>
                   
		</div>
		<?php  endforeach; ?>
		<div class="col-md-4">
		

 <h5>Related Stuff</h5>
 <ul class="list-group">
 <?php if($related){ ?>
 <?php foreach($related as $r_post): ?>
  <li class="list-group-item">
  <div class="row">
  	<div class="col-md-4">
  		<img src="<?=$r_post->image?>" height="50" alt="">
  	</div>
  	<div class="col-md-8">
  		<a href="<?=base_url();?>index.php/user/post/<?=$r_post->pid?>">
  		 <strong><p><?=$r_post->title?></p></strong>
  		
  		</a>
  	</div>
  </div>
  </li>
  <?php endforeach; ?>
  <?php }else{  ?>
</ul>

<p>Nothing found</p>
<?php } ?>

		</div>
	</div>
</div>



<?php include('public_footer.php'); ?>