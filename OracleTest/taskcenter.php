<?php include("nav.php"); ?>

     <div class="box4">
          <div class="card" >
               <div class="card-header">Tasks<hr width="100%", color="black"></div>        
               <div class="card-body text">
               <h5 class="card-title"></h5>
               <p class="card-text">This card will list the tasks entered from the New Task card.<br>-Task1<br>-Task2<br>-Task3
               </p>
               </div>
          </div>

          <div class="card" >
               <div class="card-header">New Task<hr width="100%", color="black"></div>            
               <div class="card-body text-primary">
               <h5 class="card-title">Enter New Task Below</h5>
               <p class="card-text"></p>

<div class="formbox">  

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

</div>

</div><!--end of wrapper-->


               </div>
          </div>
     </div>

   </div>
</body>
</html>
