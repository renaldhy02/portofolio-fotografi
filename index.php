<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio Fotografi</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to right, #1e1e2f, #3a3a52);
      color: #fff;
    }
    header {
      background: #111;
      padding: 2rem;
      text-align: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.4);
    }
    header h1 {
      margin: 0;
      font-size: 2.5rem;
    }
    .intro {
      padding: 3rem 2rem;
      text-align: center;
      max-width: 800px;
      margin: auto;
    }
    .intro h2 {
      font-size: 2rem;
      margin-bottom: 1rem;
    }
    .intro p {
      font-size: 1.1rem;
      line-height: 1.6;
    }
    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 1.5rem;
      padding: 2rem;
    }
    .gallery img {
      width: 100%;
      border-radius: 12px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }
    .gallery img:hover {
      transform: scale(1.03);
      box-shadow: 0 6px 20px rgba(255, 255, 255, 0.3);
    }
    .contact {
      text-align: center;
      padding: 2rem;
      background: rgba(255, 255, 255, 0.05);
    }
    .contact h3 {
      margin-bottom: 1rem;
      font-size: 1.5rem;
    }
    .contact p {
      font-size: 1.1rem;
    }
    footer {
      text-align: center;
      padding: 1.5rem;
      background: #111;
      font-size: 0.9rem;
    }
    a {
      color: #ffdd57;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <header>
    <h1>Portofolio Fotografi Bro [Nama Lo]</h1>
  </header>

  <section class="intro">
    <h2>Halo! Saya Fotografer Freelance</h2>
    <p>Spesialisasi di bidang <strong>portrait</strong>, <strong>real estate</strong>, <strong>travel</strong>, dan <strong>konten media sosial</strong>. Silakan cek beberapa hasil karya terbaik saya di bawah ini.</p>
  </section>

  <section class="gallery">
    <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?auto=format&fit=crop&w=800&q=80" alt="Portrait">
    <img src="https://images.unsplash.com/photo-1572120360610-d971b9b63904?auto=format&fit=crop&w=800&q=80" alt="Real Estate">
    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=80" alt="Travel">
    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="Content Creation">
    <img src="https://images.unsplash.com/photo-1516728778615-2d590ea1857b?auto=format&fit=crop&w=800&q=80" alt="Event">
    <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=800&q=80" alt="Urban">
  </section>

  <section class="contact">
    <h3>Hubungi Saya</h3>
    <p>Email: <a href="mailto:brofotografi@email.com">brofotografi@email.com</a><br>
    IG: <a href="https://instagram.com/brofotografi">@brofotografi</a><br>
    WA: <a href="https://wa.me/08xxxxxxx">08xxxxxxx</a></p>
  </section>

  <footer>
    <p>&copy; 2025 Bro Fotografi. All rights reserved.</p>
  </footer>
</body>
</html>
