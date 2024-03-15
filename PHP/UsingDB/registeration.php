<!DOCTYPE html>
<html>

<head>
    <title>Contact Form</title>
</head>

<body>

    <form action="add.php" method="post">

        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname"> </br></br>


        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname"></br></br>

        <label for="address">Address:</label>
        <textarea name="address" id="address" rows="5" cols="40"></textarea></br></br>

        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="" disabled selected>Select country</option>
            <option value="Egypt">Egypt</option>
            <option value="Canada">Canada</option>
            <option value="China">China</option>
            <option value="USA">USA</option>
        </select></br></br>

        <span>Gender:</span>
        <label>
            <input type="radio" name="gender" value="male" required> Male
        </label>
        <label>
            <input type="radio" name="gender" value="female" required> Female
        </label>
        </br></br>
        <!-- Select your Skills <br>
        <label>
            <input type="checkbox" name="skills[]" value="HTML"> HTML
        </label>
        <label>
            <input type="checkbox" name="skills[]" value="CSS"> CSS
        </label>
        <label>
            <input type="checkbox" name="skills[]" value="PHP"> PHP
        </label>
        <label>
            <input type="checkbox" name="skills[]" value="JavaScript"> JavaScript
        </label>

        <br><br> -->


        <label for="username">Username:</label>
        <input type="text" name="username" id="username"> </br></br>


        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass"></br></br>

        <label for="dept">Department:</label>
        <input type="text" name="dept" value="OpenSource" readonly></br></br>



        <input type="submit" value="Submit">
        <input type="button" value="cancel">
    </form>

</body>

</html>