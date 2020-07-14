<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang Kehadiran</title>
</head>
<body>
    
    <h1>{{ $page_title }}</h1>
    <hr>

    <div>

        <form method="POST" action="">

            <div>
                <label>Nama</label>
                <input type="text" name="nama">
            </div>

            <div>
                <label>Email</label>
                <input type="email" name="email">
            </div>

            <div>
                <label>Telefon</label>
                <input type="text" name="telefon">
            </div>

            <div>
                <label>Suhu Badan</label>
                <input type="number" step="0.1" name="suhu">
            </div>

            <div>
                <label>Alamat</label>
                <textarea name="alamat"></textarea>
            </div>

            <button type="reset">Reset</button>
            <button type="submit">Hantar</button>

        </form>

    </div>

    <p>
        <a href="/">Kembali Ke Halaman Utama</a>
    </p>

<p>
</p>

</body>
</html>