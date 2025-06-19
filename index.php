<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codes By Harish - Coming Soon</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/107/107831.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Rajdhani', sans-serif;
            background: #0a0a0a;
            overflow-x: hidden;
            height: 100vh;
            position: relative;
        }

        /* Animated Background */
        .bg-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            background: radial-gradient(ellipse at center, #1a1a2e 0%, #16213e 35%, #0f0f23 100%);
        }

        /* Abstract Shapes */
        .shape {
            position: absolute;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite alternate;
        }

        .shape:nth-child(1) {
            width: 300px;
            height: 300px;
            background: linear-gradient(45deg, #ff0066, #0066ff);
            border-radius: 50%;
            top: 10%;
            left: 80%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, #0066ff, #ff0066);
            transform: rotate(45deg);
            top: 60%;
            left: 10%;
            animation-delay: 2s;
        }

        .shape:nth-child(3) {
            width: 150px;
            height: 150px;
            background: linear-gradient(90deg, #ff0066, #000);
            border-radius: 20px;
            top: 30%;
            left: 15%;
            animation-delay: 4s;
        }

        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            100% { transform: translateY(-20px) rotate(10deg); }
        }

        /* Abstract Lines with LED Points */
        .led-lines {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 3;
            pointer-events: none;
        }

        .led-line {
            position: absolute;
            background: linear-gradient(90deg, transparent, rgba(0, 102, 255, 0.6), transparent);
            height: 1px;
        }

        .led-line:nth-child(1) {
            width: 300px;
            top: 20%;
            left: 10%;
            transform: rotate(15deg);
            animation: ledMove1 8s linear infinite;
        }

        .led-line:nth-child(2) {
            width: 400px;
            top: 60%;
            right: 10%;
            transform: rotate(-20deg);
            animation: ledMove2 12s linear infinite;
        }

        .led-line:nth-child(3) {
            width: 250px;
            top: 40%;
            left: 50%;
            transform: rotate(45deg);
            animation: ledMove3 10s linear infinite;
        }

        .led-point {
            position: absolute;
            width: 4px;
            height: 4px;
            background: #0066ff;
            border-radius: 50%;
            box-shadow: 0 0 8px #0066ff;
            animation: pointMove 6s ease-in-out infinite;
        }

        @keyframes ledMove1 {
            0% { transform: translateX(-100px) rotate(15deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateX(100vw) rotate(15deg); opacity: 0; }
        }

        @keyframes ledMove2 {
            0% { transform: translateX(100px) rotate(-20deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateX(-100vw) rotate(-20deg); opacity: 0; }
        }

        @keyframes ledMove3 {
            0% { transform: translateY(-50px) rotate(45deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(100vh) rotate(45deg); opacity: 0; }
        }

        @keyframes pointMove {
            0%, 100% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.5); }
        }
        .grid-lines {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            opacity: 0.1;
            background-image: 
                linear-gradient(rgba(0, 102, 255, 0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 0, 102, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: gridMove 20s linear infinite;
        }

        @keyframes gridMove {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }

        /* Main Container */
        .container {
            position: relative;
            z-index: 10;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

        .main-title {
            font-family: 'Orbitron', monospace;
            font-size: clamp(3rem, 8vw, 8rem);
            font-weight: 900;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        /* LED Border */
        .led-border {
            border: 2px solid #0066ff;
            padding: 40px;
            margin: 40px 0;
            position: relative;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
            box-shadow: 
                0 0 20px #0066ff,
                inset 0 0 20px rgba(0, 102, 255, 0.1);
            animation: ledGlow 2s ease-in-out infinite alternate;
            transition: transform 0.2s ease-out; /* For parallax */
        }

        @keyframes ledGlow {
            0% { 
                box-shadow: 
                    0 0 20px rgba(0, 102, 255, 0.3),
                    inset 0 0 20px rgba(0, 102, 255, 0.1);
            }
            100% { 
                box-shadow: 
                    0 0 30px rgba(0, 102, 255, 0.5),
                    inset 0 0 25px rgba(0, 102, 255, 0.15);
            }
        }

        /* Subtitle */
        .subtitle {
            font-size: clamp(1.2rem, 3vw, 2rem);
            color: #00ffff;
            font-weight: 300;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: neonFlicker 3s ease-in-out infinite;
        }

        @keyframes neonFlicker {
            0%, 100% { text-shadow: 0 0 5px rgba(0, 255, 255, 0.8); }
            50% { text-shadow: 0 0 8px rgba(0, 255, 255, 0.6); }
        }

        /* Description */
        .description {
            font-size: clamp(1rem, 2vw, 1.4rem);
            color: #ccc;
            max-width: 600px;
            line-height: 1.6;
            margin-bottom: 40px;
            font-weight: 300;
        }

        /* Progress Bar */
        .progress-container {
            width: 100%;
            max-width: 500px;
            height: 4px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 2px;
            overflow: hidden;
            position: relative;
            margin: 40px 0;
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, #ff0066, #0066ff, #00ffff);
            width: 0%;
            border-radius: 2px;
            animation: progressLoad 4s ease-in-out infinite;
            box-shadow: 0 0 10px rgba(0, 102, 255, 0.5);
        }

        @keyframes progressLoad {
            0% { width: 0%; }
            50% { width: 75%; }
            100% { width: 100%; }
        }

        /* Social Links */
        .social-links {
            display: flex;
            gap: 20px;
            margin-top: 40px;
        }

        .social-link {
            width: 50px;
            height: 50px;
            border: 2px solid #0066ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #0066ff;
            text-decoration: none;
            font-size: 20px;
            transition: all 0.3s ease;
            background: rgba(0, 0, 0, 0.5);
        }

        .social-link:hover {
            background: #0066ff;
            color: #000;
            box-shadow: 0 0 20px #0066ff;
            transform: scale(1.1);
        }

        /* Loading Animation */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: fadeOut 3s ease-in-out forwards;
        }

        .loading-text {
            font-family: 'Orbitron', monospace;
            font-size: 2rem;
            color: #0066ff;
            animation: loadingPulse 1s ease-in-out infinite;
        }

        @keyframes loadingPulse {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 1; }
        }
        
        /* Styles for load animation */
        .led-border > * {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        @keyframes fadeOut {
            0% { opacity: 1; }
            90% { opacity: 1; }
            100% { opacity: 0; visibility: hidden; }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .led-border {
                padding: 20px;
                margin: 20px 0;
            }
            
            .social-links {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Loading Screen -->
    <div class="loading-overlay">
        <div class="loading-text">INITIALIZING...</div>
    </div>

    <!-- Background -->
    <div class="bg-container">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <div class="led-lines">
        <div class="led-line">
            <div class="led-point"></div>
        </div>
        <div class="led-line">
            <div class="led-point"></div>
        </div>
        <div class="led-line">
            <div class="led-point"></div>
        </div>
    </div>
    
    <div class="grid-lines"></div>

    <!-- Main Content -->
    <div class="container">
        <div class="led-border">
            <h1 class="main-title">COMING SOON</h1>
            <div class="subtitle">CODES BY HARISH</div>
            <div class="description">
                Elite developer portfolio under construction. Crafting digital experiences with cutting-edge technology and innovative solutions.
            </div>
            
            <div class="progress-container">
                <div class="progress-bar"></div>
            </div>
            
            <div class="social-links" style="opacity: 0; transform: translateY(20px); transition: opacity 0.6s ease-out, transform 0.6s ease-out;">
                <a href="https://www.instagram.com/boss._of_devils/" class="social-link">I</a>
                <a href="www.linkedin.com/in/harishcodes01" class="social-link">L</a>
                <a href="https://github.com/harishprp370" class="social-link">G</a>
                <a href="mailto:contact@codesbyharish.com" class="social-link">@</a>
            </div>
        </div>
    </div>

    <script>
        const loadingOverlay = document.querySelector('.loading-overlay');
        const ledBorder = document.querySelector('.led-border');
        const ledBorderContent = document.querySelectorAll('.led-border > *:not(style)'); // Exclude style tag if any

        window.addEventListener('load', function() {
            // Fallback to start animations if animationend doesn't fire for some reason
            setTimeout(() => {
                document.body.style.animation = 'none';
                // Trigger load animations if not already triggered by animationend
                if (loadingOverlay.style.opacity !== "0") { // Check if fadeOut might not have completed
                    triggerLoadAnimations();
                }
            }, 3000);
        });

        function triggerLoadAnimations() {
            ledBorderContent.forEach((el, index) => {
                setTimeout(() => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0px)';
                }, index * 150); // Stagger delay
            });
        }

        // Start content animations after loading screen fades out
        if (loadingOverlay) {
            loadingOverlay.addEventListener('animationend', triggerLoadAnimations);
        }
        
        // Add some interactive particle effects
        document.addEventListener('mousemove', function(e) {
            if (Math.random() > 0.98) {
                createParticle(e.clientX, e.clientY);
            }
        });

        function createParticle(x, y) {
            const particle = document.createElement('div');
            particle.style.cssText = `
                position: fixed;
                left: ${x}px;
                top: ${y}px;
                width: 4px;
                height: 4px;
                background: ${Math.random() > 0.5 ? '#ff0066' : '#0066ff'};
                border-radius: 50%;
                pointer-events: none;
                z-index: 100;
                animation: particleFade 1s ease-out forwards;
            `;
            
            document.body.appendChild(particle);
            
            setTimeout(() => {
                particle.remove();
            }, 1000);
        }

        // Subtle parallax for the .led-border
        if (ledBorder) {
            document.addEventListener('mousemove', function(e) {
                const xAxis = (window.innerWidth / 2 - e.pageX) / 50; // Adjust divisor for sensitivity
                const yAxis = (window.innerHeight / 2 - e.pageY) / 50; // Adjust divisor for sensitivity
                ledBorder.style.transform = `translateX(${xAxis * 2}px) translateY(${yAxis * 2}px) perspective(1000px) rotateY(${xAxis/5}deg) rotateX(${-yAxis/5}deg)`;
            });
        }

        // Add particle fade animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes particleFade {
                0% {
                    opacity: 1;
                    transform: scale(1);
                }
                100% {
                    opacity: 0;
                    transform: scale(0) translateY(-50px);
                }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>