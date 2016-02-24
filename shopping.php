<div class="pages">
  <div data-page="projects" class="page no-toolbar no-navbar">
    <div class="page-content">
    
     <div class="navbarpages">
       <div class="nav_left_logo"><a href="index.html"><img src="images/toms_logo.png" alt="" title="" /></a></div>
       <div class="nav_right_button"><a href="menu.html"><img src="images/icons/white/menu.png" alt="" title="" /></a></div>
     </div>
     <div id="pages_maincontent">
      
          <h2 class="page_title">Shopping List</h2>
          
          
          <div class="page_content">
          <div class="contactform">
               <form action='includes/insert.php' method='post' id='myform' >
 <p>
 	<input type="text" name="new-task" value="" class="form_input" />
 
 </p>
 <input type="submit" name="submit" class="form_submit" id="submit" value="Send" /> 

 
 <p id='result'></p>
 </form>
 <script src='/includes/insert.js'></script>
                </div>
          

          
          
          
         <div class="wrap">
		<div class="task-list">
			
			<ul>

			<?php 
				require("includes/connect.php");
				$query = mysql_query("SELECT * FROM tasks ORDER BY date ASC, time ASC");
				$numrows = mysql_num_rows($query);
				if($numrows>0){
					while( $row = mysql_fetch_assoc( $query ) ){
						$task_id = $row['id'];
						$task_name = $row['task'];
						echo '<li>
								<span>'.$task_name.'</span>
								<img id="'.$task_id.'" class="delete-button" width="10px" src="images/close.svg" />
							  </li>';
					}
				}
			?>
				
			</ul>
		</div>
	</div><!-- #wrap -->
</body>


          </div>     
          
          
          
      
      </div>
      
      
    </div>
  </div>
</div>