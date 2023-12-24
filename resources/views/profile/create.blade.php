<div class="card">
    <div class="card-body">
        <form action="/simpan" method="POST">
            @csrf <!-- Untuk keamanan dalam Laravel -->
            <div class="mb-3">
                <label for="nama" class="form-label" style="font-family: 'Jost', sans-serif;">Nama Pasien:</label>
                <input type="text" id="nama" name="nama_pasien" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="noTelepon" class="form-label" style="font-family: 'Jost', sans-serif;">No Telepon Pasien:</label>
                <input type="tel" id="noTelepon" name="no_telp_pasien" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label" style="font-family: 'Jost', sans-serif;">Email Pasien:</label>
                <input type="email" id="email" name="email_pasien" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label" style="font-family: 'Jost', sans-serif;">Alamat Pasien:</label>
                <input type="text" id="alamat" name="alamat_pasien" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jenisKelamin" class="form-label" style="font-family: 'Jost', sans-serif;">Jenis Kelamin Pasien:</label>
                <select id="jenisKelamin" name="jk_pasien" class="form-select" required style="font-family: 'Jost', sans-serif;">
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" style="font-family: 'Jost', sans-serif;">Simpan</button>
        </form>
    </div>
</div>

<style>
/* CSS untuk style card */
/* dicube */
.card {
  border: 1px solid #ccc;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 20px;
  width: 400px; /* Sesuaikan lebar card sesuai kebutuhan */
  margin: auto; /* Agar card berada di tengah halaman */
  background-color: #f9f9f9;
  margin-top: 130px;
}

.span {
    text-align: center;
    font-size: 20px;
    font-display: bold;
}
/* CSS untuk style label */
.form-label {
  font-weight: bold;
}

/* CSS untuk style input */
.form-control, .form-select {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border-radius: 4px;
  border: 1px solid #ccc;
}

/* CSS untuk style button */
.btn {
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  background-color: #7D1219;
  color: white;
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin-top: 10px;
}

.btn:hover {
  background-color: #5f0f15;
}

/* CSS untuk style select */
.form-select {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border-radius: 4px;
  border: 1px solid #ccc;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  /* background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath d='M4 3l-4 4h8l-4-4z'/%3E%3C/svg%3E"); */
  background-repeat: no-repeat;
  background-position-x: calc(100% - 10px);
  background-position-y: center;
}

/* CSS untuk style select (hover) */
.form-select:hover {
  border-color: #555;
}

/* CSS untuk style select (focus) */
.form-select:focus {
  border-color: #007bff;
  box-shadow: 0 0 0 0.1rem rgba(0, 123, 255, 0.25);
}
</style>
