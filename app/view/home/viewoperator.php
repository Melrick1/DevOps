<div class="container">
	<h1>Data Operator</h1>
	<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th class="text-center">NIP Number</th>
				<th class="text-center">email</th>
				<th class="text-center">Full Name</th>
				<th class="text-center">Phone Number</th>
				<th class="text-center">Role</th>
				<th class="text-center">created_at</th>
				<th class="text-center">updated_at</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$count = 1;
			foreach ($data['operator'] as $operator) : ?>
				<tr>
					<td><?= htmlspecialchars($operator['nip']); ?></td>
					<td><?= htmlspecialchars($operator['email']); ?></td>
					<td><?= htmlspecialchars($operator['fullname']); ?></td>
					<td><?= htmlspecialchars($operator['phone_number']); ?></td>
					<td><?= htmlspecialchars($operator['role']); ?></td>
					<td><?= htmlspecialchars($operator['created_at']); ?></td>
					<td><?= htmlspecialchars($operator['updated_at']); ?></td>
				</tr>
				<?php $count++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>