<?= $this->extend('template') ?>

<?= $this->section('content') ?>
    <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="mb-0 text-dark">Dashboard</h1>
    <a href="<?= base_url('logout') ?>" class="btn btn-outline-danger">Logout</a>
</div>

<div class="alert alert-success" role="alert">
    Welcome, <?= esc(session('userEmail')) ?>!
</div>

<div class="card shadow-sm border-0 bg-white text-dark">
    <div class="card-body">
        <p class="mb-0">This is a protected page only visible after login.</p>
    </div>
</div>

<?= $this->endSection() ?>
