<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="tex/html"; charset="UTF-8"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <meta name="keywords" content="news, ukraine, post" />
    <meta name="description" content="News" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="obrobka.css">
    <link rel="shortcut icon" type="image/x-icon" href="Sayt/foto/icon.ico">
    <title>Ukraine Post</title>
</head>
<body>
<?php require_once "components/header.php" ?>
        <main class="page jumbotron">
        <?php require_once "components/title.php" ?>
                                 <span class="main_title">Registration</span>
                               </div>
                            </div>
                        </div>
                    </div>
                <form action="">
                    <div class="container">
                      <div class="container_for_register">
                      <h1>Register</h1>
                      <label for="email"><b>Email</b></label>
                      <input type="email" id="email" placeholder="Enter Email" name="email" required>
                      <label for="text"><b>Password</b></label>
                      <input type="password" id="text" placeholder="Enter Password" name="psw" required>
                      <label for="repeat_psw"><b>Repeat Password</b></label>
                      <input type="password" id="repeat_psw" placeholder="Repeat Password" name="psw-repeat" required>
                      <div class="btn_reg">
                      <input type="submit" class="register_btn register_btn1"></input>
                      <input type="reset" class="register_btn register_btn2"></input>
                        </div>
                       </div> 
                    </div>
                </form>
         </main>
         <?php require_once "components/footer.php" ?> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="Sayt/main.js"></script>
</body>
</html>