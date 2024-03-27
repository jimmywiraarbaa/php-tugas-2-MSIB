<?php
$name = $_POST['name'];
$product = $_POST['product'];
$amount = $_POST['amount'];


switch ($product) {
    case 'TV':
        $price = 1000000;
        break;

    case 'Kulkas':
        $price = 1200000;
        break;

    case 'Mesin Cuci':
        $price = 800000;
        break;

    case 'AC':
        $price = 1300000;
        break;

    default:
        $price = 0;
        break;
}

$total_belanja = $price * $amount;
$discount = 0.20 * $total_belanja;
$ppn = 0.10 * ($total_belanja - $discount);
$pay = ($total_belanja - $discount) + $ppn;

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center mb-4">Form Belanja</h2>
        <div class="w-50 bg-warning bg-gradient rounded-3 p-5 mb-3">
            <form action="index.php" method="POST">
                <label for="name">Nama Pelanggan</label>
                <input id="name" name="name" type="text" class="form-control mb-3" required>

                <label for="product">Produk</label>
                <select id="product" name="product" class="form-select mb-3" aria-label="Default select example" required>
                    <option selected>-- Pilih Produk --</option>
                    <option value="TV">TV</option>
                    <option value="Kulkas">Kulkas</option>
                    <option value="Mesin Cuci">Mesin Cuci</option>
                    <option value="AC">AC</option>
                </select>

                <label for="amount">Jumlah Beli</label>
                <input id="number" name="amount" type="number" class="form-control mb-3" required>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div>
            <p>Nama Pelanggan : <?= $name  ?></p>
            <p>Produk : <?= $product  ?></p>
            <p>Jumlah Beli : <?= $amount  ?></p>
            <p>Harga Satuan : <sup>Rp</sup><?= number_format($price, 0, ',', '.') ?></p>
            <p>Total Belanja : <sup>Rp</sup><?= number_format($total_belanja, 0, ',', '.') ?></p>
            <p>Diskon : <sup>Rp</sup><?= number_format($discount, 0, ',', '.') ?></p>
            <p>PPN : <sup>Rp</sup><?= number_format($ppn, 0, ',', '.') ?></p>
            <p>Harga Bayar : <sup>Rp</sup><?= number_format($pay, 0, ',', '.') ?></p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>