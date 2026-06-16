 <?php
  ini_set('display_errors', 'ON');
  error_reporting(E_ALL);

  require 'config/database.php';
  require 'class/student.php';

  $database = new Database();
  $conn = $database->connect();

  $student = new student($conn);
  $Stud = $student->get_all();
  ?>
 <table border="5px">
   <tr>
     <th>ID</th>
     <th>NAME</th>
     <th>EMAIL</th>
     <th>AGE</th>
   </tr>
   <?php foreach ($Stud as $row) {  ?>
     <tr>
       <td><?php echo $row['id']  ?></td>
       <td><?php echo $row['name'] ?></td>
       <td><?php echo $row['email']  ?></td>
       <td><?php echo $row['age']  ?></td>
     </tr>

  

 <?php } ?>
 </table>