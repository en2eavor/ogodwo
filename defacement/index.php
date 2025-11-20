<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacked by Ogodwo Crew</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="glitch" data-text="HACKED">HACKED</div>
        <div class="message">
            <h2>Your system has been compromised</h2>
            <p>by <span class="crew">OGODWO CREW</span></p>
            <div class="skull">☠️</div>
            <p class="warning">All your data belongs to us now...</p>
            <p class="signature">- Ogodwo Team -</p>
        </div>
    </div>
    
    <script>
        // Glitch effect
        setInterval(() => {
            const glitch = document.querySelector('.glitch');
            glitch.style.textShadow = `
                ${Math.random() * 10}px ${Math.random() * 10}px 0 #ff0000,
                ${Math.random() * -10}px ${Math.random() * -10}px 0 #00ff00,
                ${Math.random() * 10}px ${Math.random() * -10}px 0 #0000ff
            `;
        }, 100);
    </script>
</body>
</html>