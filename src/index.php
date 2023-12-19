<html>

<head>
    <title>Каталог книг</title>
</head>

<body>
    <h2>Каталог книг</h2>
    <table border="1" cellpadding="5" cellspacing="0" width="100%">
        <tr>
            <th>Жанр</th> 
            <th>Название</th>
            <th>Рейтинг</th>
            <th>Цена</th>
        </tr>
        <?php
            require_once "connect.pg.inc.php";
            $sql = "SELECT * FROM books";
            $sta = $pdo->query($sql);
            while ($row = $sta->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row["janr"] ?></td>
            <td><?php echo $row["title"] ?></td>
            <td align="center"><?php echo $row["reiting"]?></td>
            <td align="center"><?php echo $row["prise"]?></td>
        </tr>
        <?php
            }
            $pdo = null;
        ?>
    </table>
</body>

</html>