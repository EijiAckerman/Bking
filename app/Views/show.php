<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <b>Data Karyawan</b>
            </div>          
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ID Karyawan</label>
                    <input class="form-control" type="text" value="<?= $show->id_karyawan; ?>" aria-label="readonly input example" readonly>                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input class="form-control" type="text" value="<?= $show->nama; ?>" aria-label="readonly input example" readonly>                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                    <input class="form-control" type="text" value="<?= $show->jenis_kelamin; ?>" aria-label="readonly input example" readonly>                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">No. Telp</label>
                    <input class="form-control" type="text" value="<?= $show->no_telp; ?>" aria-label="readonly input example" readonly>                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                    <input class="form-control" type="text" value="<?= $show->tanggal_lahir; ?>" aria-label="readonly input example" readonly>                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input class="form-control" type="text" value="<?= $show->alamat; ?>" aria-label="readonly input example" readonly>                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>