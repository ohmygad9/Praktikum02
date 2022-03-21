<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <h3>Belanja Online</h3>
    <hr/>

    <div class="row">
        <div class="col-6">

            <section id="form_belanja">
                <form method="POST" action="form_belanja.php" class="col">
                <div class="form-group row">
                    <label for="name" class="col-3 col-form-label text-right">Customer</label> 
                    <div class="col-7">
                    <input id="name" name="name" placeholder="Nama Customer" type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 text-right">Pilih Produk</label> 
                    <div class="col-7">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pilProduk" id="pilProduk_0" type="radio" class="custom-control-input" value="TV"> 
                        <label for="pilProduk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pilProduk" id="pilProduk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                        <label for="pilProduk_1" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pilProduk"  id="pilProduk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                        <label for="pilProduk_2" class="custom-control-label">Mesin Cuci</label>
                    </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jumlah" class="col-3 col-form-label text-right">Jumlah</label> 
                    <div class="col-7">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-2">
                    <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                </form>
            </section>
        </div>
        
        <div class="col-3">
            <section id="harga">
                <table class="mx-left">
                    <thead class="table-dark ">
                        <tr>
                            <th>Daftar Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TV : 4.200.000</td>
                        </tr>
                        <tr>
                            <td>Kulkas : 3.100.000</td>
                        </tr>
                        <tr>
                            <td>Mesin Cuci : 3.800.000</td>
                        </tr>
                        <tr>
                            <td>Harga Dapat Berubah Setiap Saat</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div> 
    <hr/>

    <?php
    $proses = $_POST["proses"];
    $customer = $_POST["name"];
    $produk = $_POST["pilProduk"];
    $jumlah = $_POST["jumlah"];

    switch ($produk) {
        case 'TV':
            $harga = 4200000;
            $harga = $harga * $jumlah;
            echo "Nama Customer : " .$customer;
            echo "<br> Produk Pilihan : " .$produk;
            echo "<br> Jumlah Beli : " .$jumlah;
            echo "<br> Total Belanja : Rp. " .number_format($harga,0,',','.') . ",-";
        break;

        case 'KULKAS':
            $harga = 3100000;
            $harga = $harga * $jumlah;
            echo "Nama Customer : " .$customer;
            echo "<br> Produk Pilihan : " .$produk;
            echo "<br> Jumlah Beli : " .$jumlah;
            echo "<br> Total Belanja : Rp. " .number_format($harga,0,',','.') . ",-";
        break;

        case 'MESIN CUCI':
            $harga = 3800000;
            $harga = $harga * $jumlah;
            echo "Nama Customer : " .$customer;
            echo "<br> Produk Pilihan : " .$produk;
            echo "<br> Jumlah Beli : " .$jumlah;
            echo "<br> Total Belanja : Rp. " .number_format($harga,0,',','.') .",-";
            break;
        default:
        # code...
        break;
    }
    ?>                                  
    
</body>
</html>