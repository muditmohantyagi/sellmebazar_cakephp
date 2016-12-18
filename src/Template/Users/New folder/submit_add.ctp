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
/*         $(function() {
		//$('#city').keyup(function(){
			$(window).on('keypress', function(e) {
///
var search_text=$("#city").val();
//alert('tttt');
		 $.ajax({
		     'type':'post',
			 'url':'<?php echo $this->request->webroot;?>Ajax/geoCity',
			 'data':{'search_text':search_text},
			 'success':function(data)
			 {
				 var parsed=JSON.parse(data);
				 m=JSON.stringify(parsed);
				//alert(parsed.length); 
			if(parsed.length>0)
			{				
		   $('#city').magicsearch({
                dataSource: parsed,
                fields: ['description'],
                id: 'place_id',
                format: '%description%',
				focusShow: true
            });
			}
				//alert(m)
				console.log(m);			 
			 }
		 }) */

///			
            /* var dataSource = [
                {id: 1, firstName: 'Tim'},
                {id: 2, firstName: 'Eric'},
                {id: 3, firstName: 'Victor'},
                {id: 4, firstName: 'Lisa'},
                {id: 5, firstName: 'Oliver'},
                {id: 6, firstName: 'Zade'},
                {id: 7, firstName: 'David'},
                {id: 8, firstName: 'George'},
                {id: 9, firstName: 'Tony'},
                {id: 10, firstName: 'Bruce'},
            ]; */
/*             $('#city').magicsearch({
                dataSource: dataSource,
                fields: ['firstName'],
                id: 'id',
                format: '%firstName%'
            }); */
        //});
        //});
				//https://maps.googleapis.com/maps/api/place/autocomplete/json?input=agra&types=(cities)&components=country:in&key=AIzaSyBSlJqwEnJSwa_kxLySgPEt8QK3nxG74pk
/* 		   $('#city').magicsearch({
                dataSource: parsed,
                fields: ['description'],
                id: 'place_id',
                format: '%description%',
				focusShow: true
            }); */
				
	$('#city').magicsearch({

  // array or string or function or url (for AJAX)
  dataSource: '<?php echo $this->request->webroot;?>Ajax/geoCity',       

  // 'ajax'  
  type: 'ajax',

  // ajax options
  ajaxOptions: {
				'type':'post',
				'data':{'search_text':$("#city").val()}
				},

  // unique id
  id: 'place_id',  

  // generate input[type="hidden"]?
  hidden: true, 

  // string or array to search through
  fields: ['description'],  

  // data format           
  format: '%description%',   

  // input format
  inputFormat: '',

  // max number of results
  maxShow: 5, 

  // clear the input when no option is selected
  isClear: false,

  // show selected options
  showSelected: true,

  // show dropdown button
  dropdownBtn: false,

  // max number of results in the dropdown
  dropdownMaxItem: 8,

  // multiple select
  multiple: false, 

  // true = no limit
  maxItem: true,

  // show multiple skins
  showMultiSkin: true,

  // multiple styles
  multiStyle: {},

  // multiple fields
  multiField: '', 

  // show on focus
  focusShow: false,

  // text when no results
  noResult: '',

  // custom skin
  skin: '', 

  // callbacks
  disableRule: function(data) {
      return false;
  },
  success: function(data) {
      var parsed=JSON.parse(data);
	  return parsed;
  },
  afterDelete: function($input, data) {
      return true;
  }
  
});			
    </script>

