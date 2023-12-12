<?php  
//export.php  
include 'db.php';
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM students order by 1 desc";
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
                         <th>Barangay</th>
                         <th>Town</th>  
                         <th>Province</th>
                          <th>Zipcode</th>
                          <th>Parent</th> 
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
                         <td>'.$row["barangay"] .'</td> 
                          <td>'.$row["town"] .'</td> 
                        <td>'.$row["province"].'</td>  
                        <td>'.$row["zipcode"].'</td>
                         <td>'.$row["parent"] .'</td>  
                        <td>'.$row["login_id"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Students_all_Cards_Data.xls');
  echo $output;
 }
}
?>