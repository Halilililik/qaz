<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonuç</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        div {
            margin: auto;
            margin-top: 20px;
            height: auto;
            width: 500px;
            color: white;
            border: 2px solid black;
            padding: 25px;
            background: red;
            text-align: center;
        }

        a {
            color: white;
        }

        a:hover {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET["sayi1"], $_GET["sayi2"], $_GET["secim"])) {
        $sayi1 = (float) $_GET["sayi1"];
        $sayi2 = (float) $_GET["sayi2"];
        $secim = $_GET["secim"];
        $sonuc = 0;

        switch ($secim) {
            case '+':
                $sonuc = $sayi1 + $sayi2;
                break;
            case '-':
                $sonuc = $sayi1 - $sayi2;
                break;
            case '*':
                $sonuc = $sayi1 * $sayi2;
                break;
            case '/':
                if ($sayi2 != 0) {
                    $sonuc = $sayi1 / $sayi2;
                } else {
                    $sonuc = "Tanımsız (0'a bölme hatası)";
                }
                break;
            default:
                $sonuc = "Geçersiz işlem";
                break;
        }
        echo "<div><h1 align='center'>$sayi1 $secim $sayi2 = $sonuc</h1>
                  <button class='btn btn-primary'><a href='hesapMakinesi.php'>Hesap Makinesine Dönüş</a></button></div>";
    } else {
        echo "<div><h1 align='center'>Eksik Bilgi Girildi!</h1>
                  <button class='btn btn-primary'><a href='hesapMakinesi.php'>Hesap Makinesine Dönüş</a></button></div>";
    }
    ?>
</body>

</html>