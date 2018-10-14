<?php
   echo "$_POST['name']";
?> 
    
<form action = "<?php $_PHP_SELF ?>" method = "POST"> 
   Name: <input type = "text" name = "name" />
   <input type = "submit" /> 
</form>
