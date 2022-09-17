
<h1>Ajukan Rekomendasimu</h1>
<br>
<p>Masyarakat secara luas dapat mengajukan tempat wisata atau budaya yang belum masuk ke dalam sistem database aplikasi ini dengan mengajukan pengisian pada formulir dibawah ini.
Setelah itu akan kami tindak lanjut secara langsung ke lapangan guna memverifikasi data yang terdapat di tempat.</p>

<form>
    <div class="form-group">
      <label for="InputNama">Nama Lengkap</label>
      <input type="nama" class="form-control" id="InputNama" aria-describedby="emailHelp" placeholder="Nama Lengkap">
      <small id="inputNama" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="InputEmail">Email</label>
      <input type="email" class="form-control" id="InputEmail" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="InputNamaTempat">Nama Tempat</label>
        <input type="namatempat" class="form-control" id="namatempat"placeholder="Nama Tempat">
      </div>
      <div class="form-group">
        <label for="InputKategori">Pilih Kategori</label>
        <select class="form-control" id="InputKategori">
          <option>Cagar budaya</option>
          <option>Seni dan Adat tradisi</option>
          <option>Kuliner dan Kerajinan</option>
          <option>Geoheritage</option>
        </select>
      </div>
    <div class="form-group">
        <label for="InputDeskripsi">Deskripsi</label>
        <textarea class="form-control" id="InputDeskripsi" rows="4"></textarea>
      </div>
      <div class="form-group">
        <label for="InputAlamat">Alamat Lengkap</label>
        <textarea class="form-control" id="InputAlamat" rows="4"></textarea>
      </div>
    
        <div class="form-group">
          <label for="exampleFormControlFile1">Uploud Foto</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <label for="InputLatitude">Peta - Latitude</label>
            <input type="latitude" class="form-control" id="InputLatitude" placeholder="">
          </div>
          <div class="form-group">
            <label for="InputLongitude">Peta - Longitude</label>
            <input type="longitude" class="form-control" id="InputLongitude" placeholder="">
          </div>
          <p>Keterangan latitude dan longitude di dapat dengan cara : <br>
            1. Buka google maps <br>
            2. Cari titik lokasi potensi yang akan di titik <br>
            3. Klik kanan lalu pilih menu what’s here ? <br>
            4. Maka, dibawah kotak pencarian akan tampil latitide, longitude <br>
            5. Masukan langitude, longitude ke kolom di samping ini.</p>

    <button type="submit" class="btn btn-primary">Ajukan Rekomendasi</button>
  </form>
  
@endsection
        