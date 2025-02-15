<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>
<body>
        <div>
             <div>
                <form action="Register.php" method="post">
                    <h1>Clients Registration Form</h1>
                    <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" id="name" name="name"></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><input type="text" id="address"  name="address"></td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td><input type="number" id="contact"  name="contact"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" id="email"  name="email"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <button type="submit">Submit</button></td>
                    </tr>
                    </table>
                </form>
             </div>
     </div>
     
     <footer>
     <?php
        include 'DBconnection.php';
     ?>
     </footer>
     
</body>
</html>