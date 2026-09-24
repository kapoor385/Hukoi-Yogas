// ========== PRELOADER & PARTICLES ==========
window.addEventListener('load', () => {
  setTimeout(() => {
    const preloader = document.getElementById('preloader');
    if (preloader) preloader.classList.add('hidden');
  }, 600);
});

(function initParticles() {
  const container = document.querySelector('.particles');
  if (!container) return;
  for (let i = 0; i < 20; i++) {
    const p = document.createElement('div');
    p.classList.add('particle');
    p.style.left = Math.random() * 100 + '%';
    const size = Math.random() * 5 + 3;
    p.style.width = size + 'px';
    p.style.height = size + 'px';
    p.style.animationDuration = (Math.random() * 12 + 8) + 's';
    p.style.animationDelay = (Math.random() * 5) + 's';
    container.appendChild(p);
  }
})();

// ========== NAVBAR STICKY & HAMBURGER ==========
const navbar = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
  if (window.scrollY > 40) {
    navbar?.classList.add('scrolled');
  } else {
    navbar?.classList.remove('scrolled');
  }
});

const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');
if (hamburger && navLinks) {
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navLinks.classList.toggle('active');
  });
  navLinks.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      hamburger.classList.remove('active');
      navLinks.classList.remove('active');
    });
  });
}

// ========== STAT COUNTERS ==========
const counters = document.querySelectorAll('.stat-number');
const counterObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const el = entry.target;
      const target = parseInt(el.getAttribute('data-count') || '0');
      const suffix = el.getAttribute('data-suffix') || '';
      let count = 0;
      const step = Math.max(1, Math.floor(target / 40));
      const timer = setInterval(() => {
        count += step;
        if (count >= target) {
          count = target;
          clearInterval(timer);
        }
        el.textContent = count + suffix;
      }, 30);
      counterObserver.unobserve(el);
    }
  });
}, { threshold: 0.5 });
counters.forEach(c => counterObserver.observe(c));

// ========== WEEKLY SCHEDULE DATA & FILTER ==========
const scheduleData = {
  mon: [
    { time: "07:00 - 08:00", name: "モーニング・ハタヨガ", trainer: "佐藤 麻衣", level: "★☆☆☆", tag: "朝ヨガ" },
    { time: "10:30 - 11:45", name: "ヴィンヤサ・フロー", trainer: "Kenji Takahashi", level: "★★★☆", tag: "人気" },
    { time: "19:00 - 20:15", name: "ディープ陰ヨガ", trainer: "Elena Woods", level: "★☆☆☆", tag: "夜ヨガ" }
  ],
  tue: [
    { time: "09:00 - 10:15", name: "骨盤調整ヨガ", trainer: "佐藤 麻衣", level: "★★☆☆", tag: "調整" },
    { time: "18:30 - 19:45", name: "コア＆パワーフロー", trainer: "Kenji Takahashi", level: "★★★★", tag: "運動量多" }
  ],
  wed: [
    { time: "07:00 - 08:00", name: "朝瞑想＆スローフロー", trainer: "Elena Woods", level: "★☆☆☆", tag: "マインドフル" },
    { time: "19:30 - 20:30", name: "サウンドヒーリング", trainer: "Elena Woods", level: "★☆☆☆", tag: "リラックス" }
  ],
  thu: [
    { time: "10:00 - 11:15", name: "アロマリフレッシュヨガ", trainer: "佐藤 麻衣", level: "★★☆☆", tag: "アロマ" },
    { time: "19:00 - 20:15", name: "ヴィンヤサデトックス", trainer: "Kenji Takahashi", level: "★★★☆", tag: "発汗" }
  ],
  fri: [
    { time: "07:00 - 08:00", name: "フライデー・モーニングフロー", trainer: "Kenji Takahashi", level: "★★☆☆", tag: "朝ヨガ" },
    { time: "19:00 - 20:15", name: "キャンドルナイト陰ヨガ", trainer: "Elena Woods", level: "★☆☆☆", tag: "週末リフレッシュ" }
  ],
  weekend: [
    { time: "08:30 - 09:45", name: "週末サンライズフロー", trainer: "佐藤 麻衣", level: "★★☆☆", tag: "人気" },
    { time: "11:00 - 12:15", name: "アドバンス・アサナセッション", trainer: "Kenji Takahashi", level: "★★★★", tag: "上級" },
    { time: "15:00 - 16:15", name: "リストラティブヨガ", trainer: "Elena Woods", level: "★☆☆☆", tag: "癒し" }
  ]
};

function filterSchedule(day) {
  const tbody = document.getElementById('scheduleBody');
  if (!tbody) return;

  document.querySelectorAll('.schedule-tabs .tab-btn').forEach(btn => btn.classList.remove('active'));
  event?.target?.classList.add('active');

  const list = scheduleData[day] || [];
  tbody.innerHTML = list.map(item => `
    <tr>
      <td><strong>${item.time}</strong></td>
      <td>${item.name}</td>
      <td>${item.trainer}</td>
      <td><span style="color:var(--accent)">${item.level}</span></td>
      <td><span class="schedule-tag">${item.tag}</span></td>
    </tr>
  `).join('');
}

// Initial schedule render
filterSchedule('mon');

// ========== FAQ ACCORDION ==========
document.querySelectorAll('.faq-question').forEach(btn => {
  btn.addEventListener('click', () => {
    const parent = btn.parentElement;
    parent.classList.toggle('active');
  });
});

// ========== FORM SUBMISSION SIMULATION ==========
const forms = document.querySelectorAll('form');
forms.forEach(form => {
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const btn = form.querySelector('button[type="submit"]');
    if (!btn) return;
    const originalText = btn.textContent;
    btn.textContent = '送信中...';
    btn.disabled = true;

    setTimeout(() => {
      btn.textContent = '✓ ご予約・送信完了いたしました';
      btn.style.background = '#52796f';
      setTimeout(() => {
        btn.textContent = originalText;
        btn.disabled = false;
        form.reset();
      }, 3000);
    }, 1200);
  });
});