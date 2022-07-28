<div >
  <h2>Registered Participants</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">User Name </th>
        <th class="text-center">User Email</th>
        <th class="text-center">User Status</th>
        
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
      <td><?=$row["user_name"]?> 
      <td><?=$row["user_email"]?></td>
      <td><?=$row["user_status"]?></td>
      
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>