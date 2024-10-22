<div class="container">
	<h1>Data Classes</h1>
	<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th class="text-center">ID Class</th>
				<th class="text-center">Email Lecturer</th>
				<th class="text-center">Class Code</th>
				<th class="text-center">Name Subject</th>
				<th class="text-center">Name Lecturer</th>
				<th class="text-center">Fakulty</th>
				<th class="text-center">Prodi</th>
				<th class="text-center">SKS</th>
				<th class="text-center">Building Room</th>
				<th class="text-center">Room Latitude</th>
				<th class="text-center">Room Longitude</th>
				<th class="text-center">Jadwal Class Day Time </th>
				<th class="text-center">Daftar Email Student</th>
				<th class="text-center">Created at</th>
				<th class="text-center">Status class</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$count = 1;
			foreach ($data['classes'] as $classes) : ?>
				<tr>
					<td><?= htmlspecialchars($classes['id_class']); ?></td>
					<td><?= htmlspecialchars($classes['email_lecturer']); ?></td>
					<td><?= htmlspecialchars($classes['code_class']); ?></td>
					<td><?= htmlspecialchars($classes['name_subject']); ?></td>
					<td><?= htmlspecialchars($classes['name_lecturer']); ?></td>
					<td><?= htmlspecialchars($classes['fakultas']); ?></td>
					<td><?= htmlspecialchars($classes['prodi']); ?></td>
					<td><?= htmlspecialchars($classes['sks']); ?></td>
					<td><?= htmlspecialchars($classes['building_room']); ?></td>
					<td><?= htmlspecialchars($classes['room_latitude']); ?></td>
					<td><?= htmlspecialchars($classes['room_longitude']); ?></td>
					<td><?= htmlspecialchars($classes['jadwal_class_day_time']); ?></td>
					<td><?= htmlspecialchars($classes['daftar_email_student']); ?></td>
					<td><?= htmlspecialchars($classes['created_at']); ?></td>
					<td><?= htmlspecialchars($classes['status_class']); ?></td>
				</tr>
				<?php $count++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>