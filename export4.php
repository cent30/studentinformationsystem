<?php  
//export.php  
include 'db.php';
$output = '';
if(isset($_POST["export4"]))
{
 $query = "SELECT * FROM gender_table order by 1 desc";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         <th>Gender Name</th>  
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
                         <td>'.$row["gender_name"].'</td>  
                         <td>'.$row["date_created"]  .'</td>  
                        
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Gender_all_Cards_Data.xls');
  echo $output;
 }
}
?>