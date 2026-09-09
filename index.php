<!doctype html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CNE Consultorías — Rentabilidad financiera con enfoque humano</title>
  <meta
    name="description"
    content="Consultoría estratégica, financiera y de cumplimiento (STPS / NOM) para PyMEs y empresas familiares. Metodología COSS. Del autoempleo al liderazgo estratégico." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700;800;900&family=Space+Mono:wght@400;700&display=swap"
    rel="stylesheet" />
  <style>
    :root {
      --paper: #ffffff;
      --bone: #f6f5f3;
      --mist: #ecebe8;
      --line: #e3e1dd;
      --fog: #cfceca;
      --steel: #9a9995;
      --slate: #5b5a57;
      --ink: #17171a;
      --char: #0f0f11;
      --char-2: #1a1a1d;
      --red: #e12d22;
      --red-deep: #b71f16;
      --hmute: #c9c7c3;
      --hmute-d: #5d5d61;
      --r-lg: 24px;
      --r-md: 16px;
      --maxw: 1240px;
      --ease: cubic-bezier(0.2, 0.7, 0.2, 1);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      -webkit-text-size-adjust: 100%;
    }

    body {
      font-family: "Archivo", system-ui, sans-serif;
      background: var(--paper);
      color: var(--ink);
      line-height: 1.55;
      font-size: 17px;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
    }

    h1,
    h2,
    h3,
    h4 {
      font-weight: 800;
      letter-spacing: -0.035em;
      line-height: 1;
      color: var(--ink);
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    img {
      display: block;
      max-width: 100%;
    }

    .wrap {
      max-width: var(--maxw);
      margin: 0 auto;
      padding: 0 32px;
    }

    .mono {
      font-family: "Space Mono", monospace;
      font-weight: 400;
    }

    .idx {
      font-family: "Space Mono", monospace;
      font-size: 0.74rem;
      letter-spacing: 0.04em;
      color: var(--steel);
      display: inline-flex;
      align-items: center;
      gap: 12px;
    }

    .idx::before {
      content: "";
      width: 22px;
      height: 1px;
      background: var(--red);
    }

    .idx b {
      color: var(--red);
      font-weight: 700;
    }



    /* HERO */

    .hero {
      padding: 70px 0 40px;
      background: var(--paper);
      position: relative;
    }

    /* TEXTO + IMAGEN PRINCIPAL */
    .hero-content {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0;
      align-items: stretch;
      margin-top: 26px;
      min-height: 470px;
    }

    /* TEXTO IZQUIERDA */
    .hero-text {
      display: flex;
      align-items: center;
      padding: 45px 50px 45px 0;
      min-width: 0;
    }

    .hero-text h1 {
      font-size: clamp(2.2rem, 3.6vw, 3.7rem);
      line-height: 1.02;
      margin: 0;
      max-width: 13ch;

      /* Título principal gris */
      color: #777777;
    }

    .hero-text h1 .mute {
      display: block;
      color: var(--ink);
      margin-top: 18px;
    }

    /* IMAGEN DERECHA */
    .hero-image {
      width: 100%;
      height: 100%;
      min-height: 470px;
      overflow: hidden;

      /* QUITAMOS EL EFECTO TARJETA */
      border-radius: 18px;
    }

    .hero-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
    }

    /* INFORMACIÓN DEBAJO */
    .hero-sub {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      max-width: 760px;
      margin-top: 55px;
      margin-left: auto;
    }

    .hero-sub .col .lbl {
      font-family: "Space Mono", monospace;
      font-size: 0.7rem;
      text-transform: uppercase;
      letter-spacing: 0.14em;
      color: var(--steel);
      margin-bottom: 9px;
      display: block;
    }

    .hero-sub .col p {
      font-size: 0.98rem;
      color: var(--slate);
    }

    .hero-sub .col p b {
      color: var(--ink);
      font-weight: 600;
    }

    /* TARJETAS */
    .strip-wrap {
      margin-top: 52px;
      position: relative;
    }

    .strip {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 16px;
    }

    .ucard {
      position: relative;
      background: var(--bone);
      border: 1px solid var(--line);
      border-radius: var(--r-lg);
      padding: 24px;
      min-height: 230px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      cursor: pointer;
      transition:
        transform 0.45s var(--ease),
        box-shadow 0.45s var(--ease),
        background 0.3s,
        border-color 0.3s;
      will-change: transform;
    }

    .ucard:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 30px 60px -20px rgba(20, 20, 22, 0.28);
      z-index: 5;
      background: var(--paper);
      border-color: var(--fog);
    }

    .ucard .pill {
      align-self: flex-start;
      font-family: "Space Mono", monospace;
      font-size: 0.66rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--slate);
      border: 1px solid var(--line);
      padding: 5px 11px;
      border-radius: 20px;
      background: var(--paper);
    }

    .ucard .u-ico {
      width: 44px;
      height: 44px;
      border-radius: 12px;
      background: var(--paper);
      border: 1px solid var(--line);
      display: grid;
      place-items: center;
      margin: 16px 0;
    }

    .ucard .u-ico svg {
      width: 22px;
      height: 22px;
      stroke: var(--ink);
      fill: none;
      stroke-width: 1.6;
    }

    .ucard h3 {
      font-size: 1.16rem;
      font-weight: 700;
      letter-spacing: -0.02em;
      line-height: 1.12;
    }

    .ucard .more {
      margin-top: 12px;
      font-family: "Space Mono", monospace;
      font-size: 0.72rem;
      color: var(--red);
      opacity: 0;
      transform: translateX(-6px);
      transition:
        opacity 0.3s,
        transform 0.3s;
    }

    .ucard:hover .more {
      opacity: 1;
      transform: none;
    }

    .ucard.feat {
      background: var(--red);
      border-color: var(--red);
      color: #fff;
      justify-content: space-between;
    }

    .ucard.feat:hover {
      background: var(--red-deep);
      border-color: var(--red-deep);
    }

    .ucard.feat .pill {
      color: #fff;
      border-color: rgba(255, 255, 255, 0.4);
      background: rgba(255, 255, 255, 0.1);
    }

    .ucard.feat h3 {
      color: #fff;
      font-size: 1.3rem;
      font-weight: 800;
    }

    .ucard.feat .arrow {
      width: 48px;
      height: 48px;
      border-radius: 50%;
      background: #fff;
      display: grid;
      place-items: center;
      align-self: flex-end;
      transition: transform 0.4s var(--ease);
    }

    .ucard.feat:hover .arrow {
      transform: rotate(-45deg);
    }

    .ucard.feat .arrow svg {
      width: 22px;
      height: 22px;
      stroke: var(--red);
      fill: none;
      stroke-width: 2.2;
    }

    /* MARQUEE */
    .marq-sec {
      padding: 46px 0;
      border-top: 1px solid var(--line);
      border-bottom: 1px solid var(--line);
      background: var(--bone);
      margin-top: 64px;
      overflow: hidden;
    }

    .marq-lbl {
      text-align: center;
      font-family: "Space Mono", monospace;
      font-size: 0.7rem;
      text-transform: uppercase;
      letter-spacing: 0.16em;
      color: var(--steel);
      margin-bottom: 28px;
    }

    .marq {
      display: flex;
      gap: 64px;
      width: max-content;
      animation: scroll 26s linear infinite;
    }

    .marq:hover {
      animation-play-state: paused;
    }

    .marq span {
      font-size: 1.5rem;
      font-weight: 800;
      letter-spacing: -0.02em;
      color: var(--fog);
      white-space: nowrap;
      transition: color 0.3s;
    }

    .marq span:hover {
      color: var(--ink);
    }

    @keyframes scroll {
      to {
        transform: translateX(-50%);
      }
    }

    /* SECTION */
    .sec {
      padding: 110px 0;
    }

    .sec-head {
      max-width: 820px;
      margin-bottom: 60px;
    }

    .sec-head h2 {
      font-size: clamp(2.1rem, 5vw, 3.7rem);
      margin: 20px 0 0;
      letter-spacing: -0.04em;
    }

    .sec-head h2 .mute {
      color: var(--hmute);
    }

    .sec-head p {
      margin-top: 22px;
      font-size: 1.08rem;
      color: var(--slate);
      max-width: 60ch;
    }

    /* ABOUT */
    .about {
      background: var(--paper);
    }

    .about-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 70px;
      align-items: center;
    }

    .about-copy p {
      font-size: 1.08rem;
      color: var(--slate);
      margin-bottom: 20px;
    }

    .about-copy p b {
      color: var(--ink);
      font-weight: 600;
    }

    .about-copy .a-cta {
      display: inline-flex;
      align-items: center;
      gap: 9px;
      margin-top: 12px;
      background: var(--ink);
      color: #fff;
      font-weight: 600;
      font-size: 0.92rem;
      padding: 14px 22px;
      border-radius: 12px;
      transition:
        background 0.2s,
        transform 0.2s;
    }

    .about-copy .a-cta:hover {
      background: var(--red);
      transform: translateY(-2px);
    }

    .about-copy .a-cta svg {
      width: 16px;
      height: 16px;
      stroke: #fff;
      fill: none;
      stroke-width: 2;
    }

    .about-media {
      position: relative;
      height: 520px;
    }

    .ph {
      background: var(--mist);
      border: 1px solid var(--line);
      border-radius: var(--r-lg);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 10px;
      color: var(--steel);
      overflow: hidden;
      position: relative;
    }

    .ph .ph-ico {
      width: 40px;
      height: 40px;
      stroke: var(--fog);
      fill: none;
      stroke-width: 1.4;
    }

    .ph .ph-lbl {
      font-family: "Space Mono", monospace;
      font-size: 0.68rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }

    .about-media .ph-a {
      position: absolute;
      top: 0;
      left: 0;
      width: 66%;
      height: 74%;
      z-index: 2;
    }

    .about-media .ph-b {
      position: absolute;
      bottom: 0;
      right: 0;
      width: 58%;
      height: 60%;
      z-index: 1;
    }

    .about-media .stamp {
      position: absolute;
      bottom: 26px;
      left: 26px;
      z-index: 3;
      background: var(--red);
      color: #fff;
      padding: 14px 18px;
      border-radius: 14px;
      box-shadow: 0 20px 40px -14px rgba(225, 45, 34, 0.5);
    }

    .about-media .stamp b {
      display: block;
      font-size: 1.8rem;
      font-weight: 800;
      letter-spacing: -0.03em;
      line-height: 1;
    }

    .about-media .stamp small {
      font-family: "Space Mono", monospace;
      font-size: 0.66rem;
      letter-spacing: 0.06em;
    }

    /* COSS */
    .coss {
      background: var(--char);
      color: #fff;
      position: relative;
      overflow: hidden;
    }

    .coss .sec-head h2 {
      color: #fff;
    }

    .coss .sec-head h2 .mute {
      color: var(--hmute-d);
    }

    .coss .sec-head p {
      color: #a6a6aa;
    }

    .coss .idx {
      color: #78787c;
    }

    .ghost {
      position: absolute;
      top: 8%;
      right: -2%;
      font-size: 26vw;
      font-weight: 900;
      letter-spacing: -0.05em;
      color: rgba(255, 255, 255, 0.03);
      pointer-events: none;
      user-select: none;
      line-height: 1;
    }

    .coss-row {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
      position: relative;
    }

    .cblock {
      background: var(--char-2);
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: var(--r-lg);
      padding: 30px 26px;
      transition:
        transform 0.45s var(--ease),
        background 0.35s,
        border-color 0.35s;
      will-change: transform;
    }

    .cblock:hover {
      transform: translateY(-12px) scale(1.04);
      background: #212125;
      border-color: rgba(225, 45, 34, 0.5);
    }

    .cblock .c-no {
      font-family: "Space Mono", monospace;
      font-size: 0.72rem;
      color: var(--red);
      letter-spacing: 0.06em;
    }

    .cblock .c-let {
      font-size: 4.4rem;
      font-weight: 900;
      letter-spacing: -0.05em;
      line-height: 0.85;
      margin: 14px 0 20px;
      color: #fff;
      transition: color 0.35s;
    }

    .cblock:hover .c-let {
      color: var(--red);
    }

    .cblock h3 {
      font-size: 1.28rem;
      font-weight: 700;
      letter-spacing: -0.02em;
      color: #fff;
      margin-bottom: 10px;
    }

    .cblock p {
      font-size: 0.92rem;
      color: #a6a6aa;
    }

    .coss-foot {
      margin-top: 36px;
      font-size: 1rem;
      color: #a6a6aa;
      max-width: 64ch;
    }

    .coss-foot b {
      color: #fff;
      font-weight: 600;
    }

    /* UNIDADES */
    .units {
      background: var(--bone);
    }

    .units-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    .unit {
      background: var(--paper);
      border: 1px solid var(--line);
      border-radius: var(--r-lg);
      padding: 36px;
      transition:
        transform 0.4s var(--ease),
        box-shadow 0.4s var(--ease),
        border-color 0.3s;
      will-change: transform;
    }

    .unit:hover {
      transform: translateY(-8px);
      box-shadow: 0 30px 60px -24px rgba(20, 20, 22, 0.22);
      border-color: var(--fog);
    }

    .unit-top {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      margin-bottom: 22px;
    }

    .unit .u-no {
      font-family: "Space Mono", monospace;
      font-size: 0.8rem;
      color: var(--steel);
    }

    .unit .big-ico {
      width: 60px;
      height: 60px;
      border-radius: 15px;
      background: var(--bone);
      border: 1px solid var(--line);
      display: grid;
      place-items: center;
      transition:
        background 0.3s,
        border-color 0.3s;
    }

    .unit:hover .big-ico {
      background: var(--red);
      border-color: var(--red);
    }

    .unit .big-ico svg {
      width: 28px;
      height: 28px;
      stroke: var(--ink);
      fill: none;
      stroke-width: 1.5;
      transition: stroke 0.3s;
    }

    .unit:hover .big-ico svg {
      stroke: #fff;
    }

    .unit h3 {
      font-size: 1.5rem;
      font-weight: 800;
      letter-spacing: -0.03em;
      margin-bottom: 8px;
    }

    .unit>p {
      color: var(--slate);
      font-size: 0.98rem;
      margin-bottom: 22px;
    }

    .unit ul {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 14px;
    }

    .unit li {
      display: flex;
      gap: 12px;
      font-size: 0.94rem;
      color: var(--slate);
    }

    .unit li b {
      color: var(--ink);
      font-weight: 600;
    }

    .unit li .ck {
      width: 20px;
      height: 20px;
      flex-shrink: 0;
      margin-top: 2px;
      border-radius: 6px;
      background: var(--red);
      display: grid;
      place-items: center;
    }

    .unit li .ck svg {
      width: 12px;
      height: 12px;
      stroke: #fff;
      fill: none;
      stroke-width: 2.6;
    }

    .chips {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
      margin-top: 10px;
    }

    .chips span {
      font-family: "Space Mono", monospace;
      font-size: 0.7rem;
      font-weight: 700;
      color: var(--red);
      background: rgba(225, 45, 34, 0.08);
      padding: 5px 11px;
      border-radius: 20px;
    }

    /* STATS */
    .stats {
      background: var(--paper);
      border-top: 1px solid var(--line);
    }

    .stat-row {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0;
    }

    .stat {
      padding: 44px 30px;
      border-right: 1px solid var(--line);
      transition: background 0.3s;
    }

    .stat:last-child {
      border-right: none;
    }

    .stat:hover {
      background: var(--bone);
    }

    .stat b {
      font-size: clamp(2.6rem, 5vw, 4rem);
      font-weight: 900;
      letter-spacing: -0.05em;
      line-height: 0.9;
      display: block;
    }

    .stat b .r {
      color: var(--red);
    }

    .stat span {
      display: block;
      margin-top: 12px;
      font-size: 0.9rem;
      color: var(--slate);
    }

    /* RECURSOS */
    .res {
      background: var(--bone);
    }

    .res-grid {
      display: grid;
      grid-template-columns: 1.05fr 0.95fr;
      gap: 22px;
    }

    .posts {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    .post {
      display: flex;
      gap: 20px;
      align-items: center;
      background: var(--paper);
      border: 1px solid var(--line);
      border-radius: var(--r-md);
      padding: 20px;
      transition:
        transform 0.35s var(--ease),
        border-color 0.3s;
    }

    .post:hover {
      transform: translateX(8px);
      border-color: var(--red);
    }

    .post .p-thumb {
      width: 88px;
      height: 88px;
      flex-shrink: 0;
      border-radius: 12px;
    }

    .p-thumb {
      overflow: hidden;
    }

    .p-thumb img {
      width: 100%;
      height: 100%;
      display: block;
      object-fit: cover;
    }

    .ph-a,
    .ph-b {
      overflow: hidden;
    }

    .ph-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .post .p-body h4 {
      font-size: 1.1rem;
      font-weight: 700;
      letter-spacing: -0.02em;
      margin-bottom: 6px;
    }

    .post .p-body p {
      font-size: 0.86rem;
      color: var(--slate);
    }

    .post .p-body .p-src {
      font-family: "Space Mono", monospace;
      font-size: 0.66rem;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: var(--red);
      margin-bottom: 7px;
      display: block;
    }

    .post .p-go {
      margin-left: auto;
      font-family: "Space Mono", monospace;
      color: var(--steel);
      font-size: 1.1rem;
      transition:
        color 0.3s,
        transform 0.3s;
    }

    .post:hover .p-go {
      color: var(--red);
      transform: translateX(4px);
    }

    .magnet {
      background: var(--char);
      border-radius: var(--r-lg);
      padding: 42px;
      color: #fff;
      position: relative;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .magnet .m-badge {
      align-self: flex-start;
      font-family: "Space Mono", monospace;
      font-size: 0.68rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--red);
      border: 1px solid rgba(225, 45, 34, 0.5);
      padding: 6px 13px;
      border-radius: 20px;
      margin-bottom: 24px;
    }

    .magnet h3 {
      font-size: 1.85rem;
      font-weight: 800;
      letter-spacing: -0.03em;
      color: #fff;
      margin-bottom: 14px;
      line-height: 1.05;
    }

    .magnet p {
      color: #a6a6aa;
      font-size: 0.98rem;
      margin-bottom: 26px;
      max-width: 40ch;
    }

    .m-form {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }

    .m-form input {
      flex: 1;
      min-width: 190px;
      padding: 15px 17px;
      border-radius: 12px;
      border: 1px solid rgba(255, 255, 255, 0.16);
      background: rgba(255, 255, 255, 0.05);
      color: #fff;
      font-family: inherit;
      font-size: 0.95rem;
    }

    .m-form input::placeholder {
      color: #7a7a7e;
    }

    .m-form button {
      background: var(--red);
      color: #fff;
      border: none;
      padding: 15px 24px;
      border-radius: 12px;
      font-family: inherit;
      font-weight: 700;
      cursor: pointer;
      transition:
        background 0.2s,
        transform 0.2s;
    }

    .m-form button:hover {
      background: var(--red-deep);
      transform: translateY(-2px);
    }

    /* CASOS */
    .casos {
      background: var(--paper);
    }

    .caso-feature {
      display: grid;
      grid-template-columns: 1.25fr 0.75fr;
      gap: 22px;
      margin-bottom: 22px;
    }

    .video-ph {
      position: relative;
      min-height: 340px;
      border-radius: var(--r-lg);
    }

    .video-ph .play {
      position: absolute;
      inset: 0;
      margin: auto;
      width: 76px;
      height: 76px;
      border-radius: 50%;
      background: var(--red);
      display: grid;
      place-items: center;
      box-shadow: 0 20px 50px -12px rgba(225, 45, 34, 0.6);
      transition: transform 0.3s;
    }

    .video-ph:hover .play {
      transform: scale(1.1);
    }

    .video-ph .play svg {
      width: 26px;
      height: 26px;
      fill: #fff;
      margin-left: 3px;
    }

    .video-ph .v-tag {
      position: absolute;
      bottom: 22px;
      left: 22px;
      background: rgba(15, 15, 17, 0.7);
      backdrop-filter: blur(6px);
      color: #fff;
      font-size: 0.82rem;
      padding: 9px 14px;
      border-radius: 10px;
    }

    .quote-card {
      background: var(--char);
      border-radius: var(--r-lg);
      padding: 36px;
      color: #fff;
      display: flex;
      flex-direction: column;
    }

    .quote-card .wave {
      display: flex;
      align-items: flex-end;
      gap: 3px;
      height: 34px;
      margin-bottom: 22px;
    }

    .quote-card .wave i {
      width: 3px;
      background: var(--red);
      border-radius: 2px;
      opacity: 0.85;
    }

    .quote-card q {
      font-size: 1.18rem;
      font-weight: 600;
      letter-spacing: -0.02em;
      line-height: 1.4;
      flex: 1;
    }

    .quote-card .who {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-top: 24px;
    }

    .quote-card .who .av {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: var(--char-2);
      border: 1px solid rgba(255, 255, 255, 0.14);
      display: grid;
      place-items: center;
      flex-shrink: 0;
    }

    .quote-card .who .av svg {
      width: 20px;
      height: 20px;
      stroke: var(--steel);
      fill: none;
      stroke-width: 1.5;
    }

    .quote-card .who b {
      display: block;
      font-size: 0.92rem;
    }

    .quote-card .who span {
      font-size: 0.78rem;
      color: #8a8a8e;
    }

    .caso-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
      margin-bottom: 56px;
    }

    .tcard {
      background: var(--bone);
      border: 1px solid var(--line);
      border-radius: var(--r-md);
      padding: 28px;
      transition:
        transform 0.35s var(--ease),
        border-color 0.3s;
    }

    .tcard:hover {
      transform: translateY(-6px);
      border-color: var(--fog);
    }

    .tcard .stars {
      color: var(--red);
      font-size: 0.9rem;
      letter-spacing: 2px;
      margin-bottom: 14px;
    }

    .tcard q {
      font-size: 1rem;
      color: var(--ink);
      line-height: 1.5;
      display: block;
      margin-bottom: 20px;
    }

    .tcard .who {
      display: flex;
      align-items: center;
      gap: 11px;
    }

    .tcard .who .av {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: var(--mist);
      flex-shrink: 0;
    }

    .tcard .who b {
      display: block;
      font-size: 0.88rem;
    }

    .tcard .who span {
      font-size: 0.76rem;
      color: var(--slate);
    }

    .sectores {
      border-top: 1px solid var(--line);
      padding-top: 52px;
    }

    .sectores h4 {
      font-size: 1.1rem;
      font-weight: 700;
      letter-spacing: -0.02em;
      margin-bottom: 26px;
    }

    .sec-strip {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 14px;
    }

    .scard {
      background: var(--bone);
      border: 1px solid var(--line);
      border-radius: var(--r-md);
      padding: 22px 18px;
      text-align: center;
      transition:
        transform 0.35s var(--ease),
        background 0.3s,
        border-color 0.3s;
    }

    .scard:hover {
      transform: translateY(-8px) scale(1.04);
      background: var(--paper);
      border-color: var(--red);
    }

    .scard .s-ico {
      width: 38px;
      height: 38px;
      margin: 0 auto 12px;
      stroke: var(--ink);
      fill: none;
      stroke-width: 1.5;
    }

    .scard span {
      font-size: 0.82rem;
      font-weight: 600;
      color: var(--slate);
      line-height: 1.25;
      display: block;
    }

    /* CONTACTO */
    .contact {
      background: var(--char);
      color: #fff;
    }

    .contact .idx {
      color: #78787c;
    }

    .contact-grid {
      display: grid;
      grid-template-columns: 0.85fr 1.15fr;
      gap: 60px;
      align-items: start;
    }

    .contact h2 {
      font-size: clamp(2.1rem, 5vw, 3.5rem);
      color: #fff;
      letter-spacing: -0.04em;
      margin: 20px 0 22px;
    }

    .contact h2 .mute {
      color: var(--hmute-d);
    }

    .contact-lead {
      color: #a6a6aa;
      font-size: 1.05rem;
      margin-bottom: 38px;
      max-width: 44ch;
    }

    .cinfo {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    .ci {
      display: flex;
      gap: 15px;
      align-items: center;
      padding: 18px;
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: var(--r-md);
      transition:
        border-color 0.3s,
        background 0.3s;
    }

    .ci:hover {
      border-color: var(--red);
      background: var(--char-2);
    }

    .ci .ci-ico {
      width: 44px;
      height: 44px;
      border-radius: 12px;
      background: var(--char-2);
      display: grid;
      place-items: center;
      flex-shrink: 0;
    }

    .ci .ci-ico svg {
      width: 20px;
      height: 20px;
      stroke: var(--red);
      fill: none;
      stroke-width: 1.7;
    }

    .ci b {
      display: block;
      font-size: 0.96rem;
    }

    .ci span {
      font-size: 0.86rem;
      color: #9a9a9e;
    }

    .form {
      background: var(--paper);
      border-radius: var(--r-lg);
      padding: 38px;
    }

    .form .frow {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }

    .fg {
      margin-bottom: 18px;
    }

    .fg label {
      display: block;
      font-family: "Space Mono", monospace;
      font-size: 0.72rem;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      color: var(--slate);
      margin-bottom: 8px;
    }

    .fg input,
    .fg select,
    .fg textarea {
      width: 100%;
      padding: 14px 15px;
      border: 1px solid var(--line);
      border-radius: 12px;
      font-family: inherit;
      font-size: 0.95rem;
      color: var(--ink);
      background: var(--bone);
      transition:
        border-color 0.2s,
        box-shadow 0.2s,
        background 0.2s;
    }

    .fg input:focus,
    .fg select:focus,
    .fg textarea:focus {
      outline: none;
      border-color: var(--red);
      background: var(--paper);
      box-shadow: 0 0 0 3px rgba(225, 45, 34, 0.1);
    }

    .fg textarea {
      resize: vertical;
      min-height: 100px;
    }

    .form .send {
      width: 100%;
      background: var(--red);
      color: #fff;
      border: none;
      padding: 17px;
      border-radius: 13px;
      font-family: inherit;
      font-weight: 700;
      font-size: 1rem;
      cursor: pointer;
      transition:
        background 0.2s,
        transform 0.2s;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }

    .form .send:hover {
      background: var(--red-deep);
      transform: translateY(-1px);
    }

    .form .send svg {
      width: 17px;
      height: 17px;
      stroke: #fff;
      fill: none;
      stroke-width: 2;
    }

    .form .fine {
      text-align: center;
      font-size: 0.78rem;
      color: var(--steel);
      margin-top: 14px;
    }

    .form .fine a {
      color: var(--red);
      font-weight: 600;
      text-decoration: underline;
      text-underline-offset: 3px;
    }

    .form .fine a:hover {
      color: var(--red-deep);
    }

    /* FOOTER */
    footer {
      background: var(--char-2);
      color: #8a8a8e;
      padding: 70px 0 32px;
    }

    .foot-grid {
      display: grid;
      grid-template-columns: 1.5fr 1fr 1fr;
      gap: 44px;
      padding-bottom: 48px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .logo-light {
      height: 34px;
      margin-bottom: 20px;
    }

    .foot-brand p {
      font-size: 0.94rem;
      max-width: 38ch;
      color: #8a8a8e;
    }

    .foot-col h5 {
      font-family: "Space Mono", monospace;
      font-size: 0.72rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: #fff;
      margin-bottom: 18px;
    }

    .foot-col a {
      display: block;
      font-size: 0.92rem;
      color: #8a8a8e;
      margin-bottom: 12px;
      transition: color 0.2s;
    }

    .foot-col a:hover {
      color: var(--red);
    }

    .socials {
      display: flex;
      gap: 10px;
      margin-top: 8px;
    }

    .socials a {
      width: 42px;
      height: 42px;
      border-radius: 11px;
      background: rgba(255, 255, 255, 0.06);
      display: grid;
      place-items: center;
      transition:
        background 0.2s,
        transform 0.2s;
    }

    .socials a:hover {
      background: var(--red);
      transform: translateY(-3px);
    }

    .socials svg {
      width: 19px;
      height: 19px;
      fill: #fff;
    }

    .foot-bottom {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-top: 26px;
      font-size: 0.82rem;
      flex-wrap: wrap;
      gap: 12px;
      font-family: "Space Mono", monospace;
    }

    .legal-links {
      display: flex;
      align-items: center;
      gap: 7px;
    }

    .legal-links a {
      color: #8a8a8e;
      transition: color 0.2s;
    }

    .legal-links a:hover {
      color: var(--red);
    }

    /* WHATSAPP */
    .wa {
      position: fixed;
      right: 26px;
      bottom: 26px;
      z-index: 200;
      display: flex;
      align-items: center;
      background: var(--char);
      border: 1px solid rgba(255, 255, 255, 0.12);
      border-radius: 40px;
      height: 60px;
      box-shadow: 0 16px 40px -10px rgba(15, 15, 17, 0.5);
      overflow: hidden;
    }

    .wa .wa-ic {
      width: 60px;
      height: 60px;
      display: grid;
      place-items: center;
      flex-shrink: 0;
      position: relative;
    }

    .wa .wa-ic::after {
      content: "";
      position: absolute;
      top: 14px;
      right: 14px;
      width: 9px;
      height: 9px;
      border-radius: 50%;
      background: var(--red);
      box-shadow: 0 0 0 0 rgba(225, 45, 34, 0.6);
      animation: ping 2s infinite;
    }

    @keyframes ping {
      70% {
        box-shadow: 0 0 0 10px rgba(225, 45, 34, 0);
      }

      100% {
        box-shadow: 0 0 0 0 rgba(225, 45, 34, 0);
      }
    }

    .wa svg {
      width: 28px;
      height: 28px;
      fill: #fff;
    }

    .wa .wa-tx {
      white-space: nowrap;
      color: #fff;
      font-weight: 600;
      font-size: 0.9rem;
      max-width: 0;
      opacity: 0;
      overflow: hidden;
      transition:
        max-width 0.4s var(--ease),
        opacity 0.3s,
        padding 0.4s;
    }

    .wa:hover .wa-tx {
      max-width: 230px;
      opacity: 1;
      padding-right: 24px;
    }

    /* MOTION */
    .reveal {
      opacity: 0;
      transform: translateY(30px);
      transition:
        opacity 0.8s var(--ease),
        transform 0.8s var(--ease);
    }

    .reveal.in {
      opacity: 1;
      transform: none;
    }



    @media (max-width: 1080px) {
      .strip {
        grid-template-columns: repeat(3, 1fr);
      }

      .ucard:hover {
        transform: translateY(-6px) scale(1.03);
      }

      .coss-row {
        grid-template-columns: 1fr 1fr;
      }

      .sec-strip {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    @media (max-width: 860px) {


      .about-grid,
      .res-grid,
      .contact-grid,
      .caso-feature {
        grid-template-columns: 1fr;
        gap: 40px;
      }

      .about-media {
        height: auto;
      }

      .about-media .ph-a {
        position: relative;
        width: 100%;
        height: 300px;
      }

      .about-media .ph-b {
        display: none;
      }

      .about-media .stamp {
        bottom: -18px;
        left: 20px;
      }

      .stat-row {
        grid-template-columns: 1fr 1fr;
      }

      .stat {
        border-bottom: 1px solid var(--line);
      }

      .stat:nth-child(2) {
        border-right: none;
      }

      .caso-grid {
        grid-template-columns: 1fr;
      }



      .hero-content {
        grid-template-columns: 1fr;
        gap: 32px;
      }

      .hero-image {
        height: 400px;
      }
    }

    @media (max-width: 640px) {
      body {
        font-size: 16px;
      }

      .wrap {
        padding: 0 20px;
      }



      .sec {
        padding: 74px 0;
      }

      .hero {
        padding: 44px 0 30px;
      }

      .hero-sub {
        grid-template-columns: 1fr;
        gap: 26px;
      }

      .hero-image {
        height: 300px;
      }

      .strip {
        grid-template-columns: 1fr;
        gap: 14px;
      }

      .ucard {
        min-height: auto;
        padding: 22px;
      }

      .ucard:hover {
        transform: none;
      }

      .coss-row {
        grid-template-columns: 1fr;
      }

      .sec-strip {
        grid-template-columns: 1fr 1fr;
      }

      .units-grid {
        grid-template-columns: 1fr;
      }

      .foot-grid {
        grid-template-columns: 1fr;
        gap: 32px;
      }

      .form {
        padding: 26px;
      }

      .form .frow {
        grid-template-columns: 1fr;
      }

      .wa .wa-tx {
        display: none;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      * {
        animation: none !important;
        transition: none !important;
      }

      .reveal {
        opacity: 1;
        transform: none;
      }

      .marq {
        animation: none;
      }
    }
  </style>
</head>

<body>
  <!-- NAV -->
  <?php include __DIR__ . '/navbar.php'; ?>

  <!-- HERO -->
  <section class="hero" id="home">
    <div class="wrap">
      <span class="idx reveal">
        <b>(01)</b> Consultoría estratégica · Centro de México
      </span>

      <!-- TEXTO + IMAGEN -->
      <div class="hero-content">
        <!-- TEXTO IZQUIERDA -->
        <div class="hero-text">
          <h1 class="reveal">
            Convierte tu esfuerzo diario en un sistema que trabaje por ti.
            <span class="mute"> Consultoría, Normatividad y Estrategia </span>
          </h1>
        </div>

        <!-- IMAGEN DERECHA -->
        <div class="hero-image reveal">
          <img
            src="./images/consultoria-hero.webp"
            alt="Consultoría, Normatividad y Estrategia" />
        </div>
      </div>

      <!-- INFORMACIÓN DEBAJO -->
      <div class="hero-sub reveal">
        <div class="col">
          <span class="lbl">Qué hacemos</span>
          <p>
            Transformamos su <b>operatividad</b> y <b>cumplimiento</b> en
            resultados <b>tangibles</b> y <b>medibles</b>.
          </p>
        </div>

        <div class="col">
          <span class="lbl">Respaldo</span>
          <p>
            Experiencia directiva y visión estratégica comprobada a lo largo
            de <b>20 años</b> junto a <b>PyMEs</b> y empresas familiares.
          </p>
        </div>
      </div>

      <!-- TARJETAS -->
      <div class="strip-wrap">
        <div class="strip" data-parx="30">
          <div class="ucard reveal">
            <span class="pill">Rentabilidad</span>
            <div class="u-ico">
              <svg viewBox="0 0 24 24">
                <path d="M3 3v18h18" />
                <path d="M7 14l4-4 3 3 5-6" />
              </svg>
            </div>
            <div>
              <h3>Estrategia y Finanzas Corporativas</h3>
              <span class="more">Ver más →</span>
            </div>
          </div>

          <div class="ucard reveal">
            <span class="pill">Blindaje</span>
            <div class="u-ico">
              <svg viewBox="0 0 24 24">
                <path d="M12 3l7 3v6c0 4-3 7-7 9-4-2-7-5-7-9V6z" />
                <path d="M9 12l2 2 4-4" />
              </svg>
            </div>
            <div>
              <h3>Cumplimiento Normativo STPS</h3>
              <span class="more">Ver más →</span>
            </div>
          </div>

          <div class="ucard reveal">
            <span class="pill">Liderazgo</span>
            <div class="u-ico">
              <svg viewBox="0 0 24 24">
                <circle cx="12" cy="8" r="3.2" />
                <path d="M6 21v-2a6 6 0 0112 0v2" />
              </svg>
            </div>
            <div>
              <h3>Capacitación y Liderazgo Ejecutivo</h3>
              <span class="more">Ver más →</span>
            </div>
          </div>

          <div class="ucard reveal">
            <span class="pill">A medida</span>
            <div class="u-ico">
              <svg viewBox="0 0 24 24">
                <path d="M4 21V9l8-6 8 6v12" />
                <path d="M9 21v-6h6v6" />
              </svg>
            </div>
            <div>
              <h3>Especialización por Industria</h3>
              <span class="more">Ver más →</span>
            </div>
          </div>

          <a class="ucard feat reveal" href="#contacto">
            <span class="pill">Diagnóstico · gratis</span>
            <h3>Solicita tu diagnóstico básico</h3>
            <div class="arrow">
              <svg viewBox="0 0 24 24">
                <path d="M5 12h14M13 6l6 6-6 6" />
              </svg>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- MARQUEE -->
  <section class="marq-sec">
    <p class="marq-lbl">Confían en nuestra experiencia y metodología</p>
    <div class="marq">
      <span>CCEH</span><span>EXATEC</span><span>LA SALLE</span><span>CFE</span><span>CONAFOR</span><span>CAPUFE</span> <span>CCEH</span><span>EXATEC</span><span>LA SALLE</span><span>CFE</span><span>CONAFOR</span><span>CAPUFE</span>
    </div>
  </section>

  <!-- ABOUT -->
  <section class="sec about" id="nosotros">
    <div class="wrap about-grid">
      <div class="about-copy">
        <span class="idx reveal"><b>(02)</b> Sobre CNE</span>
        <div class="sec-head reveal" style="margin-bottom: 34px">
          <h2>
            Convertimos la teoría
            <span class="mute">en resultados medibles.</span>
          </h2>
        </div>
        <p class="reveal">
          Con más de <b>30 años</b> de trayectoria en el sector empresarial,
          convertimos retos operativos y financieros en ventajas competitivas.
        </p>
        <p class="reveal">
          Estandarizamos operaciones, aseguramos el
          <b>cumplimiento legal y STPS</b>, y potenciamos la rentabilidad de
          su negocio familiar o PyME.
        </p>
        <p class="reveal">
          El resultado: transición efectiva de la urgencia operativa
          <b>al liderazgo estratégico</b>, logrando una empresa rentable,
          ordenada y blindada.
        </p>
        <a href="#coss" class="a-cta reveal">Conoce la metodología COSS
          <svg viewBox="0 0 24 24">
            <path d="M5 12h14M13 6l6 6-6 6" />
          </svg></a>
      </div>
      <div class="about-media reveal">
        <div class="ph ph-a" data-par="-24">
          <img
            src="./images/cesar-cossioCNE.webp"
            alt="Equipo directivo"
            class="ph-img" />
        </div>

        <div class="ph ph-b" data-par="26">
          <img
            src="./images/trabajo-consultoria.webp"
            alt="Sesión de trabajo"
            class="ph-img" />
        </div>
        <div class="stamp"><b>+20</b><small>AÑOS DE EXPERIENCIA</small></div>
      </div>
    </div>
  </section>

  <!-- COSS -->
  <section class="sec coss" id="coss">
    <span class="ghost" data-par="40">COSS</span>
    <div class="wrap">
      <div class="sec-head">
        <span class="idx reveal"><b>(03)</b> Metodología propia</span>
        <h2 class="reveal">
          Cuatro etapas para pasar de un negocio dueño-dependiente
          <span class="mute">a una empresa blindada.</span>
        </h2>
        <p class="reveal">
          COSS es nuestro sistema de intervención empresarial. Cuatro etapas
          críticas y secuenciales que combinan ingeniería de procesos,
          análisis financiero, cumplimiento legal y mentoría práctica.
        </p>
      </div>
      <div class="coss-row">
        <div class="cblock reveal">
          <span class="c-no">ETAPA 01</span>
          <span class="c-let">C</span>
          <h3>Claridad Estratégica</h3>
          <p>
            Diagnóstico organizacional y definición de rumbo: dónde está la
            empresa, a dónde va y qué la detiene.
          </p>
        </div>
        <div class="cblock reveal">
          <span class="c-no">ETAPA 02</span>
          <span class="c-let">O</span>
          <h3>Orden Operativo</h3>
          <p>
            Ingeniería y mapeo de procesos, manuales de operación y estructura
            que sostiene el crecimiento.
          </p>
        </div>
        <div class="cblock reveal">
          <span class="c-no">ETAPA 03</span>
          <span class="c-let">S</span>
          <h3>Sinergia Comercial</h3>
          <p>
            Estrategia de precios y modelo de negocio que alinea la operación
            con la rentabilidad real.
          </p>
        </div>
        <div class="cblock reveal">
          <span class="c-no">ETAPA 04</span>
          <span class="c-let">S</span>
          <h3>Sostenibilidad y Escalabilidad</h3>
          <p>
            Análisis financiero, cumplimiento legal y mentoría práctica para
            escalar sin perder el control.
          </p>
        </div>
      </div>
      <p class="coss-foot reveal">
        Del negocio <b>"dueño-dependiente"</b> a la empresa
        <b>profesional, rentable y blindada</b>.
      </p>
    </div>
  </section>

  <!-- UNIDADES -->
  <section class="sec units" id="unidades">
    <div class="wrap">
      <div class="sec-head">
        <span class="idx reveal"><b>(04)</b> Unidades de negocio</span>
        <h2 class="reveal">
          Cuatro frentes, <span class="mute">una misma disciplina.</span>
        </h2>
        <p class="reveal">
          Servicios que combinan la ingeniería financiera con el factor humano
          y el blindaje normativo.
        </p>
      </div>
      <div class="units-grid">
        <div class="unit reveal">
          <div class="unit-top">
            <span class="u-no">A / 01</span>
            <div class="big-ico">
              <svg viewBox="0 0 24 24">
                <path d="M3 3v18h18" />
                <path d="M7 14l4-4 3 3 5-6" />
              </svg>
            </div>
          </div>
          <h3>Estrategia y Finanzas</h3>
          <p>Decisiones de inversión con certidumbre técnica y financiera.</p>
          <ul>
            <li>
              <span class="ck"><svg viewBox="0 0 24 24">
                  <path d="M5 12l5 5L20 6" />
                </svg></span><span><b>Ingeniería Financiera y Proyección de Capital.</b>
                Modelación, viabilidad de inversión para expansiones
                regionales, nuevas sucursales y escalamiento de negocio.</span>
            </li>
            <li>
              <span class="ck"><svg viewBox="0 0 24 24">
                  <path d="M5 12l5 5L20 6" />
                </svg></span><span><b>Reingeniería y Arquitectura de Procesos.</b> Diagnóstico
                integral, manuales de operación y protocolos de
                institucionalización para PyMEs y empresas familiares.</span>
            </li>
          </ul>
        </div>
        <div class="unit reveal">
          <div class="unit-top">
            <span class="u-no">B / 02</span>
            <div class="big-ico">
              <svg viewBox="0 0 24 24">
                <path d="M12 3l7 3v6c0 4-3 7-7 9-4-2-7-5-7-9V6z" />
                <path d="M9 12l2 2 4-4" />
              </svg>
            </div>
          </div>
          <h3>Blindaje Normativo y Cultura Laboral</h3>
          <p>
            Cumplimiento legal ante la STPS y entornos organizacionales
            seguros.
          </p>
          <ul>
            <li>
              <span class="ck"><svg viewBox="0 0 24 24">
                  <path d="M5 12l5 5L20 6" />
                </svg></span><span><b>Auditoría e Implementación de NOMs.</b> Prevención de
                sanciones y control de riesgos laborales con cobertura
                integral en normatividad vigente:
                <span class="chips"><span>NOM-035</span><span>NOM-019</span><span>NOM-030</span></span></span>
            </li>
            <li>
              <span class="ck"><svg viewBox="0 0 24 24">
                  <path d="M5 12l5 5L20 6" />
                </svg></span><span><b>Programas de Clima y Retención de Talento.</b>Estrategias
                formativas y bienestar corporativo diseñadas para reducir
                rotación e incrementar la productividad.</span>
            </li>
          </ul>
        </div>
        <div class="unit reveal">
          <div class="unit-top">
            <span class="u-no">C / 03</span>
            <div class="big-ico">
              <svg viewBox="0 0 24 24">
                <circle cx="12" cy="8" r="3.2" />
                <path d="M6 21v-2a6 6 0 0112 0v2" />
              </svg>
            </div>
          </div>
          <h3>Liderazgo y Desarrollo Ejecutivo</h3>
          <p>
            Formación directiva orientada a la toma de decisiones y alto
            rendimiento.
          </p>
          <ul>
            <li>
              <span class="ck"><svg viewBox="0 0 24 24">
                  <path d="M5 12l5 5L20 6" />
                </svg></span><span><b>Talleres Directivos y Coaching Gerencial.</b> Alineación
                estratégica para mandos medios y líderes de empresa,
                priorizando ejecución efectiva y gestión del cambio.
              </span>
            </li>
            <li>
              <span class="ck"><svg viewBox="0 0 24 24">
                  <path d="M5 12l5 5L20 6" />
                </svg></span><span><b>Workshops Corporativos de Alto Impacto.</b> Capacitación
                práctica, estructurada y enfocada en resolver cuellos de
                botella operativos en equipo.
              </span>
            </li>
          </ul>
        </div>
        <div class="unit reveal">
          <div class="unit-top">
            <span class="u-no">D / 04</span>
            <div class="big-ico">
              <svg viewBox="0 0 24 24">
                <path d="M4 21V9l8-6 8 6v12" />
                <path d="M9 21v-6h6v6" />
              </svg>
            </div>
          </div>
          <h3>Consultoría Sectorial a la Medida</h3>
          <p>Intervención estratégica aplicada a dinámicas de nicho.</p>
          <ul>
            <li>
              <span class="ck"><svg viewBox="0 0 24 24">
                  <path d="M5 12l5 5L20 6" />
                </svg></span><span><b>Especialización por Industria.</b> Soluciones adaptadas a
                estaciones de servicio, lavanderías industriales, sector
                hotelero, turismo regional y agroindustria.</span>
            </li>
            <li>
              <span class="ck"><svg viewBox="0 0 24 24">
                  <path d="M5 12l5 5L20 6" />
                </svg></span><span><b>Acompañamiento en Expansión Regional.</b> Asesoría
                integral para la apertura, control y consolidación de
                operaciones en el centro del país.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- STATS -->
  <section class="stats">
    <div class="wrap">
      <div class="stat-row">
        <div class="stat reveal">
          <b>+20</b><span>Años de experiencia empresarial y consultiva</span>
        </div>
        <div class="stat reveal">
          <b>COSS</b><span>Metodología propia en 4 etapas</span>
        </div>
        <div class="stat reveal">
          <b>100<span class="r">%</span></b><span>Enfoque en cumplimiento STPS y NOM</span>
        </div>
        <div class="stat reveal">
          <b>PyMEs</b><span>Y empresas familiares del centro de México</span>
        </div>
      </div>
    </div>
  </section>

  <!-- RECURSOS -->
  <section class="sec res" id="recursos">
    <div class="wrap">
      <div class="sec-head">
        <span class="idx reveal"><b>(05)</b> Recursos / Blog</span>
        <h2 class="reveal">
          Contenido que resuelve <span class="mute">dudas reales.</span>
        </h2>
        <p class="reveal">
          Artículos publicados en LinkedIn y recursos descargables para
          diagnosticar tu empresa antes de la primera reunión.
        </p>
      </div>
      <div class="res-grid">
        <div class="posts">
          <a class="post reveal" href="#" target="_blank" rel="noopener">
            <div class="ph p-thumb">
              <img src="./images/nom-035.webp" alt="NOM-035" />
            </div>
            <div class="p-body">
              <span class="p-src">LinkedIn</span>
              <h4>¿Tu empresa cumple con la NOM-035?</h4>
              <p>La checklist que la STPS revisa primero.</p>
            </div>
            <span class="p-go">→</span>
          </a>

          <a class="post reveal" href="#" target="_blank" rel="noopener">
            <div class="ph p-thumb">
              <img
                src="./images/autoempleo.webp"
                alt="Liderazgo estratégico" />
            </div>
            <div class="p-body">
              <span class="p-src">LinkedIn</span>
              <h4>Del autoempleo al liderazgo estratégico</h4>
              <p>Deja de ser el cuello de botella de tu empresa.</p>
            </div>
            <span class="p-go">→</span>
          </a>

          <a class="post reveal" href="#" target="_blank" rel="noopener">
            <div class="ph p-thumb">
              <img
                src="./images/criterio-financiero.webp"
                alt="Evaluación financiera" />
            </div>
            <div class="p-body">
              <span class="p-src">LinkedIn</span>
              <h4>VPN e IRR sin miedo</h4>
              <p>Evalúa una nueva sucursal con criterio financiero.</p>
            </div>
            <span class="p-go">→</span>
          </a>
        </div>

        <div class="magnet reveal">
          <span class="m-badge">Descargable gratuito</span>
          <h3>Checklist: ¿Tu empresa cumple con la NOM-035?</h3>
          <p>
            Un diagnóstico organizacional práctico para saber, en 10 minutos,
            qué te falta antes de una inspección.
          </p>
          <div class="m-form">
            <input
              type="email"
              placeholder="Tu correo corporativo"
              aria-label="Correo" />
            <button type="button">Descargar checklist</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CASOS -->
  <section class="sec casos" id="casos">
    <div class="wrap">
      <div class="sec-head">
        <span class="idx reveal"><b>(06)</b> Casos de éxito</span>
        <h2 class="reveal">
          Empresas que ya <span class="mute">rompieron su techo.</span>
        </h2>
        <p class="reveal">
          Testimonios que validan la experiencia con CNE. Sustituye los
          espacios por foto o video real de clientes.
        </p>
      </div>
      <div class="caso-feature">
        <div class="ph video-ph reveal">
          <svg class="ph-ico" viewBox="0 0 24 24" style="opacity: 0.4">
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <circle cx="9" cy="9" r="2" />
            <path d="M21 15l-5-5L5 21" />
          </svg>
          <div class="play">
            <svg viewBox="0 0 24 24">
              <path d="M6 4l14 8-14 8z" />
            </svg>
          </div>
          <div class="v-tag">Video testimonial · reemplazar</div>
        </div>
        <div class="quote-card reveal">
          <div class="wave">
            <i style="height: 40%"></i><i style="height: 70%"></i><i style="height: 100%"></i><i style="height: 55%"></i><i style="height: 80%"></i><i style="height: 35%"></i><i style="height: 90%"></i><i style="height: 60%"></i><i style="height: 45%"></i><i style="height: 85%"></i><i style="height: 30%"></i><i style="height: 65%"></i>
          </div>
          <q>Pasamos de operar por costumbre a operar por procesos. La
            reingeniería nos dio el orden que necesitábamos para crecer sin
            caos.</q>
          <div class="who">
            <div class="av">
              <svg viewBox="0 0 24 24">
                <circle cx="12" cy="8" r="3.2" />
                <path d="M6 21v-2a6 6 0 0112 0v2" />
              </svg>
            </div>
            <div>
              <b>Nombre del cliente</b><span>Director General · Sector industrial</span>
            </div>
          </div>
        </div>
      </div>
      <div class="caso-grid">
        <div class="tcard reveal">
          <div class="stars">★★★★★</div>
          <q>El acompañamiento en NOM-035 nos quitó un riesgo enorme de
            encima. Hoy cumplimos y mejoró el clima laboral.</q>
          <div class="who">
            <div class="av">
              <svg viewBox="0 0 24 24">
                <circle cx="12" cy="8" r="3.2" />
                <path d="M6 21v-2a6 6 0 0112 0v2" />
              </svg>
            </div>
            <div>
              <b>Nombre del cliente</b><span>Gerente de RH · Hotelero</span>
            </div>
          </div>
        </div>
        <div class="tcard reveal">
          <div class="stars">★★★★★</div>
          <q>La evaluación financiera de nuestra nueva sucursal nos dio
            confianza para invertir con números claros.</q>
          <div class="who">
            <div class="av">
              <svg viewBox="0 0 24 24">
                <circle cx="12" cy="8" r="3.2" />
                <path d="M6 21v-2a6 6 0 0112 0v2" />
              </svg>
            </div>
            <div>
              <b>Nombre del cliente</b><span>Socia · Empresa familiar</span>
            </div>
          </div>
        </div>
        <div class="tcard reveal">
          <div class="stars">★★★★★</div>
          <q>Los talleres de liderazgo cambiaron la forma en que nuestros
            mandos medios toman decisiones.</q>
          <div class="who">
            <div class="av">
              <svg viewBox="0 0 24 24">
                <circle cx="12" cy="8" r="3.2" />
                <path d="M6 21v-2a6 6 0 0112 0v2" />
              </svg>
            </div>
            <div>
              <b>Nombre del cliente</b><span>Director de Operaciones</span>
            </div>
          </div>
        </div>
      </div>
      <div class="sectores">
        <h4 class="reveal">Sectores clave que atendemos</h4>

        <div class="sec-strip">
          <!-- ENERGÍA -->
          <div class="scard reveal">
            <svg class="s-ico" viewBox="0 0 24 24">
              <path d="M13 2L5 14h6l-1 8 9-13h-6z" />
            </svg>
            <span>Energía</span>
          </div>

          <!-- HOSPITALIDAD -->
          <div class="scard reveal">
            <svg class="s-ico" viewBox="0 0 24 24">
              <path d="M3 20v-9" />
              <path d="M21 20v-7a3 3 0 0 0-3-3H9" />
              <path d="M3 15h18" />
              <path d="M7 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
            </svg>
            <span>Hospitalidad</span>
          </div>

          <!-- TURISMO -->
          <div class="scard reveal">
            <svg class="s-ico" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="9" />
              <path d="M15 9l-2 5-5 2 2-5z" />
            </svg>
            <span>Turismo</span>
          </div>

          <!-- AGROINDUSTRIA -->
          <div class="scard reveal">
            <svg class="s-ico" viewBox="0 0 24 24">
              <path d="M12 21V10" />
              <path d="M12 14c-4 0-7-2-7-6 4 0 7 2 7 6z" />
              <path d="M12 10c0-4 3-6 7-6 0 4-3 6-7 6z" />
            </svg>
            <span>Agroindustria</span>
          </div>

          <!-- OPERACIONES Y MANTENIMIENTO -->
          <div class="scard reveal">
            <svg class="s-ico" viewBox="0 0 24 24">
              <path
                d="M14.7 6.3a4 4 0 0 0-5-5l2.1 2.1-3.4 3.4-2.1-2.1a4 4 0 0 0 5 5L18 16.4" />
              <path d="M16 14l5 5-2 2-5-5" />
            </svg>
            <span>Operaciones y Mantenimiento</span>
          </div>

          <!-- INDUSTRIAL -->
          <div class="scard reveal">
            <svg class="s-ico" viewBox="0 0 24 24">
              <path d="M3 21V10l6 3V9l6 4V8l6 3v10z" />
              <path d="M3 21h18" />
              <path d="M7 17h2" />
              <path d="M12 17h2" />
              <path d="M17 17h2" />
            </svg>
            <span>Industrial</span>
          </div>

          <!-- EMPRESAS FAMILIARES Y PYMES -->
          <div class="scard reveal">
            <svg class="s-ico" viewBox="0 0 24 24">
              <circle cx="9" cy="8" r="3" />
              <circle cx="17" cy="10" r="2.5" />
              <path d="M3 21v-2a6 6 0 0 1 12 0v2" />
              <path d="M15 16a5 5 0 0 1 6 5" />
            </svg>
            <span>Empresas Familiares y PyMEs</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACTO -->
  <section class="sec contact" id="contacto">
    <div class="wrap contact-grid">
      <div>
        <span class="idx reveal"><b>(07)</b> Contacto</span>
        <h2 class="reveal">
          Hablemos <span class="mute">de tu empresa.</span>
        </h2>
        <p class="contact-lead reveal">
          Cuéntanos qué te está deteniendo. Te respondemos con una ruta clara,
          no con un discurso de ventas.
        </p>
        <div class="cinfo">
          <div class="ci reveal">
            <div class="ci-ico">
              <svg viewBox="0 0 24 24">
                <path
                  d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3-8.6A2 2 0 014.1 2h3a2 2 0 012 1.7c.1.9.3 1.8.6 2.6a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.5-1.1a2 2 0 012.1-.5c.8.3 1.7.5 2.6.6a2 2 0 011.7 2z" />
              </svg>
            </div>
            <div>
              <b>WhatsApp Business</b><span>Respuesta directa con un consultor</span>
            </div>
          </div>
          <div class="ci reveal">
            <div class="ci-ico">
              <svg viewBox="0 0 24 24">
                <path d="M21 10c0 6-9 12-9 12s-9-6-9-12a9 9 0 0118 0z" />
                <circle cx="12" cy="10" r="3" />
              </svg>
            </div>
            <div>
              <b>Área de cobertura</b><span>Presencia estratégica en el centro del país</span>
            </div>
          </div>
          <div class="ci reveal">
            <div class="ci-ico">
              <svg viewBox="0 0 24 24">
                <rect x="3" y="5" width="18" height="14" rx="2" />
                <path d="M3 7l9 6 9-6" />
              </svg>
            </div>
            <div><b>Correo</b><span>cneconsultoria40@gmail.com</span></div>
          </div>
        </div>
      </div>
      <form
        action="assets/php/contact.php"
        method="post"
        id="contactForm"
        class="form">
        <div class="frow">
          <div class="fg">
            <label for="f-nom">Nombre</label>
            <input
              id="f-nom"
              name="nombre"
              type="text"
              placeholder="Tu nombre"
              maxlength="80"
              autocomplete="name"
              required />
          </div>

          <div class="fg">
            <label for="f-emp">Empresa</label>
            <input
              id="f-emp"
              name="empresa"
              type="text"
              placeholder="Nombre de tu empresa"
              maxlength="120"
              autocomplete="organization"
              required />
          </div>
        </div>

        <div class="frow">
          <div class="fg">
            <label for="f-cor">Correo</label>
            <input
              id="f-cor"
              name="correo"
              type="email"
              placeholder="correo@empresa.com"
              maxlength="150"
              autocomplete="email"
              required />
          </div>

          <div class="fg">
            <label for="f-tel">Teléfono</label>
            <input
              id="f-tel"
              name="telefono"
              type="tel"
              placeholder="10 dígitos"
              maxlength="20"
              autocomplete="tel"
              required />
          </div>
        </div>

        <div class="fg">
          <label for="f-mot">Motivo de la consulta</label>

          <select id="f-mot" name="motivo" required>
            <option value="">Selecciona una opción</option>

            <option value="estrategia">
              Consultoría estratégica y financiera
            </option>

            <option value="normatividad">
              Cumplimiento normativo (NOM / STPS)
            </option>

            <option value="capacitacion">Capacitación y facilitación</option>

            <option value="sector">
              Consultoría especializada por sector
            </option>

            <option value="diagnostico">Diagnóstico básico gratuito</option>
          </select>
        </div>

        <div class="fg">
          <label for="f-msg">Mensaje</label>

          <textarea
            id="f-msg"
            name="mensaje"
            placeholder="Cuéntanos brevemente tu situación"
            maxlength="2000"
            required></textarea>
        </div>

        <!-- Campo invisible anti-spam -->
        <div
          aria-hidden="true"
          style="
              position: absolute;
              left: -9999px;
              width: 1px;
              height: 1px;
              overflow: hidden;
            ">
          <label for="website">Sitio web</label>
          <input
            type="text"
            id="website"
            name="website"
            tabindex="-1"
            autocomplete="off" />
        </div>

        <button type="submit" class="send" id="submitContact">
          Enviar y agendar diagnóstico
          <svg viewBox="0 0 24 24">
            <path d="M5 12h14M13 6l6 6-6 6" />
          </svg>
        </button>

        <div id="contactResult" role="status" aria-live="polite"></div>

        <p class="fine">
          Al enviar aceptas ser contactado por el equipo de CNE Consultorías
          para dar seguimiento a tu solicitud. Consulta nuestro
          <a href="aviso-privacidad.php" target="_blank">
            Aviso de Privacidad </a>.
        </p>
      </form>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="wrap">
      <div class="foot-grid">
        <div class="foot-brand">
          <img
            class="logo-light"
            src="data:image/png;base64,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"
            alt="CNE Consultorías" />
          <p>
            Transformación empresarial con equilibrio entre rentabilidad
            financiera y enfoque humano. Metodología COSS.
          </p>
        </div>
        <div class="foot-col">
          <h5>Unidades</h5>
          <a href="#unidades">Estratégica y Financiera</a>
          <a href="#unidades">Cumplimiento y Bienestar</a>
          <a href="#unidades">Capacitación y Facilitación</a>
          <a href="#unidades">Consultoría Especializada</a>
        </div>
        <div class="foot-col">
          <h5>Navegación</h5>
          <a href="#coss">Metodología COSS</a>
          <a href="#recursos">Recursos / Blog</a>
          <a href="#casos">Casos de éxito</a>
          <a href="#contacto">Contacto</a>
          <div class="socials">
            <a href="#" aria-label="TikTok"><svg viewBox="0 0 24 24">
                <path
                  d="M16.5 3c.3 2.1 1.5 3.7 3.5 4.1v3c-1.4.1-2.7-.3-3.9-1v6.6c0 3.4-2.8 5.8-5.9 5.3-2.7-.4-4.7-2.9-4.5-5.7.2-2.7 2.6-4.8 5.3-4.6.3 0 .6 0 .9.1v3.1c-.3-.1-.6-.2-1-.2-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2V3z" />
              </svg></a>
            <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24">
                <path
                  d="M12 2c2.7 0 3 0 4.1.1 1 0 1.7.2 2.3.5.6.2 1.1.5 1.6 1 .5.5.8 1 1 1.6.3.6.4 1.3.5 2.3.1 1.1.1 1.4.1 4.1s0 3-.1 4.1c0 1-.2 1.7-.5 2.3-.2.6-.5 1.1-1 1.6-.5.5-1 .8-1.6 1-.6.3-1.3.4-2.3.5-1.1.1-1.4.1-4.1.1s-3 0-4.1-.1c-1 0-1.7-.2-2.3-.5-.6-.2-1.1-.5-1.6-1-.5-.5-.8-1-1-1.6-.3-.6-.4-1.3-.5-2.3C2.4 15 2.4 14.7 2.4 12s0-3 .1-4.1c0-1 .2-1.7.5-2.3.2-.6.5-1.1 1-1.6.5-.5 1-.8 1.6-1 .6-.3 1.3-.4 2.3-.5C9 2 9.3 2 12 2zm0 5a5 5 0 100 10 5 5 0 000-10zm0 8.2a3.2 3.2 0 110-6.4 3.2 3.2 0 010 6.4zM17.8 7a1.2 1.2 0 100-2.4 1.2 1.2 0 000 2.4z" />
              </svg></a>
            <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24">
                <path
                  d="M22 12a10 10 0 10-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.2c-1.2 0-1.6.8-1.6 1.6V12h2.7l-.4 2.9h-2.3v7A10 10 0 0022 12z" />
              </svg></a>
          </div>
        </div>
      </div>
      <div class="foot-bottom">
        <span>© 2026 CNE Consultorías · cnemx.com</span>

        <span class="legal-links">
          <a href="aviso-privacidad.php">Aviso de privacidad</a>
          <span> · </span>
          <a href="terminos.php">Términos y Condiciones</a>
        </span>
      </div>
    </div>
  </footer>

  <!-- WHATSAPP -->
  <a
    class="wa"
    href="https://wa.me/527711300791?text=Hola%2C%20quiero%20hablar%20con%20un%20consultor"
    target="_blank"
    rel="noopener"
    aria-label="WhatsApp">
    <span class="wa-ic"><svg viewBox="0 0 24 24">
        <path
          d="M17.5 14.4c-.3-.1-1.7-.8-2-.9-.3-.1-.5-.1-.7.1-.2.3-.7.9-.9 1.1-.2.2-.3.2-.6.1-.3-.1-1.2-.5-2.3-1.4-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6.1-.1.3-.3.4-.5.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5-.1-.1-.7-1.6-.9-2.2-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1.1 2.9 1.2 3.1c.1.2 2.1 3.3 5.2 4.6.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.7-.7 2-1.4.2-.7.2-1.2.2-1.4-.1-.1-.3-.2-.6-.3z" />
        <path
          d="M12 2a10 10 0 00-8.5 15.3L2 22l4.8-1.3A10 10 0 1012 2zm0 18.2c-1.5 0-2.9-.4-4.2-1.1l-.3-.2-2.9.8.8-2.8-.2-.3A8.2 8.2 0 1112 20.2z" />
      </svg></span>
    <span class="wa-tx">Habla con un consultor</span>
  </a>

  <script>
    const groups = new Map();
    document.querySelectorAll(".reveal").forEach((el) => {
      const p = el.parentElement;
      const arr = groups.get(p) || [];
      arr.push(el);
      groups.set(p, arr);
    });
    groups.forEach((arr) =>
      arr.forEach((el, i) => (el.style.transitionDelay = i * 80 + "ms")),
    );
    const io = new IntersectionObserver(
      (es) => {
        es.forEach((e) => {
          if (e.isIntersecting) {
            e.target.classList.add("in");
            io.unobserve(e.target);
          }
        });
      }, {
        threshold: 0.12,
        rootMargin: "0px 0px -40px 0px"
      },
    );
    document.querySelectorAll(".reveal").forEach((el) => io.observe(el));
    const pY = [...document.querySelectorAll("[data-par]")];
    const pX = [...document.querySelectorAll("[data-parx]")];
    let ticking = false;

    function frame() {
      const vh = innerHeight;
      pY.forEach((el) => {
        const r = el.getBoundingClientRect();
        const prog = (r.top + r.height / 2 - vh / 2) / vh;
        el.style.transform =
          "translateY(" + prog * parseFloat(el.dataset.par) + "px)";
      });
      pX.forEach((el) => {
        const r = el.getBoundingClientRect();
        const prog = (r.top + r.height / 2 - vh / 2) / vh;
        el.style.transform =
          "translateX(" + prog * -parseFloat(el.dataset.parx) + "px)";
      });
      ticking = false;
    }
    addEventListener(
      "scroll",
      () => {
        if (!ticking) {
          requestAnimationFrame(frame);
          ticking = true;
        }
      }, {
        passive: true
      },
    );
    frame();

    const contactForm = document.getElementById("contactForm");
    const contactResult = document.getElementById("contactResult");
    const submitContact = document.getElementById("submitContact");

    if (contactForm && contactResult && submitContact) {
      const originalButton = submitContact.innerHTML;

      contactForm.addEventListener("submit", async function(e) {
        e.preventDefault();

        // Validaciones normales del navegador
        if (!contactForm.checkValidity()) {
          contactForm.reportValidity();
          return;
        }

        // Desactivar el botón mientras se envía
        submitContact.disabled = true;
        submitContact.textContent = "Enviando...";

        // Mensaje mientras se procesa
        contactResult.innerHTML = `
      <div style="
        margin-top: 14px;
        padding: 14px 16px;
        border-radius: 12px;
        text-align: center;
        font-size: 0.9rem;
        background: #f6f5f3;
        color: #17171a;
      ">
        Enviando solicitud...
      </div>
    `;

        try {
          const formData = new FormData(contactForm);

          const response = await fetch(contactForm.action, {
            method: "POST",
            body: formData,
          });

          // contact.php devuelve HTML
          const data = await response.text();

          // Mostrar la respuesta que envíe PHP
          contactResult.innerHTML = data;

          // Limpiar formulario solamente si el envío fue correcto
          if (response.ok) {
            contactForm.reset();
          }
        } catch (error) {
          contactResult.innerHTML = `
        <div style="
          margin-top: 14px;
          padding: 18px;
          background: #7f1d1d;
          color: #ffffff;
          border-radius: 12px;
          text-align: center;
        ">
          <strong>No fue posible enviar el mensaje.</strong>
          <br>
          <span style="font-size: 14px;">
            Ocurrió un problema de conexión. Intenta nuevamente.
          </span>
        </div>
      `;
        } finally {
          // Volver a activar el botón
          submitContact.disabled = false;
          submitContact.innerHTML = originalButton;
        }
      });
    }
  </script>
</body>

</html>