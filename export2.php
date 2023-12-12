<?php  
//export.php  
include 'db.php';
$output = '';
if(isset($_POST["export2"]))
{
 $query = "SELECT * FROM parents_table order by 1 desc";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         <th>First Name</th>  
                         <th>Middle Name</th>  
                         <th>Last Name:</th>  
                         <th>Extension Name:</th>  
                         <th>Birthday</th>
                         <th>Age</th>  
                         <th>Gender</th>
                         <th>Civil Status</th>  
                         <th>Street Number</th> 
                         <th>Address</th>  
                         <th>Barangay</th>
                         <th>Town</th>  
                         <th>Province</th>
                          <th>Zipcode</th>
                          <th>Student</th> 
                           <th>Login_ID</th>

                    </tr>
  ';
  $i = 0;
  while($row = mysqli_fetch_array($result))
  {
    $sid = ++$i;
   $output .= '
    <tr>  
                         <td > '.$sid.' </td>
                         <td>'.$row["firstname"].'</td>  
                         <td>'.$row["middlename"]  .'</td>  
                         <td>'.$row["lastname"].'</td>  
                         <td>'.$row["extensionname"].'</td>  
                         <td>'.$row["birthday"].'</td>  
                         <td>'.$row["age"].'</td> 
                         <td>'.$row["gender"].'</td>  
                         <td>'.$row["civilstatus"].'</td>  
                         <td>'.$row["streetnumber"].'</td> 
                         <td>'.$row["address"].'</td> 
                         <td>'.$row["barangay"] .'</td> 
                          <td>'.$row["town"] .'</td> 
                        <td>'.$row["province"].'</td>  
                        <td>'.$row["zipcode"].'</td>
                         <td>'.$row["student"] .'</td>  
                        <td>'.$row["login_id"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Parents_all_Cards_Data.xls');
  echo $output;
 }
}
?>