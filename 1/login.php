<?php
// Перевірка, чи були дані відправлені методом POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримання значень із форми
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Тут ви можете додатково виконати перевірку логіна та пароля з базою даних або іншим методом
    // В цьому прикладі просто виводимо отримані дані
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password;
} else {
    // Якщо дані не були відправлені методом POST, перенаправте користувача на сторінку входу
    header("Location: index.html");
    exit();
}
?>
