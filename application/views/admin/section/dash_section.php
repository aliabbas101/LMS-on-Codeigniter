<div class="container">
	 
       <div class="btn-group pull-left">
       <?=anchor('Admin/Dashboard','Back to Dashboard',['type'=>'button','class'=>'btn btn-primary']);?>
       </div>
      
	 <div class="btn-group pull-right">
            <?=anchor('sectionmanager/add_section','Add Article',['type'=>'button','class'=>'btn btn-primary']);?>
             <?=anchor('sectionmanager','Section Manager',['type'=>'button','class'=>'btn btn-success']);?>

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
		<table class="table table-striped table-hover">
		<thead>
			<th>Sr. No</th>
			<th>Title</th>
			<th>Action</th>
		</thead>
		<tbody>
    	<?php  if(count($sections)): 
          $count=$this->uri->segment(3);
         	foreach($sections as $section): ?>
			<tr>
				<td><?=++$count;?></td>
				<td><?=$section->title?></td>
				<td>
          <?=anchor("sectionmanager/edit_section/{$section->sid}",'Edit',['class'=>'btn btn-primary','data-toggle'=>'tooltip','data-placement'=>'top','data-original-title'=>'Make changes in your article']); ?>
				  <!--<a href="" class="btn btn-primary">Edit</a>!--> 
				    <?=anchor("sectionmanager/delete_section/{$section->sid}",'Delete',['class'=>'btn btn-danger','data-toggle'=>'tooltip','data-placement'=>'top','data-original-title'=>'Delete this article']); ?>
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
</div>
