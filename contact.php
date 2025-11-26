<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- CSS REFERENSI (yang kamu berikan) -->
<style>
/* ============= CSS REFERENSI DARI KAMU ============= */
  :root{
    --bg:#071022;
    --card-bg: rgba(255,255,255,0.04);
    --glass-border: rgba(255,255,255,0.06);
    --muted: #b8c6e6;
    --accent: #7ad0ff;
    --glass-blur: 8px;
    --glass-radius: 18px;
    --shadow: 0 6px 18px rgba(2,6,23,0.6);
  }
  html,body{height:100%}
  body{
    background: linear-gradient(180deg,var(--bg), #031027 140%);
    color: #eef6ff;
    font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    padding:2rem 1rem;
  }
  .glass{
    background: var(--card-bg);
    border: 1px solid var(--glass-border);
    border-radius: var(--glass-radius);
    backdrop-filter: blur(var(--glass-blur));
    padding: 1.5rem;
    box-shadow: var(--shadow);
  }
/* ===================================================== */


/* ========= CONTACT PAGE CUSTOM STYLE ========== */

.contact-container {
  max-width: 900px;
  margin: 40px auto;
}

.contact-title {
  text-align: center;
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: .5rem;
}

.contact-desc {
  text-align: center;
  color: var(--muted);
  margin-bottom: 2rem;
}

.contact-wrap {
  display: flex;
  gap: 1.5rem;
  flex-wrap: wrap;
}

/* Left Card */
.contact-info {
  flex: 1;
  min-width: 260px;
  padding: 1.8rem;
}

.contact-info h3 {
  margin-bottom: 1rem;
  font-size: 1.2rem;
}

.info-item {
  margin-bottom: 1rem;
  display: flex;
  gap: .8rem;
  align-items: center;
}

.info-item i {
  font-size: 1.3rem;
  color: var(--accent);
}

/* Form */
.contact-form {
  flex: 2;
  min-width: 300px;
  padding: 1.8rem;
}

.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: .9rem 1rem;
  margin-bottom: 1rem;
  border-radius: 14px;
  background: rgba(255,255,255,0.06);
  border: 1px solid var(--glass-border);
  color: #fff;
  font-size: .95rem;
  outline: none;
  backdrop-filter: blur(6px);
}

.contact-form input:focus,
.contact-form textarea:focus {
  border-color: var(--accent);
  box-shadow: 0 0 10px rgba(122,208,255,0.4);
}

.contact-form textarea {
  height: 140px;
  resize: none;
}

.btn-send {
  width: 100%;
  background: var(--accent);
  color: #012;
  padding: .9rem;
  font-size: 1.05rem;
  font-weight: 700;
  border: none;
  border-radius: 14px;
  cursor: pointer;
  box-shadow: var(--shadow);
  transition: .25s ease;
}

.btn-send:hover {
  transform: translateY(-3px);
  background: #8ee0ff;
}

/* Responsive */
@media(max-width: 768px){
  .contact-wrap {
    flex-direction: column;
  }
}

</style>

<!-- ICON (fontawesome CDN) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
<nav class="navbar navbar-expand-lg glass shadow-sm px-3 py-2 mb-4"
     style="
       border-radius:20px;
       background:rgba(255,255,255,0.06);
       backdrop-filter:blur(12px);
       border:1px solid rgba(255,255,255,0.12);
       box-shadow:0 8px 24px rgba(0,0,0,0.35);
     ">
  <div class="container-fluid">

    <!-- LOGO KIRI -->
    <a class="navbar-brand d-flex align-items-center gap-2 text-white fw-bold" href="index.php">
      <div style="
        width:42px;height:42px;
        border-radius:12px;
        background:linear-gradient(135deg,var(--accent),#6bd5ff 70%);
        display:grid;place-items:center;
        font-family:Poppins;font-weight:700;
        color:#011;">
        PDX
      </div>
      <span style="font-size:1.05rem; font-family:Inter;">Pokédex Glass</span>
    </a>

    <!-- TOGGLER MOBILE -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon" 
            style="filter:invert(1) brightness(200%);"></span>
    </button>

    <!-- NAV MENU -->
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center gap-lg-3">

        <li class="nav-item">
          <a class="nav-link text-white fw-semibold" href="index.php" 
             style="font-family:Inter; opacity:.9;">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white fw-semibold" href="#" 
             style="font-family:Inter; opacity:.9;">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white fw-semibold" href="contact.php" 
             style="font-family:Inter; opacity:.9;">Contact us</a>
        </li>

        <!-- REFRESH BUTTON BARU -->
        <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
          <button id="refreshBtn" class="btn btn-sm btn-outline-light px-3 py-2 d-flex align-items-center gap-2"
                  style="
                    border-radius:14px;
                    font-family:Inter;
                    backdrop-filter:blur(12px);
                  ">
            <i class="bi bi-arrow-clockwise"></i>
            Refresh
          </button>
        </li>

      </ul>
    </div>

  </div>
</nav>

<div class="contact-container">

  <h1 class="contact-title">Contact Us</h1>
  <p class="contact-desc">Kami siap membantu Anda. Silakan hubungi kami melalui form berikut.</p>

  <div class="contact-wrap">

    <!-- Left Info Card -->
    <div class="glass contact-info">
      <h3>Informasi Kontak</h3>

      <div class="info-item">
        <i class="fa-solid fa-location-dot"></i>
        <span>Jl. Bunga Mawar No. 12, Jakarta</span>
      </div>

      <div class="info-item">
        <i class="fa-solid fa-phone"></i>
        <span>+62 812-3456-7890</span>
      </div>

      <div class="info-item">
        <i class="fa-solid fa-envelope"></i>
        <span>support@example.com</span>
      </div>

      <div class="info-item">
        <i class="fa-solid fa-clock"></i>
        <span>Senin - Jumat, 08:00 - 17:00</span>
      </div>
    </div>

    <!-- Form Card -->
    <div class="glass contact-form">
      <form action="send.php" method="POST">
        <input type="text" name="nama" placeholder="Nama Lengkap" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="subjek" placeholder="Subjek Pesan" required>
        <textarea name="pesan" placeholder="Tulis pesan Anda..." required></textarea>

        <button type="submit" class="btn-send">Kirim Pesan</button>
      </form>
    </div>

  </div>

</div>

<script>
  // REFRESH BUTTON ACTION
  document.getElementById("refreshBtn").addEventListener("click", () => {
    location.reload();
  });
</script>
</body>
</html>
