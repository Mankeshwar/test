<!DOCTYPE html>  
<html>  
<head>  
    <title>Baby Form Add</title>  
</head>  
<body>
<body>
 <?php
  $i=1;
  //foreach($results as $results)
  //{
	  print_r($results);
	  
  ?>  
    <form method="post" action="<?php echo base_url('baby_form/updateData'); ?>">  
       <table>  
            <tr>  
              <td>Name:</td>  
               <td>:</td>  
               <td><input type="text" name="name" value="<?php echo $results->name; ?>"></td>  
            </tr>  
            <tr>  
                <td>Meaning:</td>  
               <td>:</td>  
                <td><input type="text" name="meaning" value="<?php echo !empty($results->meaning) ? $results->meaning : ''; ?>"></td>  
           </tr>  
          <tr>  
               <td>Gender:</td>  
                <td>:</td>  
                <td><input type="text" name="gender" value="<?php echo $results->gender; ?>"></td>  
            </tr>  
          <tr>  
               <td>Religion:</td>  
              <td>:</td>  
              <td><input type="text" name="religion" value="<?php echo $results->religion; ?>"></td>  
            </tr><br><br>  
           <tr>  
               <td colspan="2" align="center">
			   <input type="hidden" name="id" value="<?php echo !empty($results->id) ? $results->id : '';  ?>">
			   <input type="submit" name="update" value="update">
			   </td> 
			   </td> 
            </tr>  
        </table>  
   </form> 
<?php //} ?>   
  
</body>  
</html>  
