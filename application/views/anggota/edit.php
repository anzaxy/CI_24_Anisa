<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">Form Edit Anggota</h2>

<div class="card shadow">
    <div class="card-body">
<form method="post" action="<?= site_url('anggota/update/'.$anggota->no); ?>">
    <div class="form-group">
    <label>Nomor Anggota</label><br>
    <input type="text" name="nomor_anggota" class="form-control" value="<?= $anggota->nomor_anggota;?>" required>
    <label>Nama Anggota</label><br>
    <input type="text" name="nama_anggota" class="form-control" value="<?= $anggota->nama_anggota;?>" required>
    <label>Alamat</label><br>
    <input type="text" name="alamat" class="form-control" value="<?= $anggota->alamat;?>" required>
    <label>Telepon</label><br>
    <input type="text" name="telepon" class="form-control" value="<?= $anggota->telepon;?>" required>
    <label>Email</label><br>
    <input type="text" name="email" class="form-control" value="<?= $anggota->email;?>" required>
    <label>Tanggal Daftar</label><br>
    <input type="date" name="tanggal_daftar" class="form-control" value="<?= $anggota->tanggal_daftar;?>" required>
    <label>Status</label><br>
    <select id="status" name="status" class="form-control" value="<?= $anggota->status;?>" required>
        <option value="">--Status--</option>
        <option value="aktif">Aktif</option>
        <option value="tidak">Tidak Aktif</option>
</select>
    
</div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?= site_url('anggota');?>" class="btn btn-secondary">Kembali</a>

</form>
</div>
</div>
</div>