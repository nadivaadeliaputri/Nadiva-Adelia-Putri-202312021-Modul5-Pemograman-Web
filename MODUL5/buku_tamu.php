<?php
// Inisialisasi variabel
$nama = $email = $pesan = "";
$errors = [];
$sukses = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi Nama
    if (empty($_POST["nama"])) {
        $errors[] = "Nama Lengkap wajib diisi.";
    } else {
        $nama = htmlspecialchars($_POST["nama"]);
    }

    // Validasi Email
    if (empty($_POST["email"])) {
        $errors[] = "Alamat Email wajib diisi.";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }

    // Validasi Pesan
    if (empty($_POST["pesan"])) {
        $errors[] = "Pesan/Komentar wajib diisi.";
    } else {
        $pesan = htmlspecialchars($_POST["pesan"]);
    }

    if (empty($errors)) {
        $sukses = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu Digital STITEK Bontang</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(145deg, #ffe6f0, #e6ccff);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 700px;
            margin: 50px auto;
            background-color: #fff0f5;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(204, 153, 255, 0.2);
        }

        h1 {
            text-align: center;
            color: #b266ff;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 15px;
            font-weight: bold;
            color: #993399;
        }

        input[type="text"], input[type="email"], textarea {
            padding: 10px;
            border: 2px solid #dda0dd;
            border-radius: 10px;
            background-color: #fffafc;
            margin-top: 5px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .submit-btn {
            background-color: #ffb6c1;
            color: #4b0082;
            border: none;
            padding: 12px;
            margin-top: 25px;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .submit-btn:hover {
            background-color: #ffc0cb;
        }

        .errors {
            background-color: #ffe6e6;
            border: 1px solid #ff4d4d;
            color: #cc0000;
            padding: 10px;
            margin-top: 20px;
            border-radius: 10px;
        }

        .success {
            background-color: #e6ffe6;
            border: 1px solid #66cc66;
            color: #336600;
            padding: 10px;
            margin-top: 20px;
            border-radius: 10px;
        }

        .result {
            margin-top: 20px;
            background-color: #f9f0ff;
            padding: 15px;
            border-radius: 10px;
            border: 1px solid #dab6ff;
        }

        .result p {
            margin: 10px 0;
            color: #4b0082;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Buku Tamu Digital STITEK Bontang</h1>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>">

        <label for="email">Alamat Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>">

        <label for="pesan">Pesan/Komentar:</label>
        <textarea id="pesan" name="pesan"><?php echo $pesan; ?></textarea>

        <button type="submit" class="submit-btn">Kirim Pesan</button>
    </form>

    <?php if (!empty($errors)): ?>
        <div class="errors">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php elseif ($sukses): ?>
        <div class="success">Pesan Anda berhasil dikirim!</div>
        <div class="result">
            <p><strong>Nama:</strong> <?php echo $nama; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Pesan:</strong><br><?php echo nl2br($pesan); ?></p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
