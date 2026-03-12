<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - CI4 CRUD Exam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .welcome-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="welcome-card p-5 text-center">
                    <i class="bi bi-database-fill text-primary" style="font-size: 5rem;"></i>
                    <h1 class="mt-4 mb-3">Welcome to CI4 CRUD Application</h1>
                    <p class="lead text-muted mb-4">
                        A complete web application demonstrating CodeIgniter 4 MVC architecture, 
                        CRUD operations, and user authentication.
                    </p>
                    
                    <div class="d-grid gap-3 d-md-flex justify-content-md-center">
                        <a href="<?= base_url('login') ?>" class="btn btn-primary btn-lg px-5">
                            <i class="bi bi-box-arrow-in-right"></i> Login
                        </a>
                        <a href="<?= base_url('register') ?>" class="btn btn-outline-primary btn-lg px-5">
                            <i class="bi bi-person-plus"></i> Register
                        </a>
                    </div>
                    
                    <div class="mt-5 pt-4 border-top">
                        <h5 class="mb-3">Features</h5>
                        <div class="row text-start">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> User Authentication</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> CRUD Operations</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Form Validation</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Bootstrap 5 UI</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Session Management</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Responsive Design</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
