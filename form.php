<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="response.php">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br><br>
        <label for="phone">Phone</label>
        <input type="tel" name="phone" id="phone">
        <br><br>
        <label for="gender">Gender</label>
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <br><br>
        <input type="submit" value="Send" name="sendBtn" id="sendBtn">
    </form>
</body>
</html>