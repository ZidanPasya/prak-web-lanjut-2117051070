<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5" style="background-color: aqua;">
        <?php if (session('validation')) : ?>
            <div>
                <ul>
                    <?php foreach (session('validation')->getErrors() as $error) : ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>
        <form action="<?= base_url('/user/store') ?>" method="POST">
            <div class="mb-3 pt-4 row">
                <label for="nama" class="col-sm-1 ms-5 col-form-label">Nama</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>
            <div class="mb-3 mt-3 row">
                <label for="npm" class="col-sm-1 ms-5 col-form-label">NPM</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="npm" name="npm">
                </div>
            </div>
            <div class="mb-3 mt-3 row">
                    <label for="kelas" class="col-sm-1 ms-5 col-form-label">Kelas</label>
                    <div class="col-sm-9">
                        <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="kelas" required>
                            <?php foreach($kelas as $item){ ?>
                                <option value="<?= $item['id'] ?>">
                                    <?= $item['nama_kelas'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            <button type="submit" name="submit" class="btn btn-primary mb-3 ms-5">Kirim</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>