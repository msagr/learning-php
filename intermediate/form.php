<html>
<head>
    <title>Simple Form</title>
</head>
<body>
    <?php require_once 'process.php' ?> <!-- To include process.php file -->
    <form action = "" method = "GET">
        <input type="hidden" name="hidden" value="secret hidden variable">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
