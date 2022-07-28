<div >
  <h2>Suspend Users</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">User Email</th>
        <th class="text-center">User Name</th>
        <th class="text-center">User Status</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "./config/dbconnect.php";
      $sql="SELECT * from user_details";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
         
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["user_email"]?></td>
      <td><?=$row["user_name"]?></td>      
      <td><?=$row["user_status"]?></td>     
      <td><button class="btn btn-danger" style="height:40px"  onclick="userSuspend('<?=$row['user_id']?>')">Suspend</button></td>
      </tr>
      <?php
            $count=$count+1;
            
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add New User
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New User</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addUser.php" method="POST">
            
            <div class="form-group">
              <label for>User Name:</label>
                <input type="text" name="user_name"
						class="txtField" /><span id="user_name" class="required"></span>
  
              
            </div>
            <div class="form-group">
              <label for>User Email:</label>
              <input type="text" name="user_email"
						class="txtField" /><span id="user_email" class="required"></span>
            </div>
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add User</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   