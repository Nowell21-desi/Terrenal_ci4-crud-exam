<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <div class="row mb-4">
        <div class="col-md-8">
            <h2><i class="bi bi-pencil-square"></i> Edit Record</h2>
        </div>
        <div class="col-md-4 text-end">
            <a href="<?= base_url('records') ?>" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Back to List
            </a>
        </div>
    </div>
    
    <div class="card shadow">
        <div class="card-body">
            <?= form_open('records/update/' . $record['id']) ?>
                
                <div class="mb-3">
                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                    <input type="text" 
                           class="form-control <?= isset($validation) && $validation->hasError('title') ? 'is-invalid' : '' ?>" 
                           id="title" 
                           name="title" 
                           value="<?= old('title', $record['title']) ?>" 
                           placeholder="Enter record title">
                    <?php if (isset($validation) && $validation->hasError('title')): ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('title') ?>
                        </div>
                    <?php endif; ?>
                    <small class="form-text text-muted">Minimum 3 characters, maximum 200 characters</small>
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control <?= isset($validation) && $validation->hasError('description') ? 'is-invalid' : '' ?>" 
                              id="description" 
                              name="description" 
                              rows="5" 
                              placeholder="Enter detailed description"><?= old('description', $record['description']) ?></textarea>
                    <?php if (isset($validation) && $validation->hasError('description')): ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('description') ?>
                        </div>
                    <?php endif; ?>
                    <small class="form-text text-muted">Minimum 10 characters</small>
                </div>
                
                <div class="mb-3">
                    <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                    <input type="text" 
                           class="form-control <?= isset($validation) && $validation->hasError('category') ? 'is-invalid' : '' ?>" 
                           id="category" 
                           name="category" 
                           value="<?= old('category', $record['category']) ?>" 
                           placeholder="e.g., Technology, Business, Education">
                    <?php if (isset($validation) && $validation->hasError('category')): ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('category') ?>
                        </div>
                    <?php endif; ?>
                    <small class="form-text text-muted">Minimum 3 characters, maximum 100 characters</small>
                </div>
                
                <div class="mb-3">
                    <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                    <select class="form-select <?= isset($validation) && $validation->hasError('status') ? 'is-invalid' : '' ?>" 
                            id="status" 
                            name="status">
                        <option value="">-- Select Status --</option>
                        <option value="active" <?= old('status', $record['status']) === 'active' ? 'selected' : '' ?>>Active</option>
                        <option value="inactive" <?= old('status', $record['status']) === 'inactive' ? 'selected' : '' ?>>Inactive</option>
                        <option value="pending" <?= old('status', $record['status']) === 'pending' ? 'selected' : '' ?>>Pending</option>
                    </select>
                    <?php if (isset($validation) && $validation->hasError('status')): ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('status') ?>
                        </div>
                    <?php endif; ?>
                </div>
                
                <div class="alert alert-info">
                    <small>
                        <strong>Record Info:</strong><br>
                        Created: <?= date('F d, Y h:i A', strtotime($record['created_at'])) ?><br>
                        Last Updated: <?= date('F d, Y h:i A', strtotime($record['updated_at'])) ?>
                    </small>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="<?= base_url('records') ?>" class="btn btn-secondary">
                        <i class="bi bi-x-circle"></i> Cancel
                    </a>
                    <button type="submit" class="btn btn-warning">
                        <i class="bi bi-save"></i> Update Record
                    </button>
                </div>
                
            <?= form_close() ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
