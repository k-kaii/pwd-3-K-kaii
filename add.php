<?php include 'database.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Film</title>
</head>
<body>

<h2>Add New Film</h2>
<form action="insert.php" method="POST">
    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Genre:</label><br>
    <input type="text" name="genre" required><br><br>

    <label>Release:</label><br>
    <input type="text" name="release_date" required><br><br>

    <label>Producer:</label><br>
    <input type="text" name="producer" required><br><br>

    <button type="submit">Save</button>
</form>

</body>
</html>