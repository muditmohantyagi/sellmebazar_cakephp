 <style>
.frmSearch {border: 1px solid #F0F0F0;background-color:#C8EEFD;margin: 2px 0px;padding:40px;}
#country-list{float:left;list-style:none;margin:0;padding:0;width:100%;}
#country-list li{padding: 10px; background:#FAFAFA;border-bottom:#F0F0F0 1px solid;}
#country-list li:hover{background:#F0F0F0;}
#search-box{padding: 10px;border: #F0F0F0 1px solid;}
</style>
 <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Submit a free classified add</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form">
                                    
						<div class="form-group">
						<label class="control-label col-sm-2" for="email">Ad Title:</label>
						<div class="col-sm-10">
						  <input type="email" class="form-control" id="email" placeholder="Enter email">
						</div>
						</div>
                                
						<div class="form-group">
						<label class="control-label col-sm-2" for="email">Category1:</label>
						<div class="col-sm-10">
                            <select class="form-control" id="list">
							<option>slect me</option>
							</select>
						</div>
						</div>
                                    
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">Category2:</label>
						<div class="col-sm-10">
                            <select class="form-control" id="list">
							<option>slect me</option>
							</select>
						</div>
						</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">Category3:</label>
						<div class="col-sm-10">
                            <select class="form-control" id="list">
							<option>slect me</option>
							</select>
						</div>
						</div>						
 						<div class="form-group">
						<label class="control-label col-sm-2" for="email">Prize:</label>
						<div class="col-sm-10">
						  <input type="email" class="form-control" id="email" placeholder="Enter prize">
						</div>
						</div>     
 						<div class="form-group">
						<label class="control-label col-sm-2" for="email">Ad Description:</label>
						<div class="col-sm-10">
                            <textarea rows="5" cols="30" class="form-control" id="message" maxlength="999" style="resize:none" placeholder="Enter ad description"></textarea>
						</div>
						</div> 
 						<div class="form-group">
						<label class="control-label col-sm-2" for="email">Photos:</label>
						<div class="col-sm-10">
							<input id="filebutton" name="filebutton" class="input-file" type="file">
						</div>
						</div>  
						<div class="form-group">
						<label class="control-label col-sm-2" for="email">Name:</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="name" placeholder="Enter your name">
						</div>
						</div>	
						<div class="form-group">
						<label class="control-label col-sm-2" for="number">Mobile:</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="mobile" placeholder="Enter your mobile number">
						</div>
						</div>		
						<div class="form-group">
						<label class="control-label col-sm-2" for="text">City:</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="city" placeholder="Enter your city">
						  <input type="hidden" class="form-control" id="place_id">
						<div id="suggesstion-box"></div>
						</div>
						</div>							
						  <div class="form-group"> 
							<div class="col-sm-offset-2 col-sm-10">
							  <div class="checkbox">
								<label><input type="checkbox"> Remember me</label>
							  </div>
							</div>
						  </div>

						  <div class="form-group"> 
							<div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" class="btn btn-primary">Submit</button>
							</div>
						  </div> 
                            </form>     

                        </div>                     
                    </div>  
					
        </div>
		
<script>
$(document).ready(function(){
	$("#city").keyup(function(){
		var search_text=$("#city").val();
		$.ajax({
		type: "POST",
	    url:"<?php echo $this->request->webroot;?>Ajax/geoCity",		
		data:{'search_text':search_text},
		beforeSend: function(){
			$("#city").css("background","#FFF url(../img/LoaderIcon.gif) no-repeat 380px");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
			$("#city").css("background",'none');
			if(data.length==0)
			{
				$("#place_id").val('');
			}	
		}
		});
	});
});

function selectCountry(city_name,place_id) {
$("#city").val(city_name);
$("#place_id").val(place_id);
$("#suggesstion-box").hide();
}
</script>
<!--				
//https://maps.googleapis.com/maps/api/place/autocomplete/json?input=agra&types=(cities)&components=country:in&key=AIzaSyBSlJqwEnJSwa_kxLySgPEt8QK3nxG74pk
-->
