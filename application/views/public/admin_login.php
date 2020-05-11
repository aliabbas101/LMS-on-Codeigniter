<?php include('public_header.php'); ?>
<div class="card-trans container form_placer" style="margin-top:10%;">
	<?= form_open('login/admin_login'); ?>
  <fieldset>
    <legend>Login</legend>
    <?php if($error = $this->session->flashdata('login_failed')):?>
    <div class="row">
      <div class="col-lg-6">
        <div class="alert alert-dismissible alert-danger">
         <?=$error?>
         </div>
      </div>
  </div>
  <?php endif;?>
    <div class="row">
    	<div class="col-lg-6">
           		 <div class="form-group">
      <label for="inputuname" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">

      	<?= form_input([
         'type'=>'text','name'=>'username','class'=>'form-control','placeholder'=>'','value'=>set_value('username')
      	]); ?>
        
      </div>
    </div>
    	</div>
      <div class="col-lg-6">
      	<?php echo form_error('username'); ?>
      </div>
  </div>

     <div class="row">
     	<div class="col-lg-6">
     	 <div class="form-group">
      <label for="inputpass" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
      	<?= form_input([
         'type'=>'password','name'=>'password','class'=>'form-control','placeholder'=>'*****'
      	]); ?>
        
      </div>
    </div></div>
     	<div class="col-lg-6">
     		<?php echo form_error('password'); ?>
     	</div>
     
      <?php
        echo br(5);
       ?>
        <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <?= form_submit(['type'=>'submit','value'=>'Login','class'=>'btn btn-primary']); ?>
      </div>
    </div>
  </fieldset>
 <?= form_close(); ?>

  
</div>

<?php include('public_footer.php'); ?>
