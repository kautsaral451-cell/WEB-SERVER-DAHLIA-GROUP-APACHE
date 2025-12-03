web profil Kautsar
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Kautsar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .biodata-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            overflow: hidden;
            margin-top: 50px;
        }
        
        .header {
            background: linear-gradient(135deg, #2c3e50, #3498db);
            color: white;
            padding: 40px;
            text-align: center;
        }
        
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid white;
            margin: 0 auto 20px;
            overflow: hidden;
        }
        
        .profile-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .name {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .title {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 20px;
        }
        
        .back-btn {
            display: inline-block;
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            text-decoration: none;
            margin-top: 15px;
            transition: 0.3s;
        }
        
        .back-btn:hover {
            background: rgba(255,255,255,0.3);
        }
        
        .content {
            padding: 40px;
        }
        
        .section {
            margin-bottom: 30px;
        }
        
        .section-title {
            color: #2c3e50;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        
        .info-item {
            margin-bottom: 15px;
        }
        
        .info-label {
            font-weight: bold;
            color: #2c3e50;
            display: block;
            margin-bottom: 5px;
        }
        
        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .skill {
            background: #3498db;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }
        
        .social-link {
            width: 50px;
            height: 50px;
            background: #2c3e50;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: 0.3s;
        }
        
        .social-link:hover {
            background: #3498db;
            transform: translateY(-3px);
        }
        
        @media (max-width: 768px) {
            .info-grid {
                grid-template-columns: 1fr;
            }
            
            .name {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="biodata-card">
            <div class="header">
                <div class="profile-img">
                    <img src="kautsar.jpg" alt="Kautsar">
                </div>
                <h1 class="name">Kautsar Alfitrah</h1>
                <div class="title">Web Developer & UI/UX Designer</div>
                <a href="index.html" class="back-btn">
                    <i class="fas fa-arrow-left"></i> Kembali ke Halaman Utama
                </a>
            </div>
            
            <div class="content">
                <div class="section">
                    <h2 class="section-title">Informasi Pribadi</h2>
                    <div class="info-grid">
                        <div class="info-item">
                            <span class="info-label">Nama Lengkap</span>
                            <span>Kautsar Alfitrah</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Tempat, Tanggal Lahir</span>
                            <span>Bandung, 15 Juni 1995</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Alamat</span>
                            <span>Soreang, Kabupaten Bandung</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Email</span>
                            <span>kautsar@email.com</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Telepon</span>
                            <span>+62 812-3456-7890</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Pendidikan</span>
                            <span>S1 Teknik Informatika</span>
                        </div>
                    </div>
                </div>
                
                <div class="section">
                    <h2 class="section-title">Keahlian</h2>
                    <div class="skills">
                        <span class="skill">HTML/CSS</span>
                        <span class="skill">JavaScript</span>
                        <span class="skill">PHP</span>
                        <span class="skill">React</span>
                        <span class="skill">UI/UX Design</span>
                        <span class="skill">Figma</span>
                        <span class="skill">Digital Marketing</span>
                        <span class="skill">Project Management</span>
                    </div>
                </div>
                
                <div class="section">
                    <h2 class="section-title">Pengalaman Kerja</h2>
                    <div class="info-item">
                        <span class="info-label">2021 - Sekarang</span>
                        <span>Senior Web Developer - PT. Teknologi Indonesia</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">2019 - 2021</span>
                        <span>Web Developer - CV. Digital Kreatif</span>
                    </div>
                    <div class="info-item">
                        <span class="info-label">2017 - 2019</span>
                        <span>UI/UX Designer - Studio Desain Visual</span>
                    </div>
                </div>
                
                <div class="section">
                    <h2 class="section-title">Tentang Saya</h2>
                    <p>Seorang profesional di bidang teknologi dengan pengalaman lebih dari 5 tahun dalam pengembangan web dan desain antarmuka pengguna. Memiliki passion yang besar untuk menciptakan pengalaman digital yang menarik dan fungsional.</p>
                </div>
                
                <div class="social-links">
                    <a href="#" class="social-link">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


web bomber
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bomber Team Soreang - Suporter Persib Bandung</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --persib-blue: #1a3e8a;
            --persib-dark-blue: #0d2b5e;
            --persib-white: #ffffff;
            --accent-blue: #2d5bb5;
            --light-blue: #e8f0fe;
            --light-gray: #f5f7fa;
            --text-dark: #333333;
            --text-light: #666666;
            --border-color: #e1e5eb;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
            --gold: #ffd700;
            --red: #e30613;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #e8f0fe 100%);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            margin-bottom: 1rem;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .section {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--persib-blue);
            display: inline-block;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--persib-blue), var(--red));
            border-radius: 2px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: linear-gradient(135deg, var(--persib-blue) 0%, var(--red) 100%);
            color: var(--persib-white);
            border: none;
            border-radius: 30px;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(26, 62, 138, 0.3);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(26, 62, 138, 0.4);
        }
        
        .btn-outline {
            background: transparent;
            color: var(--persib-blue);
            border: 2px solid var(--persib-blue);
        }
        
        .btn-outline:hover {
            background: var(--persib-blue);
            color: var(--persib-white);
        }
        
        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--persib-dark-blue) 0%, var(--persib-blue) 100%);
            color: var(--persib-white);
            padding: 20px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo-icon {
            width: 50px;
            height: 50px;
            background-color: var(--persib-white);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
            position: relative;
            overflow: hidden;
        }
        
        .logo-icon::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, var(--persib-blue) 0%, var(--red) 100%);
            opacity: 0.8;
        }
        
        .logo-icon i {
            font-size: 1.8rem;
            color: var(--persib-white);
            z-index: 1;
        }
        
        .logo-text {
            font-size: 1.5rem;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .logo-text span {
            color: var(--red);
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 30px;
        }
        
        nav ul li a {
            color: var(--persib-white);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            position: relative;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }
        
        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--red);
            transition: var(--transition);
        }
        
        nav ul li a:hover::after {
            width: 100%;
        }
        
        .mobile-menu {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(13, 43, 94, 0.85), rgba(26, 62, 138, 0.85)), url('https://images.unsplash.com/photo-1598880940080-ff0dc34cfd36?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            color: var(--persib-white);
            padding: 180px 0 100px;
            text-align: center;
            position: relative;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(227, 6, 19, 0.1)"/></svg>');
            background-size: cover;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero h1 {
            font-size: 4rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .hero h1 span {
            color: var(--red);
        }
        
        .hero p {
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto 30px;
            font-weight: 600;
        }
        
        .hero-badges {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
        }
        
        .badge {
            background: rgba(255, 255, 255, 0.2);
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        /* About Section */
        .about {
            background-color: var(--persib-white);
            position: relative;
        }
        
        .about::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(26, 62, 138, 0.03)"/></svg>');
            background-size: cover;
        }
        
        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
            position: relative;
            z-index: 1;
        }
        
        .about-text {
            flex: 1;
        }
        
        .about-text p {
            margin-bottom: 20px;
            color: var(--text-light);
            font-size: 1.1rem;
        }
        
        .about-stats {
            display: flex;
            margin-top: 30px;
        }
        
        .stat {
            text-align: center;
            padding: 0 20px;
            border-right: 1px solid var(--border-color);
        }
        
        .stat:last-child {
            border-right: none;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 900;
            color: var(--persib-blue);
            margin-bottom: 5px;
        }
        
        .stat-text {
            font-size: 0.9rem;
            color: var(--text-light);
            font-weight: 600;
        }
        
        .about-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            border: 5px solid var(--persib-blue);
        }
        
        .about-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: var(--transition);
        }
        
        .about-image:hover img {
            transform: scale(1.05);
        }
        
        /* Team Section */
        .team {
            background-color: var(--light-gray);
            position: relative;
        }
        
        .team::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(227, 6, 19, 0.03)"/></svg>');
            background-size: cover;
            transform: rotate(180deg);
        }
        
        .team-content {
            position: relative;
            z-index: 1;
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }
        
        .team-member {
            background-color: var(--persib-white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
            position: relative;
            border-top: 5px solid var(--persib-blue);
        }
        
        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .member-photo-container {
            position: relative;
            overflow: hidden;
        }
        
        .member-photo {
            width: 100%;
            height: 300px;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .team-member:hover .member-photo {
            transform: scale(1.1);
        }
        
        .member-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent 0%, var(--persib-blue) 100%);
            opacity: 0;
            transition: var(--transition);
            display: flex;
            justify-content: center;
            align-items: flex-end;
            padding: 20px;
        }
        
        .team-member:hover .member-overlay {
            opacity: 0.8;
        }
        
        .member-info {
            padding: 25px 20px;
        }
        
        .member-name {
            font-size: 1.4rem;
            color: var(--persib-blue);
            margin-bottom: 5px;
        }
        
        .member-role {
            color: var(--red);
            font-weight: 700;
            margin-bottom: 15px;
            display: block;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }
        
        .member-bio {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 20px;
        }
        
        .member-skills {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px;
            margin-bottom: 20px;
        }
        
        .skill-tag {
            background-color: var(--light-blue);
            color: var(--persib-blue);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .view-profile {
            background: transparent;
            color: var(--persib-blue);
            border: 2px solid var(--persib-blue);
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 700;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }
        
        .view-profile:hover {
            background-color: var(--persib-blue);
            color: var(--persib-white);
        }
        
        /* Activities Section */
        .activities {
            background-color: var(--persib-white);
        }
        
        .activities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .activity-card {
            background-color: var(--light-gray);
            border-radius: 10px;
            padding: 40px 30px;
            text-align: center;
            transition: var(--transition);
            box-shadow: var(--shadow);
            border-top: 5px solid var(--red);
        }
        
        .activity-card:hover {
            transform: translateY(-10px);
            background: linear-gradient(135deg, var(--persib-blue) 0%, var(--red) 100%);
            color: var(--persib-white);
        }
        
        .activity-card:hover .activity-icon {
            background-color: var(--persib-white);
            color: var(--persib-blue);
        }
        
        .activity-icon {
            width: 80px;
            height: 80px;
            background-color: var(--persib-blue);
            color: var(--persib-white);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 25px;
            font-size: 2rem;
            transition: var(--transition);
        }
        
        .activity-card h3 {
            margin-bottom: 15px;
        }
        
        .activity-card p {
            color: var(--text-light);
        }
        
        .activity-card:hover p {
            color: rgba(255, 255, 255, 0.9);
        }
        
        /* Gallery Section */
        .gallery {
            background-color: var(--light-gray);
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 15px;
        }
        
        .gallery-item {
            border-radius: 10px;
            overflow: hidden;
            height: 200px;
            position: relative;
            box-shadow: var(--shadow);
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent 0%, var(--persib-blue) 100%);
            opacity: 0;
            transition: var(--transition);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-weight: 700;
        }
        
        .gallery-item:hover .gallery-overlay {
            opacity: 0.8;
        }
        
        /* Contact Section */
        .contact {
            background: linear-gradient(135deg, var(--persib-dark-blue) 0%, var(--persib-blue) 100%);
            color: var(--persib-white);
        }
        
        .contact .section-title h2 {
            color: var(--persib-white);
        }
        
        .contact .section-title h2::after {
            background: var(--red);
        }
        
        .contact-content {
            display: flex;
            gap: 50px;
        }
        
        .contact-info {
            flex: 1;
        }
        
        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 20px;
            font-size: 1.2rem;
            color: var(--red);
        }
        
        .contact-text h3 {
            margin-bottom: 5px;
        }
        
        .contact-form {
            flex: 1;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            background-color: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 5px;
            font-family: 'Open Sans', sans-serif;
        }
        
        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }
        
        /* Footer */
        footer {
            background-color: var(--persib-dark-blue);
            color: var(--persib-white);
            padding: 60px 0 30px;
        }
        
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-column {
            flex: 1;
            min-width: 250px;
        }
        
        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 3px;
            background-color: var(--red);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
        }
        
        .footer-links a:hover {
            color: var(--red);
            padding-left: 5px;
        }
        
        .footer-social {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            color: var(--persib-white);
            border-radius: 50%;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .social-link:hover {
            background-color: var(--red);
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .about-content {
                flex-direction: column;
            }
            
            .contact-content {
                flex-direction: column;
            }
        }
        
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                text-align: center;
            }
            
            .logo {
                margin-bottom: 15px;
            }
            
            nav ul {
                flex-direction: column;
                align-items: center;
            }
            
            nav ul li {
                margin: 10px 0;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .about-stats {
                flex-direction: column;
                gap: 20px;
            }
            
            .stat {
                border-right: none;
                border-bottom: 1px solid var(--border-color);
                padding: 10px 0;
            }
            
            .stat:last-child {
                border-bottom: none;
            }
            
            .hero-badges {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-bomb"></i>
                </div>
                <div class="logo-text">Bomber<span>Team</span></div>
            </div>
            <nav>
                <ul>
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#team">Anggota</a></li>
                    <li><a href="#activities">Kegiatan</a></li>
                    <li><a href="#gallery">Galeri</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </nav>
            <div class="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container hero-content">
            <h1>Bomber <span>Team</span> Soreang</h1>
            <p>Komunitas Suporter Persib Bandung dari Soreang dengan Semangat Kebersamaan dan Loyalitas Tinggi</p>
            <a href="#team" class="btn">Lihat Anggota Kami</a>
            <div class="hero-badges">
                <div class="badge">#BobotohSaduyung</div>
                <div class="badge">#PersibBandung</div>
                <div class="badge">#BomberTeamSoreang</div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section about">
        <div class="container">
            <div class="section-title">
                <h2>Tentang Bomber Team</h2>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <p>Bomber Team Soreang adalah komunitas suporter Persib Bandung yang berbasis di daerah Soreang dan sekitarnya. Kami hadir sebagai wadah bagi para Bobotoh di wilayah Soreang untuk berkumpul, berkoordinasi, dan mendukung Persib Bandung bersama-sama.</p>
                    <p>Dengan semangat kebersamaan yang tinggi, kami selalu hadir di setiap pertandingan Persib baik di kandang maupun di luar kandang. Kami percaya bahwa dukungan dari suporter adalah salah satu kekuatan terbesar bagi tim kebanggaan kita.</p>
                    <div class="about-stats">
                        <div class="stat">
                            <div class="stat-number">50+</div>
                            <div class="stat-text">Anggota Aktif</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number">2001</div>
                            <div class="stat-text">Tahun Berdiri</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number">100%</div>
                            <div class="stat-text">Dukungan Untuk Persib</div>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="bomber.jpg" alt="Bomber Team Soreang">
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="section team">
        <div class="container team-content">
            <div class="section-title">
                <h2>Anggota Inti Bomber Team</h2>
            </div>
            <div class="team-grid">
                <!-- Anggota 1 -->
                <div class="team-member">
                    <div class="member-photo-container">
                        <img src="agia 2.jpg" alt="Agia Fanjani" class="member-photo">
                        <div class="member-overlay">
                            <a href="agia.php" class="view-profile">Lihat Profil Lengkap</a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Agia Fanjani</h3>
                        <span class="member-role">Ketua Bomber Team</span>
                        <p class="member-bio">Memimpin Bomber Team Soreang dengan semangat dan dedikasi tinggi untuk Persib Bandung.</p>
                        <div class="member-skills">
                            <span class="skill-tag">Koordinator</span>
                            <span class="skill-tag">Organizer</span>
                            <span class="skill-tag">Bobotoh Sejati</span>
                        </div>
                        <a href="agia.php" target="_blank" class="view-profile">Lihat Profil</a>
                    </div>
                </div>
                
                <!-- Anggota 2 -->
                <div class="team-member">
                    <div class="member-photo-container">
                        <img src="kautsar 2.jpg" alt="Kautsar Alfitrah" class="member-photo">
                        <div class="member-overlay">
                            <a href="member2.html" target="_blank" class="view-profile">Lihat Profil Lengkap</a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Kautsar Alfitrah</h3>
                        <span class="member-role">Sekretaris & Media</span>
                        <p class="member-bio">Mengelola administrasi dan media sosial Bomber Team dengan penuh tanggung jawab.</p>
                        <div class="member-skills">
                            <span class="skill-tag">Administrasi</span>
                            <span class="skill-tag">Media Sosial</span>
                            <span class="skill-tag">Komunikasi</span>
                        </div>
                        <a href="kautsar.php" target="_blank" class="view-profile">Lihat Profil</a>
                    </div>
                </div>
                
                <!-- Anggota 3 -->
                <div class="team-member">
                    <div class="member-photo-container">
                        <img src="ikbal.jpg" alt="Ikbal Maulana" class="member-photo">
                        <div class="member-overlay">
                            <a href="member3.html" target="_blank" class="view-profile">Lihat Profil Lengkap</a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Ikbal Maulana</h3>
                        <span class="member-role">Bendahara & Logistik</span>
                        <p class="member-bio">Mengatur keuangan dan logistik untuk setiap kegiatan Bomber Team Soreang.</p>
                        <div class="member-skills">
                            <span class="skill-tag">Keuangan</span>
                            <span class="skill-tag">Logistik</span>
                            <span class="skill-tag">Perencanaan</span>
                        </div>
                        <a href="ikbal.php" target="_blank" class="view-profile">Lihat Profil</a>
                    </div>
                </div>
                
                <!-- Anggota 4 -->
                <div class="team-member">
                    <div class="member-photo-container">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" alt="Dewi Sartika" class="member-photo">
                        <div class="member-overlay">
                            <a href="member4.html" target="_blank" class="view-profile">Lihat Profil Lengkap</a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Silpa</h3>
                        <span class="member-role">Koordinator Acara</span>
                        <p class="member-bio">Mengorganisir setiap acara dan pertemuan Bomber Team dengan penuh semangat.</p>
                        <div class="member-skills">
                            <span class="skill-tag">Event Organizer</span>
                            <span class="skill-tag">Kreatif</span>
                            <span class="skill-tag">Energik</span>
                        </div>
                        <a href="member4.html" target="_blank" class="view-profile">Lihat Profil</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <section id="activities" class="section activities">
        <div class="container">
            <div class="section-title">
                <h2>Kegiatan Bomber Team</h2>
            </div>
            <div class="activities-grid">
                <div class="activity-card">
                    <div class="activity-icon">
                        <i class="fas fa-futbol"></i>
                    </div>
                    <h3>Nonton Bareng</h3>
                    <p>Kami rutin mengadakan nonton bareng setiap pertandingan Persib baik di stadion maupun di basecamp.</p>
                </div>
                <div class="activity-card">
                    <div class="activity-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Kumpul Rutin</h3>
                    <p>Pertemuan rutin anggota untuk membahas perkembangan terbaru seputar Persib dan koordinasi kegiatan.</p>
                </div>
                <div class="activity-card">
                    <div class="activity-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Aksi Sosial</h3>
                    <p>Kegiatan sosial untuk membantu masyarakat sekitar dan menunjukkan kepedulian Bobotoh terhadap lingkungan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="section gallery">
        <div class="container">
            <div class="section-title">
                <h2>Galeri Kegiatan</h2>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="kegiatan 1.jpg" alt="Kegiatan 1">
                    <div class="gallery-overlay">Nonton Bareng</div>
                </div>
                <div class="gallery-item">
                    <img src="kegiatan 2.jpg" alt="Kegiatan 2">
                    <div class="gallery-overlay">Kumpul Anggota</div>
                </div>
                <div class="gallery-item">
                    <img src="kegiatan 3.jpg" alt="Kegiatan 3">
                    <div class="gallery-overlay">Away Day</div>
                </div>
                <div class="gallery-item">
                    <img src="kegiatan 4.jpg" alt="Kegiatan 4">
                    <div class="gallery-overlay">Aksi Sosial</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section contact">
        <div class="container">
            <div class="section-title">
                <h2>Hubungi Bomber Team</h2>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Basecamp</h3>
                            <p>Jl. Raya Soreang No. 123, Soreang, Bandung</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Telepon</h3>
                            <p>+62 822-1600-1800</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email</h3>
                            <p>bomberteam.soreang@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-hashtag"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Media Sosial</h3>
                            <p>IG: @bomberteam_soreang</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Alamat Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subjek" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Pesan Anda" required></textarea>
                        </div>
                        <button type="submit" class="btn">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Bomber Team Soreang</h3>
                    <p>Komunitas suporter Persib Bandung dari Soreang dengan semangat kebersamaan dan loyalitas tinggi. Bergerak bersama mendukung Maung Bandung!</p>
                    <div class="footer-social">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Link Cepat</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Beranda</a></li>
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#team">Anggota Kami</a></li>
                        <li><a href="#activities">Kegiatan</a></li>
                        <li><a href="#gallery">Galeri</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Kegiatan</h3>
                    <ul class="footer-links">
                        <li><a href="#">Nonton Bareng</a></li>
                        <li><a href="#">Kumpul Rutin</a></li>
                        <li><a href="#">Aksi Sosial</a></li>
                        <li><a href="#">Away Day</a></li>
                        <li><a href="#">Tour & Travel</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Bomber Team Soreang. Semua Hak Dilindungi. | #BobotohSaduyung #PersibBandung</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling untuk navigasi
        document.querySelectorAll('nav a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            });
        });
        
        // Sticky header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
            }
        });
    </script>
</body>
</html>

