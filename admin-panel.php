<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin-panel</title>
</head>
<body>
   
<?php
  include 'config.php';
  $conn = mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['dbname']);
                if(isset($_POST['submit'])){
            //  project data
            $project_name = $_POST['project_name'];
            $video_link   = $_POST['video_link'];
            $salary       = $_POST['salary'];
            $feauture1    = $_POST['feauture1'];
            $feauture2    = $_POST['feauture2'];
            $feauture3    = $_POST['feauture3'];
            $feauture4    = $_POST['feauture4'];
            $feauture5    = $_POST['feauture5'];
            // file data
            $fileName     = $_FILES['file']['name'];
            $fileTmpName  = $_FILES['file']['tmp_name'];
            $path         = "files/".$fileName;
    
        if (!empty($project_name && $video_link && $salary && $feauture1 && $fileName)) {
            $query = "INSERT INTO admin_panel(filename,project_name,video_link,salary,feauture1,feauture2,feauture3,feauture4,feauture5)
         VALUES ('$fileName','$project_name','$video_link','$salary','$feauture1','$feauture2','$feauture3','$feauture4','$feauture5')";
            $run = mysqli_query($conn, $query);
        
            if ($run) {
                move_uploaded_file($fileTmpName, $path);
                echo "success";
            } else {
                echo "error".mysqli_error($conn);
            }
        }else{
            $msg = "Please Enter All Data  ";
            echo '<script type="text/javascript">alert("' . $msg . '")</script>';
        }
        
    }
    
    ?>
   <html>
   <table border="1px" align="center">
       <tr>
           <td>
               <form action="admin-panel.php" method="post" enctype="multipart/form-data">
               <label for="fname">upload file:</label><br>
                    <input type="file" name="file"><br>
                    <label for="fname">project name:</label><br>
                    <input type="text" id="fname" name="project_name"><br>
                    <label for="fname">video link:</label><br>
                    <input type="text" id="fname" name="video_link"><br>
                     <label for="lname">salary:</label><br>
                     <input type="text" id="lname" name="salary"><br>
                     <!-- feautures-->
                     <label for="lname">feauture1:</label><br>
                     <input type="text" id="lname" name="feauture1"><br>
                     <label for="lname">feauture2:</label><br>
                     <input type="text" id="lname" name="feauture2"><br>
                     <label for="lname">feauture3:</label><br>
                     <input type="text" id="lname" name="feauture3"><br>
                     <label for="lname">feauture4:</label><br>
                     <input type="text" id="lname" name="feauture4"><br>
                     <label for="lname">feauture5:</label><br>
                     <input type="text" id="lname" name="feauture5"><br>
                    <button type="submit" name="submit"> Upload</button>
                </form>
           </td>
       </tr>
       <tr>
           <td>

           </td>
       </tr>
   </table>
    
</body>
</html>

