<!DOCTYPE html>
<html>
    <head>
        <title>Upload</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
   
    
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="">
         <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-display-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M6 12c0 .667-.083 1.167-.25 1.5H5a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-.75c-.167-.333-.25-.833-.25-1.5h4c2 0 2-2 2-2V4c0-2-2-2-2-2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h4z"/>
      </svg> My Video Album</a>
      
        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-camera-reels-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M2.667 6h6.666C10.253 6 11 6.746 11 7.667v6.666c0 .92-.746 1.667-1.667 1.667H2.667C1.747 16 1 15.254 1 14.333V7.667C1 6.747 1.746 6 2.667 6z"/>
        <path d="M7.404 11.697l6.363 3.692c.54.313 1.233-.066 1.233-.697V7.308c0-.63-.693-1.01-1.233-.696l-6.363 3.692a.802.802 0 0 0 0 1.393z"/>
        <circle cx="3" cy="3" r="3"/>
        <circle cx="9" cy="3" r="3"/>
      </svg> Videos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="insert.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-upload" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8zM5 4.854a.5.5 0 0 0 .707 0L8 2.56l2.293 2.293A.5.5 0 1 0 11 4.146L8.354 1.5a.5.5 0 0 0-.708 0L5 4.146a.5.5 0 0 0 0 .708z"/>
        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 2z"/>
      </svg> Upload Videos</a>
          </li>
      
         
      </nav>
         
      <center><h2>Upload Your Video</h2></center>
        <div class="container">
        <form name="f1" action="insert_action.php" method="POST" enctype="multipart/form-data">
            <div class="input-group mb-3 input-group-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">Video Title</span>
              </div>
              <input type="text" class="form-control" name="title" placeholder="Enter video title">
            </div>
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="customFile" name="video">
                <label class="custom-file-label" for="customFile">Choose video</label>
              </div>
              <input type="submit" value="Upload" class="btn btn-primary">
          </form>
        </div>
        <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
              var fileName = $(this).val().split("\\").pop();
              $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
            </script>
    </body>
</html>