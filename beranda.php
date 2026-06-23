<?php
// Matana RIASEC Portal - Landing Page
$page_title = "Matana RIASEC Portal";
$university = "Universitas Matana";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f0f4f8;
      color: #1a2744;
    }

    /* ===== NAVBAR ===== */
    nav {
      background-color: #1a2744;
      padding: 0 2rem;
      height: 64px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .nav-logo {
      display: flex;
      align-items: center;
      gap: 10px;
      color: #fff;
      font-weight: 600;
      font-size: 16px;
      text-decoration: none;
    }

    .nav-logo-icon {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background-color: #E6A827;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      color: #1a2744;
      font-size: 16px;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 1.75rem;
    }

    .nav-links a {
      color: #b0bccc;
      font-size: 14px;
      text-decoration: none;
      transition: color 0.2s;
    }

    .nav-links a:hover {
      color: #fff;
    }

    .btn-nav {
      border: 1.5px solid #E6A827;
      color: #E6A827;
      background: transparent;
      padding: 7px 20px;
      border-radius: 6px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.2s;
      text-decoration: none;
    }

    .btn-nav:hover {
      background-color: #E6A827;
      color: #1a2744;
    }

    /* ===== HERO ===== */
    .hero {
      padding: 4rem 2.5rem 3rem;
      max-width: 1100px;
      margin: 0 auto;
    }

    .hero-badge {
      display: inline-block;
      border: 1px solid #E6A827;
      color: #b07d10;
      background-color: #fff9ef;
      font-size: 11px;
      font-weight: 600;
      padding: 4px 14px;
      border-radius: 20px;
      letter-spacing: 0.08em;
      margin-bottom: 1.25rem;
    }

    .hero h1 {
      font-size: 42px;
      font-weight: 800;
      color: #1a2744;
      line-height: 1.2;
      max-width: 650px;
      margin-bottom: 1.25rem;
    }

    .hero h1 span {
      color: #E6A827;
    }

    .hero p {
      font-size: 15px;
      color: #4a5a70;
      max-width: 580px;
      line-height: 1.8;
      margin-bottom: 2rem;
    }

    .hero p a {
      color: #E6A827;
      text-decoration: none;
      font-weight: 500;
    }

    .hero-actions {
      display: flex;
      align-items: center;
      gap: 12px;
      flex-wrap: wrap;
    }

    .btn-primary {
      background-color: #E6A827;
      color: #1a2744;
      font-weight: 700;
      font-size: 15px;
      padding: 12px 26px;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: background-color 0.2s;
      text-decoration: none;
    }

    .btn-primary:hover {
      background-color: #cf9420;
    }

    .btn-secondary {
      background-color: #fff;
      color: #1a2744;
      font-weight: 500;
      font-size: 14px;
      padding: 11px 20px;
      border-radius: 8px;
      border: 1.5px solid #c8d3e0;
      cursor: pointer;
      transition: border-color 0.2s;
      text-decoration: none;
    }

    .btn-secondary:hover {
      border-color: #1a2744;
    }

    /* ===== STEP CARDS ===== */
    .steps-section {
      padding: 0 2.5rem 3rem;
      max-width: 1100px;
      margin: 0 auto;
    }

    .steps-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 16px;
    }

    .step-card {
      background-color: #fff;
      border-radius: 12px;
      padding: 1.5rem;
      border: 1px solid #dce6f0;
      transition: box-shadow 0.2s;
    }

    .step-card:hover {
      box-shadow: 0 4px 16px rgba(26, 39, 68, 0.08);
    }

    .step-header {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 14px;
    }

    .step-num {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background-color: #1a2744;
      color: #fff;
      font-size: 13px;
      font-weight: 700;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .step-icon {
      font-size: 22px;
      color: #1a2744;
    }

    .step-card h3 {
      font-size: 15px;
      font-weight: 700;
      color: #1a2744;
      margin-bottom: 8px;
    }

    .step-card p {
      font-size: 13px;
      color: #5a6a7e;
      line-height: 1.65;
    }

    /* ===== FOOTER ===== */
    footer {
      background-color: #1a2744;
      color: #8a9ab0;
      text-align: center;
      padding: 1.25rem;
      font-size: 13px;
      margin-top: 2rem;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 640px) {
      .nav-links { display: none; }
      .hero h1 { font-size: 28px; }
      .hero { padding: 2rem 1.25rem 1.5rem; }
      .steps-section { padding: 0 1.25rem 2rem; }
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav>
    <a href="index.php" class="nav-logo">
      <div class="nav-logo-icon">M</div>
      <?= htmlspecialchars($page_title) ?>
    </a>
    <div class="nav-links">
      <a href="index.php">Beranda</a>
      <a href="tentang.php">Tentang RIASEC</a>
      <a href="tes.php">Mulai Tes</a>
      <a href="admin/login.php" class="btn-nav">Login Admin</a>
    </div>
  </nav>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-badge">VERSI BAHASA INDONESIA</div>
    <h1>
      Temukan Minat Kerja Kamu &<br>
      <span>Eksplorasi Opsi Karier</span> yang Paling Cocok.
    </h1>
    <p>
      Asesmen ini menggunakan pola interaktif Holland Codes (RIASEC) untuk mengukur
      minat aktivitas kerja Anda dan menyelaraskannya dengan program studi di
      <?= htmlspecialchars($university) ?>. <a href="#">Paramus Ad Veritas.</a>
    </p>
    <div class="hero-actions">
        Mulai Asesmen Sekarang &#8594;
      </a>
      <a href="survei.php" class="btn-secondary">Survei Evaluasi</a>
      <a href="statistik.php" class="btn-secondary">Statistik</a>
      <a href="admin/login.php" class="btn-secondary">Masuk Admin</a>
    </div>
  </section>

  <!-- STEP CARDS -->
  <section class="steps-section">
    <div class="steps-grid">

      <?php
      $steps = [
        [
          "num"  => "1",
          "icon" => "📋",
          "title"=> "Jawab Aktivitas",
          "desc" => "Nilai setiap aktivitas dari sangat tidak suka sampai sangat suka.",
        ],
        [
          "num"  => "2",
          "icon" => "📊",
          "title"=> "Lihat Profil RIASEC",
          "desc" => "Dapatkan 3 minat tertinggi Anda berdasarkan pola Holland Codes.",
        ],
        [
          "num"  => "3",
          "icon" => "🧭",
          "title"=> "Eksplorasi Karier",
          "desc" => "Pahami contoh jalur karier yang relevan dengan profilmu.",
        ],
      ];

      foreach ($steps as $step): ?>
        <div class="step-card">
          <div class="step-header">
            <div class="step-num"><?= $step['num'] ?></div>
            <span class="step-icon"><?= $step['icon'] ?></span>
          </div>
          <h3><?= htmlspecialchars($step['title']) ?></h3>
          <p><?= htmlspecialchars($step['desc']) ?></p>
        </div>
      <?php endforeach; ?>

    </div>
  </section>


  <!-- SECTION: 6 TIPE RIASEC -->
  <section style="padding: 3rem 2.5rem 4rem; max-width: 1100px; margin: 0 auto;">
    <div style="text-align: center; margin-bottom: 2.5rem;">
      <h2 style="font-size: 30px; font-weight: 800; color: #1a2744; margin-bottom: 0.75rem;">Mengenal 6 Tipe Penjurusan RIASEC</h2>
      <p style="font-size: 15px; color: #5a6a7e; max-width: 500px; margin: 0 auto; line-height: 1.8;">
        Setiap individu memiliki kombinasi unik dari enam tipe kepribadian karier ini.
        Klik kartu untuk mempelajari karakteristik masing-masing secara lebih mendalam.
      </p>
    </div>

    <?php
    $riasec_types = [
      ["code"=>"R","label"=>"REALISTIC","name"=>"Realistis","icon"=>"🔧","color"=>"green","desc"=>"Tipe Realistis adalah individu yang berorientasi pada tindakan nyata. Mereka lebih senang bekerja de...","tags"=>["Teknis","Praktis","Fisikal"]],
      ["code"=>"I","label"=>"INVESTIGATIVE","name"=>"Investigatif","icon"=>"🔬","color"=>"blue","desc"=>"Tipe Investigatif adalah individu yang didorong oleh rasa ingin tahu intelektual. Mereka senang meng...","tags"=>["Analitis","Logis","Mandiri"]],
      ["code"=>"A","label"=>"ARTISTIC","name"=>"Artistik","icon"=>"🎨","color"=>"pink","desc"=>"Tipe Artistik adalah individu yang imajinatif dan ekspresif. Mereka terdorong untuk menciptakan kary...","tags"=>["Kreatif","Imajinatif","Ekspresif"]],
      ["code"=>"S","label"=>"SOCIAL","name"=>"Sosial","icon"=>"👥","color"=>"orange","desc"=>"Tipe Sosial adalah individu yang suka berinteraksi dan membantu orang lain. Mereka cocok di bidang pendidikan dan pelayanan.","tags"=>["Empatik","Komunikatif","Kooperatif"]],
      ["code"=>"E","label"=>"ENTERPRISING","name"=>"Enterprising","icon"=>"📈","color"=>"purple","desc"=>"Tipe Enterprising adalah individu yang ambisius dan suka memimpin untuk mencapai tujuan bisnis.","tags"=>["Percaya Diri","Persuasif","Ambisius"]],
      ["code"=>"C","label"=>"CONVENTIONAL","name"=>"Konvensional","icon"=>"🗂️","color"=>"teal","desc"=>"Tipe Konvensional adalah individu yang terorganisir dan teliti, nyaman bekerja dengan data dan prosedur.","tags"=>["Terorganisir","Teliti","Sistematis"]],
    ];
    $card_styles = [
      "green"  => ["bg"=>"#e6f4ec","icon_bg"=>"#c3e6cf","badge_bg"=>"#1d6a3a","tag_bg"=>"#c8e6d0","tag_color"=>"#1d5c32","link_color"=>"#1d6a3a","letter_color"=>"#1d6a3a"],
      "blue"   => ["bg"=>"#e3edf9","icon_bg"=>"#b8d4f2","badge_bg"=>"#1a4f8a","tag_bg"=>"#bdd4f0","tag_color"=>"#173f72","link_color"=>"#1a4f8a","letter_color"=>"#1a4f8a"],
      "pink"   => ["bg"=>"#fce8f0","icon_bg"=>"#f5c0d5","badge_bg"=>"#a0245c","tag_bg"=>"#f5c2d6","tag_color"=>"#8c1e50","link_color"=>"#a0245c","letter_color"=>"#a0245c"],
      "orange" => ["bg"=>"#fdf0e3","icon_bg"=>"#f9d4a8","badge_bg"=>"#b85c10","tag_bg"=>"#f9d4a8","tag_color"=>"#9c4e0c","link_color"=>"#b85c10","letter_color"=>"#b85c10"],
      "purple" => ["bg"=>"#ede8fb","icon_bg"=>"#cfc3f5","badge_bg"=>"#4a2fa0","tag_bg"=>"#d0c4f4","tag_color"=>"#3d2688","link_color"=>"#4a2fa0","letter_color"=>"#4a2fa0"],
      "teal"   => ["bg"=>"#e0f5f5","icon_bg"=>"#b0e2e2","badge_bg"=>"#0e6b6b","tag_bg"=>"#b0e2e2","tag_color"=>"#0a5555","link_color"=>"#0e6b6b","letter_color"=>"#0e6b6b"],
    ];
    ?>

    <style>
      .riasec-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
      .riasec-card-home {
        border-radius: 16px; padding: 1.75rem; position: relative;
        overflow: hidden; cursor: pointer; transition: transform 0.2s, box-shadow 0.2s;
        text-decoration: none; display: block; color: inherit;
      }
      .riasec-card-home:hover { transform: translateY(-4px); box-shadow: 0 8px 24px rgba(0,0,0,0.1); }
    </style>

    <div class="riasec-grid">
      <?php foreach ($riasec_types as $t):
        $s = $card_styles[$t["color"]];
      ?>
        <a href="tentang.php#<?= $t['code'] ?>" class="riasec-card-home" style="background:<?= $s['bg'] ?>">
          <div style="position:absolute;right:16px;top:10px;font-size:80px;font-weight:900;opacity:0.12;color:<?= $s['letter_color'] ?>;line-height:1;user-select:none"><?= $t['code'] ?></div>
          <div style="width:52px;height:52px;border-radius:12px;background:<?= $s['icon_bg'] ?>;display:flex;align-items:center;justify-content:center;font-size:24px;margin-bottom:1.25rem"><?= $t['icon'] ?></div>
          <div style="display:inline-block;font-size:11px;font-weight:700;letter-spacing:0.08em;padding:4px 10px;border-radius:6px;background:<?= $s['badge_bg'] ?>;color:#fff;margin-bottom:10px"><?= $t['code'] ?> — <?= $t['label'] ?></div>
          <div style="font-size:20px;font-weight:800;color:#1a2744;margin-bottom:10px"><?= htmlspecialchars($t['name']) ?></div>
          <div style="font-size:13.5px;color:#4a5a70;line-height:1.7;margin-bottom:1.25rem"><?= htmlspecialchars($t['desc']) ?></div>
          <div style="display:flex;flex-wrap:wrap;gap:8px;margin-bottom:1.25rem">
            <?php foreach ($t['tags'] as $tag): ?>
              <span style="font-size:12px;font-weight:600;padding:4px 12px;border-radius:20px;background:<?= $s['tag_bg'] ?>;color:<?= $s['tag_color'] ?>"><?= htmlspecialchars($tag) ?></span>
            <?php endforeach; ?>
          </div>
          <div style="font-size:13.5px;font-weight:700;color:<?= $s['link_color'] ?>">Pelajari Selengkapnya &rarr;</div>
        </a>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    &copy; <?= date('Y') ?> <?= htmlspecialchars($university) ?> &mdash; Paramus Ad Veritas
  </footer>

</body>
</html>