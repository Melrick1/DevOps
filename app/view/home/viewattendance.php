<div class="container">
	<h1>Data Attendance</h1>
	<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th class="text-center">ID Attendance</th>
				<th class="text-center">Title Short</th>
				<th class="text-center">Date Attendance</th>
				<th class="text-center">Time Attendance</th>
				<th class="text-center">ID Class</th>
				<th class="text-center">Name Subject</th>
				<th class="text-center">Email Lecturer</th>
				<th class="text-center">Name Lecturer</th>
				<th class="text-center">Room Latitude</th>
				<th class="text-center">Room Longtitude</th>
				<th class="text-center">Max Radius</th>
				<th class="text-center">Created At</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$count = 1;
			foreach ($data['attendance'] as $attendance) : ?>
				<tr>
					<td><?= htmlspecialchars($attendance['id_attendance']); ?></td>
					<td><?= htmlspecialchars($attendance['title_short']); ?></td>
					<td><?= htmlspecialchars($attendance['date_attendance']); ?></td>
					<td><?= htmlspecialchars($attendance['time_attendance']); ?></td>
					<td><?= htmlspecialchars($attendance['id_class']); ?></td>
					<td><?= htmlspecialchars($attendance['name_subject']); ?></td>
					<td><?= htmlspecialchars($attendance['email_lecturer']); ?></td>
					<td><?= htmlspecialchars($attendance['name_lecturer']); ?></td>
					<td><?= htmlspecialchars($attendance['room_latitude']); ?></td>
					<td><?= htmlspecialchars($attendance['room_longitude']); ?></td>
					<td><?= htmlspecialchars($attendance['max_radius']); ?></td>
					<td><?= htmlspecialchars($attendance['created_at']); ?></td>
				</tr>
				<?php $count++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>