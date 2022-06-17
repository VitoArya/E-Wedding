<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<title>Data Nikahan &mdash; E-Wedding</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
  <div class="section-header">
    <h1>Nikahan</h1>
    <div class="section-header-button">
      <a href="<?= site_url('gawe/add') ?>" class="btn btn-primary">Tambah</a>
    </div>
  </div>

  <?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">x</button>
        <b>Success!!</b>
        <?= session()->getFlashdata('success'); ?>
      </div>
    </div>
  <?php endif; ?>
  <?php if (session()->getFlashdata('error')) : ?>
    <div class="alert alert-danger alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">x</button>
        <b>Error!!</b>
        <?= session()->getFlashdata('error'); ?>
      </div>
    </div>
  <?php endif; ?>
  <div class="section-body">

    <div class="card">
    </div>
    <div class="card-header">
      <h4>Data Nikahan / Acara</h4>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-striped table-md">
        <tbody>
          <tr>
            <th>No</th>
            <th>Nama Gawe</th>
            <th>Email</th>
            <th>No.Hp</th>
            <th>Tanggal Nikahan</th>
            <th>Info</th>
            <th>Action</th>
          </tr>
          <?php foreach ($gawe as $key => $value) : ?>
            <tr>
              <td><?= $key + 1 ?></td>
              <td><?= $value->name_gawe ?></td>
              <td><?= $value->email_gawe ?></td>
              <td><?= $value->hp_gawe ?></td>
              <td><?= date('d/m/y', strtotime($value->date_gawe)) ?></td>
              <td><?= $value->info_gawe ?></td>
              <td class="text-center" style="width:10%">
                <a href="<?= site_url('gawe/edit/' . $value->id_gawe) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                <form action="<?= site_url('gawe/' . $value->id_gawe) ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                  <?= csrf_field() ?>
                  <input type="hidden" name="_method" value="DELETE">
                  <button class="btn btn-danger btn-sm">
                    <i class="fas fa-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<?= $this->endSection() ?>