<!DOCTYPE html>  
<html>  
<head>  
    <title>Baby Form Add</title>  
</head>  
<body>  
    <form method="post" action="<?php echo site_url('baby_form/savingdata'); ?>">  
       <table>  
            <tr>  
              <td>Name:</td>  
               <td>:</td>  
               <td><input type="text" name="name" value=""></td>  
            </tr>  
            <tr>  
                <td>Meaning:</td>  
               <td>:</td>  
                <td><input type="text" name="meaning" value=""></td>  
           </tr>  
          <tr>  
               <td>Gender:</td>  
                <td>:</td>  
                <td><input type="text" name="gender" value=""></td>  
            </tr>  
          <tr>  
               <td>Religion:</td>  
              <td>:</td>  
              <td><input type="text" name="religion" value=""></td>  
            </tr><br><br>  
           <tr>  
               <input type="submit" name="submit" value="Save">  
            </tr>  
        </table>  
   </form>  
   <table border="1">  
        <thead>  
            <th>ID</th>  
            <th>NAME</th>  
            <th>MEANING</th>  
           <th>GENDER</th>  
           <th>RELIGION</th>  
            <th>ACTION</th> 
 <th>ACTION</th>
 <th>ACTION</th> 
        </thead>  
       <tbody>  
            <?php  
			 
                foreach($results as $row)  
                {  
                    //name has to be same as in the database.  
                   echo "<tr>  
                                <td>$row->id</td>  
                                <td>$row->name</td>  
                               <td>$row->meaning</td>  
                                <td>$row->gender</td>  
                                <td>$row->religion</td>
                                 <td>$row->religion</td>
                                  <td><a href='/Cordinater/index.php/baby_form/deletedata?id=".$row->id."'>Delete</a></td>
                                  <td><a href='/Cordinater/index.php/baby_form/updateForm?id=".$row->id."'>Edit</a></td> 

                               								
                    </tr>";
 					
               }  
            ?>  
        </tbody>  
    </table>  
</body>  
</html>  
