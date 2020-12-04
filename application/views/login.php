<?php if($this->session->flashdata('success')){ ?>  
     <div class="alert alert-success">  
       <a href="#" class="close" data-dismiss="alert">&times;</a>  
       <strong>Berhasil !</strong> <?php echo $this->session->flashdata('success'); ?>  
     </div>  
   <?php }?>
	<div class="login-page">
		<div class="form">
		  <form class="register-form" action="<?php echo base_url('auth/do_register'); ?>" method="post">
			<input type="text" placeholder="username" name="username"/>
			<input type="password" placeholder="password" name="password"/>
			<input type="text" placeholder="email address" name="email"/>
			<button>create</button>
			<p class="message">Already registered? <a href="#">Sign In</a></p>
		  </form>
		  <form class="login-form" action="<?php echo base_url('auth/do_login'); ?>" method="post">
			<input type="text" placeholder="username" name="username"/>
			<input type="password" placeholder="password" name="password"/>
			<button>login</button>
			<p class="message">Not registered? <a href="#">Create an account</a></p>
		  </form>
		</div>
	  </div>
