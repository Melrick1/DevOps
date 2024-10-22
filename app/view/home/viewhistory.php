<div class="container">
	<h1>Data History</h1>
	<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th class="text-center">ID Class</th>
				<th class="text-center">ID Attendance</th>
				<th class="text-center">Email Student</th>
				<th class="text-center">Name Subject</th>
				<th class="text-center">Email Lecturer</th>
				<th class="text-center">Student Lattitude</th>
				<th class="text-center">Student Logtitude</th>
				<th class="text-center">Distance</th>
				<th class="text-center">Time Take Attendance</th>
				<th class="text-center">Status</th>
				<th class="text-center">Note</th>
				<th class="text-center">Created At</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$count = 1;
			foreach ($data['history'] as $history) : ?>
				<tr>
					<td><?= htmlspecialchars($history['id_class']); ?></td>
					<td><?= htmlspecialchars($history['id_attendance']); ?></td>
					<td><?= htmlspecialchars($history['email_student']); ?></td>
					<td><?= htmlspecialchars($history['name_subject']); ?></td>
					<td><?= htmlspecialchars($history['email_lecturer']); ?></td>
					<td><?= htmlspecialchars($history['student_lat']); ?></td>
					<td><?= htmlspecialchars($history['student_long']); ?></td>
					<td><?= htmlspecialchars($history['distance']); ?></td>
					<td><?= htmlspecialchars($history['time_take_attendance']); ?></td>
					<td><?= htmlspecialchars($history['status']); ?></td>
					<td><?= htmlspecialchars($history['note']); ?></td>
					<td><?= htmlspecialchars($history['created_at']); ?></td>
				</tr>
				<?php $count++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>