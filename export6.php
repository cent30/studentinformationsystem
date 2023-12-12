<?php  
//export.php  
include 'db.php';
$output = '';
if(isset($_POST["export6"]))
{
 $query = "SELECT * FROM barangay_table order by 1 desc";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         <th>Barangay Name</th>  
                         <th>Town Name</th>  
                         <th>Date Created</th>  
                         

                    </tr>
  ';
  $i = 0;
  while($row = mysqli_fetch_array($result))
  {
    $sid = ++$i;
   $output .= '
    <tr>  
                         <td > '.$sid.' </td>
                         <td>'.$row["barangay_name"].'</td> 
                          <td>'.$row["town_name"].'</td>  
                         <td>'.$row["date_created"]  .'</td>  
                        
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Barangay_all_Cards_Data.xls');
  echo $output;
 }
}
?>