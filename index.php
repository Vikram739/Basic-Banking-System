<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Basic Banking System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-finance-business.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
</head>

<body>



    <!-- Header -->

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <h2>Basic Banking System</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link current" href="#top">Home
                  <span class="sr-only">(current)</span>
                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#transfer">Transfer Money</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#history">Transaction History</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item item-1">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Welcome to my</h6>
                        <h4>BANKING SYSTEM</h4>
                        <p>~The strength of the team is each individual member. The strength of each member is the team..........<br> <a style="margin-left: 150px;" href="https://internship.thesparksfoundation.info/" target="_blank">GRIP | The Sparks Foundation</a> </p>
                        <a href="#transfer" class="filled-button">Make a Transaction</a>           
                        <a href="#history" class="filled-button">Transaction History</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->

        </div>
    </div>


    <!-- Banner Ends Here -->



    <div class="services" id="transfer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading" style="margin-bottom:50px;">
                        <h2>Transfer <em>Money</em></h2>
                    </div>
                </div>

                <?php
                    include 'config.php';
                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($conn,$sql);
                ?>

                    <div class="col-md-12">
                        <div class="service-item">
                            <div class="table-responsive-sm">
                                <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center py-2">Id</th>
                                            <th scope="col" class="text-center py-2">Name</th>
                                            <th scope="col" class="text-center py-2">E-Mail</th>
                                            <th scope="col" class="text-center py-2">Balance</th>
                                            <th scope="col" class="text-center py-2">Operation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                        while($rows=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="transact.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>

                            </div>
                        </div>

                    </div>
            </div>
        </div>



        <div class="services" id="history">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading" style="margin-top:-20px; margin-bottom:30px;">
                        <h2>Transaction <em>History</em></h2>
                    </div>
                </div>
                <div class="col-md-12">
                <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr style="background: white; color:black">
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>

                            </div>
                        </div>

                    </div>
            </div>
        </div>

     

        <!-- Footer Starts Here -->

        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <p id="footer">&copy 2022. Made by <b style="font-weight:800;">VIKRAM MARKALI</b> <br> Basic Banking System </p> 
                    <p class="sparklink"><a href="https://internship.thesparksfoundation.info/" target="_blank" >GRIP | The Sparks Foundation</a></p>                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Additional Scripts -->
        <script src="assets/js/jquery.singlePageNav.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/owl.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/accordions.js"></script>
        <script>
            $(function() {
                // Single Page Nav
                $('#navbarResponsive').singlePageNav({
                    'offset': 100,
                    'filter': ':not(.external)'
                });

                // On mobile, close the menu after nav-link click
                $('#navbarResponsive .navbar-nav .nav-item .nav-link').click(function() {
                    $('#navbarResponsive').removeClass('show');
                });
            });
        </script>

        <script language="text/Javascript">
            cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
            function clearField(t) { //declaring the array outside of the
                if (!cleared[t.id]) { // function makes it static and global
                    cleared[t.id] = 1; // you could use true and false, but that's more typing
                    t.value = ''; // with more chance of typos
                    t.style.color = '#fff';
                }
            }
        </script>
</body>

</html>