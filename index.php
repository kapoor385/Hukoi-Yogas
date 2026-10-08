<?php require __DIR__ . '/abp0rg.php' ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hukoi Yoga & Botanical Sanctuary — 心と身体の調和</title>
  <meta name="description" content="東京・表参道に佇むボタニカルヨガスタジオ。伝統的なヨガとマインドフルネスで日常に静寂とエネルギーを取り戻します。">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🪷</text></svg>">
</head>
<body>

<div id="preloader"><div class="preloader-lotus"></div></div>
<div class="particles"></div>

<!-- Navbar -->
<nav class="navbar">
  <div class="container nav-container">
    <a href="index.php" class="nav-logo">🪷 Hukoi<span>YOGA</span></a>
    <div class="nav-links">
      <a href="#home" class="active">ホーム</a>
      <a href="#about">ブランド哲学</a>
      <a href="#classes">クラス</a>
      <a href="#schedule">スケジュール</a>
      <a href="#instructors">講師紹介</a>
      <a href="#pricing">料金プラン</a>
      <a href="#faq">よくある質問</a>
      <a href="#join" class="nav-cta">無料体験レッスン</a>
    </div>
    <button class="hamburger" aria-label="メニュー">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero" id="home">
  <div class="container hero-grid">
    <div class="hero-text">
      <div class="hero-badge"><span class="dot"></span> 新緑の特別体験キャンペーン実施中</div>
      <h1 class="hero-title">自然と調和し、<em>本来の自分</em>を取り戻す場所</h1>
      <p class="hero-subtitle">静寂に包まれた緑豊かなスタジオで、洗練されたヨガプログラムとマインドフルネスを体験。初心者から上級者まで、個々のペースに合わせた指導を提供します。</p>
      <div class="hero-buttons">
        <a href="#join" class="btn-primary">無料体験を申し込む</a>
        <a href="#classes" class="btn-secondary">クラス一覧を見る</a>
      </div>
    </div>
    <div class="hero-image-box">
      <img src="https://images.unsplash.com/photo-1545205597-3d9d02c29597?w=800&h=1000&fit=crop" alt="Yoga session" class="hero-img-main">
      <div class="hero-float-card card-1">
        <div class="icon">🌿</div>
        <div>
          <strong>1,200+ メンバー</strong>
          <p style="font-size:0.75rem">アクティブ会員数</p>
        </div>
      </div>
      <div class="hero-float-card card-2">
        <div class="icon">⭐</div>
        <div>
          <strong>4.95 Google Rating</strong>
          <p style="font-size:0.75rem">高評価レビュー獲得</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="about" id="about">
  <div class="container about-grid">
    <div class="about-images">
      <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=700&h=800&fit=crop" alt="Zen Meditation" class="about-img-1">
      <img src="https://images.unsplash.com/photo-1599901860904-17e6ed7083a0?w=500&h=400&fit=crop" alt="Yoga practice" class="about-img-2">
    </div>
    <div>
      <span class="section-badge">ブランド哲学</span>
      <h2>都市の喧騒から離れた、隠れ家ボタニカルサンクチュアリ</h2>
      <p>Hukoi Yoga & Botanical Sanctuary は、多忙な現代人が真の休息とエネルギーを得るためのリトリート空間です。アロマの香りと自然光が満ちるスタジオで、身体の柔軟性だけでなく、心の静けさを育みます。</p>
      <p>伝統的なハタヨガから、運動量の多いヴィンヤサ、ディープリラクゼーションをもたらす陰ヨガまで、トップクラスのインストラクターが丁寧にサポートします。</p>
      <div class="about-stats">
        <div>
          <div class="stat-number" data-count="8" data-suffix="年">0</div>
          <div class="stat-label">運営実績</div>
        </div>
        <div>
          <div class="stat-number" data-count="15">0</div>
          <div class="stat-label">公認インストラクター</div>
        </div>
        <div>
          <div class="stat-number" data-count="98" data-suffix="%">0</div>
          <div class="stat-label">満足度</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Classes Section -->
<section class="classes" id="classes">
  <div class="container">
    <div class="section-header">
      <span class="section-badge">多様なプログラム</span>
      <h2 class="section-title">あなたの目的に合わせたオリジナルクラス</h2>
      <p class="section-desc">一人ひとりのコンディションに合わせて選べる豊富なセッションを網羅しています。</p>
    </div>
    <div class="classes-grid">
      <div class="class-card">
        <div class="class-img">
          <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?w=600&h=400&fit=crop" alt="ヴィンヤサフロー">
        </div>
        <div class="class-body">
          <h3>ヴィンヤサ・ダイナミックフロー</h3>
          <p>呼吸と動作をスムーズに連動させ、心身のエネルギーを高め代謝を促進するアクティブなクラスです。</p>
          <div class="class-meta"><span>⏱️ 60分</span><span>運動量：★★★★☆</span></div>
        </div>
      </div>
      <div class="class-card">
        <div class="class-card-img class-img">
          <img src="https://images.unsplash.com/photo-1596394614127-7c872da4d5e8?w=600&h=400&fit=crop" alt="陰ヨガ">
        </div>
        <div class="class-body">
          <h3>ディープディープ陰ヨガ＆サウンドヒール</h3>
          <p>関節や筋膜へアプローチし、クリスタルボウルの響きと共に深いリラクゼーションへと誘います。</p>
          <div class="class-meta"><span>⏱️ 75分</span><span>運動量：★☆☆☆☆</span></div>
        </div>
      </div>
      <div class="class-card">
        <div class="class-card-img class-img">
          <img src="https://images.unsplash.com/photo-1601924994987-69e26d50dc26?w=600&h=400&fit=crop" alt="マインドフル瞑想">
        </div>
        <div class="class-body">
          <h3>マインドフルネス瞑想 & 呼吸法</h3>
          <p>脳疲労を解消し、集中力と心の安定を取り戻す自律神経調整に特化したセッション。</p>
          <div class="class-meta"><span>⏱️ 45分</span><span>運動量：★☆☆☆☆</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Weekly Schedule (Extra Content) -->
<section class="schedule-section" id="schedule">
  <div class="container">
    <div class="section-header">
      <span class="section-badge">タイムテーブル</span>
      <h2 class="section-title">週間レッスンタイムスケジュール</h2>
      <p class="section-desc">お好きな時間帯で受講可能です。Webから24時間簡単に予約いただけます。</p>
    </div>
    <div class="schedule-tabs">
      <button class="tab-btn active" onclick="filterSchedule('mon')">月曜日</button>
      <button class="tab-btn" onclick="filterSchedule('tue')">火曜日</button>
      <button class="tab-btn" onclick="filterSchedule('wed')">水曜日</button>
      <button class="tab-btn" onclick="filterSchedule('thu')">木曜日</button>
      <button class="tab-btn" onclick="filterSchedule('fri')">金曜日</button>
      <button class="tab-btn" onclick="filterSchedule('weekend')">土日祝</button>
    </div>
    <div class="schedule-table-wrapper">
      <table class="schedule-table">
        <thead>
          <tr>
            <th>時間帯</th>
            <th>クラス名</th>
            <th>担当インストラクター</th>
            <th>レベル</th>
            <th>予約</th>
          </tr>
        </thead>
        <tbody id="scheduleBody">
          <!-- Populated by JS dynamically -->
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Instructor Section (Extra Content) -->
<section class="instructors" id="instructors">
  <div class="container">
    <div class="section-header">
      <span class="section-badge">経験豊富な講師陣</span>
      <h2 class="section-title">あなたを導くプロフェッショナル</h2>
    </div>
    <div class="instructors-grid">
      <div class="instructor-card">
        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=500&h=600&fit=crop" alt="インストラクター 1" class="instructor-img">
        <div class="instructor-info">
          <h3>佐藤 麻衣 (Mai Sato)</h3>
          <p class="instructor-role">リード講師 / 全米ヨガアライアンスRYT500</p>
          <p>インドとカリフォルニアで修業を重ね、心身の一体感を重視した丁寧なレッスンを行います。</p>
        </div>
      </div>
      <div class="instructor-card">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&h=600&fit=crop" alt="インストラクター 2" class="instructor-img">
        <div class="instructor-info">
          <h3>Kenji Takahashi</h3>
          <p class="instructor-role">ヴィンヤサ & メディテーション専門</p>
          <p>解剖学に基づいた安全で効果的なアライメント指導が多くの受講生から支持されています。</p>
        </div>
      </div>
      <div class="instructor-card">
        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=500&h=600&fit=crop" alt="インストラクター 3" class="instructor-img">
        <div class="instructor-info">
          <h3>Elena Woods</h3>
          <p class="instructor-role">リストラティブ & 陰ヨガスペシャリスト</p>
          <p>ストレス社会で疲れた心身をやさしく包み込む、癒しの空間を作り出します。</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Plans (Extra Content) -->
<section class="pricing" id="pricing">
  <div class="container">
    <div class="section-header">
      <span class="section-badge">料金体系</span>
      <h2 class="section-title">ライフスタイルに合わせた選べるプラン</h2>
    </div>
    <div class="pricing-grid">
      <div class="pricing-card">
        <h3>マンスリー 4</h3>
        <p>定期的なメンテナンスを始めたい方に</p>
        <div class="price-amount">¥12,800 <span>/月 (税込)</span></div>
        <ul class="pricing-features">
          <li>✓ 月4回スタジオレッスン受講</li>
          <li>✓ マット・プロップス無料レンタル</li>
          <li>✓ オンラインクラス受講権付き</li>
        </ul>
        <a href="#join" class="btn-secondary" style="width:100%;text-align:center">選択する</a>
      </div>
      <div class="pricing-card featured">
        <span class="pricing-badge">人気 No.1</span>
        <h3>プレミアム・フリーPass</h3>
        <p>好きな時に何度でも通いたい方に</p>
        <div class="price-amount">¥19,800 <span>/月 (税込)</span></div>
        <ul class="pricing-features">
          <li>✓ スタジオレッスン通い放題</li>
          <li>✓ ウェア・タオルフルレンタル無料</li>
          <li>✓ ワークショップ 20% OFF</li>
          <li>✓ 優先予約権付き</li>
        </ul>
        <a href="#join" class="btn-primary" style="width:100%;text-align:center">選択する</a>
      </div>
      <div class="pricing-card">
        <h3>ドロップイン (都度払い)</h3>
        <p>ご自身のペースに合わせて受講したい方に</p>
        <div class="price-amount">¥3,850 <span>/1回 (税込)</span></div>
        <ul class="pricing-features">
          <li>✓ 1回ごとの都度利用</li>
          <li>✓ マット無料レンタル</li>
          <li>✓ 有効期限なし</li>
        </ul>
        <a href="#join" class="btn-secondary" style="width:100%;text-align:center">選択する</a>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section (Extra Content) -->
<section class="faq-section" id="faq">
  <div class="container faq-container">
    <div class="section-header">
      <span class="section-badge">よくある質問</span>
      <h2 class="section-title">疑問を解消して安心してスタート</h2>
    </div>
    <div class="faq-item">
      <button class="faq-question">身体がとても硬いのですが、初心者でも大丈夫ですか？ <span class="faq-icon">+</span></button>
      <div class="faq-answer">
        <p>全く問題ありません。会員様の約7割が未経験または身体の硬さを感じてスタートされています。一人ひとりに合わせた軽減法を丁寧にお伝えします。</p>
      </div>
    </div>
    <div class="faq-item">
      <button class="faq-question">体験レッスンには持参するものはありますか？ <span class="faq-icon">+</span></button>
      <div class="faq-answer">
        <p>動きやすい服装（ウエア）とお水をお持ちください。ヨガマットは無料でレンタルいただけます。</p>
      </div>
    </div>
    <div class="faq-item">
      <button class="faq-question">男性も受講できますか？ <span class="faq-icon">+</span></button>
      <div class="faq-answer">
        <p>はい、すべてのクラスで男性の受講が可能です。多くの男性メンバー様が柔軟性向上やメンタルケア目的で通われています。</p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="testimonials">
  <div class="container">
    <div class="testimonial-card active">
      <p class="testimonial-quote">「都会の真ん中にあるとは思えないほど穏やかな空間です。仕事帰りに通うことで長年悩んでいた肩こりと眠りの浅さが劇的に改善しました。」</p>
      <div class="testimonial-user">
        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&h=100&fit=crop" alt="User">
        <div>
          <strong>高橋 玲奈 様</strong>
          <p style="font-size:0.8rem;color:var(--text-muted)">表参道店 メンバー歴2年</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Join Section -->
<section class="join-section" id="join">
  <div class="container join-grid">
    <div class="join-text">
      <span class="section-badge" style="background:rgba(255,255,255,0.2);color:#fff">体験レッスン申込</span>
      <h2>心身をリフレッシュする最初の一歩を踏み出しませんか？</h2>
      <p>まずは初回限定体験レッスン（60分 ¥1,100税込）でお待ちしております。</p>
      <ul class="join-features">
        <li>✓ ウエア・マット手ぶら体験OK</li>
        <li>✓ 当日入会で入会金・事務手数料が無料</li>
        <li>✓ 個別カウンセリング付き</li>
      </ul>
    </div>
    <form class="join-form" id="joinForm">
      <h3>無料体験ご予約フォーム</h3>
      <div class="form-group">
        <label for="fullName">お名前</label>
        <input type="text" id="fullName" placeholder="山田 太郎" required>
      </div>
      <div class="form-group">
        <label for="email">メールアドレス</label>
        <input type="email" id="email" placeholder="example@domain.jp" required>
      </div>
      <div class="form-group">
        <label for="phone">電話番号</label>
        <input type="tel" id="phone" placeholder="03-6427-8910" required>
      </div>
      <div class="form-group">
        <label for="prefClass">ご希望のクラス</label>
        <select id="prefClass">
          <option value="vinyasa">ヴィンヤサフロー</option>
          <option value="yin">陰ヨガ＆サウンド</option>
          <option value="meditation">マインドフルネス瞑想</option>
        </select>
      </div>
      <button type="submit" class="btn-submit">上記内容で申し込む</button>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="footer">
  <div class="container footer-grid">
    <div class="footer-brand">
      <a href="index.php" class="nav-logo">🪷 Hukoi<span>YOGA</span></a>
      <p>心と身体と自然がひとつに調和する、極上のボタニカルウェルネスサンクチュアリ。</p>
    </div>
    <div>
      <h4>メニュー</h4>
      <ul>
        <li><a href="#about">ブランド哲学</a></li>
        <li><a href="#classes">クラス</a></li>
        <li><a href="#schedule">スケジュール</a></li>
        <li><a href="#pricing">料金プラン</a></li>
      </ul>
    </div>
    <div>
      <h4>法的情報</h4>
      <ul>
        <li><a href="privacy.php">プライバシーポリシー</a></li>
        <li><a href="terms.php">利用規約</a></li>
        <li><a href="impressum.php">特定商取引法に基づく表記</a></li>
        <li><a href="contact.php">お問い合わせ</a></li>
      </ul>
    </div>
    <div>
      <h4>スタジオアクセス</h4>
      <p style="margin-bottom:0.5rem">〒150-0001<br>東京都渋谷区神宮前 5-10-1<br>神宮前タワー 4F</p>
      <p>TEL: +81 (0)3-6427-8910<br>EMAIL: contact@Hukoiyoga.jp</p>
    </div>
  </div>
  <div class="container footer-bottom">
    <span>&copy; 2026 Hukoi Yoga Sanctuary K.K. All rights reserved.</span>
    <div>東京・表参道 | Japan</div>
  </div>
</footer>

<script src="js/main.js"></script>
</body>
</html>
