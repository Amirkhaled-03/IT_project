<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- render all the elememts -->
        <link rel="stylesheet" href="../css/normalize.css">

        <!-- font awesome libirary -->
        <link rel="stylesheet" href="../css/all.min.css">

        <!-- google  font sans -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- the main stylesheet -->
        <link rel="stylesheet" href="css/register.css">
        <title>Add User</title>
    </head>

    <body>
        <div class="container">
        <div class="box">
            <h2>Add User</h2>

            <form action="addp.php" method="post" name="form1" onsubmit="return ValidateEmail(form1)">


                    <label for="first_name">First name</label>
                    <div>
                    <i class="fa-solid fa-user"></i>
                    <span><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" name="first_name" placeholder="Enter first name" id="first_name" />
                    </div>

                    <label for="last_name">Last name</label>
                    <div>
                        <i class="fa-solid fa-user"></i>
                        <span><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" name="last_name" placeholder="Enter last name" id="last_name" />
                    </div>

                    <label for="email">Email</label>
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <span><ion-icon name="mail-outline"></ion-icon></span>
                    <?php
                        if(isset($emailExist)) echo "<script>Email already exist.</script>";
                    ?>
                    <input type="email" name="email" placeholder="Enter your email" id="email" title="For example: Google@gmail.com" />
                </div>

                <label for="password">Password</label>
                <div>
                    <i class="fa-solid fa-lock"></i>
                    <span><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" name="password" placeholder="Enter your password" id="password" />
                </div>

                <label for="confirm_password">Confirm Password</label>
                <div>
                    <i class="fa-solid fa-lock"></i>
                    <span><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password" />
                </div>

                <label for="phone">Phone Number</label>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <span><ion-icon name="call-outline"></ion-icon></span>
                    <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" pattern="[0-9]+" min="11" max="11" title="Enter only digits" />
                </div>

                <label>Choose Your Gender</label>
                <div class="gender">
                    <label for="male" class="radio">
                        <input type="radio" name="gender" value="male" id="male" />
                        Male
                        <span></span>
                    </label>
                    
                    <label for="female" class="radio">
                    <input type="radio" name="gender" value="female" id="female" />
                        Female
                        <span></span>
                    </label>
                </div>

                <div>
                    <label for="country">Choose Your Country</label>
                    <select name="country" id="country" class="select">
                        <option value=""></option>
                        <option value="Argentina">Argentina</option>
                        <option value="Australia">Australia</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Canada">Canada</option>
                        <option value="China">China</option>
                        <option value="Egypt">Egypt</option>
                        <option value="England">England</option>
                        <option value="France">France</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Italy">Italy</option>
                        <option value="Japan">Japan</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Norway">Norway</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Russia">Russia</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Spain">Spain</option>
                        <option value="Sueden">Sueden</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Uk">Uk</option>
                        <option value="USA">USA</option>
                    </select>
                </div>

                <label for="places[]">Visited Places</label>
                <div class="places">
                    
                    <label for="1" class="checkbox">
                        <input type="checkbox" name="places[]" value="Ain Sokhna" id="1" />
                        Ain Sokhna
                        <span></span>
                    </label>
                    
                    <label for="2" class="checkbox">
                        <input type="checkbox" name="places[]" value="Alexandria" id="2" />
                        Alexandria
                        <span></span>
                    </label>
                    
                    <label for="3" class="checkbox">
                        <input type="checkbox" name="places[]" value="Aswan" id="3" />
                        Aswan
                        <span></span>
                    </label>
                    
                    <label for="4" class="checkbox">
                        <input type="checkbox" name="places[]" value="Cairo" id="4" />
                        Cairo
                        <span></span>
                    </label>
                    
                    <label for="5" class="checkbox">
                        <input type="checkbox" name="places[]" value="Dahab" id="5" />
                        Dahab
                        <span></span>
                    </label>
                    
                    <label for="6" class="checkbox">
                        <input type="checkbox" name="places[]" value="Hurghada" id="6" />
                        Hurghada
                        <span></span>
                    </label>
                    
                    <label for="7" class="checkbox">
                        <input type="checkbox" name="places[]" value="Luxor" id="7" />
                        Luxor
                        <span></span>
                    </label>
                    
                    <label for="8" class="checkbox">
                        <input type="checkbox" name="places[]" value="North Coast" id="8" />
                        North Coast
                        <span></span>
                    </label>
                    
                    <label for="9" class="checkbox">
                        <input type="checkbox" name="places[]" value="Sharm El Sheikh" id="9" />
                        Sharm El Sheikh
                        <span></span>
                    </label>
                    
                    <label for="10" class="checkbox">
                        <input type="checkbox" name="places[]" value="Siwa Oasis" id="10" />
                        Siwa Oasis
                        <span></span>
                    </label>

                </div>

                    <input type="submit" name="register" value="Register" class="register"/><br/>

            </form>
        </div>
    </div>
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            <script src="validation.js"></script>
    </body>
</html>