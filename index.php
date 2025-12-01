<?php
require_once "database.php";

$result = $conn->query("SELECT * FROM game");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Game Library</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

<div class="container">

    <h1>Film</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Release Date</th>
            <th>Producer</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['title'] ?></td>
            <td><?= $row['genre'] ?></td>
            <td><?= $row['release_date'] ?></td>
            <td><?= $row['producer'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

</div>

</body>
</html>