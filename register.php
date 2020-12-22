
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="furniture.css">
</head>
<body>
    <h1>Furniture Shop Management System</h1>
    
    <form onsubmit="return mvalidation();"  action="server.php" method="POST">

        <table>
            <tr>
                <td><input type="radio" id="customer" name="check" value = "customer" checked><label for="customer">Customer</label></td>
                <td><input type="radio" id="suplier" name="check" value = "supplier"><label for ="suplier" >Supplier</label></td> 
            </tr>
            
            <tr>
                <td>First name</td>
                <td><input type="text" name="fname" id="fname" required class="box"></td>
            </tr>
            <tr>
                <td>Last name</td>
                <td><input type="text" name="lname" id="lname" required class="box"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type='text' name="address" id='address' required class="box"></td>
            </tr>
            <tr>
                <td>Phone number</td>
                <td><input type="text" name="pnumber" id="pno" required class="box"></td>
               <td><spam id="message"></spam></td> 
                
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email" required class="box"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password" required class="box"></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="cpassword" id="cpassword" required class="box"></td>
            </tr>
            <tr>
                <td><center><input type="submit" value="Submit" id="submit" name="submit" onsubmit="" ></center></td>
            </tr>
        </table>
    </form>
    <script src="furniture.js"></script>
    
</body>
</html>

