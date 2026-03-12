<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0"><i class="bi bi-person-plus-fill"></i> Register</h4>
                </div>
                <div class="card-body p-4">
                    <?= form_open('register') ?>
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control <?= isset($validation) && $validation->hasError('name') ? 'is-invalid' : '' ?>" 
                                   id="name" name="name" value="<?= old('name') ?>" placeholder="Enter your full name">
                            <?php if (isset($validation) && $validation->hasError('name')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('name') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
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
                                   id="password" name="password" placeholder="Enter password (min 6 characters)">
                            <?php if (isset($validation) && $validation->hasError('password')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control <?= isset($validation) && $validation->hasError('confirm_password') ? 'is-invalid' : '' ?>" 
                                   id="confirm_password" name="confirm_password" placeholder="Confirm your password">
                            <?php if (isset($validation) && $validation->hasError('confirm_password')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('confirm_password') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-person-check-fill"></i> Register
                            </button>
                        </div>
                        
                    <?= form_close() ?>
                    
                    <div class="text-center mt-3">
                        <p class="mb-0">Already have an account? <a href="<?= base_url('login') ?>">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
