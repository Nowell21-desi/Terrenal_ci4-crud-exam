<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <div class="row mb-4">
        <div class="col-md-8">
            <h2><i class="bi bi-file-text"></i> Record Details</h2>
        </div>
        <div class="col-md-4 text-end">
            <a href="<?= base_url('records') ?>" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Back to List
            </a>
        </div>
    </div>
    
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><?= esc($record['title']) ?></h4>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">ID:</dt>
                <dd class="col-sm-9"><?= esc($record['id']) ?></dd>
                
                <dt class="col-sm-3">Title:</dt>
                <dd class="col-sm-9"><?= esc($record['title']) ?></dd>
                
                <dt class="col-sm-3">Description:</dt>
                <dd class="col-sm-9"><?= nl2br(esc($record['description'])) ?></dd>
                
                <dt class="col-sm-3">Category:</dt>
                <dd class="col-sm-9">
                    <span class="badge bg-info"><?= esc($record['category']) ?></span>
                </dd>
                
                <dt class="col-sm-3">Status:</dt>
                <dd class="col-sm-9">
                    <?php
                    $badgeClass = match($record['status']) {
                        'active' => 'bg-success',
                        'inactive' => 'bg-secondary',
                        'pending' => 'bg-warning text-dark',
                        default => 'bg-info'
                    };
                    ?>
                    <span class="badge <?= $badgeClass ?>">
                        <?= ucfirst(esc($record['status'])) ?>
                    </span>
                </dd>
                
                <dt class="col-sm-3">Created At:</dt>
                <dd class="col-sm-9"><?= date('F d, Y h:i A', strtotime($record['created_at'])) ?></dd>
                
                <dt class="col-sm-3">Updated At:</dt>
                <dd class="col-sm-9"><?= date('F d, Y h:i A', strtotime($record['updated_at'])) ?></dd>
            </dl>
        </div>
        <div class="card-footer">
            <a href="<?= base_url('records/edit/' . $record['id']) ?>" class="btn btn-warning">
                <i class="bi bi-pencil"></i> Edit Record
            </a>
            <button type="button" class="btn btn-danger" onclick="confirmDelete(<?= $record['id'] ?>)">
                <i class="bi bi-trash"></i> Delete Record
            </button>
            <a href="<?= base_url('records') ?>" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Back to List
            </a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
function confirmDelete(id) {
    if (confirm('Are you sure you want to delete this record? This action cannot be undone.')) {
        window.location.href = '<?= base_url('records/delete/') ?>' + id;
    }
}
</script>
<?= $this->endSection() ?>
