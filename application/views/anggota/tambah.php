<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">Tambah Anggota</h2>

<div class="card shadow">
    <div class="card-body">
<form method="post" action="<?= site_url('anggota/simpan'); ?>">
    <div class="form-group">
    <label>Nomor Anggota</label><br>
    <input type="text" name="nomor_anggota" class="form-control" required>
    <label>Nama Anggota</label><br>
    <input type="text" name="nama_anggota" class="form-control" required>
    <label>Alamat</label><br>
    <input type="text" name="alamat" class="form-control" required>
    <label>Telepon</label><br>
    <input type="text" name="telepon" class="form-control" required>
    <label>Email</label><br>
    <input type="email" name="email" class="form-control" required>
    <label>Tanggal Daftar</label><br>
    <input type="date" name="tanggal_daftar" class="form-control" required>
    <label>Status</label><br>
    <select id="status" name="status" class="form-control" required>
        <option value="">--Status--</option>
        <option value="aktif">Aktif</option>
        <option value="tidak">Tidak Aktif</option>
</select>
    
</div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= site_url('anggota');?>" class="btn btn-secondary">Kembali</a>

</form>
</div>
</div>
</div>