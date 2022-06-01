<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <form action="../control/verify.php" method="POST">
        <h1>Registration Form</h1><hr>
        <table>
            <tr>
                <td><h3>First Name:</h3></td>
                <td><input type="text" name="firstName" id=""></td>
            </tr>
            <tr>
                <td><h3>Last Name:</h3></td>
                <td><input type="text" name="lastName" id=""></td>
            </tr>
            <tr>
                <td><h3>Age:</h3></td>
                <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td><h3>Designation:</h3></td>
                <td>
                    <input type="radio" name="designation" id="" value="Jounior Programmer">
                    <label for="designation">Jounior Programmer</label>
                    <input type="radio" name="designation" id="" value="Senior Programmer">
                    <label for="designation">Senior Programmer</label>
                    <input type="radio" name="designation" id="" value="Project Lead">
                    <label for="designation">Project Lead</label>
                </td>
            </tr>
            <tr>
                <td><h3>Preferred Language:</h3></td>
                <td>
                <input type="checkbox" name="java" id="" value="Java">
                <label for="Java">Java</label>
                <input type="checkbox" name="php" id=""  value="PHP">
                <label for="php">PHP</label>
                <input type="checkbox" name="cpp" id=""  value="C++">
                <label for="cpp">C++</label>
                </td>
            </tr>
            <tr>
                <td><h3>E-mail:</h3></td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td><h3>Password:</h3></td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td><h3>Please choose a file</h3></td>
                <td><input type="submit" value="Choose file"> No file choosen</td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>