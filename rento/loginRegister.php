<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=opera">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/stylish.css">
</head>

<body>
    <style>
        body {
            background: linear-gradient(#8e842d, #54523d), url(../img/carousel-bg-1.jpg) center center no-repeat;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>


    <br>
    <br>
    <div class="cont">
        <form class="form sign-in" method="POST" action="login.php">
            <h2>Welcome Back</h2>
            <label>
                <span>Email</span>
                <input type="email"  name="email" autocomplete="off"/>
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="pwd" autocomplete="off" />
            </label>
            <p class="forgot-pass">Forgot password?</p>
            <button type="submit" class="submit">Sign In</button>

        </form>
        <div class="sub-cont">



            <div class="img">
                <style>
                    .img {
                        background: url("images/483054.jpg");
                        background-repeat: no-repeat;
                        background-size: cover;
                    }
                </style>

                <div class="img__text m--up">

                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">

                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <form class="form sign-up" method="POST" action="register.php" >
                <h2>Create your Account</h2>
                <label>
                    <span>Name</span>
                    <input type="text" name="nom"  autocomplete="off"/>
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" autocomplete="off" />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="pwd" autocomplete="off" />
                </label>
                <button type="submit" class="submit">Sign Up</button>

            </form>
        </div>
    </div>

    <script>
        document.querySelector('.img__btn').addEventListener('click', function () {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>

</body>

</html>