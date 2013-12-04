<!-- Form Velidation--> 
    
 <script type="text/javascript">
function validateForm()
{
	
	
	 var n=document.forms["myForm"]["date"].value;
  if (n==null || n=="")
  {
  alert("Date field can't be empty");
  return false;
  }	
	//Number velidation -
	 var n=document.forms["myForm"]["client_number"].value;
  if (n==null || n=="")
  {
  alert("Client Number field can't be empty");
  return false;
  }
  
    //name velidation -
	 var n=document.forms["myForm"]["client_name"].value;
  if (n==null || n=="")
  {
  alert("Namefield can't be empty");
  return false;
  }
  
  //phone velidation -
	 var n=document.forms["myForm"]["client_phone"].value;
  if (n==null || n=="")
  {
  alert("Client Phone field can't be empty");
  return false;
  }
  
  //address velidation -
	 var n=document.forms["myForm"]["client_address"].value;
  if (n==null || n=="")
  {
  alert("Address field can't be empty");
  return false;
  }  
  
    //block velidation -
	 var n=document.forms["myForm"]["client_block"].value;
  if (n==null || n=="")
  {
  alert("Block field can't be empty");
  return false;
  }  
  
    //land velidation -
	 var n=document.forms["myForm"]["client_land"].value;
  if (n==null || n=="")
  {
  alert("Land Quality can't be empty");
  return false;
  }  
  
    //Tquality velidation -
	 var n=document.forms["myForm"]["quality"].value;
  if (n==null || n=="")
  {
  alert("Quality field can't be empty");
  return false;
  }  
  
    //price velidation -
	 var n=document.forms["myForm"]["client_priceofperkatha"].value;
  if (n==null || n=="")
  {
  alert("Price field can't be empty");
  return false;
  }  
    //follow Update velidation -
	 var n=document.forms["myForm"]["follow_update"].value;
  if (n==null || n=="")
  {
  alert("Follow Update field can't be empty");
  return false;
  }  
    //comment velidation -
	 var n=document.forms["myForm"]["client_comment1"].value;
  if (n==null || n=="")
  {
  alert("Comment field can't be empty");
  return false;
  }  
    //comment velidation -
	 var n=document.forms["myForm"]["client_comment2"].value;
  if (n==null || n=="")
  {
  alert("Comment field can't be empty");
  return false;
  }   
}
</script>

<center>
<?php 
   if(isset($_SESSION['error']))
   
   {
	   
	   if($_SESSION['error']==1){
	   
	   echo "<h1>Not Successfully Inserted</h1>";
	   }
	   
	   elseif($_SESSION['error']==2) {
		   
		   echo "<h1>Successfully Inserted</h1>";
		   }
	   
	   } 
	   unset($_SESSION['error']);
	   
	   ?>
       </center>
		<div id="right_side">
        <table align="right" class="table">
                    	<tr>
                        	<td><span class="name">Search</span></td>
                            <td><input class="search" name="search" /></td>                            
                        </tr>
                    </table><div class="clear"></div>
            	        <form  enctype="multipart/form-data" action="adding_client_information.php" method="post"  name="myForm" onsubmit="return validateForm()">    
 
                    <table align="right" class="table">
                    	<tr class="row">
                        	<td><span class="name">Date</span></td>
                            <td><input type="date" class="date" name="date" id="datepick2"  /></td>
                        </tr>
						
            <script type="text/javascript" src="datepickr.min.js"></script>
   <script type="text/javascript">
			
			new datepickr('datepick2', {
				'dateFormat': 'Y-m-d'
				//'dateFormat': 'm/d/y'
			});
			
			
		</script>
             
                    </table><div class="clear"></div>
                    
                     <table align="right" class="table">
                    	<tr class="row">
                        	<td><span class="name">No</span></td>
                            <td><input class="number" name="client_number" /></td>
                            
                            <td><span class="name">Name</span></td>
                            <td><input class="name_box" name="client_name" /></td>
                            
                            <td><span class="name">Phone</span></td>
                            <td><input class="phone" name="client_phone" /></td>
                        </tr>
                    </table>
                    
                    <table align="right" class="table">
                    	<tr class="row">
                        	<td><span class="name">Address</span></td>
                            <td><textarea class="address" name="client_address"></textarea></td>
                        </tr>
                    </table>
                    
                    <table align="right" class="table">
                    	<tr class="row">
                        	<td><span class="name">Block</span></td>
                            <td><input class="number" name="client_block" /></td>
                            
                            <td><span class="name">Land Quality</span></td>
                            <td><input class="land" name="client_land" /></td>
                            <td><input class="land1" name="quality" value="Katha" /></td>
                            
                            <td><span class="name">Price of Per Katha</span></td>
                            <td><input class="price" name="client_priceofperkatha" value=".00" /></td>
                        </tr>
                    </table><div class="clear"></div>
                    
                    <table class="table">
                    	<tr class="row">
                        	<td><span class="for_client">For Clients Comments</span></td>
                            
                            <td><span class="follow_name">Follow update</span></td>
                            <td><input class="follow" name="follow_update" /></td>
                        </tr>
                    </table>
                    
                    <table>
                    	<tr class="row">
                        	<td><textarea class="message" name="client_comment1"></textarea></td>
                        </tr>
                    </table>
                    
                    <table>
                    	<tr class="row">
                        	<td><span class="follow_name1">For Clients Comments</span></td><br />
                        </tr>
                    	<tr class="row">
                         	<td><textarea class="message" name="client_comment2"></textarea></td>
                        </tr>
                    </table>
                    
                    <button type="submit" class="submit">Submit</button>
                </form>
                
                <div id="footer">
                	<div class="foot"></div>
                </div><!--end footer-->
            </div><!--end right_side-->