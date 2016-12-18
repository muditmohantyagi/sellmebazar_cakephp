<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Registration</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
							<?php echo $this->Form->create($user,array('id'=>'registration','class'=>'form-horizontal','role'=>'form')) ?>                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<?php  
										echo $this->Form->input('email',array('required'=>false,'maxlength'=>50,'type'=>'text','class'=>'validate[required,custom[email],minSize[10],maxSize[50]] form-control','placeholder'=>'email','div'=>false,'label'=>false));
										?>
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<?php
										echo $this->Form->input('password',array('required'=>false,'maxlength'=>10,'type'=>'password','class'=>'validate[required,custom[onlyLetterNumber],minSize[5],maxSize[10]] form-control','placeholder'=>'password','div'=>false,'label'=>false));
									?>
                            </div>
							<div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<?php
										echo $this->Form->input('conform_password',array('required'=>false,'maxlength'=>10,'type'=>'password','class'=>'validate[required,equals[password]] form-control','placeholder'=>'Re-enter password','div'=>false,'label'=>false));
									?>

							</div>
                                    
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
											<?php echo $this->Form->checkbox('terms',array('class'=>'validate[required]'));  ?>										 
										 Terms and conditions
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
									 <?php echo $this->Form->button('Register',array('type'=>'submit','class'=>'btn btn-success')) ?>
                                      <a id="btn-fblogin" href="#" class="btn btn-primary">Register with Facebook</a>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Already have an account! 
										<?php echo $this->Html->link('Login',array('controller'=>'Users','action'=>'login','hidden'=>false)); ?>

                                        </div>
                                    </div>
                                </div>    
                        <?php $this->Form->end(); ?>  
                        </div>                     
                    </div>  
        </div>
<script>
$(document).ready(function(){
    $("#registration").validationEngine('attach', {promptPosition : "centerRight"});
   });
</script>		
