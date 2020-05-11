<?php include("public_header.php"); ?>
<section class="bgimg cover">


<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Ali Abbas Blogs</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Learn</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">All Posts</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <div class="cover-container">
				<div class="cover-inner container" style="margin-top: 80%;">
						<h1 class="jumbotron-heading">

                        <div class="typewriter">
						  <h1><strong><span style="color:yellow;">&lt;</span>Welcome<span style="color:yellow;">/&gt;</span></strong></h1>
						</div>
						<br><br>
						</h1>
						<p>
                                <a href="https://github.com/aliabbas101" ><button style="background-color: #333!important;color: #fff;" type="button" class="btn btn-git"><i class="fab fa-github pr-1"></i> Github</button></a>
                                 <a href="https://facebook.com/wennopak" ><button style="background-color: #3b5998!important;color: #fff;" type="button" class="btn btn-fb"><i class="fab fa-facebook-f pr-1"></i> Facebook</button></a>
                                 <a href="https://www.youtube.com/channel/UCcQiV5BbNOHXbB0qMsVjP7w" ><button style="    background-color: #ed302f!important;color: #fff;" type="button" class="btn btn-yt"><i class="fab fa-youtube pr-1"></i> Youtube</button></a>

                                                </p>
				</div>
			</div>
      </div>
    </div>
  </div>
</header>   





			
		</section>



<div id="section1" class="container-fluid">

<div class="row">
  
  <div style="margin-top:45px;" class="col-md-2">
    <div class="LI-profile-badge"  data-version="v1" style="width:100%;" data-size="medium" data-locale="en_US" data-type="horizontal" data-theme="light" data-vanity="aliabbas101"><a class="LI-simple-link" href='https://pk.linkedin.com/in/aliabbas101?trk=profile-badge'>Ali A.</a></div>
  
    <br><br>
     <ul class="list-group">

  <?php foreach($sections as $section): ?>
  <li class="card-trans list-group-item">
  <?=anchor("user/fetchsections/{$section->sid}#section1",$section->title);?>
  
  </li>
  <?php  endforeach; ?>
</ul>

  </div>
  <div class="col-md-10 col-xs-12">
  <div class="card-trans  card border-0 shadow my-5">
    <div class="card-body p-5">
       <!--

         Main body
        !-->


         <?php if(($this->uri->segment(3) <= sizeof($sections)) && ($this->uri->segment(3) >= 1)):?>
    <div style="background:linear-gradient(0deg,<?php echo 'rgba(255,0,255,0.3)'; ?>,<?php echo 'rgba(0,0,0,0.8)'; ?>),url('<?php print_r($sections[sizeof($sections)-$this->uri->segment(3)]->cover);?>'), no-repeat;" class="jumbotron jumbotron-3">
      <h2 style="color:white;"><?php print_r($sections[sizeof($sections)-$this->uri->segment(3)]->title);?></h2>
      <p style="color:white;"><?php print_r($sections[sizeof($sections)-$this->uri->segment(3)]->description);?></p>
    </div>
    <?php endif;?>

 
   <div class="row" id="articlearea1"><div class="spinner-grow" role="status">
  <span class="sr-only">Loading...</span>
</div></div>


  
  <!-- /.row -->

  <!-- Pagination -->
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
    </li>
  </ul>






      <div style="height: 700px"></div>
      <p class="lead mb-0">You've reached the end!</p>
    </div>
  </div>
  </div>
  </div>
</div>



<script>
    
       $(function(){
       
      showAllArticles();
      //setInterval(showAllArticles,1000);
       function showAllArticles()
       {
         $.ajax({
          type: 'ajax',
          url : '<?php echo base_url(); ?>index.php/user/fetchRecords/<?php echo $this->uri->segment(3); ?>',
          async: false,
          dataType: 'json',
          success: function(data){
                var htmlstr = '';
                var i;
                var count;
                for(i=0; i<data.length;i++)
                {
                 
                  htmlstr+= '<div class="col-md-4 mb-4 fadeIn animated">'+
                            '<div class="card">'+
                             ' <img class="card-img-top" src="'+data[i].image+'" alt="article img"></a>'+
                                '<div class="card-body">'+
                                '<strong><p class="card-title">'+data[i].title+'</p></strong>'+
                                '<p class="card-text">'+data[i].tagline+'</p>'+       
                                '<div class="box-content">'+
                                  '<a class="btn btn-success href="#">Info</a>   '+
                                    
                                   '<a href="<?=base_url();?>index.php/user/post/'+data[i].pid+'" class="btn btn-info">Learn</a>'+
                                  '<p class="textb"> 2 Hours</p>'+

                              
                            '</div>'+
                           '</div>'+
                          '</div></div>';
                           
                }
               
                 $('#articlearea1').html(htmlstr);
                

               
          },
          error:function()
          {
               $('#errmsg').text("No Records found");
          }
         });
       }
       
       $('#search_text').keyup(function(){

                
       });

       });
  </script>




<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>
</div>

</body>
</html>