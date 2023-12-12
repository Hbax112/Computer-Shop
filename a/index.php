<html>
    <head>
        <title>ComputerShop</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
  
    <h1>Computer Shop</h1>
    <div class="menu-bar">
        <ul>
            <li><a href="index.php">Acasa</a></li>

            <li><a href="products.php">Produse</a>
                <div class="sub-menu1">
                    <ul>

                        <li class="hover-me"><a href="products.php">Laptop ></a>
                            <div class="sub-menu2">
                                <ul>
                                    <li><a href="products.php">Apple</a></li>
                                    <li><a href="products.php">Dell</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="hover-me"><a href="products.php">Desktop></a>
                            <div class="sub-menu2">
                                <ul>
                                    <li><a href="products.php">Apple</a></li>
                                    <li><a href="products.php">Dell</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="hover-me"><a href="products.php">Tablete></a>
                            <div class="sub-menu2">
                                <ul>
                                    <li><a href="products.php">Apple</a></li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </li>

            <li><a href="cart.html">Cos</a></li>

            <li><a href="login.php">Acces</a></li>
        </ul>
    </div>

	<br><br><br><br><br><br><br><br>

    <!-------products---------->

        <form action="" method="POST" enctype="multipart/form-data">
        <div class="small-container">
        <h2 class="title">Produse noi</h2>
            
            <div class="row">
                    <?php 
                        $connection = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($connection,'dd');

                        $query = " SELECT * FROM `product_data` ORDER BY id_p LIMIT 5";
                        $query_run = mysqli_query($connection,$query);

                        while($row = mysqli_fetch_array($query_run))
                        {
                         ?>

                        <div class="col-4">
                        <a href= <?php echo $row['link_p']; ?> >
                            <?php echo '<img src="data:image;base64,'.base64_encode($row['image_p']).'" alt="Image" >'; ?> </a><br>
                             <?php echo $row['name_p']; ?> <br>
                             <?php echo $row['price_p']; ?> <br>
                             <form class="" action="" method="post" autocomplete="off">
                                <button class="button" type="submit" style="background: #D3C5FF;"> Adauga in cos </button>
                                <input type="hidden"> 
                            </form> 
                             </div>
                            
                        <?php
                        }
                    ?>
                        
            </div>
            </div>
        </form>
        
    <!--------info-footer-page-------->
    <br><br>
	<h2 class="contact-title">INFO</h2>
    <br><br>
    <p>Addresa: Romania, Timisoara, Bvld Vasile Parvan, No. 4<br><br>
    Tel: +40 (0)12 12 34 56 <br><br> 
    Email: computershop@gmail.com <br></p>
    <br><br>
    </body>
</html>