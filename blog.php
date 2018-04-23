<?php
require 'database.php';
session_start();
ob_start();

if (!(isset($_SESSION['user_id']))) {
    header("location:index.php");
}
else {

    ?>

    <html lang="en">
    <head>
        <title>Bootstrap Example</title>

        <link rel="stylesheet" href="Bootstrap_Files/css/bootstrap.min.css">
        <script src="Bootstrap_Files/jquery/jquery.min.js"></script>
        <script src="Bootstrap_Files/ajax/popper.min.js"></script>
        <script src="Bootstrap_Files/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="CSS/blog.css">

        <style>

        </style>
    </head>
    <body>

    <div id="blog"><h2>Blog:</h2></div>
    <br/>
    <!--    <form class="form-inline" action="">-->
    <form class="form-inline" action="blogPost.php" enctype="multipart/form-data" onsubmit="return validateForm()" method="post"
          name="blog_post_form">
        <div id="mypost" class="container">
            <div id="title_id" class="form-group">
                <label for="text">Title:</label>
                <textarea placeholder="Give a Title to your writing" class="form-control" rows="3" id="comment"
                          wrap="hard" name="title"></textarea>

                <div class="file-field">
                    <div id="pic_id" class="btn btn-primary btn-sm float-left">
                        <span>Choose files</span>
                        <input type="file" name="upload[]" multiple>
                    </div>
                    <div class="file-path-wrapper">
                        <input id="myfile" class="file-path validate" type="text" placeholder="Upload one or more files">
                    </div>
                </div>

            </div>


            <div>
                <div id="blog_id" class="form-group">
                    <label for="text">Blog:</label>
                    <textarea placeholder="Write your blog here" class="form-control" rows="10" id="comment"
                              wrap="hard" name="blog"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="sel1">Select list:</label>
                <select class="form-control" name="sel1" id="sel1">
                    <option value="Raw Science">Raw Science</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="EEE">EEE</option>
                    <option value="Others">Others</option>
                </select>
            </div>




            <div id="buttons">
                <button type="button" class="btn btn-primary" onclick="window.history.back()"><--Back</button>
                <button type="submit" class="btn btn-success">Submit</button>

            </div>
        </div>

    </form>


    <script>
        function validateForm() {

            var postTitle = document.getElementById("title_id").getElementsByTagName("textarea")[0].value;
            if (postTitle == "") {
                alert("Enter Title");
                return false;
            }

            var blog_writings = document.getElementById("blog_id").getElementsByTagName("textarea")[0].value;

            if (blog_writings == "") {
                alert("Enter writings");
                return false;
            }

            var Picture = document.getElementById("pic_id").getElementsByTagName("input")[0].value;
            if(Picture== "") {
                alert("Upload at least one relevant picture according to your post");
                return false;
            }
            //    var select = document.getElementById("sel1").value;
            //  alert(select);

            if(true)
                alert("Successfully posted");




        }
    </script>
    </body>
    </html>

    <?php
}

?>