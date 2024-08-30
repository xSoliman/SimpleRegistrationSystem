<?php
include "header.php";
?>
<div class="book">
    <p>
        للحجز برجاء ملء الاستمارة
    </p>
    <form action="index.php" method="post">
        <div>
            <input type="text" id="name" name="name" placeholder="الاسم">
        </div>
        <div>

            <input type="email" id="email" name="email" placeholder="البريد الالكتروني">
        </div>
        <div>
            <input type="date" id="date" name="date">
        </div>
        <div>
            <input type="submit" name="submit" value="احجز الآن">
        </div>
    </form>
    <?php


    $host = "localhost";
    $user = "root";
    $password = "root";
    $dbName = "Hospital";
    $db = mysqli_connect($host, $user, $password,$dbName);
    /*if (isset($db)) {
    echo "Database connected succesfuly";
} else {
    echo "Database connect faild";
}
*/

    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $submit = $_POST['submit'];
    if ($submit) {
        $query = "INSERT INTO patients (name,email,date) VALUE('$name','$email','$date')";
        $res = mysqli_query($db, $query);
        echo '<p style="color:green">' . "تم الحجز بنجاح" . '</p>';
    } 
    ?>
</div>
</div>
</body>

</html>