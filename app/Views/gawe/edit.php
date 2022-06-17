<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Update Gawe &mdash; E-Wedding</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('gawe') ?>" class="btn"><i clas="fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Gawe</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Gawe / Acara</h4>
            </div>
            <div class="card-body cold-md-6">
                <form action="<?= site_url('gawe', $gawe->id_gawe) ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>Nama Nikahan / Acara *</label>
                        <input type="text" name="name_gawe" value="<?= $gawe->name_gawe ?>" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="text" name="email_gawe" value="<?= $gawe->email_gawe ?>" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>No.Hp *</label>
                        <input type="text" name="hp_gawe" value="<?= $gawe->hp_gawe ?>" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Nikahan / Acara *</label>
                        <input type="date" name="date_gawe" value="<?= $gawe->date_gawe ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Info Nikahan / Acara *</label>
                        <input name="info_gawe" value="<?= $gawe->info_gawe ?>" class="form-control">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
<?= $this->endSection() ?>