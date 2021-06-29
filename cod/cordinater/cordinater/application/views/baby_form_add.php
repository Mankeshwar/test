
<!DOCTYPE html>  
<html>  
<head>  
   <title>Baby Form Add</title>  
</head>  
<body>  
    <form method="post" name="form" action="<?php echo base_url(('baby_form/savingdata'));   ?>">  
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
</body>  
</html>  
