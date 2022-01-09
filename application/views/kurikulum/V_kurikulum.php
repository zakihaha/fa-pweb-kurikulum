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
                <h1>Daftar Kurikulum</h1>
                <a href="<?php echo base_url() ?>tambah" class="btn btn-success">Tambah</a>
            </div>
            <div class="main">
                <div class="form-group mb-20px">
                    <form action="#" method="post">
                        <div class="d-flex align-items-center">
                            <label class="form-label" for="semester">Tampilkan</label>
                            <div class="form-semester">
                                <select name="semester" id="semester" class="form-control">
                                    <option value="">Semua</option>
                                    <option value="1">Semester 1</option>
                                    <option value="2">Semester 2</option>
                                    <option value="3">Semester 3</option>
                                    <option value="4">Semester 4</option>
                                    <option value="5">Semester 5</option>
                                    <option value="6">Semester 6</option>
                                </select>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary"></input>
                        </div>
                    </form>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Matakuliah</th>
                            <th>Nama Matakuliah</th>
                            <th>Jenis Perkuliahan</th>
                            <th>Semester</th>
                            <th>Jenis Matakuliah</th>
                            <th>Bobot SKS</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($kurikulum as $data) :
                        ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $data['kode_matakuliah'] ?></td>
                                <td><?php echo $data['nama_matakuliah'] ?></td>
                                <td><?php echo $data['jenis_perkuliahan'] ?></td>
                                <td><?php echo $data['semester'] ?></td>
                                <td><?php echo $data['jenis_matakuliah'] ?></td>
                                <td><?php echo $data['bobot_sks'] ?></td>
                                <td>
                                    <a href="" class="btn btn-warning">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    <a href="<?php echo base_url() ?>hapus/<?php echo $data['id'] ?>" class="btn btn-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        endforeach
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>