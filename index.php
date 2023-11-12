<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>

  <div class="container mt-3">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <form action="">
              <label class="mb-2">Input kode</label>
              <!-- id="keyword" untuk inisialisasi dalam proses ajax. ini yang mengambil inputan -->
              <input type="text" class="form-control" id="keyword" autocomplete="off" placeholder="masukan kode">
            </form>
            <!-- id="hasil" untuk inisialisasi dalam proses ajax. ini yang menampilkan hasil -->
            <div id="hasil" class="mt-3"></div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"></script>
  <script src="script-ajax.js"></script>
</body>

</html>