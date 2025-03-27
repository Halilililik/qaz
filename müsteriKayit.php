<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Müşteri Kayıt Sistemi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="arkaplan">
            <h2 class="text-center text-success">Müşteri Kayıt Sistemi</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="tc" class="form-label">TC Kimlik</label>
                    <input type="text" class="form-control" id="tc" name="tc" required>
                </div>
                <div class="mb-3">
                    <label for="adSoyad" class="form-label">Ad Soyad</label>
                    <input type="text" class="form-control" id="adSoyad" name="adSoyad" required>
                </div>
                <div class="mb-3">
                    <label for="mail" class="form-label">Mail Adresi</label>
                    <input type="email" class="form-control" id="mail" name="mail" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" name="submit" class="btn btn-primary">Kaydet</button>
                    <button type="reset" class="btn btn-danger">Temizle</button>
                </div>
            </form>

        <div class="mt-4">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['submit'])) {
                $tc = htmlspecialchars($_GET['tc']);
                $adSoyad = htmlspecialchars($_GET['adSoyad']);
                $mail = htmlspecialchars($_GET['mail']);
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<style>
    .arkaplan {
        margin: auto;
        margin-top: 20px;
        height: auto;
        width: 500px;
        color: indigo;
        border: 2px solid black;
        padding: 25px;
        background: #FBF9E0;
    }
</style>

</html>