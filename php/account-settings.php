<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Settings</title>
    <link rel="stylesheet" href="./css/account-settings.css"/>
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <div class="containerHeader">
        <header>
            <div class="logo">
                <a href="./dashboard.html"><button><i class="fas fa-arrow-left"></i></button></a>
                <h1><a href = "index.html"> ScheduleMe </a></h1>
            </div> 
            <div class="btnHolder">
                <a href = "./php/logout.php"><button>Log out</button></a>
            </div>
        </header>
    </div>
    <div id="pageContent">
        <div class="container">
                <h2>Change your password</h2>
                <div class="form-holder">
                        <form name="loginform" action="./php/account-settings.php" method="POST">
                            <div class = "old_pw_holder">
                                <input type="password" id="old_pw" name="old_pw" placeholder="Old password" value=""> 
                                <br>
                            </div>
                            <div class = "new_pw_holder">
                                <input type="password" id="new_pw" name="new_pw" placeholder="New password"> <br>
                            </div>
                            <div class = "new_pw_confirm_holder">
                                <input type="password" id="new_pw_confirm" name="new_pw_confirm" placeholder="Confirm new password"> <br>
                            </div>
                            <div class = "submitbtn">
                                <input type="submit" id="submit" name="submit" value="Change password">
                            </div>
                        </form>
                </div>
        </div>
    </div>
</body>
</html>
