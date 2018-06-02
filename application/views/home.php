<?php if($this->session->flashdata('registration_success')) : ?>
<p class="alert alert-dismissable alert-success text-center"><?php echo $this->session->flashdata('registration_success');?></p>
<?php endif; ?>
<div class="home-div text-center" style="width:100%">
   <h1>CodeIgniter Form Handling</h1>
   <p>Secure form handling in CodeIgniter using a user registration form</p>
   <hr/>
   <h2 class="text-center home-text">Welcome to our awesome app</h2>
</div>