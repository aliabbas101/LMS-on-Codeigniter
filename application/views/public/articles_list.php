<?php include("public_header.php"); ?>




<div class="container-fluid">
    
   


   
  <div class="row">
    <div class="col-md-2">
      <ul class="list-group">

         <?php foreach($sections as $section): ?>
          <li class="list-group-item">
            <span class="badge">14</span>
  <?=anchor("user/fetchsections/{$section->sid}",$section->title);?>
  
  </li>
  <?php  endforeach; ?>
</ul>

    </div>
    <div class="col-md-10">

     <?php if(($this->uri->segment(3) <= sizeof($sections)) && ($this->uri->segment(3) >= 1)):?>
    <div style="background:linear-gradient(to right,<?php echo 'rgb('.random_int(20, 90).','.random_int(1, 20).','.random_int(30, 255).')'; ?>,<?php echo 'rgb('.random_int(20, 90).','.random_int(1, 20).','.random_int(30, 255).')'; ?>);background:url('<?php print_r($sections[sizeof($sections)-$this->uri->segment(3)]->cover);?>'), linear-gradient(to right,<?php echo 'rgb('.random_int(1,50).','.random_int(1,80).','.random_int(1,150).')'; ?>,<?php echo 'rgb('.random_int(1,250).','.random_int(1,90).','.random_int(1,100).')'; ?>) no-repeat;" class="jumbotron jumbotron-3">
      <h2 style="color:white;"><?php print_r($sections[sizeof($sections)-$this->uri->segment(3)]->title);?></h2>
      <p><?php print_r($sections[sizeof($sections)-$this->uri->segment(3)]->description);?></p>
    </div>
    <?php endif;?>
  <div class="row">


<?php if($this->uri->segment(3)==''): ?> 
    
<?php else:?>

<div id="articlearea1">
</div>
<?php endif;  ?>

</div>
</div>
</div>

    <script>
    
       $(function(){
       
      showAllArticles();
      
       function showAllArticles()
       {
         $.ajax({
         	type: 'ajax',
         	url : '<?php echo base_url(); ?>user/fetchRecords/<?php echo $this->uri->segment(3); ?>',
         	async: false,
         	dataType: 'json',
         	success: function(data){
                var htmlstr = '';
                var i;
                var count;
                for(i=0; i<data.length;i++)
                {
                 
                  htmlstr+= '<div class="main-box col-md-3 fadeIn animated">'+
                            '<div class="course-box">'+
                             ' <img src="'+data[i].image+'" alt="DevFolio – Bootstrap Portfolio HTML Template" class="img-responsive">'+
                              '<div class="theme-info">'+
                                '<div class="clear">'+
                                '<h5>'+data[i].title+'</h5>'+
                                '<p>'+data[i].tagline+'</p>'+       
                                '<div class="box-content">'+
                                  '<a class="btn btn-success href="#">Info</a>   '+
                                    
                                   '<a href="<?=base_url();?>user/post/'+data[i].pid+'" class="btn btn-info">Learn</a>'+
                                  '<p class="textb"> 2 Hours</p>'+

                              '</div>'+ 
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
<?php include("public_footer.php"); ?>
