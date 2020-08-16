<?php
$con=mysqli_connect("localhost","root","","video");
?>
<!DOCTYPE html>

<html>
    <head>
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $title=$_POST['title'];
        $old=$_FILES['video']['tmp_name'];
        $video="Server_Video_".rand(1000,9999)."_".$_FILES['video']['name'];
        $new='./folder/'.$video;
        move_uploaded_file($old,$new);
        $sql="insert into video_upload(VIDEO_TITLE,VIDEO_FILE) values('$title','$video')";
        $n=mysqli_query($con,$sql);
        if($n)
        {
           ?>
                    <script>

                            alert("Video Uploaded Sucessfully");
                            window.location.href="index.php";
                        </script>
           <?php
        }else{
            ?>

            <?php
        }
    }
        
    ?>
</body>
    </html>