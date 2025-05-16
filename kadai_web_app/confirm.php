<?php
session_start();
$name = $_POST['employee_name'];
$age = $_POST['employee_age'];
$department = $_POST['department'];

$errors = [];
if(empty($name)) {
    $errors[] = '社員名を入力してください。';
}

if(empty($age)) {
    $errors[] = '年齢を入力してください。';
}elseif(!preg_match_all('/[0-9]/', $age)) {
    $errors[] = '年齢は整数で入力してください。';
}

if(empty($errors)) {
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;
    $_SESSION['department'] = $department;

    setcookie('name',$name,time()+3600);
    setcookie('age',$age,time()+3600);
    setcookie('department',$department,time()+3600);
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>社員情報入力フォーム</title>
        <meta charset="utf-8">
    </head>
    <h2>入力内容をご確認ください。  </h2>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
    <table border="1">
        <tr>
            <td>社員名</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo $department; ?></td>
        </tr>
    </table>
    <p>
    <button id="confirm-btn" onclick="location.href='/kadai_web_app/complete.php';">確定</button>
    <button id="cancel-btl" onclick="history.back();">キャンセル</button>
    </p>

    <?php
    if(!empty($errors)) {
        foreach($errors as $error){
            echo '<font color="red">'.$error.'</font>'.'<br>';
        }
        echo '<script> document.getElementById("confirm-btn").disabled = true; </script>';
    }
    ?>
</body>
</html>