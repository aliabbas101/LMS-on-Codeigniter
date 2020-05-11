
<div class="card-trans container">
  
   <div class="btn-group pull-left">
        <div class="form-group">
          <?php echo form_open_multipart("admin/dashboard", array("id" => "form-article", "class" => "form-horizontal")); ?>
      <label for="select" class="col-lg-8 control-label">Select a Section</label>
      <div class="col-lg-12">
        <select name="selected_section" class="form-control" id="select">
          <?php foreach($sections as $section): ?>
            <?='<option value='.$section->sid.'>'.$section->title.'</option>'?>
          <?php endforeach;?>
        </select>
        
      </div>
     <button type="submit" class="btn btn-primary">Search</button>
      <?=form_close();?>
    </div>
  </div>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-6">



           <div class="btn-group pull-right">
            <?=anchor('admin/add_post','Add Article',['type'=>'button','class'=>'btn btn-primary']);?>
             <?=anchor('sectionmanager','Section Manager',['type'=>'button','class'=>'btn btn-success']);?>

</div>
      			
		</div>
	</div>
  <?php if($feedback = $this->session->flashdata('feedback')):
         $feedback_class=$this->session->flashdata('feedback_class');
    ?>
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <div class="alert alert-dismissible <?=$feedback_class?>">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
         <?=$feedback?>
         </div>
      </div>
  </div>
  <?php endif;?>
  
	<table class="table table-hover table-dark">
		<thead>
			<th>Sr. No</th>
			<th>Title</th>
			<th>Action</th>
		</thead>
		<tbody>
    	<?php  if(count($posts)): 
          $count=$this->uri->segment(3);
         	foreach($posts as $post): ?>
			<tr>
				<td><?=++$count;?></td>
				<td><?=$post->title?></td>
				<td>
          <?=anchor("admin/edit_post/{$post->pid}",'Edit',['class'=>'btn btn-primary','data-toggle'=>'tooltip','data-placement'=>'top','data-original-title'=>'Make changes in your article']); ?>
				  <!--<a href="" class="btn btn-primary">Edit</a>!--> 
				    <?=anchor("admin/delete_post/{$post->pid}",'Delete',['class'=>'btn btn-danger','data-toggle'=>'tooltip','data-placement'=>'top','data-original-title'=>'Delete this article']); ?>
				</td>
			</tr>
			<?php  endforeach; ?>
			<?php else: ?>
				<tr>
					<td colspan="3">No Records Found</td>
				</tr>
			<?php endif;?>
		</tbody>
	</table>

  <?=$this->pagination->create_links();?>
</div>

<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
