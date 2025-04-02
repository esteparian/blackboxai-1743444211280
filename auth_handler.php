<?php
session_start();

// Database connection (mock - in production use real database)
$users = [
    'admin@esteparian.com' => [
        'password' => password_hash('admin123', PASSWORD_DEFAULT),
        'name' => 'Administrador'
    ]
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle login form submission
    if (isset($_POST['email'], $_POST['password'])) {
        // Validate fields
        if (empty($_POST['email']) || empty($_POST['password'])) {
            header("Location: index.php?error=campos_vacios");
            exit();
        }

        // Check if user exists (mock)
        $email = $_POST['email'];
        if (array_key_exists($email, $users) && password_verify($_POST['password'], $users[$email]['password'])) {
            // Successful login
            $_SESSION['user'] = [
                'email' => $email,
                'name' => $users[$email]['name']
            ];
            
            // Set remember me cookie if checked
            if (isset($_POST['remember_me'])) {
                setcookie('remember_token', bin2hex(random_bytes(32)), time() + 86400 * 30, '/');
            }
            
            header("Location: dashboard.php");
            exit();
        } else {
            header("Location: index.php?error=credenciales_invalidas");
            exit();
        }
    }
    
    // Handle password recovery
    if (isset($_POST['recover_email'])) {
        $email = $_POST['recover_email'];
        
        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: password-reset.php?error=email_invalido");
            exit();
        }
        
        // Check if email exists (mock)
        if (!array_key_exists($email, $users)) {
            header("Location: password-reset.php?error=usuario_no_encontrado");
            exit();
        }
        
        // In a real app, we would:
        // 1. Generate a reset token
        // 2. Store it in database with expiration
        // 3. Send email with reset link
        
        // For demo purposes, just show success
        header("Location: password-reset.php?success=1");
        exit();
    }
}

// Handle social login callbacks (mock)
if (isset($_GET['provider'])) {
    $provider = $_GET['provider'];
    
    // In a real app, we would:
    // 1. Verify the OAuth token
    // 2. Get user info from provider
    // 3. Create or authenticate user
    
    // For demo, just redirect to dashboard
    $_SESSION['user'] = [
        'email' => "social@{$provider}.com",
        'name' => ucfirst($provider) . " User"
    ];
    header("Location: dashboard.php");
    exit();
}

// Handle logout
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    session_destroy();
    setcookie('remember_token', '', time() - 3600, '/');
    header("Location: index.php");
    exit();
}
?>