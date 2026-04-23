<?php
// Simple PHP start to allow for dynamic inclusion if needed later
$page_title = "BA in Information Studies";
$hero_headline = "Shape the Future of Information";
$hero_sub = "Discover how humans, technology, and data interact to solve complex real-world problems. Prepare for an exciting career in the digital age.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <!-- Modern Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Outfit:wght@500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <div class="background-glass"></div>

    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#" class="logo">Info<span>Studies</span></a>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#curriculum">Curriculum</a></li>
                <li><a href="#careers">Careers</a></li>
                <li><a href="#apply" class="btn-sm btn-primary">Apply Now</a></li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero" id="home">
        <div class="hero-content fade-in">
            <div class="hero-badge">Next-Generation Education</div>
            <h1 class="hero-title"><?php echo $hero_headline; ?></h1>
            <p class="hero-desc"><?php echo $hero_sub; ?></p>
            <div class="hero-actions">
                <a href="#curriculum" class="btn btn-primary">Explore Curriculum</a>
                <a href="#about" class="btn btn-secondary">Learn More</a>
            </div>
        </div>
        <div class="hero-visual">
            <div class="orb orb-1"></div>
            <div class="orb orb-2"></div>
            <div class="glass-card mockup fade-in-up">
                <h3>Connecting Data & People</h3>
                <div class="mockup-chart">
                    <div class="bar bar-1"></div>
                    <div class="bar bar-2"></div>
                    <div class="bar bar-3"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section class="section about" id="about">
        <div class="section-container grid-2 fade-in">
            <div class="about-text">
                <h2 class="section-title">Bridging the Gap</h2>
                <p>The Bachelor of Arts in Information Studies provides a multidisciplinary approach to understanding the lifecycle of information. Our program gives you the skills to organize, analyze, and ethically manage data while prioritizing the human experience.</p>
                <ul class="feature-list">
                    <li><i class="icon">➔</i> Societal impact of technology</li>
                    <li><i class="icon">➔</i> Digital ethics and policy</li>
                    <li><i class="icon">➔</i> Human-centered innovation</li>
                </ul>
            </div>
            <div class="about-visual glass-panel">
                <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&q=80&w=800" alt="Students collaborating on tech" class="rounded-img" />
            </div>
        </div>
    </section>

    <!-- Curriculum Section -->
    <section class="section curriculum bg-dark" id="curriculum">
        <div class="section-container">
            <div class="text-center fade-in">
                <h2 class="section-title">Core Curriculum</h2>
                <p class="section-subtitle">A balanced blend of theory, technical skill, and practical application.</p>
            </div>
            
            <div class="card-grid">
                <div class="glass-card feature-card fade-in-up">
                    <div class="card-icon">🧠</div>
                    <h3>Human-Computer Interaction</h3>
                    <p>Design and evaluate user interfaces that are accessible, intuitive, and engaging for diverse populations.</p>
                </div>
                <div class="glass-card feature-card fade-in-up" style="animation-delay: 0.1s">
                    <div class="card-icon">📊</div>
                    <h3>Data Analytics</h3>
                    <p>Learn to collect, clean, and visualize complex datasets to extract meaningful insights that drive decision-making.</p>
                </div>
                <div class="glass-card feature-card fade-in-up" style="animation-delay: 0.2s">
                    <div class="card-icon">🏛️</div>
                    <h3>Information Architecture</h3>
                    <p>Structure and organize large-scale digital environments to help users find what they need effortlessly.</p>
                </div>
                <div class="glass-card feature-card fade-in-up" style="animation-delay: 0.3s">
                    <div class="card-icon">💻</div>
                    <h3>Web Technologies</h3>
                    <p>Master the foundational languages of the web to build dynamic, responsive applications and platforms.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Careers Section -->
    <section class="section careers" id="careers">
        <div class="section-container fade-in">
            <div class="text-center">
                <h2 class="section-title">Your Future Career</h2>
                <p class="section-subtitle">Graduates are in high demand across tech, government, healthcare, and finance.</p>
            </div>
            
            <div class="career-stats grid-3">
                <div class="stat-box glass-panel">
                    <div class="stat-num">$85k+</div>
                    <div class="stat-label">Average Starting Salary</div>
                </div>
                <div class="stat-box glass-panel glass-highlight">
                    <div class="stat-num">UX/UI</div>
                    <div class="stat-label">Top Hiring Field</div>
                </div>
                <div class="stat-box glass-panel">
                    <div class="stat-num">95%</div>
                    <div class="stat-label">Employed within 6 months</div>
                </div>
            </div>
            
            <div class="career-roles text-center fade-in">
                <span class="role-pill">UX Designer</span>
                <span class="role-pill">Data Analyst</span>
                <span class="role-pill">Information Architect</span>
                <span class="role-pill">Content Strategist</span>
                <span class="role-pill">Project Manager</span>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="section-container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <h3>Info<span>Studies</span></h3>
                    <p>Transforming data into insight,<br>and insight into impact.</p>
                </div>
                <div class="footer-links">
                    <h4>Explore</h4>
                    <ul>
                        <li><a href="#about">About the Program</a></li>
                        <li><a href="#curriculum">Curriculum</a></li>
                        <li><a href="#careers">Careers</a></li>
                    </ul>
                </div>
                <div class="footer-contact" id="apply">
                    <h4>Ready to shape the future?</h4>
                    <a href="#" class="btn btn-primary btn-block">Start Your Application</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date("Y"); ?> University Program in Information Studies. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
