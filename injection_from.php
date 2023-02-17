<html>
    <head>
        <title> Search Customer and Test SQL injection</title>
    </head>
</html>
<body>
    <h1> ฟอร์มค้นหาลูกค้าตามเบอร์</h1>
    <form action="injection.php" method="GET">
        <h5> กรุณาใส่เบอร์ </h5>
        <input type="text" planceholder="Enter PhoneNumber" name="Phone_Number">
        <br> <br>
        <input type="submit">
    </form>
</body>
</html>