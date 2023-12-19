<?php
//Подключится к базе данных
require_once "connect.pg.inc.php";
//Если такая таблица есть, удалить ее
$sql = "DROP TABLE IF EXISTS books CASCADE";
$pdo->query($sql);

//Создание таблицы
$sql = "
CREATE TABLE books (
    id SERIAL PRIMARY KEY,
    janr TEXT NOT NULL,
    title TEXT NOT NULL,
    reiting float NOT NULL,
    prise float NOT NULL
)";

$pdo->query($sql);
//Занесение данных
$sql = "
INSERT INTO books VALUES (1, 'Хоррор', 'Оно', 3, 1100), (2, 'Приключения', 'Приключения Тома Сойера', 5, 2500),
(3, 'Романтика', 'Клуб романтики', 10, 0), (4, 'Классика', 'Вишневый сад', 7, 150), (5, 'Классика', 'Отцы и дети', 9, 242)
";
$pdo->query($sql);
//Закрыть подключение к базе данных
$pdo = null;
?>