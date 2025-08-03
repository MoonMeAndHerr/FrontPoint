<h1>selamat datang admin</h1>

<!-- Search & Add -->
<div class="row align-items-center mb-4 g-3">
    <!-- Form Search -->
    <div class="col-md-8">
        <form method="get" class="d-flex gap-2">
            <input type="text" name="searchTxt" class="form-control" placeholder="Search Username" value="<?= isset($_GET['searchTxt']) ? $_GET['searchTxt'] : ''; ?>" required>
            <button type="submit" name="btnSearch" class="btn btn-outline-primary">Search</button>
        </form>
    </div>

    <!-- Form Add New -->
    <div class="col-md-4 text-md-end">
        <form method="post" action="<?= base_url('/manageuser') ?>">
            <button type="submit" name="btnInsert" class="btn btn-success w-100 w-md-auto">+ Add New</button>
        </form>
    </div>
</div>

<?php
// Sambungan kepada Model Pengguna
$emp = new \App\Models\ModelPengguna();

// Semak jika ada carian
if (isset($_GET['searchTxt']) && !empty($_GET['searchTxt'])) {
    // Dapatkan nilai carian dan cari berdasarkan username
    $searchTxt = $_GET['searchTxt'];
    $data = $emp->where("username", $searchTxt)->findAll();
} else {
    // Ambil semua data jika tiada carian
    $data = $emp->findAll();
}
?>

<?php
echo "<table border='1'>";
foreach ($data as $row) {
?>
    <tr>
    <td><?=$row->ID?></td>
    <td><?=$row->fullname?></td>
    <td><?=$row->username?></td>
    <td><?=$row->password?></td>
    <td><?=$row->userlevel?></td>
    
    <td>
    <form method='POST' action='<?= base_url("/manageuser")?>'>
    <input type='hidden' name='ID' value='<?= $row->ID?>'>
    <input type='submit' name='btnEdit' value='Edit'>
    <input type='submit' name='btnDelete' value='Delete'>
    </form>
    </td>
    </tr>
    
<?php    
}
?>