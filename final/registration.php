<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register Now</title>
    </head>
    <body>
        <div>
            <h2>Register</h2>
            <form action="register.php" method="post">
                <div>
                    <label for="username">Username</label>
                    <span><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" name="username" placeholder="Username" id="username" required />
                </div>
                <div>
                    <label for="email">Email</label>
                    <span><ion-icon name="mail-outline"></ion-icon></span>
                    <?php
                        if(isset($emailExist)) echo "<p>this email is already exist.</p>";
                    ?>
                    <input type="email" name="email" placeholder="ex.google@gmail.com" id="email" required />
                </div>
                <div>
                    <label for="password">Password</label>
                    <span><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" name="password" placeholder="Enter Password" id="password" min="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}" title="Must be alphanumeric, First letter of the password should be capital, Password must contain a special character (@, $, !, &, etc), Password length must be greater than 8 characters, Should not be empty" required />
                </div>
                <div>
                    <label for="confirm_password">Confirm Password</label>
                    <span><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" min="8" required /><!-- oninput="check(this)"-->
                </div>
                <div>
                    <label for="phone">Phone</label>
                    <span><ion-icon name="call-outline"></ion-icon></span>
                    <input type="tel" name="phone" id="phone" placeholder="012-345-6789" />
                </div>
                <div>
                    <label for="gender">Gender</label><br>
                    <input type="radio" name="gender" value="male" id="male" />
                    <label for="male">Male</label><br>
                    <input type="radio" name="gender" value="female" id="female" />
                    <label for="female">Female</label>
                </div>
                <div>
                    <label for="hometown">Hometown</label>
                    <select name="hometown" id="hometown">
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
                <div>
                    <label for="places[]">visited Places</label><br>
                    <input type="checkbox" name="places[]" value="Ain Sokhna" id="1" />
                    <label for="1">Ain Sokhna</label><br/>
                    <input type="checkbox" name="places[]" value="Alexandria" id="2" />
                    <label for="2">Alexandria</label><br/>
                    <input type="checkbox" name="places[]" value="Aswan" id="3" />
                    <label for="3">Aswan</label><br/>
                    <input type="checkbox" name="places[]" value="Cairo" id="4" />
                    <label for="4">Cairo</label><br/>
                    <input type="checkbox" name="places[]" value="Dahab" id="5" />
                    <label for="5">Dahab</label><br/>
                    <input type="checkbox" name="places[]" value="Hurghada" id="6" />
                    <label for="6">Hurghada</label><br/>
                    <input type="checkbox" name="places[]" value="Luxor" id="7" />
                    <label for="7">Luxor</label><br/>
                    <input type="checkbox" name="places[]" value="North Coast" id="8" />
                    <label for="8">North Coast</label><br/>
                    <input type="checkbox" name="places[]" value="Sharm El Sheikh" id="9" />
                    <label for="9">Sharm El Sheikh</label><br/>
                    <input type="checkbox" name="places[]" value="Siwa Oasis" id="10" />
                    <label for="10">Siwa Oasis</label>
                </div>
                    <input type="submit" name="register" value="Register">
            </form>
        </div>
            <!-- <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            <script language='javascript' type='text/javascript'>
		        function check(input) {
			        if (input.value != document.getElementsByName('password')[0].value) {
				        input.setCustomValidity('Passwords do not match.');
			        } else {
				        input.setCustomValidity('');
			        }
		        }
	        </script> -->
    </body>
</html>