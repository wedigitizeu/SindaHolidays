<?php
error_reporting(0);
session_start();
include_once('../db/db.php');
?>
<?php include_once('session.php');?>

<?php
/*Getting ID of particular Tour Package starts*/
if(isset($_GET['id']))
{
	$id=$_GET['id'];

$sel="SELECT * FROM `package_tours` WHERE id=$id";
		$exe=mysqli_query($conn,$sel);
		if(mysqli_num_rows($exe)==0)
		{
			echo "Error while fetching Short Desc. Image";
		}
		else
		{
			$data=mysqli_fetch_assoc($exe);
			

		}
	

}
/*Getting ID of particular Tour Package ends*/


?>
	

<!DOCTYPE html>
<html lang="en">
  <head>
		
    <!----------HEADER STARST--------->
  
		<?php include_once('header.php');?>
  
	<!------------HEADER ENDS----------->
	

	
<script>
$(document).ready(function(){
	
	$("#insName").change(function(){

		$.post("fetch-institute-name.php",{},function(data){

			$("#insNameres").html(data);
	});

	});

	
	
/************************ADDING NEW PACKAGE STARTS**********************/

	$("#package_btn").click(function (){
		var name=$("#package_name").val();
		$.post("add-new-package.php",{name:name},function(data){

			$("#inst").html(data);
			
		});
	});

	$("#mobile").keyup(function (){
		
		var mobile=$("#mobile").val();
		
		$.post("check-mobile-ajax.php",{mobile:mobile},function(data){
					
					$("#result").html(data);
				});
		
		
	});
	/*********************ADDING NEW PACKAGE ENDS**********************/
});

</script>
</head>

  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php include_once('menu.php')?>
    <main class="app-content">
      
        <div class="app-title">
        <div>
          <h1><i class="fa fa-bell-o"></i> Edit <?php echo $data['title']; ?></h1>
          <p>If you are not emotionally involved, your client is not getting your best effort.</p>
        </div>
       
      </div>
	  

	         <!--------Modal starts----------->


<div class="container">
  
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <p>
          	
          	
        <div class="form-group">
            <label for="exampleInputEmail1">Add New Package</label>
            
		<input class="form-control" id="package_name" type="text" name="name" required />
					
        </div>
		
	<input class="btn btn-danger" type="reset" value="Clear" />
<input class="btn btn-success" type="submit" id="package_btn" value="Update" 
name="up"/>
<p style="font-weight:bold;font-size:16px" id="inst"></p>
			
                
               
	   

          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
            <!-------Modal Ends------------>

<!--------form-------->
 <form method="post" action="update-tour-package.php" enctype="multipart/form-data">
<div class="row">
    <div class="col-md-12">
    <div class="tile">
    	
    	<!-- Trigger the modal with a button -->
    	<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" id="addinstitute">Add New Package</button>
    	<div class="form-group">
					
						
			<br>
			<label for="exampleInputEmail1">Package Category</label>	
		<div >		

 		<input type="text" id="package" name="package" class="form-control" placeholder="Search here...." value="<?php echo $data['package']?>">


          </div>

          <div >		

 		<input type="text" id="package" name="id" class="form-control" value="<?php echo $data['id']?>" hidden>


          </div>

          <ul id="searchResult" class="form-control" style="text-decoration:none;list-style-type: none">
					
					
					

				</ul>


			<script >
				function goto()
				{
					$("#package").val($(this).text());
					$("#searchResult").css('display','none');
					
				}
				$(document).ready(function()
					{
						$("#searchResult").css('display','none');

						$("#package").mouseover(function()
							{
								$('ul').css('cursor','pointer');
								
							});
					$("#package").keyup(function()
							{
								
								$("#searchResult").css('display','block');
								var searchpackage=$("#package").val();

								$.post("search-package.php",{searchpackage:searchpackage},function(data)
									{

									$("#searchResult").html(data);	
									$('li').click(goto);	

									});	

							});
						
					});
				


			</script>	
			  
						
					
				</div>
				
  
    <div class="tile-body">

        <div class="form-group">
            <label for="exampleInputEmail1">Package Title</label>
            <input class="form-control"  type="text" id="title" name="title" placeholder="Ex: Kerala Tour Package" value="<?php echo $data['title']?>" />
					
        </div>

           <div class="form-group">

           	<img width="150px" height="150px;" src="../assets/images/tour-packages/<?php echo $data['image']?>" >
           </div>
         <div class="form-group">
                <label for="exampleInputEmail1">Upload Photo (555 X 555)</label>
                  <input class="form-control"  type="file" name="photo">
                  
          
          </div>

           <div class="form-group">
                <label for="exampleInputEmail1">Image1  alt</label>
                 <input class="form-control"  type="text" value="<?php echo $data['alt1']?>"  name="alt1">
          
          </div>
				  

		<div class="form-group">
            <label for="exampleInputEmail1">Trip Days</label>
            <input class="form-control" id="days" name="days" type="number" 
            placeholder="In Days Ex:6"  value="<?php echo $data['days']?>"/>
			
        </div>
				  
		
                
		<div class="form-group">
			
            <label class="control-label">Short Description</label>
            <span style="color:red"id="characterLeft"></span><span> Charcter/s Left</span>
            <textarea class="form-control" rows="6" id="short_desc"
            name="short_desc" placeholder="Maximum 200 Letters"><?php echo $data['short_desc']?>
            </textarea>
        </div>
				<br><br><br>
    </div>
    </div>
    </div>
        
        
        <div class="clearix"></div>
        
</div>
	   
	  
	  <!----- Long Description------>

	   <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">
            	Description
            </h3>
            <div class="form-group">
            	<img width="150px" height="150px;" src="../assets/images/view-more-image/<?php echo $data['view-more-image']?>" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Upload Photo (671 X 353)</label>
                    <input class="form-control"  type="file" name="image2">
          
          </div>

           <div class="form-group">
                <label for="exampleInputEmail1">Image2  alt</label>
                 <input class="form-control"  type="text" value="<?php echo $data['alt2']?>"  name="alt2">
          
          </div>
            <div class="tile-body">
             
              	 <div class="form-group col-md-3">
                  
                   <textarea id="editor1" rows="10" cols="80" name="editor1"><?php echo $data['long_desc']?>"
                   	
                   </textarea>
                   	<br><br>
                    <div class="tile-body">
              <input class="btn btn-danger" type="reset" value="Clear" />
       <input class="btn btn-success" type="submit" value="Update"  name="up"/>
			</div>
                </div>
            </div>
          </div>
        </div>
	  </form>
	   
	   
	 
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
   	<script src="ckeditor/ckeditor/ckeditor.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
	<script type="text/javascript" src="js/plugins/select2.min.js"></script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
	  
	  $('#demoSelect').select2();
    </script>

    <!---CK EDITOR------------->

    	<script>
			CKEDITOR.replace( 'editor1',{

				width: '950px'


      			

			} );
		</script>
		<script>
			CKEDITOR.on('dialogDefination',function(e)
			{
					dialogName=e.data.name;
					console.log(dialogName);
			}
		)
		</script>
    <!---CK EDITOR ENDS------------>
  </body>
</html>