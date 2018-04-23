<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../jquery/jquery.min.js"></script>
    <script src="../ajax/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <style>
        body {
            background-image: url("blogim.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        #blog{
            position:absolute;
            top:150px;
            left:650px;
        }

        #title{

            position: absolute;
            top: 150px;
            left: 650px;
        }
        #titletext{

            position: absolute;
            top: 150px;
            left: 650px;
        }

        #write{

            position: absolute;
            top: 150px;
            left: 650px;
        }
        #writetext{

            position: absolute;
            top: 150px;
            left: 650px;
        }
        #picturetext{
            position: absolute;
            top: 150px;
            left: 650px;


        }


        #picture{
              position: absolute;
              top: 150px;
              left: 650px;


          }

        #submit{


            position: absolute;
            top: 150px;
            left: 650px;

        }
        #back{


            position: absolute;
            top: 150px;
            left: 650px;

        }









    </style>
</head>
<body>
<div class="container">
    <div id="blog"><h2>Blog:</h2></div><br/>
    <form class="form-inline" action="">

        <div class="form-group">
            <label for="text">Title:</label>
            <textarea placeholder="Give a Title to your writing" class="form-control" rows="3" id="comment" wrap="hard"></textarea>
        </div>



        <div class="form-group">
            <label for="text">Blog:</label>
            <textarea placeholder="Write your blog here" class="form-control" rows="10" id="comment" wrap="hard">p</textarea>
        </div>



        <div class="file-field">
                <div class="btn btn-primary btn-sm float-left">
                    <span>Choose files</span>
                    <input type="file" multiple>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload one or more files">
                </div>
            </div>


        <button type="button" class="btn btn-primary"><--Back</button>
        <button type="button" class="btn btn-success">Submit</button>









    </form>

</div>
</body>
</html>

<?php

?>