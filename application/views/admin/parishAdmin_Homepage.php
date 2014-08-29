<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<html>
<head>
    
	<link href = "<?php echo base_url(); ?>/html_attrib/adminStyles/css/bootstrap.css" rel = "stylesheet">
    <link href = "<?php echo base_url(); ?>/html_attrib/adminStyles/css/style.css" rel = "stylesheet">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url(); ?>/html_attrib/adminStyles/js/bootstrap.min.js"></script>
 	<script src="<?php echo base_url(); ?>/html_attrib/adminStyles/js/ajaxfileupload.js"></script>
    <script src="<?php echo base_url(); ?>/html_attrib/adminStyles/js/parishadmin_script.js"></script>    
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
</head>



<body>

<div id="base_url" data-base_url="<?php echo base_url(); ?>"></div>
<div class="col-md-12">
	<div class="uppertable"></div>
</div>
<div class="col-md-12">
	<div class="tableadmin">
		<div class="col-md-12">
			<table class="tableheader">
			<tr>
        <td><h4><a href="<?php echo base_url(); ?>index.php/validate/logout" style="margin-left:390px;">LOG-OUT</a></td>
			</tr>
			</table>

			<div class="col-md-12">
				<div class="divborder"></div>
        <div><h4 style="margin-left: 40%">PARISH LIST</h4></div>
				<div class="divborder"></div>
        <div>
          <table class="tablemanage">
            <tr>
            </tr> 
          </table>
        </div>
			   
         <div>
			 <table class="tabledata" id="parish_table">
					<tr class="row">
						<td class="tdparish">
							<font class="fontparish"><?php echo $parish; ?></font>
						</td>
						
						<td>
							<a style="margin-left:5px;" id="ckEditor" href="<?php echo base_url(); ?>index.php/ck_ourparish/showpage">CKEditor</a>
						</td>
						
						<td>
							<a style="margin-left:5px;" data-toggle="modal" data-backdrop="static" data-target="#desc" data-id="<?php echo $parish_id; ?>" id="editDetails">Edit</a>
						</td>
						
						<td>
							<a style="margin-left:5px;" data-toggle="modal" data-backdrop="static" data-target="#managesched" data-id="<?php echo $parish_id; ?>" id="editSchedules">Schedule</a>
						</td>
						<td>
							<a style="margin-left:5px;" data-toggle="modal" data-backdrop="static" data-target="#news" data-id="<?php echo $parish_id; ?>" id="editNews">News</a>
						</td>
					
					</tr>
			</table>
         </div>

      </div>	
		</div>
	</div>
</div>


<!-- Main schedule page -->
<div class="modal fade" id="managesched" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal_width">
    <div class="modal-content modal_background">
      
      <div class="modal-header modal_bheader">
        <h4 class="modal-title" id="myModalLabel">MANAGE SCHEDULE</h4>
      </div>
      
      <div class="modal-header">
         <table>
         <tr>
            <td><a id="getBapt"><h5>BAPTISM SCHEDULES</h5></a></td>
            <td><a id="getConfe"><h5 style="margin-left:60px;">CONFESSIONS SCHEDULES</h5></a></td>
            <td><a id="getConfi"><h5 style="margin-left:60px;">CONFIRMATIONS SCHEDULES</h5></a></td>
            <td><a id="getMass"><h5 style="margin-left:60px;">MASS SCHEDULES</h5></a></td>
         </tr>
         </table>
      </div>
        
      <div class="modal-body modal_managesched" id="modalbody">  
      </div>
      
      <div class="modal-footer">
        <button type="button"  class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>  

<!-- Start of Edit Location modal-->

<div class="modal fade" id="desc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal_background">
      <div class="modal-header modal_bheader">
        <h4 class="modal-title" id="myModalLabel">EDIT INFORMATION</h4>
      </div>

	    <div id="editDesc_PID" value=""></div>
	    <div class="modal-body" style="margin-bottom:3px;">
	      <div><h4 style="margin-left:180px;">Profile Parish Picture</h4></div>
         
		 <!-- start of uploaddd-->
		 
		 
		    
         <div id="upload-area">
            <div id="preview">
              <img width="100px" height="100px" src="<?php echo base_url(); ?>html_attrib/parishStyles/images/parishcovers/default.jpg" id="thumb" data-id="" >
            </div>

             <label>Upload a Picture of the Parish</label>
			  <table>
				<tr>  
					<form id="uploadForm" enctype="multipart/form-data">     
						<td><input type="file" size="20" id="imageUpload" name="imageUpload"></td>
						<td>
						   
						   <button class="button" type="submit">Upload</button>
						</td>
					</form>
				</tr>
			  </table>
           
          </div>
		
		<!-- emd of uploadddd-->
      <form id="editDescForm">		
        <div><h4 style="margin-left:180px;">Locations</h4></div>
		<div class="form-group">
	      <label for="labelparishadd">Street</label>
	      <select class="form-control" name="street" id="street">
          </select> 
	    </div>
		<div class="form-group">
			<label for="labelforcity">Barangay</label>
			<select class="form-control" name="barangay" id="barangay"></select>
		</div>
		<div class="form-group">
		<label for="labelfortown">Town / City</label>
			<select class="form-control" name="town" id="towncity">
			</select> 		
		</div>
	<div class="form-group">
    <label for="labelfortnumber">Description</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description">
    </div>
    <div class="form-group">
    <label for="labelfortnumber">Telephone/Cellphone #</label>
    <input type="text" class="form-control" id="tnumber" name="tnumber" placeholder="Enter Number">
    </div>
	    </div>
	    <div class="modal-footer modal_bfooter">
	      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" data-toggle="modal" data-target="#notiedit" class="btn btn-primary" value="Save Changes">
	    </div>
	  </form>
    </div>    
  </div>
</div>  

<!--End of Edit description modal -->

<!--notification para edit location -->
<div class="modal fade" id="notiedit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal_noti modal_notisizesw">
    <div class="modal-content modal_background">
      <div class="modal-header modal_bheader" style="height:35px;">
        <font class="modal-title" id="myModalLabel">STATUS</font>
      </div>
 
          <div class="modal-body modal_background modal_notisizeh" style="margin-bottom:3px;">
            <font style="margin-left:55px;">SAVED</font>
          </div>
      

    </div>
  </div>
</div>   

<!-- Start of Edit News modal-->
<div class="modal fade" id="news" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal_background">
      <div class="modal-header modal_bheader">
        <h4 class="modal-title" id="myModalLabel">EDIT NEWS</h4>
      </div>

	    <div class="modal-body" style="margin-bottom:3px;">
	      
         
		<form id="editNews">		
		<div class="form-group">
    	<label for="labelfortnumber">Title</label>
    	<input type="text" class="form-control" id="title" name="title" placeholder="Enter News Title">
    	</div>
    	<div class="form-group">
    	<label for="labelfortnumber">Content</label>
    	<textarea class="form-control textarea_edit" rows="5"></textarea>
    	</div>
		 
		  <table>
	
			<tr>
				<td>
					<h4 style="margin-bottom:10px;">Date</h4>
				</td>	
				<td>
					<div>
						<select class="form-control" name="month">
							<option value='1'>January</option>
							<option value='2'>February</option>
							<option value='3'>March</option>
							<option value='4'>April</option>
							<option value='5'>May</option>
							<option value='6'>June</option>
							<option value='7'>July</option>
							<option value='8'>August</option>
							<option value='9'>September</option>
							<option value='10'>October</option>
							<option value='11'>November</option>
							<option value='12'>December</option>
						</select>
					</div>	
				</td>

				<td>
					<div>
						<select class="form-control" name="day">
							<option value='1'>1</option>
							<option value='2'>2</option>
							<option value='3'>3</option>
							<option value='4'>4</option>
							<option value='5'>5</option>
							<option value='6'>6</option>
							<option value='7'>7</option>
							<option value='8'>8</option>
							<option value='9'>9</option>
							<option value='10'>10</option>
							<option value='11'>11</option>
							<option value='12'>12</option>
							<option value='13'>13</option>
							<option value='14'>14</option>
							<option value='15'>15</option>
							<option value='16'>16</option>
							<option value='17'>17</option>
							<option value='18'>18</option>
							<option value='19'>19</option>
							<option value='20'>20</option>
							<option value='21'>21</option>
							<option value='22'>22</option>
							<option value='23'>23</option>
							<option value='24'>24</option>
							<option value='25'>25</option>
							<option value='26'>26</option>
							<option value='27'>27</option>
							<option value='28'>28</option>
							<option value='29'>29</option>
							<option value='30'>30</option>
							<option value='31'>31</option>
						</select>
					</div>	
				</td>

				<td>
					<div>
						<select class="form-control" name="year">
							<option value='1'>2014</option>
							<option value='2'>2015</option>
							<option value='3'>2016</option>
							<option value='4'>2017</option>
							<option value='5'>2018</option>
							<option value='6'>2019</option>
							<option value='7'>2020</option>
							<option value='8'>2021</option>
							<option value='9'>2022</option>
						</select>
					</div>	
				</td>
			</tr>
			
	    </table>
		 
		    
       
     
	    </div>
	    <div class="modal-footer modal_bfooter">
	      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" data-toggle="modal" data-target="#notiedit" class="btn btn-primary" value="Save Changes">
	    </div>
	  </form>
    </div>    
  </div>
</div>  

<!--End of Edit description modal -->

<!--notification para edit location -->
<div class="modal fade" id="notiedit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal_noti modal_notisizesw">
    <div class="modal-content modal_background">
      <div class="modal-header modal_bheader" style="height:35px;">
        <font class="modal-title" id="myModalLabel">STATUS</font>
      </div>
 
          <div class="modal-body modal_background modal_notisizeh" style="margin-bottom:3px;">
            <font style="margin-left:55px;">SAVED</font>
          </div>
      

    </div>
  </div>
</div>   


<!--End of Edit News modal -->

</body>
</html>

   