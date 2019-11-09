
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
            <h1>TaccoMed-Register Patient</h1>
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
                <div class="reg-form">
                    <form action="reg.php" id="reg-form" class="reg-form" onsubmit="return validateRegForm()" method="POST">
                        <h3 style="text-align:center;">Register Patient</h3>
                        <div id="error"></div>
                        <div class="input-group">
                            <input type="text" id="pid" class="form-control" name="pid" placeholder="Patient ID">
                        </div> 
                        <div class="input-group">
                            <input type="text" id="last-name" class="form-control" name="last-name" placeholder="Last Name">
                        </div>
                        <div class="input-group">
                            <input type="text" id="surname" class="form-control" name="surname" placeholder="Surname">
                        </div>
                        <div class="input-group">
                            <input type="date" class="form-control" name="dob" id="dob">
                        </div>
                        <div class="input-group">
                            <select name="gender" id="" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="box sexes">Box Sexes</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <select class="form-control" name="county">
                                <option value='Baringo'>Baringo</option>
                                <option value='Bomet'>Bomet</option>
                                <option value='Bungoma'>Bungoma</option>
                                <option value='Busia'>Busia</option>
                                <option value='Elgeyo-Marakwet'>Elgeyo-Marakwet</option>
                                <option value='Embu'>Embu</option>
                                <option value='Garissa'>Garissa</option>
                                <option value='Homa Bay'>Homa Bay</option>
                                <option value='Isiolo'>Isiolo</option>
                                <option value='Kajiado'>Kajiado</option>
                                <option value='Kakamega'>Kakamega</option>
                                <option value='Kericho'>Kericho</option>
                                <option value='Kiambu'>Kiambu</option>
                                <option value='Kilifi'>Kilifi</option>
                                <option value='Kirinyaga'>Kirinyaga</option>
                                <option value='Kisii'>Kisii</option>
                                <option value='Kisumu'>Kisumu</option>
                                <option value='Kitui'>Kitui</option>
                                <option value='Kwale'>Kwale</option>
                                <option value='Laikipia'>Laikipia</option>
                                <option value='Lamu'>Lamu</option>
                                <option value='Machakos'>Machakos</option>
                                <option value='Makueni'>Makueni</option>
                                <option value='Mandera'>Mandera</option>
                                <option value='Marsabit'>Marsabit</option>
                                <option value='Meru'>Meru</option>
                                <option value='Migori'>Migori</option>
                                <option value='Mombasa'>Mombasa</option>
                                <option value='Murang'a'>Murang'a</option>
                                <option value='Nairobi City'>Nairobi City</option>
                                <option value='Nakuru'>Nakuru</option>
                                <option value='Nandi'>Nandi</option>
                                <option value='Narok'>Narok</option>
                                <option value='Nyamira'>Nyamira</option>
                                <option value='Nyandarua'>Nyandarua</option>
                                <option value='Nyeri'>Nyeri</option>
                                <option value='Samburu'>Samburu</option>
                                <option value='Siaya'>Siaya</option>
                                <option value='Taita-Taveta'>Taita-Taveta</option>
                                <option value='Tana River'>Tana River</option>
                                <option value='Tharaka-Nithi'>Tharaka-Nithi</option>
                                <option value='Trans Nzoia'>Trans Nzoia</option>
                                <option value='Turkana'>Turkana</option>
                                <option value='Uasin Gishu'>Uasin Gishu</option>
                                <option value='Vihiga'>Vihiga</option>
                                <option value='West Pokot'>West Pokot</option>
                                <option value='wajir'>wajir</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <button type="submit" name="submit" class="btn">Send</button> <button type="reset" class="btn">Clear</button>
                        </div>
                    </form>
                </div>    
             
        </section>
        </div>
        <section class="footer">
                <h1>&copy; 2019 TaccoMed | Email:info@taccomed.com | Nairobi KE<p>
        </section>
    </div>
</body>
</html>