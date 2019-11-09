<?php include 'header.php' ?>
<?php include 'reg.php' ?>
<body>
    <div class="container">
        <section class="header"> 
            <img src="images/logo.png" alt="">
           <h1>TACCOMED HEALTH CENTER</h1>
        </section>
        <section class="navbar">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="registration.php">Registration</a></li>
                    <li><a href="kin.php">Next-kin</a></li>
                    <li><a href="records.php">Records</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>
        </section>
        <div class="index">     
        <section class="body">
            <div class="sidebar">              
                <ul>
                   <li>
                       <button>SITE NAVIGATION</button> 
                   </li> <br>
                   <li>
                        <button><a href="">Orders</a></button> 
                   </li>    
                   <li>
                        <button><a href="">Payments</a></button> 
                   </li> 
                   <li>
                        <button><a href="">Receipts</a></button> 
                    </li> 
                    <li>
                         <button><a href="">Stock</a></button> 
                    </li>    
                    <li>
                         <button><a href="">Invoices</a></button> 
                    </li> 
                </ul>
            </div>
            <div class="main-content">
                <div class="head">
                    <h2 style="text-align:center">TACCOMED PATIENTS' RECORDS</h2>
                </div>
                <div>
                    <table style="float: center;">
                        <thead style="background-color: #705ce0;
                                        color: white;">
                            <tr style="font-weight: bold;">
                                <td>No.</td>
                                <td>National Id.</td>
                                <td>Fist Name</td>
                                <td>Last Name</td>
                                <td>Gender</td>
                                <td>County</td>
                                <td>DOB</td>
                                <td>Next of Kin</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            show_patients();
                            ?>                         
                        </tbody>
                    </table>
                </div>
                <!-- <div class="location">
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="100" id="gmap_canvas" src="https://maps.google.com/maps?q=medicine&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:240px;width:400px;}.gmap_canvas {overflow:hidden;background:none!important;height:240px;width:400px;}</style></div>
                </div> -->
            </div>
        </section>
    </div><br>
        <section class="footer">
                <h1>&copy; 2019 TaccoMed | Email:info@taccomed.com | Nairobi KE<p>
        </section>    
    </div>
    
</body>
</html>