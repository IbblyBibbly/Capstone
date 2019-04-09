<?php include("nav.php"); ?>

     <div class="box4">
          <div class="card" >
               <div class="card-header">Tasks<hr width="100%", color="black"></div>        
               <div class="card-body text">
               <h5 class="card-title">Primary card title</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               </div>
          </div>

          <div class="card" >
               <div class="card-header">New Task<hr width="100%", color="black"></div>            
               <div class="card-body text-primary">
               <h5 class="card-title">Primary card title</h5>
               <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               
<form action:"NewTask.php" method="contact">
    <div>
        <label>DateOfTask</label>
        <input type="text" name="DOT" placeholder="Date of Task">
    </div>

    <div>
        <label>StartingTime</label>
        <input type="text"name="Stime" placeholder="Starting Time">
    </div>
    <div>
        <label>EndTime</label><br>
        <input type="text"name="Etime" placeholder="End Time">
    </div>
    <div>
        <label>Task</label>
        <input type="text"name="Task" placeholder="Task">
    </div>
   <!-- <div class="button">
            <input type="button"
    value="Submit">
    </div>-->
    <br>
<input type="button" class="button" value="Submit">
</form>

</div>

</div><!--end of wrapper-->


               </div>
          </div>
     </div>

   </div>
</body>
</html>
