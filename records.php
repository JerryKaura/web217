<?php include 'header.php' ?>
<?php include 'reg.php' ?>
<body>
    <div class="container">
        <section class="header">
            <img src="images/logo.png" alt="">
            <h1>TaccoMed-Patients' Records</h1>
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
        <div style="background-color: #705ce0; height: 300px;">
            <br>
            <div class="record-section">
          <table style="background-color: white;">
               <thead style="background-color:rgb(73, 69, 69) ;
               color: white;">
                   <tr style="font-weight: bold;">
                        <td>No.</td>
                        <td>National Id.</td>
                        <td>Fist Name</td>
                        <td>Last Name</td>
                        <td>Gender</td>
                        <td>County</td>
                        <td>DOB</td>
                   </tr>
               </thead>
               <tbody>
                    <?php 
                        show_patients();
                    ?>  
               </tbody>
           </table>
        </div>
    </div>
    </section>
    <section class="footer">
            <h1>&copy; 2019 TaccoMed | Email:info@taccomed.com | Nairobi KE<p>
    </section>
</div>
</body>
</html>
