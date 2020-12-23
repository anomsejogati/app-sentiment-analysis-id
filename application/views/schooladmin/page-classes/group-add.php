<div class="add_panel" style="display: none;">

    <div class="row mb-32pt">
        <div class="col-lg-4">
            <div class="page-separator">
                <div class="page-separator__text">Tambah Grup</div>
            </div>
            <p class="card-subtitle text-70 mb-16pt mb-lg-0">Masukkan data untuk membuat grup mata pelajaran baru. Guru pengampu bisa dipilih lebih dari satu.</p>
        </div>
        <div class="col-lg-8 d-flex align-items-center">
            <div class="flex" style="max-width: 100%">

                <div class="form-group">
                    <label class="form-label"
                            for="subject_id">Mata Pelajaran</label>
                    <select id="subject_id"
                            data-toggle="select"
                            class="form-control">
                        <option selected="">-- Pilih --</option>
                        <option>Bahasa Indonesia</option>
                        <option>Bahasa Inggris</option>
                        <option>Bahasa Jawa</option>
                        <option>Fisika</option>
                        <option>Kimia</option>
                        <option>Matematika</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label"
                            for="teacher_id">Guru Pengampu</label>

                    <select id="teacher_id"
                            data-toggle="select"
                            multiple
                            class="form-control">
                            <option data-avatar-src="<?= base_url() ?>assets/public/images/avatar/avatar2.jpg">
                                Afifah Kusnadi, M.Pd
                            </option>
                            <option data-avatar-src="<?= base_url() ?>assets/public/images/avatar/avatar1.jpg">
                                Andi Mukarrama, ST
                            </option>
                            <option data-avatar-src="<?= base_url() ?>assets/public/images/avatar/avatar3.jpg">
                                Muhammad Asnan Hamdani, ST
                            </option>
                            <option data-avatar-src="<?= base_url() ?>assets/public/images/avatar/avatar4.jpg">
                                Riza Ansarita, S.Pd
                            </option>
                            <option data-avatar-src="<?= base_url() ?>assets/public/images/avatar/avatar3.jpg">
                                Drs. Mujiyanto
                            </option>
                            <option data-avatar-src="<?= base_url() ?>assets/public/images/avatar/avatar5.jpg">
                                Tiffaini, S.Pd
                            </option>
                    </select>
                </div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <p class="strong text-accent msg-validation"></p>
                    </div>
                    <div class="col-lg-6 text-right">
                        <button type="button" class="btn btn-outline-primary btn-rounded mr-2 saveBtn" style="width: 125px"><i class="batch-icon-stiffy icon--left"></i>Simpan</button>
                        <button type="button" class="btn btn-outline-accent btn-rounded cancelBtn" style="width: 125px"><i class="batch-icon-delete icon--left"></i>Batal</button>                    
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>