<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <div class="row mb-4">
        <div class="col-md-8">
            <h2><i class="bi bi-list-ul"></i> All Records</h2>
        </div>
        <div class="col-md-4 text-end">
            <a href="<?= base_url('records/create') ?>" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Create New Record
            </a>
        </div>
    </div>
    
    <?php if (empty($records)): ?>
        <div class="alert alert-info">
            <i class="bi bi-info-circle-fill"></i> No records found. <a href="<?= base_url('records/create') ?>">Create your first record</a>
        </div>
    <?php else: ?>
        <div class="card shadow">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th width="5%">ID</th>
                                <th width="20%">Title</th>
                                <th width="30%">Description</th>
                                <th width="15%">Category</th>
                                <th width="10%">Status</th>
                                <th width="10%">Created</th>
                                <th width="10%" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($records as $record): ?>
                            <tr>
                                <td><?= esc($record['id']) ?></td>
                                <td>
                                    <a href="<?= base_url('records/show/' . $record['id']) ?>" class="text-decoration-none">
                                        <strong><?= esc($record['title']) ?></strong>
                                    </a>
                                </td>
                                <td><?= esc(substr($record['description'], 0, 80)) ?>...</td>
                                <td><?= esc($record['category']) ?></td>
                                <td>
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
                                </td>
                                <td><?= date('M d, Y', strtotime($record['created_at'])) ?></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="<?= base_url('records/show/' . $record['id']) ?>" 
                                           class="btn btn-info" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="<?= base_url('records/edit/' . $record['id']) ?>" 
                                           class="btn btn-warning" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger" 
                                                onclick="confirmDelete(<?= $record['id'] ?>)" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <div class="mt-3">
            <?= $pager->links() ?>
        </div>
    <?php endif; ?>
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
