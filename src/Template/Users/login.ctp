        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="forgot_password.html">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
						<?php echo $this->Form->create('User',array('id'=>'loginform','class'=>'form-horizontal','role'=>'form')) ?>                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
 
                						<?php 
											echo $this->Form->input('email',array('maxlength'=>50,'type'=>'text','class'=>'validate[required,custom[email]] form-control','placeholder'=>'email','div'=>false,'label'=>false));
										?>
							</div>
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

									<?php
										echo $this->Form->input('password',array('maxlength'=>10,'type'=>'password','class'=>'validate[required] form-control','placeholder'=>'password','div'=>false,'label'=>false));
									?>
							</div>
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <!--<input id="login-remember" type="checkbox" name="remember" value="1">--> 
										  <?php echo $this->Form->checkbox('terms',array('value'=>1));  ?>
										  Remember me
                                        </label>
                                      </div>
                            </div>

							<div style="margin-top:10px" class="form-group">
								<!-- Button -->

								<div class="col-sm-12 controls">
								  <?php echo $this->Form->button('Login',array('type'=>'submit','class'=>'btn btn-success')) ?>
								  <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

								</div>
							</div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
										<?php echo $this->Html->link('Sign Up Here',array('controller'=>'Users','action'=>'registration')); ?>
                                        </div>
                                    </div>
                                </div>    
                        <?php $this->Form->end(); ?>  
                        </div>                     
                    </div>  
        </div>
		<script>
$(document).ready(function(){
    $("#loginform").validationEngine('attach', {promptPosition : "centerRight"});
   });
</script>	