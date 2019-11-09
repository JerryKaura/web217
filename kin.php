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
            <h1>TaccoMed-Next 0f Kin</h1>
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
            <div style="background-color: #705ce0;">
           <section class="body1">            
                <div class="kin-form">              
                    <form action="reg.php" id="kin-form" class="kin-form" onsubmit="return validateKinForm()" method="POST">
                        <h3 style="text-align: center;">Next Of Kin</h3>
                        <div class="input-group">
                            <input type="text" id="pidKin" class="form-control" name="patientid" placeholder="Patient ID">
                        </div>
                        <div class="input-group">
                            <input id="fnameKin" type="text" class="form-control" name="fnameKin" placeholder="First Name">
                        </div>
                        <div class="input-group">
                            <input type="text" id="surnameKin" class="form-control" name="surnameKin" placeholder="Surname">
                        </div>
                        <div class="input-group">
                            <select name="relationship" id="prelation" class="form-control">
                            <option value="">Relationship</option>
                            <option value="">Father</option>
                            <option value="">Mother</option>
                            <option value="">Sister</option>
                            <option value="">Brother</option>
                            <option value="">Child</option>
                            <option value="">Uncle</option>
                            <option value="">Aunt</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <button type="submit" name="addkin" class="btn">Send</button> <button type="reset" class="btn">Clear</button>
                        </div>      
                    </form>
                </div>                   
            </div>          
        </section>
        </div>
        <section class="footer">
                <h1>&copy; 2019 TaccoMed | Email:info@taccomed.com | Nairobi KE<p>
        </section>
    </div>
</body>
</html>