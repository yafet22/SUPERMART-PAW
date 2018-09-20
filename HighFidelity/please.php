<html>
   <head>
      

      <?php
    
         echo md5("admin");
         echo "<h1>Hello, PHP-7!</h1>";
         $today = getdate();
            print_r($today);
         $today = date("F j, Y, g:i a"); 
         echo '<br>';
         echo $today; 
         $date = new DateTime();
         echo $date->getTimestamp();  
         date_default_timezone_set('UTC');
         echo 'date()';  
         $_SESSION['cek'][0]='ce';
         $_SESSION['cek'][1]='ce1';

         for($i=0;$i<=1;$i++)
         {
            echo $_SESSION['cek'][$i];
            echo '<br>';
         }
      ?>

     
     <form name="form" method="post" enctype="multipart/form-data" action="proses.php">
Image : <input name="picture" type="file" />
<input type="submit" name="upload" value="Upload" />
</form>




   </body>
</html>
