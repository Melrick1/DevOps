<div class="container type-picker">
    <label for="TypeCrud">Pilih data yang akan diproses:</label>
    <div>
        <select class="input-box" id="TypeCrud" name="type" onchange="changeForm()">
            <option value="Staff">Staff</option>
            <option value="Obat">Obat</option>
        </select>
    </div>
</div>

<!-- Staff Form -->
<div id="staffForm" class="container" style="display:none;">
    <h2>Staff Data</h2>
    <form action="add" method="POST">
        <input type="hidden" name="type" value="Staff">
        
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phoneNum">Phone Number:</label><br>
        <input type="text" id="phoneNum" name="phoneNum" required><br><br>

        <label for="job">Job:</label><br>
        <input type="text" id="job" name="job" required><br><br>

        <!-- Separate buttons for Staff -->
        <button type="submit" name="action" value="insert">Add Staff</button>
        <button type="submit" name="action" value="update">Update Staff</button>
    </form>
</div>

<!-- Obat Form -->
<div id="obatForm" class="container" style="display:none;">
    <h2>Obat Data</h2>
    <form action="add" method="POST">
        <input type="hidden" name="type" value="Obat">
        
        <label for="nama">Nama Obat:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="expire_date">Expire Date:</label><br>
        <input type="text" id="expire_date" name="expire_date" required><br><br>

        <label for="jenis">Jenis:</label><br>
        <input type="text" id="jenis" name="jenis" required><br><br>

        <label for="stock">Stock:</label><br>
        <input type="number" id="stock" name="stock" required><br><br>

        <!-- Separate buttons for Obat -->
        <button type="submit" name="action" value="insert">Add Obat</button>
        <button type="submit" name="action" value="update">Update Obat</button>
    </form>
</div>

<!-- Message -->
<div>
    <?php if (isset($message)) echo $message; ?>
</div>

<script>
// Function to toggle the visibility of forms based on selected option
function changeForm() {
    const type = document.getElementById('TypeCrud').value;
    
    // Hide both forms by default
    document.getElementById('staffForm').style.display = 'none';
    document.getElementById('obatForm').style.display = 'none';

    // Show the corresponding form
    if (type === 'Staff') {
        document.getElementById('staffForm').style.display = 'block';
    } else if (type === 'Obat') {
        document.getElementById('obatForm').style.display = 'block';
    }
}

// Initial form display based on default selected value
changeForm();
</script>
