
<div class="container"> 


 <?php echo form_open_multipart("sectionmanager/add_section", array("id" => "form-article", "class" => "form-horizontal")); ?>
   
  <fieldset>
    <legend>Add Section</legend>
    
    
    <div class="row">
    	<div class="col-lg-8">
           		 <div class="form-group">
      <label for="article_title" class="col-lg-2 control-label">Section Title</label>
      <div class="col-lg-6">
      	<?= form_input([
         'type'=>'text','name'=>'title','class'=>'form-control','placeholder'=>'Your Title for section','value'=>set_value('title')
      	]); ?>
        
      </div>
    </div>
    	</div>
      <div class="col-lg-6">
   <?=form_error('title');?>
      </div>
  </div>

  <div class="row">
      <div class="col-lg-8">
               <div class="form-group">
      <label for="article_title" class="col-lg-2 control-label">Tag line</label>
      <div class="col-lg-6">
        <?= form_input([
         'type'=>'text','name'=>'description','class'=>'form-control','placeholder'=>'Add a short description about the tutorial','value'=>set_value('description')
        ]); ?>
        
      </div>
    </div>
      </div>
      <div class="col-lg-6">
   <?=form_error('description');?>
      </div>
  </div>
       
     
 

    <div class="row">
      <div class="col-lg-8">
               <div class="form-group">
      <label for="article_title" class="col-lg-2 control-label">Display Cover</label>
      <div class="col-lg-10">
        
       <?= form_upload(['name'=>'userfile','class'=>'form-control']); ?>
        
      </div>
    </div>
      </div>
      <div class="col-lg-6">
        <?php if(isset($upload_error)) echo $upload_error; ?>
      </div>
  </div>



      <?php
        echo br(5);
       ?>
        <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
      	<?= anchor('sectionmanager','Cancel',['class'=>'btn btn-primary']); ?>
        <button type="submit" class="btn btn-success">Add</button>
         <?= form_close(); ?>   
      </div>

    </div>
  </fieldset>
     </div>
     

    <script>
 
    </script>