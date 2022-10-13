<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All4sport</title>
    <link rel="stylesheet" href="../View/css/home.css">
</head>

<body>
    <header>
        <nav>
            <div class="header">
                <img class="logo" src="../View/img/home/ALL4SPORT.png" alt="logo ALL4SPORT" height=50px>
                <a class="nav" href="#">Home</a>
                <a class="nav" href="../Controller/Produits/produits_controller.php">Shop</a>
                <a class="nav" href="#">Contact Us</a>
            
                  <?php if (!isset($_SESSION['pseudo'])){  
                    echo"<a class='nav login' href='../Controller/Auth/login_controller.php'>login</a>";
                    echo"<a class='nav register' href='../Controller/Auth/register_controller.php'>register</a>";
                    } else {  
                    echo"
                    <div class='container-menu'>
                        <img src='../View/img/home/user.png' class='user-pic' onclick='toggleMenu()'>
                            <div class='sub-menu-wrap' id='subMenu'> 
                                <div class='sub-menu'>
                                    <div class='user-info'>
                                        <h2> Simon Ravaut </h2>
                                    </div>
                                    <hr>

                                    <a href='#' class='sub-menu-link'>
                                        <img src='../View/img/home/profile.png'>
                                        <p> Edit Profile </p>
                                        <span><span>
                                    </a>

                                    <a href='#' class='sub-menu-link'>
                                        <img src='../View/img/home/setting.png'>
                                        <p> Settings </p>
                                        <span><span>
                                    </a>

                                    <a href='#' class='sub-menu-link'>
                                        <img src='../View/img/home/help.png'>
                                        <p> Help </p>
                                        <span><span>
                                    </a>

                                    <a href='../Controller/Auth/logout_controller.php' class='sub-menu-link'>
                                        <img src='../View/img/home/logout.png'>
                                        <p> LogOut </p>
                                        <span><span>
                                    </a> 
                                </div>
                            </div>
                        </div>";
                     } ?>

                     <script>
                        let subMenu = document.getElementById("subMenu");

                        function toggleMenu() {
                            subMenu.classList.toggle("open-menu");
                        }
                     </script>
            </div>
        </nav>
    </header>







    <section class="section1">
         <div class="img"> 
            <img src="../View/img/home/rectangle.png" alt="" height=600px> 
         </div> 
    </section>

    <section class="section2">
        <div class="left">
            <iframe src='https://my.spline.design/iphone14procopy-96b4e851330ef3d4db7ac65a9b6f4a45/' frameborder='0' width='100%' height='100%'></iframe>
        </div>

        <div class="right">
            <h2>Application bientôt disponible !</h2>
            <center>
                <button class="Download">Download</button>
            </center>
        </div>
    </section>



</body>
</html>