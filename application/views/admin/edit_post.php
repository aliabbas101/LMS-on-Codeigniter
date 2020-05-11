
<div class="card-trans container"> 
 <?php echo form_open_multipart("admin/update_post/{$post->pid}", array("id" => "form-article", "class" => "form-horizontal")); ?>
 <?=form_hidden('image',$post->image); ?>
  <fieldset>
    <legend>Edit post</legend>
    
    
    <div class="row">
      <div class="col-lg-8">
               <div class="form-group">
      <label for="article_title" class="col-lg-2 control-label">Post Title</label>
      <div class="col-lg-6">
        <?= form_input([
         'type'=>'text','name'=>'title','class'=>'form-control','placeholder'=>'Your Title','value'=>set_value('title', $post->title)
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
         'type'=>'text','name'=>'tagline','class'=>'form-control','placeholder'=>'Add a short description about the tutorial','value'=>set_value('tagline', $post->tagline)
        ]); ?>
        
      </div>
    </div>
      </div>
      <div class="col-lg-6">
   <?=form_error('tagline');?>
      </div>
  </div>
       
       <div class="row">
      <div class="col-lg-8">
               <div class="form-group">
      <label for="article_title" class="col-lg-2 control-label">Post Description</label>
      <div class="col-lg-10">
        
        <?= form_textarea(['name'=>'description','class'=>'ckeditor form-control','placeholder'=>'body','id'=>'editor1','data-myeditor'=>'CommonLi', 'value' =>html_entity_decode($post->description)
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
      <label for="article_title" class="col-lg-2 control-label">Tags</label>
      <div class="col-lg-10">
      
     <div class="chips chips-placeholder"></div>
        
      </div>
    </div>
      </div>
      <div class="col-lg-6">
   <!--<?=form_error('description');?> !-->
      </div>
  </div>



     <div class="row">
      <div class="col-lg-8">
       <div class="form-group">
      <label for="article_body" class="col-lg-2 control-label">Youtube iFrame</label>
       <div class="col-lg-10">
        
        <?= form_textarea(['name'=>'yt_frame','class'=>'ckeditor form-control','placeholder'=>'body','id'=>'editor1','data-myeditor'=>'CommonLi', 'value' =>html_entity_decode($post->yt_frame)
        ]); ?>
        

      </div>
    </div></div>
      <div class="col-lg-6">
       <?= form_error('yt_frame');?>
      </div>
     </div>
 

    <div class="row">
      <div class="col-lg-8">
               <div class="form-group">
      <label for="article_title" class="col-lg-2 control-label">Display Image</label>
      <div class="col-lg-10">
        
       <?= form_upload(['name'=>'userfile','class'=>'form-control']); ?>
        
      </div>
    </div>
      </div>
      <div class="col-lg-6">
        <?php if(isset($upload_error)) echo $upload_error; ?>
      </div>
  </div>


  <div class="row">
      <div class="col-lg-8">
               <div class="form-group">
      <label for="article_title" class="col-lg-2 control-label">File Links/ References</label>
      <div class="col-lg-10">
        <?= form_input([
         'type'=>'text','name'=>'filelink','class'=>'form-control','placeholder'=>'Use any github file link','value'=>set_value('filelink',$post->filelink)
        ]); ?>
      
        
      </div>
    </div>
      </div>
      <div class="col-lg-6">
   
      </div>
  </div>
  <div class="row">
      <div class="col-lg-8">
        <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Select a section</label>
      <div class="col-lg-10">
        <select class="form-control" name="sid">
          <?php foreach($sections as $section): ?>
          <?php $check=$section->sid == $post->sid ? 'selected="selected"' : '' ?>
          <?php echo '<option value='.$section->sid.' '.$check.' >'.$section->title.'</option>'; ?>
          <?php endforeach; ?>
        </select>
        <br>
       
      </div>
    </div>
  </div>
</div>

      <?php
        echo br(5);
       ?>
        <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
           <?=anchor('admin/dashboard','Cancel',['type'=>'button','class'=>'btn btn-info']);?>
        <button type="submit" class="btn btn-primary">Add</button>
         <?= form_close(); ?>   
      </div>

    </div>
  </fieldset>

        </div>
        
     

  