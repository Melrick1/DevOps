<div class="container">
	<h1>Data Students</h1>
	<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th class="text-center">Registration Number</th>
				<th class="text-center">NIM Number</th>
				<th class="text-center">Email</th>
				<th class="text-center">Full Name</th>
				<th class="text-center">created_at</th>
				<th class="text-center">updated_at</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$count = 1;
			foreach ($data['students'] as $students) : ?>
				<tr>
					<td><?= htmlspecialchars($students['reg_number']); ?></td>
					<td><?= htmlspecialchars($students['nim_number']); ?></td>
					<td><?= htmlspecialchars($students['email']); ?></td>
					<td><?= htmlspecialchars($students['fullname']); ?></td>
					<td><?= htmlspecialchars($students['created_at']); ?></td>
					<td><?= htmlspecialchars($students['updated_at']); ?></td>
				</tr>
				<?php $count++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>
	<a href="<?= APP_PATH;?>/Home/history">History</a>
</div>
</div>