<div class="container">
	<h1>Data Staff</h1>
	<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th class="text-center">ID Staff</th>
				<th class="text-center">Nama</th>
				<th class="text-center">Email</th>
				<th class="text-center">Phone Number</th>
				<th class="text-center">Job</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$count = 1;
			foreach ($data['staff'] as $staff) : ?>
				<tr>
					<td><?= htmlspecialchars($staff['ID_Staff']); ?></td>
					<td><?= htmlspecialchars($staff['Nama']); ?></td>
					<td><?= htmlspecialchars($staff['Email']); ?></td>
					<td><?= htmlspecialchars($staff['Phone_Num']); ?></td>
					<td><?= htmlspecialchars($staff['Job']); ?></td>
				</tr>
				<?php $count++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>

	<div id="staffForm" class="container">
    <h2>Hapus Staff</h2>
		<form action="index" method="POST">
			<input type="hidden" name="type" value="Staff">
			
			<label for="nama">ID Staff:</label><br>
			<input type="text" id="id" name="id" required><br><br>

			<button type="submit" name="action" value="delete">Delete Staff</button>
		</form>
	</div>

	<!-- Message -->
	<div>
		<?php if (isset($message)) echo $message; ?>
	</div>
</div>
