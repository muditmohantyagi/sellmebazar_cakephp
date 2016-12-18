    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">www.sellmebazar.com</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">

					<li>
						<?php  echo $this->Html->link('<i class="glyphicon glyphicon-home"></i>',array('controller'=>'Users','action'=>'index'),array('class'=>'btn btn-large btn-primary',
						'style'=>'background-color: rgb(255, 119, 0); color: white;border-radius:4px','escape' => false));
						 ?>
					</li>
				<?php
				if($this->request->session()->read('Auth.User.id'))
				{
				?>
					<li>
						<?php  echo $this->Html->link('<i class="glyphicon glyphicon-th-large"></i> Dashboard',array('controller'=>'Dashboard','action'=>'index'),array('class'=>'btn btn-large btn-primary',
						'style'=>'background-color: rgb(255, 119, 0); color: white;border-radius:4px','escape' => false));
						 ?>
					</li>
		  <?php }else{ ?>		
					<li>
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-user"></i> My Account',array('controller'=>'Users','action'=>'login'),array('class'=>'btn btn-large btn-primary',
						'style'=>'background-color: rgb(255, 119, 0); color: white;border-radius:4px','escape' => false));
						 ?>
					</li>
		  <?php } ?>			
					<li>
						<?php  echo $this->Html->link('<i class="glyphicon glyphicon-upload"></i> Submit a Free Add',array('controller'=>'Users','action'=>'submitAdd'),array('class'=>'btn btn-large btn-primary',
						'style'=>'background-color: rgb(255, 119, 0); color: white;border-radius:4px','escape' => false));
						 ?>
					</li>
				<?php
				if($this->request->session()->read('Auth.User.id'))
				{
				?>
					<li>
						<?php  echo $this->Html->link('<i class="glyphicon glyphicon-option-vertical"></i> Log out',array('controller'=>'Users','action'=>'logout'),array('class'=>'btn btn-large btn-primary',
						'style'=>'background-color: rgb(255, 119, 0); color: white;border-radius:4px','escape' => false));
						 ?>
		
					</li>
			<?php } ?>		
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>