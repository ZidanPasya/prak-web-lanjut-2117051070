<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <center>
        <div class="card">
            <img src="<?= base_url('assets/img/image.jpeg') ?>" alt="Inai" class="pcard">
            <table>
                <tr>
                    <th><?= $nama ?></th>
                </tr>
                <tr>
                    <td><?= $kelas ?></td>
                </tr>
                <tr>
                    <td><?= $npm ?></td>
                </tr>
            </table>
            <div class="social">
                <ul>
                    <li><a href="https://github.com/ZidanPasya"> <img src="<?= base_url('assets/img/github.png') ?>" class="socialmedia"></a></li>
                    <li><a href="https://www.linkedin.com/in/zidanpasya-id/"> <img src="<?= base_url('assets/img/linkedin.png') ?>" class="socialmedia"></a></li>
                    <li><a href="https://www.instagram.com/zidanpasya/"> <img src="<?= base_url('assets/img/instagram.png') ?>" class="socialmedia"></a></li>
                    <li><a href="https://facebook.com/zidan.pasya"> <img src="<?= base_url('assets/img/facebook.png') ?>" class="socialmedia"></a></li>
                </ul>
            </div>
        </div>
    </center>
</body>
</html>