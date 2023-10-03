<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEARN PHP WITH FORM</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class = 'container' >
        <h1> form registration php & mysql</h1>
        <form action="connect.php" method="post">
            <input type="text" name="name" id="name" placeholder='Enter your username'><br> <br>
            <input type="email" name="email" id="email" placeholder='Enter your email'><br> <br>
            <input type="text" name="phone" id="phone" placeholder='Enter your phone'><br> <br>
            <label for="gender">gender</label>
            <input type="radio" name="gender" value = 'm'>Male
            <input type="radio" name="gender" value= 'f'>Female<br> <br>
            <input type="text" name="location" id="location" placeholder='Enter your location'><br> <br>
            <input type="submit" id='submit'><br> <br>
        </form>
    </div>
</body>
</html>