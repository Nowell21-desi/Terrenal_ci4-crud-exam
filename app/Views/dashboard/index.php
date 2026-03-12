<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="jumbotron bg-light p-5 rounded">
                <h1 class="display-4">Welcome, <?= esc($userName) ?>! 👋</h1>
                <p class="lead">You are successfully logged in to the CI4 CRUD Application.</p>
                <hr class="my-4">
                <p>This is your dashboard. Use the navigation menu to manage your records.</p>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-body text-center">
                    <i class="bi bi-list-ul" style="font-size: 3rem;"></i>
                    <h5 class="card-title mt-3">View All Records</h5>
                    <p class="card-text">Browse and manage all your records</p>
                    <a href="<?= base_url('records') ?>" class="btn btn-light">
                        <i class="bi bi-arrow-right-circle"></i> Go to Records
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-success">
                <div class="card-body text-center">
                    <i class="bi bi-plus-circle-fill" style="font-size: 3rem;"></i>
                    <h5 class="card-title mt-3">Create New Record</h5>
                    <p class="card-text">Add a new record to the database</p>
                    <a href="<?= base_url('records/create') ?>" class="btn btn-light">
                        <i class="bi bi-plus-lg"></i> Create Record
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-3">
            <div class="card text-white bg-info">
                <div class="card-body text-center">
                    <i class="bi bi-person-circle" style="font-size: 3rem;"></i>
                    <h5 class="card-title mt-3">Your Profile</h5>
                    <p class="card-text">Logged in as: <?= esc($userName) ?></p>
                    <a href="<?= base_url('logout') ?>" class="btn btn-light">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h5 class="mb-0"><i class="bi bi-info-circle-fill"></i> Application Features</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="bi bi-check-circle-fill text-success"></i> 
                            <strong>User Authentication:</strong> Secure registration and login system
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-check-circle-fill text-success"></i> 
                            <strong>CRUD Operations:</strong> Create, Read, Update, and Delete records
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-check-circle-fill text-success"></i> 
                            <strong>Form Validation:</strong> Server-side validation with error messages
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-check-circle-fill text-success"></i> 
                            <strong>Bootstrap UI:</strong> Responsive design with Bootstrap 5
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-check-circle-fill text-success"></i> 
                            <strong>Session Management:</strong> Protected routes with authentication filter
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
