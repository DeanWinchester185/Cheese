<?php
        include_once("db.php");
        // Проверяем нажата ли кнопка отправки формы
        if (isset($_POST['btn'])) {
                $name = $_POST['name'];
                $text = $_POST['comment'];
                // Добавление пользователя
                $insert = $db->prepare("INSERT INTO comment (name, comment) VALUES (:name, :comment)");
                $insert->execute(['name' => $name, 'comment' => $text]);
                // Подтверждение что всё хорошо
                header("Location: index.php");
                // и завершаем выполнение скрипта
                die;
            }
        ?>