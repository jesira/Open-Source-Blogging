<!DOCTYPE html>

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

    <style>
        body {

            background-repeat: no-repeat;
            background-size: cover;
        }

        #blog {
            position: absolute;
            top: 150px;
            left: 650px;
        }

        #title {

            position: absolute;
            top: 150px;
            left: 650px;
        }

        #titletext {

            position: absolute;
            top: 150px;
            left: 650px;
        }

        #write {

            position: absolute;
            top: 150px;
            left: 650px;
        }

        #writetext {

            position: absolute;
            top: 150px;
            left: 650px;
        }

        #picturetext {
            position: absolute;
            top: 150px;
            left: 650px;

        }

        #picture {
            position: absolute;
            top: 150px;
            left: 650px;

        }

        #edit {

            position: absolute;
            top: 150px;
            left: 650px;

        }

        #back {

            position: absolute;
            top: 150px;
            left: 650px;

        }

        #fname {

            position: absolute;
            top: 250px;
            left: 650px;

        }

        #uname {

            position: absolute;
            top: 290px;
            left: 643px;
        }

        #email {

            position: absolute;
            top: 330px;
            left: 676px;

        }

        #phone {

            position: absolute;
            top: 370px;
            left: 670px;

        }

        #pass {

            position: absolute;
            top: 410px;
            left: 648px;

        }
        #textfieldforprofile{
            margin-top: -45%;
            margin-left: 60%;
        }
        #comment2{
            margin-top: 6%;
        }
        .form-control{
            width: 100% !important;
        }
        .sendbtn{
            padding-left: 4%;
            padding-right: 4%;
            margin-left: 86%;
            margin-top: 2%;
            width: 100%;
            background-color: cadetblue;
        }


    </style>
</head>
<body>

<!--  <div id="blog"><h2>Blog:</h2></div><br/> -->
<form class="form-inline" action="" method="post">
    <div class="container">
        <div >
            <div>
                <button type="submit" class="btn btn-success" formaction="blog.php">Post</button>
                <button type="submit" class="btn btn-danger" formaction="logout.php">Logout</button>
                <button type="submit" class="btn btn-warning" formaction="userPosts.php">Posts OF Mine</button>
            </div>

            <div >
                <div>
                    <h2>Card Image</h2>
                    <p>Image at the top (card-img-top):</p>
                    <div class="card" style="width:400px">
                        <!--                    <img  alt="Card image"   src="--><?php //?><!--">-->
                        <?php echo '<img class="card-img-top" src="'.$_SESSION["profile_pic"].'" alt="Profile Picture"  style="width:100%" />'; ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $_SESSION["full_name"] ?></h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and
                                engineer</p>
                            <a href="editProfile.php" class="btn btn-primary">Edit Profile</a>
                        </div>
                    </div>
                    <br>
                </div>
                <div id="textfieldforprofile">
                    <div id="" class="form-group">
                        <label for="usr">Username:</label>

                        <input type="text" class="form-control" id="" value=<?php echo $_SESSION["user_name"] ?> readonly>
                    </div>

                    <div id="" class="form-group">
                        <label for="usr">Fullname:</label>

                        <input type="text" class="form-control" id="" value=<?php echo $_SESSION["full_name"] ?> readonly>
                    </div>

                    <div id="" class="form-group">
                        <label for="usr">Email:</label>

                        <input type="text" class="form-control" id="" value=<?php echo $_SESSION["email"] ?> readonly>
                    </div>


                    <div id="" class="form-group">
                        <label for="usr">Phone:</label>

                        <input type="text" class="form-control" id="" value=<?php echo $_SESSION["phone_number"] ?> readonly>
                    </div>


                    <div id="" class="form-group">
                        <label for="usr">Gender:</label>

                        <input type="text" class="form-control" id="" value=<?php echo $_SESSION["gender"] ?> readonly>
                    </div>


                    <div id="" class="form-group">
                        <label for="usr">Occupation:</label>

                        <input type="text" class="form-control" id="" value=<?php echo $_SESSION["occupation"] ?> readonly>
                    </div>


                    <div id="" class="form-group">
                        <label for="usr">Date Of Birth:</label>

                        <input type="text" class="form-control" id="" value=<?php echo $_SESSION["dob"] ?> readonly>
                    </div>
                </div>

            </div>
            <div class="form-group" id="comment2">
                <label for="comment">Suggestion:</label>
                <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="sendbtn btn" onclick="return validateForm()" formaction="send_suggestion.php">Send</button>
            </div>

        </div>

</form>


<script>


    function validateForm() {
        let comment = document.getElementById("comment2").getElementsByTagName("textarea")[0].value;
        if (comment == "")  {
            alert("Please write something");
            return false;
        }

    }
</script>
</body>
</html>

<?php
}

?>