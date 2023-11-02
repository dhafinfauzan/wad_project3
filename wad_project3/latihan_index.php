<!DOCTYPE html>
<html>
<head>
    <title>Data Students</title>
</head>
<body>
    <h1>Daftar Students</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
        </tr>
        <?php
                $co nn = mysqli_connect("127.0.0.1","root","","wad_project3");
        $result = mysqli_query($conn,"SELECT * FROM students");

        $sql = "SELECT * FROM students";
        $result = mysqli_query($conn, $sql);
        ?>

        <?php while ($data = mysqli_fetch_object($result)) { ?>
            <tr>
                <td><?php echo $data->id ?></td>
                <td><?php echo $data->nim ?></td>
                <td><?php echo $data->name ?></td>
                <td><?php echo $data->address ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
