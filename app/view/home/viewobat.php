<div class="container">
	<h1>Data Obat</h1>
	<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th class="text-center">ID Obat</th>
				<th class="text-center">Nama</th>
				<th class="text-center">Expiration Date</th>
				<th class="text-center">Jenis</th>
				<th class="text-center">Stock</th>

			</tr>
		</thead>
		<tbody>
			<?php
			$count = 1;
			foreach ($data['obat'] as $obat) : ?>
				<tr>
					<td><?= htmlspecialchars($obat['ID_Obat']); ?></td>
					<td><?= htmlspecialchars($obat['Nama']); ?></td>
					<td><?= htmlspecialchars($obat['Expire_Date']); ?></td>
					<td><?= htmlspecialchars($obat['Jenis']); ?></td>
					<td><?= htmlspecialchars($obat['Stock']); ?></td>
				</tr>
				<?php $count++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>

	<div id="obatForm" class="container">
    <h2>Hapus Obat</h2>
		<form action="obat" method="POST">
			<input type="hidden" name="type" value="Obat">
			
			<label for="nama">ID Obat:</label><br>
			<input type="text" id="id" name="id" required><br><br>

			<button type="submit" name="action" value="delete">Delete Obat</button>
		</form>
	</div>

	<!-- Message -->
	<div>
		<?php if (isset($message)) echo $message; ?>
	</div>
</div>