
<?php
require 'database.php';
session_start();
ob_start();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search User</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">

</head>
<body>
<div class="container">
    <h1>Search by title and user</h1>
    <form>
        Search User: <input id="in" type="text" class="form-control" placeholder="..."
                            onkeyup="showSuggestion(this.value)"/>

        <div id="back">
            <button type="submit" class="btn btn-secondary" formaction="<?php
                if ((isset($_SESSION['user_id']))) {

                    echo "userPosts.php";
                }

                else if ((isset($_SESSION['admin_user_id']))){
                    echo "post_report.php";
                }
                else
                {
                    echo "index.php";
                }
            ?>"><-Back</button>
        </div>
    </form>
    <p>Suggestions: <span id="output" style="font-weight: bold"></span></p>
    <div id="res" class="well"></div>
</div>
<script>
    function showSuggestion(str) {
        document.getElementById('res').innerHTML = "";
        if (str.length > 0) {
            let xhr = new XMLHttpRequest();
            xhr.open("GET", "getSuggestion.php?q=" + str, true);
            xhr.send();
            xhr.onload = function () {
                if (this.status === 200) {
                    let ob = JSON.parse(this.responseText);
                    if (ob === "nai") {
                        document.getElementById('output').innerHTML = "No suggestions";
                    }
                    else {
                        document.getElementById('output').innerHTML = "";
                        for (let i = 0; i < ob.length; i++) {
                            document.getElementById('res').innerHTML +=
                                '<h3 id="title">' + ob[i].title + '</h3>' +
                                '<small>Created on ' +
                                '<div id="created">' + ob[i].time_date + '</div> ' + 'by ' +
                                '<div id="author">' + ob[i].user_name + '</div>' +
                                '</small>' +
                                '<div id="body">' + ob[i].post + '</div>' +
                                '<div id="SeeMore"><a class="btn btn-default" href="readMore.php?id=' + ob[i].post_id + '">' + "Read More" + '</a></div>';
                        }
                    }
                }
            }
        }
        else {
            document.getElementById('res').innerHTML = "";
        }
    }
</script>
</body>
</html>
