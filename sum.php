<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['a']) && isset($_POST['b'])) {
        if ($_POST['oper'] == '+') {
            $result = $_POST['a'] + $_POST['b'];
        } elseif ($_POST['oper'] == '-') {
            $result = $_POST['a'] - $_POST['b'];
        } elseif ($_POST['oper'] == '*') {
            $result = $_POST['a'] * $_POST['b'];
        } elseif ($_POST['oper'] == '/') {
            if ($_POST['b'] != 0) {
                $result = $_POST['a'] / $_POST['b'];
            } else {
                echo 'b равно 0!';
            }
        }
    } else
        $result = "";
}

if (isset($_POST['sum'])){
    $result_calc = $_POST['a1'] + $_POST['b1'];
} elseif (isset($_POST['raz'])) {
    $result_calc = $_POST['a1'] - $_POST['b1'];
} elseif (isset($_POST['umn'])) {
    $result_calc = $_POST['a1'] * $_POST['b1'];
} elseif (isset($_POST['del'])) {
    $result_calc = $_POST['a1'] / $_POST['b1'];
}
?>
<html>
<head>
    <title>Галерея изображений</title>
</head>
<body>
<form method="post" name="form1">
    <input type="number" name="a" value="<?=$_POST['a']?>"/>
    <select name="oper">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="b" value="<?=$_POST['b']?>"/>
    <input type="submit" name="submit" value="=" />
    <?php echo $result; ?>
</form>

<form method="post" name="form2">
    <input type="number" name="a1" value="<?=$_POST['a1']?>"/>
    <?=$_POST['sum']?><?=$_POST['raz']?><?=$_POST['umn']?><?=$_POST['del']?>
    <input type="number" name="b1" value="<?=$_POST['b1']?>"/>
    =<?php echo $result_calc; ?><br>
    <input type="submit" name="sum" value="+" />
    <input type="submit" name="raz" value="-" />
    <input type="submit" name="umn" value="*" />
    <input type="submit" name="del" value="/" />

</form>
</body>
</html>