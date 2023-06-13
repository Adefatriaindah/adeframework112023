<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Genre</title>
</head>
<body>
    <h1 align = "center">Data Genre</h1>
    <table border="1" celspacing="0" colpading="5" align = "center">
    <tr align = "center" bgcolor = '#EE6868'>
        <th>Id Genre</th>
        <th>Nama Genre</th>
        <th>Tanggal Dibuat</th>
        <th>Tanggal Diupdate</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($semuafilm as $genre): ?>
        <tr align = "center" bgcolor = 'FFEEEE'>
            <td><?= $i++; ?></td>
            <td><?php echo $genre ['nama_genre'] ?></td>
            <td><?php echo $genre ['created_at'] ?></td>
            <td><?php echo $genre ['update_at'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>