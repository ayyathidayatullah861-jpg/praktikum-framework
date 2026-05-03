<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 — Halaman Tidak Ditemukan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&family=Orbitron:wght@700;900&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background: #030712;
            min-height: 100vh;
            font-family: 'Space Grotesk', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        #stars { position: fixed; inset: 0; z-index: 0; pointer-events: none; }
        .star {
            position: absolute;
            background: white;
            border-radius: 50%;
            animation: twinkle var(--dur, 3s) ease-in-out infinite var(--del, 0s);
        }
        @keyframes twinkle {
            0%, 100% { opacity: var(--op, .7); transform: scale(1); }
            50%       { opacity: .1;            transform: scale(.5); }
        }

        .nebula {
            position: fixed; border-radius: 50%;
            filter: blur(80px); z-index: 0; pointer-events: none;
        }
        .nb1 { width:600px;height:600px;background:radial-gradient(circle,#7c3aed,transparent);top:-200px;left:-200px;opacity:.12; }
        .nb2 { width:500px;height:500px;background:radial-gradient(circle,#0ea5e9,transparent);bottom:-150px;right:-150px;opacity:.12; }
        .nb3 { width:300px;height:300px;background:radial-gradient(circle,#f59e0b,transparent);top:50%;left:50%;transform:translate(-50%,-50%);opacity:.06; }

        .planet { position:fixed;border-radius:50%;z-index:1;pointer-events:none;animation:drift 20s ease-in-out infinite; }
        .pl1 { width:180px;height:180px;background:radial-gradient(circle at 40% 35%,#f59e0b,#92400e);top:-60px;right:80px;opacity:.18; }
        .pl2 { width:80px;height:80px;background:radial-gradient(circle at 40% 35%,#60a5fa,#1e3a5f);bottom:80px;left:40px;opacity:.18;animation-duration:15s;animation-direction:reverse; }
        @keyframes drift {
            0%,100% { transform:translate(0,0) rotate(0deg); }
            50%     { transform:translate(8px,-8px) rotate(3deg); }
        }

        .sstar {
            position: fixed; height:1px; opacity:0; z-index:1; pointer-events:none;
            background: linear-gradient(90deg,transparent,white,transparent);
            animation: shoot var(--dur,6s) linear infinite var(--del,0s);
        }
        @keyframes shoot {
            0%   { opacity:0; width:0;     transform:translate(-100px,0); }
            10%  { opacity:1; width:120px; }
            90%  { opacity:1; }
            100% { opacity:0; width:120px; transform:translate(900px,400px); }
        }

        .wrap {
            position: relative; z-index: 10;
            text-align: center; padding: 2rem;
            max-width: 640px; width: 100%;
            animation: fadeUp .8s ease-out both;
        }
        @keyframes fadeUp {
            from { opacity:0; transform:translateY(40px); }
            to   { opacity:1; transform:translateY(0); }
        }

        .scene {
            position:relative; width:220px; height:220px;
            margin: 0 auto 2rem;
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%,100% { transform: translateY(0)    rotate(-3deg); }
            50%     { transform: translateY(-20px) rotate(3deg); }
        }
        .scene svg { width:100%;height:100%;filter:drop-shadow(0 0 28px rgba(124,58,237,.45)); }

        .ring {
            position:absolute; border-radius:50%;
            border:1.5px solid rgba(124,58,237,.4);
            top:50%;left:50%;transform:translate(-50%,-50%);
            animation: pulse 3s ease-out infinite;
        }
        .ring:nth-child(1){width:230px;height:230px;animation-delay:0s;}
        .ring:nth-child(2){width:280px;height:280px;animation-delay:.6s;}
        .ring:nth-child(3){width:330px;height:330px;animation-delay:1.2s;}
        @keyframes pulse {
            0%   { opacity:.5; transform:translate(-50%,-50%) scale(.95); }
            100% { opacity:0;  transform:translate(-50%,-50%) scale(1.05); }
        }

        .code {
            font-family:'Orbitron',monospace;
            font-size: clamp(5rem,15vw,8rem);
            font-weight:900; line-height:1; letter-spacing:-4px;
            color:transparent;
            background:linear-gradient(135deg,#a78bfa 0%,#60a5fa 50%,#34d399 100%);
            -webkit-background-clip:text; background-clip:text;
            -webkit-text-fill-color:transparent;
            margin-bottom:.25rem;
            animation: glitch 5s ease-in-out infinite;
        }
        @keyframes glitch {
            0%,90%,100% { transform:translate(0);       filter:none; }
            91%          { transform:translate(-2px,1px); filter:hue-rotate(20deg); }
            93%          { transform:translate(2px,-1px); filter:hue-rotate(-20deg); }
            95%          { transform:translate(-1px,0);   filter:none; }
        }

        .badge {
            display:inline-block;
            font-family:'Orbitron',monospace;
            font-size:.62rem; font-weight:700;
            letter-spacing:4px; text-transform:uppercase;
            color:#60a5fa;
            background:rgba(96,165,250,.08);
            border:1px solid rgba(96,165,250,.25);
            padding:.35rem 1rem; border-radius:100px;
            margin-bottom:1.5rem;
        }

        h1 {
            font-size:clamp(1.3rem,4vw,1.9rem);
            font-weight:700; color:#f1f5f9;
            margin-bottom:.75rem; line-height:1.2;
        }

        p {
            font-size:1rem; color:#94a3b8;
            line-height:1.7; max-width:420px;
            margin:0 auto 2.5rem;
        }
        p strong { color:#a78bfa; }

        .btns { display:flex; gap:12px; justify-content:center; flex-wrap:wrap; }

        .btn {
            display:inline-flex; align-items:center; gap:8px;
            padding:.75rem 1.75rem; border-radius:100px;
            font-family:'Space Grotesk',sans-serif;
            font-size:.9rem; font-weight:600;
            text-decoration:none; border:none; cursor:pointer;
            transition:all .25s ease;
        }
        .btn-p {
            background:linear-gradient(135deg,#7c3aed,#2563eb);
            color:white;
            box-shadow:0 0 20px rgba(124,58,237,.4);
        }
        .btn-p:hover { transform:translateY(-2px) scale(1.04); box-shadow:0 0 35px rgba(124,58,237,.6); }
        .btn-s {
            background:transparent; color:#cbd5e1;
            border:1px solid rgba(255,255,255,.12);
        }
        .btn-s:hover { background:rgba(255,255,255,.06); border-color:rgba(255,255,255,.25); color:white; transform:translateY(-2px); }

        .statusbar {
            margin-top:3rem; display:flex; align-items:center;
            justify-content:center; gap:6px;
            font-family:'Orbitron',monospace;
            font-size:.58rem; color:#475569; letter-spacing:2px;
        }
        .dot {
            width:5px; height:5px; border-radius:50%;
            background:#22d3ee;
            animation:blink 1.5s ease-in-out infinite;
        }
        @keyframes blink { 0%,100%{opacity:1;} 50%{opacity:.2;} }

        @media (max-width:480px) {
            .scene { width:160px; height:160px; }
            .btns  { flex-direction:column; align-items:center; }
        }
    </style>
</head>
<body>

<div id="stars"></div>
<div class="nebula nb1"></div>
<div class="nebula nb2"></div>
<div class="nebula nb3"></div>
<div class="planet pl1"></div>
<div class="planet pl2"></div>

<div class="wrap">
    <div class="scene">
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <radialGradient id="sg" cx="40%" cy="35%">
                    <stop offset="0%"   stop-color="#e2e8f0"/>
                    <stop offset="100%" stop-color="#94a3b8"/>
                </radialGradient>
                <radialGradient id="hg" cx="38%" cy="32%">
                    <stop offset="0%"   stop-color="#93c5fd" stop-opacity=".5"/>
                    <stop offset="60%"  stop-color="#1d4ed8" stop-opacity=".8"/>
                    <stop offset="100%" stop-color="#0f172a"/>
                </radialGradient>
                <radialGradient id="vg" cx="38%" cy="30%">
                    <stop offset="0%"   stop-color="#fcd34d" stop-opacity=".9"/>
                    <stop offset="100%" stop-color="#f59e0b" stop-opacity=".3"/>
                </radialGradient>
            </defs>
            <ellipse cx="100" cy="130" rx="42" ry="48" fill="url(#sg)" stroke="#64748b" stroke-width="1.5"/>
            <rect x="58" y="105" width="22" height="38" rx="6" fill="#475569" stroke="#334155" stroke-width="1"/>
            <rect x="62" y="110" width="14" height="6" rx="2" fill="#60a5fa" opacity=".7"/>
            <rect x="62" y="120" width="14" height="6" rx="2" fill="#34d399" opacity=".7"/>
            <rect x="62" y="130" width="14" height="6" rx="2" fill="#f59e0b" opacity=".7"/>
            <rect x="62" y="148" width="76" height="10" rx="4" fill="#475569" stroke="#334155" stroke-width="1"/>
            <rect x="95" y="149" width="10" height="8"  rx="2" fill="#60a5fa" opacity=".8"/>
            <rect x="70"  y="155" width="22" height="30" rx="10" fill="#cbd5e1" stroke="#94a3b8" stroke-width="1"/>
            <rect x="108" y="155" width="22" height="30" rx="10" fill="#cbd5e1" stroke="#94a3b8" stroke-width="1"/>
            <ellipse cx="81"  cy="188" rx="14" ry="8" fill="#64748b"/>
            <ellipse cx="119" cy="188" rx="14" ry="8" fill="#64748b"/>
            <path d="M60 110 Q30 85 45 65" stroke="#cbd5e1" stroke-width="18" stroke-linecap="round" fill="none"/>
            <ellipse cx="46" cy="62" rx="12" ry="12" fill="#94a3b8" stroke="#64748b" stroke-width="1.5"/>
            <path d="M140 110 Q160 100 155 125" stroke="#cbd5e1" stroke-width="18" stroke-linecap="round" fill="none"/>
            <ellipse cx="155" cy="128" rx="12" ry="12" fill="#94a3b8" stroke="#64748b" stroke-width="1.5"/>
            <circle cx="100" cy="76" r="38" fill="url(#hg)" stroke="#475569" stroke-width="2"/>
            <ellipse cx="100" cy="76" rx="26" ry="22" fill="url(#vg)"/>
            <ellipse cx="92"  cy="68" rx="7"  ry="5"  fill="white" opacity=".2" transform="rotate(-20 92 68)"/>
            <circle cx="106" cy="72" r="1.5" fill="white" opacity=".6"/>
            <circle cx="110" cy="80" r="1"   fill="white" opacity=".4"/>
            <circle cx="98"  cy="84" r="1"   fill="white" opacity=".4"/>
            <circle cx="100" cy="76" r="38" fill="none" stroke="#94a3b8" stroke-width="3"/>
            <line x1="100" y1="38" x2="100" y2="22" stroke="#94a3b8" stroke-width="2"/>
            <circle cx="100" cy="20" r="4" fill="#f472b6"/>
            <circle cx="100" cy="20" r="2" fill="#fda4af" opacity=".8"/>
            <circle cx="120" cy="118" r="10" fill="#1e3a8a" stroke="#60a5fa" stroke-width="1.5"/>
            <text x="120" y="122" text-anchor="middle" fill="#60a5fa" font-size="8" font-weight="700">404</text>
            <path d="M138 108 Q175 80 170 50" stroke="#94a3b8" stroke-width="3" stroke-dasharray="5 3" fill="none" stroke-linecap="round"/>
        </svg>
    </div>

    <div class="code">404</div>
    <div class="badge">SIGNAL LOST &mdash; HALAMAN TIDAK DITEMUKAN</div>

    <h1>Ups! Halaman Ini Nyasar ke Luar Angkasa</h1>

    <p>
        Astronaut kami sudah mencari ke seluruh galaksi, tapi halaman yang kamu
        minta tidak ada di orbit ini. Mungkin URL-nya salah, atau halamannya sudah
        <strong>melayang ke dimensi lain</strong>.
    </p>

    <div class="btns">
        <a href="{{ url('/') }}" class="btn btn-p">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
            Kembali ke Bumi
        </a>
        <a href="javascript:history.back()" class="btn btn-s">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="m12 19-7-7 7-7"/>
                <path d="M19 12H5"/>
            </svg>
            Halaman Sebelumnya
        </a>
    </div>

    <div class="statusbar">
        <div class="dot"></div>
        <span>SISTEM NAVIGASI AKTIF &mdash; ERROR CODE 404 &mdash; HTTP/1.1</span>
    </div>
</div>

<script>
    const starsEl = document.getElementById('stars');
    for (let i = 0; i < 160; i++) {
        const s  = document.createElement('div');
        s.className = 'star';
        const size = Math.random() * 2.5 + 0.5;
        s.style.cssText = [
            `width:${size}px`,
            `height:${size}px`,
            `top:${Math.random()*100}%`,
            `left:${Math.random()*100}%`,
            `--dur:${2 + Math.random()*4}s`,
            `--del:${Math.random()*5}s`,
            `--op:${(0.3 + Math.random()*0.7).toFixed(2)}`
        ].join(';');
        starsEl.appendChild(s);
    }
    for (let i = 0; i < 4; i++) {
        const ss = document.createElement('div');
        ss.className = 'sstar';
        ss.style.cssText = [
            `top:${10 + Math.random()*40}%`,
            `left:${Math.random()*30}%`,
            `--dur:${5 + Math.random()*5}s`,
            `--del:${i * 2 + Math.random()*3}s`
        ].join(';');
        document.body.appendChild(ss);
    }
</script>

</body>
</html>