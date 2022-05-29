<!-- Modal -->
<div class="modal fade modal-xl" id="addDataModal" tabindex="-1" aria-labelledby="addDataModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDataModalLabel">Form Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <h4 class="mt-3">Form tambah data</h4> -->
                    <form action="proses.php" method="post">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="prov">Provinsi</label>
                                    <select class="form-select" name="prov" id="prob">
                                        <option value="Banten">Banten</option>
                                        <option value="Jakarta">Jakarta</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="kab">Kabupaten/Kota</label>
                                    <select name="kab" id="kab" class="form-select">
                                        <option value="Tangerang Selatan">Tangerang Selatan</option>
                                        <option value="Jakarta Barat">Jakarta Barat</option>
                                        <option value="Serang">Serang</option>
                                        <option value="Jakarta Selatan">Jakarta Selatan</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label" for="kec">Kecamatan</label>
                                    <select name="kec" id="kec" class="form-select">
                                        <option value="Rawabuntu">Rawabuntu</option>
                                        <option value="Pasar Kemis">Pasar Kemis</option>
                                        <option value="Slipi">Slipi</option>
                                        <option value="Kebayoran">Kebayoran</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="faskes_jenis" class="form-label">Faskes</label>
                                    <select name="faskes_jenis" id="faskes_jenis" class="form-select">
                                        <option value="1">I</option>
                                        <option value="2">II</option>
                                        <option value="3">III</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="faskes_name" class="form-label">Nama Faskes</label>
                                    <select name="faskes_name" id="faskes_name" class="form-select">
                                        <option value="test">test</option>
                                        <option value="test">test</option>
                                        <option value="test">test</option>
                                        <option value="test">test</option>
                                        <option value="test">test</option>
                                        <option value="test">test</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nik" class="form-label">Nomor Induk Kependudukan</label>
                                    <input class="form-control" type="text" name="nik" id="nik">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input class="form-control" type="text" name="nama" id="nama">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="jk" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" type="text" name="jk" id="jk">
                                        <option value="L">Laki Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="umur" class="form-label">Umur</label>
                                    <input class="form-control" type="text" name="umur" id="umur">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="no_hp" class="form-label">No. Handphone</label>
                                    <input class="form-control" type="number" name="no_hp" id="no_hp">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input class="form-control" type="text-area" name="alamat" id="alamat">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <!-- <a href="index.php" class="btn btn-secondary">Kembali</a> -->
                            <button type="submit" name="tambahData" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>