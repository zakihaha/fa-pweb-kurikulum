<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h4>SIDUL</h4>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="<?php echo base_url() ?>">Kurikulum</a></li>
            </ul>
        </div>

        <div class="col-sm-9">
            <div class="header mb-60px">
                <h1>Daftar Kurikulum</h1>
                <a href="<?php echo base_url() ?>tambah" class="btn btn-success">Tambah</a>
            </div>
            <div class="main">

                <?php if ($this->session->flashdata()) :
                    $key = array_keys($this->session->flashdata())[0];
                    $value = $this->session->flashdata();
                ?>

                    <div class="alert alert-<?php echo $key ?> alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php print_r($value[$key]) ?>
                    </div>
                <?php endif ?>

                <form action="<?php echo base_url() ?>" method="post">
                    <div class="form-group mb-20px">
                        <div class="d-flex align-items-center">
                            <label class="form-label me-10px" for="semester">Tampilkan</label>
                            <div class="me-10px">

                                <select name="semester" id="semester" class="form-control">
                                    <option value="">Semua semester</option>
                                    <?php foreach ($semester as $data) : ?>
                                        <option value="<?php echo $data ?>">Semester <?php echo $data ?></option>
                                    <?php endforeach ?>
                                </select>

                            </div>
                            <div class="me-10px">

                                <select name="tahun_ajaran" id="tahun_ajaran" class="form-control">
                                    <option value="">Semua T.A.</option>
                                    <?php foreach ($tahun_ajaran as $data) : ?>
                                        <option value="<?php echo $data ?>">T.A. <?php echo $data ?></option>
                                    <?php endforeach ?>
                                </select>
                                
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary"></input>
                        </div>
                    </div>
                </form>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Matakuliah</th>
                            <th>Nama Matakuliah</th>
                            <th>Sifat Perkuliahan</th>
                            <th>Tahun Ajaran</th>
                            <th>Semester</th>
                            <th>Jenis Matakuliah</th>
                            <th>Bobot SKS</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($kurikulum)) : ?>
                            <tr>
                                <td colspan="9">
                                    Data tidak ditemukan
                                </td>
                            </tr>
                        <?php endif ?>

                        <?php
                        foreach ($kurikulum as $data) :
                        ?>
                            <tr>
                                <td><?php echo ++$start ?></td>
                                <td><?php echo $data['kode_matakuliah'] ?></td>
                                <td><?php echo $data['nama_matakuliah'] ?></td>
                                <td><?php echo $data['sifat_perkuliahan'] ?></td>
                                <td><?php echo $data['tahun_ajaran'] ?></td>
                                <td><?php echo $data['semester'] ?></td>
                                <td><?php echo $data['jenis_matakuliah'] ?></td>
                                <td><?php echo $data['bobot_sks'] ?></td>
                                <td>
                                    <a href="<?php echo base_url() ?>edit/<?php echo $data['id'] ?>" class="btn btn-warning">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    <a onclick="return confirm('Apa Anda yakin untuk menghapus data ini?')" href="<?php echo base_url() ?>hapus/<?php echo $data['id'] ?>" class="btn btn-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        endforeach
                        ?>
                    </tbody>
                </table>

                <?php echo $this->pagination->create_links() ?>
            </div>
        </div>
    </div>
</div>