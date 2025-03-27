<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = "";

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = $num2 != 0 ? $num1 / $num2 : "Hata: Sıfıra bölme!";
                break;
            default:
                $result = "Geçersiz işlem";
        }
    } else {
        $result = "Lütfen geçerli sayılar girin";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hesap Makinesi</title>
</head>
<body>
    <h2>Hesap Makinesi</h2>
    <form method="post">
        <input type="text" name="num1" required placeholder="Birinci sayı">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="num2" required placeholder="İkinci sayı">
        <button type="submit">Hesapla</button>
    </form>
    
    <?php if (isset($result)) { ?>
        <h3>Sonuç: <?php echo $result; ?></h3>
    <?php } ?>
</body>
</html>
