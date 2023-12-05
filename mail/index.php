<!DOCTYPE html>
<html>
<head>
    <title>Email Sending Form</title>
</head>
<body>
    <form action="send.php" method="post">
        <label for="email">Recipient's Email:</label>
        <input type="email" name="email" required><br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" required><br>

        <label for="message">Message:</label><br>
        <textarea name="message" rows="5" required></textarea><br>

        <input type="submit" value="Send Email">
    </form>
</body>
</html>
