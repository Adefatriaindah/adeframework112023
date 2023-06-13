<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Genre</title>
</head>
<body>
    <h1>Data Genre</h1>
    <table border="1" celspacing="0" colpading="1">
        <tr>
        <th>Id Genre</th>
        <th>Nama Genre</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($data_genre as $genre): ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?php echo $genre ['nama_genre'] ?></td>
        </tr>
        
        <?php endforeach; ?>
    </table>
</body>
</html>