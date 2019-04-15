<?php include("nav.php"); ?>
         <!-- task list card-->
     <div class="box4">
          <div class="card" >
               <div class="card-header"><b>&nbsp;&nbsp;&nbsp;&nbsp;Tasks</b><hr width="100%", color="black"></div>        
               <div class="card-body text">
               <h5 class="card-title"></h5>
               <p class="card-text">This card will list the tasks entered from the New Task card.<br>-Task1<br>-Task2<br>-Task3
               </p>
               </div>
          </div>
                 <!-- New task card/ entry-->
          <div class="card" >
               <div class="card-header"><b>&nbsp;&nbsp;&nbsp;&nbsp;New Task</b><hr width="100%", color="black"></div>            
               <div class="card-body text-primary">
               
               

<div class="formbox">  
 <!-- New task uses NewTask.php to insert new tasks to the other card.-->
<form action:"NewTask.php" method="contact">
    <div>
        <label>Date Of Task:</label>
        <input type="text" name="DOT" placeholder="Date of Task">
    </div>

    <div>
        <label>Starting Time:</label>
        <input type="text" name="Stime" placeholder="Starting Time">
    </div>
    <div>
        <label>End Time:</label><br>
        <input type="text" name="Etime" placeholder="End Time">
    </div>
    <div>
        <label>Task:</label>
        <input type="text" name="Task" placeholder="Task">
    </div>

    <br>
     <!-- Submit button-->
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
