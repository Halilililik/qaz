<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesap Makinesi</title>
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
            color: forestgreen;
            border: 2px solid black;
            padding: 25px;
            background: honeydew;
        }
    </style>
</head>

<body>
    <div>
        <form action="hesapla.php" method="get">
            <h3 align="center">Hesap Makinesi Uygulaması</h3>
            <table cellpadding="5px" width="450px">
                <tr>
                    <td>Birinci Sayı</td>
                    <td><input type="text" name="sayi1" class="form-control" placeholder="1. Sayıyı Giriniz" required>
                    </td>
                </tr>
                <tr>
                    <td>İkinci Sayı</td>
                    <td><input type="text" name="sayi2" class="form-control" placeholder="2. Sayıyı Giriniz" required>
                    </td>
                </tr>
                <tr>
                    <td>Yapılacak İşlem</td>
                    <td>
                        <select name="secim" class="form-control">
                            <option value="+">TOPLA</option>
                            <option value="-">FARK</option>
                            <option value="*">ÇARPIM</option>
                            <option value="/">BÖLÜM</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="HESAPLA" class="btn btn-outline-primary" style="width:215px">
                        <input type="reset" value="Temizle" class="btn btn-outline-danger" style="width:220px">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>