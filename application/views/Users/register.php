<div class="well">
   <?php if($this->session->flashdata('user_registration_error')) : ?>
   <p class="alert alert-dismissable alert-success text-center"><?php echo $this->session->flashdata('user_registration_error');?></p>
   <?php endif; ?>
   
   <h1>Register</h1>
   <p>Please fill out the form below to create an account</p>
   <!--Display user_exist Errors-->
   <?php if($this->session->flashdata('user_exist')) : ?>
   <p class="alert alert-dismissable alert-danger text-center"><?php echo $this->session->flashdata('user_exist');?></p>
   <?php endif; ?>
   <!-- form vlaidation errors -->
   <?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
   <?php $attributes = array('id' => 'login_form','class'=> 'form-horizontal','role'=>'form');?>
   <?php echo form_open('Users/createUser',$attributes); ?>
   <!--field: Name-->
   <p>
      <?php echo form_label('Name:'); ?> <!--Form label to be displayed on the view, this will also be used for validation -->
      <?php
         $data = array(
         	'name'  => 'name',// Name to be used in posting the value to our database
         	'value' => set_value('name'), //same thing as writing value = "name" in pure html
         	'class' => 'form-control' //assigning a class to this input, you can also asign id and other input properties
         	);
         	?>
      <?php echo form_input($data); ?>
   </p>
   <!--field: Gender-->
   <p>
      <?php echo form_label('Gender:');?>
      <?php 
         $options = array(
                 'male'    => 'Male',//dropdown option
                 'female'    => 'Female' //dropdown option   
                );
              ?>
      <?php echo form_dropdown('gender', $options,set_value('gender')); ?> <!--initialize the gender options to be set on the select field -->
   </p>
   <!--field: Username-->
   <p>
      <?php echo form_label('Username:'); ?>
      <?php
         $data = array(
         	'name'  => 'username',
         	'value' => set_value('username'),
         	'class' => 'form-control'
         	);
         
         	?>
      <?php echo form_input($data); ?>
   </p>
   <!--field: Password-->
   <p>
      <?php echo form_label('Password:'); ?>
      <?php
         $data = array(
         	'name'  => 'password',
         	'value' => set_value('password'),
         	'class' => 'form-control'
         	);
         
         	?>
      <?php echo form_password($data); ?>
   </p>
   <!--field: Confirm Password-->
   <p>
      <?php echo form_label('Confirm Password:'); ?>
      <?php
         $data = array(
         	'name'  => 'password2',
         	'value' => set_value('password'),
         	'class' => 'form-control'
         	);
         
         	?>
      <?php echo form_password($data); ?>
   </p>
   <!--field: Submit Buttons-->
   <p class="submit-button-box">
      <?php
         $data = array(
         	'name'  => 'submit',
         	'value' => 'Submit',
         	'class' => 'btn btn-primary'
         	);
         
         	?>
      <?php echo form_submit($data); ?>
   </p>
   <?php echo form_close(); ?>
</div>

