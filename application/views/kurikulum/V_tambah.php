<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h4>SIDUL</h4>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#section1">Kurikulum</a></li>
            </ul>
        </div>

        <div class="col-sm-9">
            <div class="header mb-60px">
                <h1>Tambah Kurikulum</h1>
            </div>
            <div class="main">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="kode_matakuliah">Kode Matakuliah</label>
                        <input type="text" class="form-control" id="kode_matakuliah" name="kode_matakuliah" placeholder="Masukkan Kode Matakuliah">
                    </div>
                    <div class="form-group">
                        <label for="nama_matakuliah">Nama Matakuliah</label>
                        <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah" placeholder="Masukkan Nama Matakuliah">
                    </div>
                    <div class="form-group">
                        <label for="jenis_perkuliahan">Jenis Perkuliahan</label>
                        <select id="jenis_perkuliahan" name="jenis_perkuliahan" class="form-control">
                            <option value="Praktek">Praktek</option>
                            <option value="Teori">Teori</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <div class="d-flex">
                            <div class="d-flex me-20px">
                                <input type="radio" name="semester" class="me-5px" id="1" value="1">
                                <label for="1" class="ms-2">1</label>
                            </div>
                            <div class="d-flex me-20px">
                                <input type="radio" name="semester" class="me-5px" id="2" value="2">
                                <label for="2" class="ms-2">2</label>
                            </div>
                            <div class="d-flex me-20px">
                                <input type="radio" name="semester" class="me-5px" id="3" value="3">
                                <label for="3" class="ms-2">3</label>
                            </div>
                            <div class="d-flex me-20px">
                                <input type="radio" name="semester" class="me-5px" id="4" value="4">
                                <label for="4" class="ms-2">4</label>
                            </div>
                            <div class="d-flex me-20px">
                                <input type="radio" name="semester" class="me-5px" id="5" value="5">
                                <label for="5" class="ms-2">5</label>
                            </div>
                            <div class="d-flex me-20px">
                                <input type="radio" name="semester" class="me-5px" id="6" value="6">
                                <label for="6" class="ms-2">6</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_matakuliah">Jenis Matakuliah</label>
                            <select id="jenis_matakuliah" name="jenis_matakuliah" class="form-control">
                                <option value="Wajib">Wajib</option>
                                <option value="Pilihan">Pilihan</option>
                                <option value="Konsentrasi">Konsentrasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bobot_sks">Bobot SKS</label>
                            <input type="number" class="form-control" id="bobot_sks" name="bobot_sks" placeholder="Masukkan Bobot SKS">
                        </div>

                        <button type="submit" class="btn btn-success">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>