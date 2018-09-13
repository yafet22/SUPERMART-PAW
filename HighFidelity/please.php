<html>
   <head>
      <title>Online PHP-7 Script Execution</title>
   </head>

   <body>

      <?php
         echo md5("cek");
         echo "<h1>Hello, PHP-7!</h1>";
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
