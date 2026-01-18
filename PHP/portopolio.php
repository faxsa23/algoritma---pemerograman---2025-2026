<?php
$name = "Muhammad Aufa";
$title = "Web Developer & Designer";
$about = "Saya adalah seorang mahasiswa baru di bidang ilmu komputer di Universitas Djuanda.";
$personalData = [
    "tanggal_lahir" => "23 desember 2006",
    "lokasi" => "Bogor, Indonesia",
    "hobi" => ["Bermain game", "gym"],
    "pengalaman" => "Telah mengerjakan proyek web sederhana.",
    "galeri" => [
        ["src" => "assets/hobby1.jpg", "alt" => "Hobi 1"],
        ["src" => "assets/hobby2.jpg", "alt" => "Hobi 2"]
    ]
];
$skills = ["PHP", "HTML/CSS", "JavaScript"];
$projects = [
    ["title" => "Proyek 1", "desc" => "Deskripsi.", "link" => "#", "img" => "assets/project1.jpg", "detail" => "Detail."]
];
$testimonials = [["name" => "Client 1", "text" => "Kerja bagus!"]];
$contact = ["email" => "faxsa457@gmail.com", "linkedin" => "https://linkedin.com/in/yourprofile"];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio <?php echo $name; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab); background-size: 400% 400%; animation: gradientShift 15s ease infinite; }
        @keyframes gradientShift { 0% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } 100% { background-position: 0% 50%; } }
        .hero { height: 100vh; display: flex; align-items: center; justify-content: center; background: rgba(0,0,0,0.5); position: relative; overflow: hidden; }
        .hero::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 50px 50px; animation: particleMove 20s linear infinite; }
        @keyframes particleMove { 0% { transform: translateY(0); } 100% { transform: translateY(-100vh); } }
        .clickable { cursor: pointer; transition: transform 0.2s; }
        .clickable:hover { transform: scale(1.05); }
        .gallery-item { transition: transform 0.3s; }
        .gallery-item:hover { transform: scale(1.1); }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><?php echo $name; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Keterampilan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Proyek</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                </ul>
                <button id="theme-toggle" class="btn btn-outline-light ms-3"><i class="fas fa-moon"></i></button>
            </div>
        </div>
    </nav>

    <header class="hero text-center text-white" id="hero">
        <div class="container" data-aos="fade-up">
            <h1 class="display-4"><?php echo $name; ?></h1>
            <p class="lead"><?php echo $title; ?></p>
            <a href="#about" class="btn btn-primary btn-lg">Pelajari Lebih Lanjut</a>
        </div>
    </header>

    <section id="about" class="py-5 bg-white bg-opacity-75">
        <div class="container">
            <h2 class="text-center mb-4" data-aos="fade-up">Tentang Saya</h2>
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <p><?php echo $about; ?></p>
                    <p><strong>Tanggal Lahir:</strong> <?php echo $personalData['tanggal_lahir']; ?></p>
                    <p><strong>Lokasi:</strong> <?php echo $personalData['lokasi']; ?></p>
                    <button class="btn btn-success mt-3 clickable" data-bs-toggle="modal" data-bs-target="#profileModal">Lihat Profil Lengkap</button>
                </div>
                <div class="col-md-6 text-center" data-aos="fade-left">
                    <img src="assets/profile.jpg" alt="Foto Profil" class="img-fluid rounded-circle shadow clickable" data-bs-toggle="modal" data-bs-target="#profileModal">
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4" data-aos="fade-up">Keterampilan</h2>
            <div class="row">
                <?php foreach ($skills as $skill): ?>
                    <div class="col-md-4 text-center mb-3" data-aos="zoom-in">
                        <i class="fas fa-code fa-3x text-primary clickable" data-bs-toggle="tooltip" title="<?php echo $skill; ?>"></i>
                        <h5><?php echo $skill; ?></h5>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="projects" class="py-5 bg-white bg-opacity-75">
        <div class="container">
            <h2 class="text-center mb-4" data-aos="fade-up">Proyek</h2>
            <div class="row">
                <?php foreach ($projects as $index => $project): ?>
                    <div class="col-md-6 mb-4" data-aos="flip-left">
                        <div class="card h-100 shadow clickable" data-bs-toggle="modal" data-bs-target="#projectModal<?php echo $index; ?>">
                            <img src="<?php echo $project['img']; ?>" class="card-img-top" alt="<?php echo $project['title']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $project['title']; ?></h5>
                                <p class="card-text"><?php echo $project['desc']; ?></p>
                                <a href="<?php echo $project['link']; ?>" class="btn btn-outline-primary">Lihat Proyek</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="projectModal<?php echo $index; ?>" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><?php echo $project['title']; ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo $project['img']; ?>" class="img-fluid mb-3" alt="<?php echo $project['title']; ?>">
                                    <p><?php echo $project['detail']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5 bg-white bg-opacity-75">
        <div class="container">
            <h2 class="text-center mb-4" data-aos="fade-up">Kontak</h2>
            <div class="row">
                <div class="col-md-6" data-aos="fade-right">
                    <p>Email: <a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></p>
                    <p>LinkedIn: <a href="<?php echo $contact['linkedin']; ?>" target="_blank">Profil LinkedIn</a></p>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <form id="contactForm" method="post" action="">
                        <div class="mb-3"><input type="text" name="name" class="form-control" placeholder="Nama Anda" required></div>
                        <div class="mb-3"><input type="email" name="email" class="form-control" placeholder="Email Anda" required></div>
                        <div class="mb-3"><textarea name="message" class="form-control" rows="3" placeholder="Pesan" required></textarea></div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2023 <?php echo $name; ?>. Dibuat dengan PHP & Cinta.</p>
    </footer>

    <div class="modal fade" id="profileModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Profil Lengkap <?php echo $name; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#bio">Bio</button></li>
                        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#experience">Pengalaman</button></li>
                        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#hobbies">Hobi</button></li>
                        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#gallery">Galeri</button></li>
                    </ul>
                    <div class="tab-content mt-3">
                        <div class="tab-pane fade show active" id="bio">
                            <p><?php echo $about; ?></p>
                            <p><strong>Tanggal Lahir:</strong> <?php echo $personalData['tanggal_lahir']; ?></p>
                            <p><strong>Lokasi:</strong> <?php echo $personalData['lokasi']; ?></p>
                        </div>
                        <div class="tab-pane fade" id="experience">
                            <p><?php echo $personalData['pengalaman']; ?></p>
                        </div>
                        <div class="tab-pane fade" id="hobbies">
                            <ul><?php foreach ($personalData['hobi'] as $hobi): ?><li><?php echo $hobi; ?></li><?php endforeach; ?></ul>
                        </div>
                        <div class="tab-pane fade" id="gallery">
                            <button class="btn btn-primary mb-3" onclick="addPhoto()">Tambah Foto</button>
                            <div class="row" id="galleryContainer">
                                <?php foreach ($personalData['galeri'] as $foto): ?>
                                    <div class="col-md-4 mb-3">
                                        <img src="<?php echo $foto['src']; ?>" alt="<?php echo $foto['alt']; ?>" class="img-fluid gallery-item clickable" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage('<?php echo $foto['src']; ?>', '<?php echo $foto['alt']; ?>')">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="imageModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img id="modalImage" src="" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
            });
        });
        const toggle = document.getElementById('theme-toggle');
        toggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
            toggle.innerHTML = document.body.classList.contains('dark-mode') ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
        });
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Pesan berhasil dikirim!');
        });
        function showImage(src, alt) {
            document.getElementById('modalImage').src = src;
            document.getElementById('modalImage').alt = alt;
        }
        function addPhoto() {
            const container = document.getElementById('galleryContainer');
            const newImg = document.createElement('div');
            newImg.className = 'col-md-4 mb-3';
            newImg.innerHTML = '<img src="assets/placeholder.jpg" alt="Foto Baru" class="img-fluid gallery-item clickable" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(\'assets/placeholder.jpg\', \'Foto Baru\')">';
            container.appendChild(newImg);
        }
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) { return new bootstrap.Tooltip(tooltipTriggerEl); });
    </script>
</body>
</html>
