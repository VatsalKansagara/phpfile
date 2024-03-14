<html>
    <body>
        <form method="GET">
            <input type="email" placeholder="Enter Email" name="em"><br><br>
            <input type="Password" placeholder="Enter Password" name="pw"><br><br>
            <input type="submit" name="submit">
        </form>

        <h1>welcome <?php echo $_GET['em']; ?></h1>
        <h1>Your Password is <?php echo $_GET['pw']; ?></h1>

    </body>
</html>

<html>
    <body>
        <form method="POST">
            <input type="email" placeholder="Enter Email" name="em"><br><br>
            <input type="Password" placeholder="Enter Password" name="pw"><br><br>
            <input type="submit" name="submit">
        </form>

        <h1>welcome <?php echo $_POST['em']; ?></h1>
        <h1>Your Password is <?php echo $_POST['pw']; ?></h1>

    </body>
</html>

