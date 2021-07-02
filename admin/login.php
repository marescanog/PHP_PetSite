<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset-styles.css">
    <link rel="stylesheet" href="../css/portal.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;600&display=swap" rel="stylesheet">
    <title>Admin Portal</title>
</head>
<body>
    <section class="por_Overlay">
        <div class="por_-Wrapper">
            <div class="por_--login por_box">
                    <div class="por_---loginbox">
                        <div class="por_----box-header"></div>
                        <form action="" id="loginform" class="por_----box-form">
                            <label for="username" class="inputlabel">Username</label>
                            <div class="Input">
                                <input type="text" id="username" placeholder="Please enter username" class="Input__Text">
                            </div>
                            <br>
                            <label for="password" class="inputlabel">Password</label>
                            <div class="Input">
                                <input type="password" id="password" placeholder="Please enter your password" class="Input__Text">
                            </div>
                            <button type="submit"class="por_button">
                                <span class="fade">Sign in</span>
                            </button>
                            <br>
                            <div class="por---forgot-password">
                                <a href="" class="link">
                                    <span>Fogot Password?</span>
                                </a>
                            </div>
                        </form>
                        <form action="" id="forgotpassform" class="por_----box-form hidden">
                            <label for="username" class="inputlabel">Username</label>
                            <div class="Input">
                                <input type="text" id="usernameforgot" placeholder="Please enter username" class="Input__Text">
                            </div>
                            <div class="smallNoteContainer">
                                <p class="smallNote">Enter your Username and a confirmation link will be sent to your email account.</p>
                            </div>
                            <br>
                            <button type="submit"class="por_button">
                                <span class="fade">Send me a link</span>
                            </button>
                            <br>
                            <div class="por---forgot-password">
                                <a href="" class="link">
                                    <span><- Back to the login page</span>
                                </a>
                            </div>
                        </form>
                    </div>

            </div>
        </div>
    </section>
</body>
</html>