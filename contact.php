<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ — Hukoi Yoga & Botanical Sanctuary</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🪷</text></svg>">
</head>
<body>
<div id="preloader"><div class="preloader-lotus"></div></div>
<div class="particles"></div>

<nav class="navbar scrolled">
  <div class="container nav-container">
    <a href="index.php" class="nav-logo">🪷 Hukoi<span>YOGA</span></a>
    <div class="nav-links">
      <a href="index.php">ホーム</a>
      <a href="index.php#about">ブランド哲学</a>
      <a href="index.php#classes">クラス</a>
      <a href="contact.php" class="active">お問い合わせ</a>
      <a href="index.php#join" class="nav-cta">無料体験</a>
    </div>
  </div>
</nav>

<section class="legal-page">
  <div class="container">
    <h1>お問い合わせ</h1>
    <p class="updated">ご質問・ご相談・スタジオ見学のお申し込みはお気軽にご連絡ください。</p>

    <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(300px, 1fr));gap:3rem;margin-top:2.5rem">
      <div style="background:var(--bg-card);padding:2.5rem;border-radius:var(--radius-md);box-shadow:var(--shadow-sm);border:1px solid var(--border-light)">
        <h3 style="margin-bottom:1.5rem">スタジオ情報</h3>
        <div style="margin-bottom:1.5rem">
          <p style="color:var(--accent);font-weight:700;font-size:0.85rem">📍 所在地（日本）</p>
          <p style="color:var(--text-dark)">〒150-0001<br>東京都渋谷区神宮前 5-10-1 神宮前タワー 4F</p>
        </div>
        <div style="margin-bottom:1.5rem">
          <p style="color:var(--accent);font-weight:700;font-size:0.85rem">📞 代表電話番号</p>
          <p style="color:var(--text-dark)">+81 (0)3-6427-8910</p>
        </div>
        <div style="margin-bottom:1.5rem">
          <p style="color:var(--accent);font-weight:700;font-size:0.85rem">📧 メールアドレス</p>
          <p style="color:var(--text-dark)">contact@Hukoiyoga.jp</p>
        </div>
        <div>
          <p style="color:var(--accent);font-weight:700;font-size:0.85rem">🕐 営業時間 (JST)</p>
          <p style="color:var(--text-dark)">平日: 6:30 〜 21:30<br>土日祝: 7:30 〜 20:00</p>
        </div>
      </div>

      <div>
        <form class="join-form" id="contactForm" style="box-shadow:var(--shadow-sm)">
          <h3 style="margin-bottom:1.5rem">メッセージの送信</h3>
          <div class="form-group">
            <label for="cName">お名前</label>
            <input type="text" id="cName" required placeholder="例：山田 太郎">
          </div>
          <div class="form-group">
            <label for="cEmail">メールアドレス</label>
            <input type="email" id="cEmail" required placeholder="example@domain.jp">
          </div>
          <div class="form-group">
            <label for="cSubject">件名</label>
            <select id="cSubject" required>
              <option value="">選択してください</option>
              <option value="trial">体験レッスンについて</option>
              <option value="membership">会員プラン変更・解約</option>
              <option value="private">プライベートセッション</option>
              <option value="press">取材・法人利用のお問い合わせ</option>
            </select>
          </div>
          <div class="form-group">
            <label for="cMessage">お問い合わせ内容</label>
            <textarea id="cMessage" rows="5" required placeholder="詳細をご記入ください"></textarea>
          </div>
          <button type="submit" class="btn-submit">送信する</button>
        </form>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container footer-bottom">
    <span>&copy; 2026 Hukoi Yoga Sanctuary K.K. All rights reserved.</span>
    <div>東京都渋谷区神宮前 5-10-1</div>
  </div>
</footer>
<script src="js/main.js"></script>
</body>
</html>