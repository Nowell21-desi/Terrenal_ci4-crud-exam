<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0"><i class="bi bi-box-arrow-in-right"></i> Login</h4>
                </div>
                <div class="card-body p-4">
                    <?= form_open('login') ?>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control <?= isset($validation) && $validation->hasError('email') ? 'is-invalid' : '' ?>" 
                                   id="email" name="email" value="<?= old('email') ?>" placeholder="Enter your email">
                            <?php if (isset($validation) && $validation->hasError('email')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control <?= isset($validation) && $validation->hasError('password') ? 'is-invalid' : '' ?>" 
                                   id="password" name="password" placeholder="Enter your password">
                            <?php if (isset($validation) && $validation->hasError('password')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-box-arrow-in-right"></i> Login
                            </button>
                        </div>
                        
                    <?= form_close() ?>
                    
                    <div class="text-center mt-3">
                        <p class="mb-0">Don't have an account? <a href="<?= base_url('register') ?>">Register here</a></p>
                    </div>
                    
                    <div class="alert alert-info mt-3 mb-0" role="alert">
                        <small>
                            <strong>Test Credentials:</strong><br>
                            Email: admin@example.com<br>
                            Password: password123
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
