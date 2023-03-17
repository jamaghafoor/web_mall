<!DOCTYPE html>
<html>

<head>
    
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <title>Product Detail Page</title>
    <link rel="stylesheet" type="text/css" href="css/checkoutfooter.css">
    <link rel="stylesheet" type="text/css" href="css/checkoutheader.css">
    <link rel="stylesheet" type="text/css" href="css/checkout.css">

   
</head>

<body>
 <!--Header Start--> 
<div class="header">

<!--Logo Image start-->
<div class="logo">
<a href="header.html"><img src="images/logo.jpg"></a>
<!--Logo Image End-->
</div>

<!--Depart List start-->
<div class="navbar">
  <a href="#news">Category:</a>
  <div class="dropdown">
    <button class="dropbtn">Select Your Department...
      <i class="fa fa-caret-down" id="caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="DepartOfChemestry.html">Department of Chemistry</a>
      <a href="DepartOfPhysics.html">Institute of Physics</a>
      <a href="DepartOfArtsAndDesign.html">University College of Art and Design</a>
      <a href="DepartOfElectronics.html">Department of Electronics Engineering</a>
      <a href="DepartOfElectricalEng.html">Department of Electrical Engineering</a> 
      <a href="DepartOfMechanicalEng.html">Department of Mechanical Engineering</a> 
      <a href="DepartOfAgriculture.html">Faculty of Agriculture and Environment</a>
      <a href="DepartOfCivilEng.html">Department of Civil Engineering</a>
    </div>
  </div> 
</div>
<!--Depart List End-->




<!--Login Button Start-->
<div class="logbtn">
  <button class="signBtn" ><i class="fa fa-user"></i> Login</button>
</div>
<!--Login Button End-->

</div>
<!--Header End-->

  


    <!---Check Out Page Starts here --->
    <div class="checkout">
        <div class="container">
            <h2>Your Order</h2>
            <div class="checkout-inner">
                <form>
                    <div class="checkout-form-steps">
                        <h4>Personal Detail</h4>
                        <input type="text" class="textfield" placeholder="Your Name" required>
                        <input type="email" class="textfield" placeholder="Your Email" required>
                        <input type="text" class="textfield" placeholder="You Phone No." required>
                    </div>

                    <div class="checkout-form-steps">
                        <h4>Shipping Address (With in IUB)</h4>
                        <select class="textfield">
							<option>Select Ddepartment</option>
							<option>Department of Chemistry</option>
							<option>Institute of Physics</option>
							<option>University College of Art and Design</option>
                            <option>Department of Electronics Engineering</option>
                            <option>Department of Electrical Engineering</option>
                            <option>Department of Mechanical Engineering</option>
                            <option>Faculty of Agriculture and Environment</option>
                            <option>Department of Civil Engineering</option>
						</select>
                        <input type="text" class="textfield" placeholder="Class (Bs-physics)etc." required>
                         <input type="text" class="textfield" placeholder="Semester" required>
                          <input type="text" class="textfield" placeholder="Other Address (optional)">
                    </div>
                    <div>
                   
                    </div>
                       <div>
                       
                    </div>

                    <div class="checkout-form-steps">
                        <h4>Shipping Options</h4>
                        <label for="radio1">
							<input type="radio" name="shippingoptions" id="radio1">
							Delievery By Courier-Free Shipping
						</label>
                        <label for="radio2">
							<input type="radio" name="shippingoptions" id="radio2">
							Urgent Delivery
						</label>
                        <label for="radio3">
							<input type="radio" name="shippingoptions" id="radio3">
							Pickup - Pick Your order From 8AM to 4PM 
						</label>
                    </div>
                    <div class="checkout-form-steps">
                        <h4>Billing Options</h4>
                        <label for="radio4">
							<input type="radio" name="billingoptions" id="radio4" checked>
							In Cash
						</label>
                    </div>
                    <input type="submit" class="submitorder-button" value="Submit Order">
                </form>
            </div>


            <!---Order List Starts here--->
            <div class="orderlist">
                <img src="images/2_tb.jpg">
                <h3>MacBook Pro MQ032 Inter Core i7 5550U 8GB DDR3</h3>
                <p>Quantity : <span>1</span></p>
                <p>Price : <span><i class="fas fa-dollar-sign"></i> 1099</span></p>
               
                <p>Order Total : <span><i class="fas fa-dollar-sign"></i> 1099</span></p>
            </div>
            <!---Order List Ends here--->

        </div>
    </div>
    <!---Check Out Page Ends here --->



<!--Footer Start--> 
    <footer class="footer-divider">

        <!--Footer left start-->
            <div class="footer-left">
              <img src="images/logo.jpg">
                <p class="footer-links">
                    <a href="#">Home</a>
                    |
                    <a href="#">Blog</a>
                    |
                    <a href="#">About</a>
                    |
                    <a href="#">Contact</a>
                </p>
            </div>
        <!--Footer left end-->

        <!--Footer center start-->
            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                      <p><span>Commercial area, satellite town</span>
                         Bahawalpur, Punjab - 63100</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+92 306-9790566</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:jamghafoor1122@gmail.com">support@iubwebmall.com</a></p>
                </div>

            </div>
        <!--Footer center End-->

        
        <!--Footer Right start-->   
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>About the company</span>
                    We are providing study related materials and equipment to the iub community. We will provide everything in your class room.</p>
                <div class="footer-icons">
                    <a href="https://www.facebook.com/jamabdul.ghafoor.50"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/JamAGhafoor"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/jamabdul.ghafoor/"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/jamabdulghafoor/"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        <!--Footer Right end-->

        </footer>
        <!--Footer end-->

</body>

</html>