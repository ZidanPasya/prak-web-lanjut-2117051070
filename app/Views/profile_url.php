<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            border-radius: 10px;
            margin-top: 110px;
            padding: 20px;
            width: 30%;
            background-color: aqua;
        }

        .pcard {
            border-radius: 50%;
            border: 2px solid;
            width: 40%;
            margin-bottom: 20px;
        }

        td {
            text-align: center;
        }

        .social {
            width: fit-content;
        }

        .social ul {
            display: flex;
            justify-content: space-between;
            list-style: none;
            padding: 0;
        }

        .social ul li {
            margin: 5px 10px;
        }

        .socialmedia {
            max-width: 30px;
            height: auto;
        }

        @media screen and (max-width: 1000px) {
            .social {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <center>
        <div class="card">
            <img src="<?= base_url('assets/' . $image) ?>.jpeg" alt="Inai" class="pcard">
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
                    <li><a href="https://github.com/ZidanPasya"> <img src="<?= base_url('assets/github.png') ?>" class="socialmedia"></a></li>
                    <li><a href="https://www.linkedin.com/in/zidanpasya-id/"> <img src="<?= base_url('assets/linkedin.png') ?>" class="socialmedia"></a></li>
                    <li><a href="https://www.instagram.com/zidanpasya/"> <img src="<?= base_url('assets/instagram.png') ?>" class="socialmedia"></a></li>
                    <li><a href="https://facebook.com/zidan.pasya"> <img src="<?= base_url('assets/facebook.png') ?>" class="socialmedia"></a></li>
                </ul>
            </div>
        </div>
    </center>
</body>
</html>