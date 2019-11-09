<?php include 'header.php' ?>
<?php include 'reg.php' ?>
<style>
.body1{
    padding-top: 10px;
    padding-left: 30%;
    margin: 20px;
    margin-bottom: 0px;
    border-top: solid;
    border-bottom: solid;
    border-color: #705ce0;
    height: 410px;
    }
    </style>
<body>
    <div class="container">
    <section class="header">
        <img src="images/logo.png" alt=""> 
        <h1>TaccoMed-Contact Us</h1>
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
    <div style="background-color: #705ce0; margin: 5px;">
        <section class="body1">        
            <div class="form3">
                <form>
                <h3 style="text-align: center;">Fill the form and click send</h3>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Name" required="required">
                    </div>
                    <div class="input-group">
                        <input type="email" class="form-control"  placeholder="Email" required="required">
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control"  placeholder="Phone No." required="required">
                    </div>
                    <div class="input-group">
                        <button type="submit" class="btn">Send</button>
                    </div>    
                </form>
            </div>       
        </div>
    </section>
    <section class="footer">
            <h1>&copy; 2019 TaccoMed | Email:info@taccomed.com | Nairobi KE<p>
    </section>
</div>
</body>
</html>