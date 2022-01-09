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
                <h1>Edit Kurikulum</h1>
            </div>
            <div class="main">
                <form action="#" method="post">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $kurikulum['id'] ?>">
                    <div class="form-group">
                        <label for="kode_matakuliah">Kode Matakuliah</label>
                        <input type="text" class="form-control" id="kode_matakuliah" name="kode_matakuliah" placeholder="Masukkan Kode Matakuliah" value="<?php echo $kurikulum['kode_matakuliah'] ?>">
                        <div class="small text-danger mt-5px"><?php echo form_error('kode_matakuliah') ?></div>
                    </div>
                    <div class="form-group">
                        <label for="nama_matakuliah">Nama Matakuliah</label>
                        <input type="text" class="form-control" id="nama_matakuliah" name="nama_matakuliah" placeholder="Masukkan Nama Matakuliah" value="<?php echo $kurikulum['nama_matakuliah'] ?>">
                        <div class="small text-danger mt-5px"><?php echo form_error('nama_matakuliah') ?></div>
                    </div>
                    <div class="form-group">
                        <label for="sifat_perkuliahan">Sifat Perkuliahan</label>
                        <select id="sifat_perkuliahan" name="sifat_perkuliahan" class="form-control">
                            <?php foreach($sifat_perkuliahan as $data) : ?>
                                <?php if ($data == $kurikulum['sifat_perkuliahan']) : ?>
                                    <option value="<?php echo $data ?>" selected><?php echo $data ?></option>
                                <?php else : ?>
                                    <option value="<?php echo $data ?>"><?php echo $data ?></option>
                                <?php endif ?>
                            <?php endforeach ?>
                        </select>
                        <div class="small text-danger mt-5px"><?php echo form_error('sifat_perkuliahan') ?></div>
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <div class="d-flex">
                            <?php foreach($semester as $data) : ?>
                                <?php if ($data == $kurikulum['semester']) : ?>
                                    <div class="d-flex me-20px">
                                        <input type="radio" checked name="semester" class="me-5px" id="<?php echo $data ?>" value="<?php echo $data ?>">
                                        <label for="<?php echo $data ?>" class="ms-2"><?php echo $data ?></label>
                                    </div>
                                <?php else : ?>
                                    <div class="d-flex me-20px">
                                        <input type="radio" name="semester" class="me-5px" id="<?php echo $data ?>" value="<?php echo $data ?>">
                                        <label for="<?php echo $data ?>" class="ms-2"><?php echo $data ?></label>
                                    </div>
                                <?php endif ?>
                            <?php endforeach ?>
                            <div class="small text-danger mt-5px"><?php echo form_error('semester') ?></div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_matakuliah">Jenis Matakuliah</label>
                            <select id="jenis_matakuliah" name="jenis_matakuliah" class="form-control">
                            <?php foreach($jenis_matakuliah as $data) : ?>
                                <?php if ($data == $kurikulum['jenis_matakuliah']) : ?>
                                    <option value="<?php echo $data ?>" selected><?php echo $data ?></option>
                                <?php else : ?>
                                    <option value="<?php echo $data ?>"><?php echo $data ?></option>
                                <?php endif ?>
                            <?php endforeach ?>
                            </select>
                            <div class="small text-danger mt-5px"><?php echo form_error('jenis_matakuliah') ?></div>
                        </div>
                        <div class="form-group">
                            <label for="bobot_sks">Bobot SKS</label>
                            <input type="number" class="form-control" id="bobot_sks" name="bobot_sks" placeholder="Masukkan Bobot SKS" value="<?php echo $kurikulum['bobot_sks'] ?>">
                            <div class="small text-danger mt-5px"><?php echo form_error('bobot_sks') ?></div>
                        </div>

                        <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>