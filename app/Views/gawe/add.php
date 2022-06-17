<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<title>Data Nikahan &mdash; E-Wedding</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
  <div class="section-header">
    <div class="section-header-back">
      <a href="<?= site_url('gawe') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Create Nikahan</h1>
  </div>

  <div class="section-body">

    <div class="card">
    </div>
    <div class="card-header">
      <h4>Buat Nikahan / Acara</h4>
    </div>
    <div class="card-body">
      <form action="<?= site_url('gawe') ?>" method="post" autocomplete="off">
        <?= csrf_field()?>
        <div class="form-group">
          <label>Nama Nikahan / Acara *</label>
          <input type="text" name="name_gawe" class="form-control" required autofocus>
        </div>
        <div class="form-group">
          <label>Email *</label>
          <input type="text" name="email_gawe" class="form-control">
        </div>
        <div class="form-group">
          <label>No.Hp *</label>
          <input type="text" name="hp_gawe" class="form-control">
        </div>
        <div class="form-group">
          <label>Tanggal Nikahan / Acara *</label>
          <input type="date" name="date_gawe" class="form-control">
        </div>
        <div class="form-group">
          <label>Info Nikahan / Acara *</label>
          <input name="info_gawe" class="form-control">
        </div>
        <div>
          <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Save</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form>
    </div>
</section>

<?= $this->endSection() ?>