<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CURD READ</title>
</head>

<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Edit</th>
			<th>Hapus</th>


		</tr>
		<?php
		foreach ($isi as $k0 => $v0) {
		?>
			<tr>
				<td><?php echo $v0['id'] ?></td>
				<td><?php echo $v0['nama'] ?></td>
				<td><a href='<?php echo "ubah/" . $v0['id'] ?>'>Ubah</a></td>
				<td><a href='<?php echo "hapus/" . $v0['id'] ?>'>Hapus</a></td>
			</tr>
		<?php } ?>

	</table>
</body>

</html>