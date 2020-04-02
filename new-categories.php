
      			
  



<div class="widget widget-new-ctg">
              <h4 class="widget-title">news categories</h4>
              <ul class="cars-list">

             <?php
             	$sel="SELECT DISTINCT name FROM `packages`ORDER BY id DESC";
             	$exe=mysqli_query($conn,$sel);
             	if(mysqli_num_rows($exe)==0)
                {

               	?>
                   
                <li>
                	<a href="international-tour-package.php">No Packages Found</a>
                </li>
				
			<?php	
				}

				else
				{

					while($data=mysqli_fetch_assoc($exe))
                    {


             ?>
             			 <li>
             			 	<a href="tour-package.php?package=<?php echo $data['name']?>">
             			 	<?php echo $data['name']?>
             			 		
             			 	</a></li>

			<?php

				}
			}


             ?>
               
                
              </ul>
</div>