@csrf
<div class="mb-3">
    <label class="form-label">Nama Lengkap</label>
    <input type="text" name="nama_lengkap" class="form-control" value="{{ old('nama_lengkap', $kontak->nama_lengkap ?? '') }}" required>
</div>
<div class="mb-3">
    <label class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control" rows="3" required>{{ old('alamat', $kontak->alamat ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label class="form-label">No Telepon</label>
    <input type="text" name="no_telepon" class="form-control" value="{{ old('no_telepon', $kontak->no_telepon ?? '') }}" required>
</div>
<button type="submit" class="btn btn-primary">Simpan</button>
<a href="{{ route('kontaks.index') }}" class="btn btn-secondary">Batal</a>
