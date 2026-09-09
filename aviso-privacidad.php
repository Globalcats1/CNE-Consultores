<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta
    name="description"
    content="Consulta el Aviso de Privacidad de CNE Consultorías y conoce cómo recabamos, utilizamos y protegemos tus datos personales." />

  <title>Aviso de Privacidad | CNE Consultorías</title>

  <!-- Tipografías utilizadas en la landing -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <link
    href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700;800&family=Space+Mono:wght@400;700&display=swap"
    rel="stylesheet" />

  <style>
    /* =========================================================
       VARIABLES GENERALES
    ========================================================= */

    :root {
      --red: #e12d22;
      --red-dark: #bd2118;

      --ink: #17171a;
      --slate: #55555c;
      --steel: #85858c;

      --paper: #ffffff;
      --bone: #f6f5f3;
      --line: #e3e1dd;

      --max: 1240px;

      --radius-sm: 12px;
      --radius-md: 18px;
      --radius-lg: 26px;

      --shadow: 0 18px 50px rgba(23, 23, 26, 0.06);
    }

    /* =========================================================
       RESET
    ========================================================= */

    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
      scroll-padding-top: 110px;
    }

    body {
      margin: 0;

      font-family: "Archivo", sans-serif;

      background: var(--paper);
      color: var(--ink);

      line-height: 1.6;

      -webkit-font-smoothing: antialiased;
    }



    a {
      color: inherit;
      text-decoration: none;
    }

    button,
    input,
    textarea,
    select {
      font: inherit;
    }

    img {
      max-width: 100%;
      display: block;
    }

    .wrap {
      width: min(calc(100% - 48px), var(--max));
      margin-inline: auto;
    }


    /* =========================================================
       HERO
    ========================================================= */

    .legal-hero {
      position: relative;

      overflow: hidden;

      padding: 94px 0 80px;

      background: var(--paper);

      border-bottom: 1px solid var(--line);
    }

    .legal-hero::after {
      content: "";

      position: absolute;

      width: 460px;
      height: 460px;

      right: -180px;
      top: -210px;

      border: 1px solid var(--line);
      border-radius: 50%;

      pointer-events: none;
    }

    .legal-hero::before {
      content: "";

      position: absolute;

      width: 15px;
      height: 15px;

      right: 245px;
      top: 120px;

      border-radius: 50%;

      background: var(--red);

      pointer-events: none;
    }

    .legal-hero-inner {
      position: relative;

      z-index: 1;

      max-width: 920px;
    }

    .eyebrow {
      display: inline-flex;
      align-items: center;

      gap: 12px;

      font-family: "Space Mono", monospace;

      font-size: 0.7rem;
      line-height: 1;

      text-transform: uppercase;
      letter-spacing: 0.11em;

      color: var(--steel);
    }

    .eyebrow::before {
      content: "";

      width: 33px;
      height: 2px;

      background: var(--red);
    }

    .eyebrow strong {
      color: var(--red);

      font-weight: 700;
    }

    .legal-hero h1 {
      max-width: 900px;

      margin: 28px 0 0;

      font-size: clamp(3rem, 6vw, 6.2rem);
      line-height: 0.94;

      letter-spacing: -0.065em;

      font-weight: 700;
    }

    .legal-hero h1 span {
      color: var(--red);
    }

    .legal-lead {
      max-width: 720px;

      margin: 32px 0 0;

      color: var(--slate);

      font-size: 1.08rem;
      line-height: 1.8;
    }

    .legal-meta {
      display: flex;
      align-items: center;
      flex-wrap: wrap;

      gap: 12px 22px;

      margin-top: 34px;
    }

    .legal-date {
      display: inline-flex;
      align-items: center;

      gap: 9px;

      padding: 10px 14px;

      border: 1px solid var(--line);
      border-radius: 999px;

      background: var(--bone);

      font-family: "Space Mono", monospace;

      font-size: 0.68rem;

      color: var(--slate);
    }

    .legal-date::before {
      content: "";

      width: 7px;
      height: 7px;

      background: var(--red);

      border-radius: 50%;
    }

    .back-home {
      font-size: 0.82rem;
      font-weight: 600;

      color: var(--ink);

      transition: color 0.2s ease;
    }

    .back-home:hover {
      color: var(--red);
    }

    /* =========================================================
       CONTENIDO LEGAL
    ========================================================= */

    .legal-section {
      padding: 90px 0 120px;

      background: var(--bone);
    }

    .legal-layout {
      display: grid;

      grid-template-columns: 245px minmax(0, 810px);

      justify-content: center;
      align-items: start;

      gap: 70px;
    }

    /* =========================================================
       ÍNDICE
    ========================================================= */

    .legal-index {
      position: sticky;

      top: 115px;
    }

    .legal-index-head {
      margin-bottom: 18px;

      font-family: "Space Mono", monospace;

      font-size: 0.67rem;

      text-transform: uppercase;
      letter-spacing: 0.11em;

      color: var(--steel);
    }

    .legal-index nav {
      border-top: 1px solid var(--line);
    }

    .legal-index a {
      display: flex;
      align-items: flex-start;

      gap: 10px;

      padding: 12px 0;

      border-bottom: 1px solid var(--line);

      color: var(--slate);

      font-size: 0.79rem;
      line-height: 1.35;

      transition:
        color 0.2s ease,
        padding-left 0.2s ease;
    }

    .legal-index a span {
      min-width: 20px;

      font-family: "Space Mono", monospace;

      font-size: 0.62rem;

      color: var(--red);
    }

    .legal-index a:hover {
      padding-left: 5px;

      color: var(--ink);
    }

    /* =========================================================
       DOCUMENTO
    ========================================================= */

    .legal-document {
      background: var(--paper);

      border: 1px solid var(--line);
      border-radius: var(--radius-lg);

      padding: 64px 68px;

      box-shadow: var(--shadow);
    }

    .legal-intro {
      padding-bottom: 38px;
      margin-bottom: 8px;

      border-bottom: 1px solid var(--line);
    }

    .legal-intro-label {
      font-family: "Space Mono", monospace;

      color: var(--red);

      font-size: 0.65rem;

      text-transform: uppercase;
      letter-spacing: 0.1em;
    }

    .legal-intro p {
      margin: 14px 0 0;

      color: var(--slate);

      font-size: 0.95rem;
      line-height: 1.8;
    }

    /* =========================================================
       BLOQUES
    ========================================================= */

    .legal-block {
      padding: 42px 0;

      border-bottom: 1px solid var(--line);
    }

    .legal-block:last-child {
      padding-bottom: 0;

      border-bottom: none;
    }

    .section-number {
      display: block;

      margin-bottom: 12px;

      font-family: "Space Mono", monospace;

      font-size: 0.67rem;

      color: var(--red);
    }

    .legal-block h2 {
      max-width: 640px;

      margin: 0 0 20px;

      font-size: clamp(1.4rem, 2vw, 1.75rem);
      line-height: 1.15;

      letter-spacing: -0.03em;
    }

    .legal-block h3 {
      margin: 30px 0 14px;

      font-size: 1rem;
      line-height: 1.4;

      letter-spacing: -0.01em;
    }

    .legal-block p {
      margin: 0 0 16px;

      color: var(--slate);

      font-size: 0.96rem;
      line-height: 1.82;
    }

    .legal-block p:last-child {
      margin-bottom: 0;
    }

    .legal-block strong {
      color: var(--ink);

      font-weight: 700;
    }

    /* =========================================================
       LISTAS
    ========================================================= */

    .legal-block ul {
      margin: 20px 0 24px;

      padding: 0;

      list-style: none;
    }

    .legal-block li {
      position: relative;

      margin-bottom: 12px;

      padding-left: 26px;

      color: var(--slate);

      font-size: 0.95rem;
      line-height: 1.7;
    }

    .legal-block li::before {
      content: "";

      position: absolute;

      left: 3px;
      top: 10px;

      width: 7px;
      height: 7px;

      border-radius: 50%;

      background: var(--red);
    }

    /* =========================================================
       DESTACADOS
    ========================================================= */

    .legal-note {
      margin: 24px 0;

      padding: 22px 24px;

      background: var(--bone);

      border-left: 3px solid var(--red);

      border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
    }

    .legal-note p {
      margin: 0;
    }

    /* =========================================================
       FINALIDADES
    ========================================================= */

    .purpose-group {
      margin-top: 25px;

      padding: 24px 26px;

      border: 1px solid var(--line);
      border-radius: var(--radius-md);

      background: var(--bone);
    }

    .purpose-group+.purpose-group {
      margin-top: 16px;
    }

    .purpose-label {
      display: inline-block;

      margin-bottom: 8px;

      font-family: "Space Mono", monospace;

      font-size: 0.63rem;

      text-transform: uppercase;
      letter-spacing: 0.08em;

      color: var(--red);
    }

    .purpose-group h3 {
      margin: 0 0 15px;

      font-size: 1rem;
    }

    .purpose-group ul {
      margin-bottom: 0;
    }

    .purpose-group li:last-child {
      margin-bottom: 0;
    }

    /* =========================================================
       CONTACTO
    ========================================================= */

    .legal-contact {
      margin-top: 25px;

      padding: 25px;

      background: var(--ink);

      border-radius: var(--radius-md);

      color: #ffffff;
    }

    .legal-contact span {
      display: block;

      margin-bottom: 8px;

      font-family: "Space Mono", monospace;

      font-size: 0.63rem;

      text-transform: uppercase;
      letter-spacing: 0.1em;

      color: rgba(255, 255, 255, 0.54);
    }

    .legal-contact a {
      display: inline-block;

      color: #ffffff;

      font-size: clamp(1.15rem, 3vw, 1.55rem);
      font-weight: 600;

      transition: color 0.2s ease;
    }

    .legal-contact a:hover {
      color: #ff655b;
    }

    /* =========================================================
       ACCIONES FINALES
    ========================================================= */

    .legal-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;

      gap: 18px;

      margin-top: 40px;
    }

    .legal-back-button {
      display: inline-flex;
      align-items: center;
      justify-content: center;

      gap: 10px;

      min-height: 48px;

      padding: 0 21px;

      border: 1px solid var(--ink);
      border-radius: 999px;

      color: var(--ink);

      font-size: 0.86rem;
      font-weight: 600;

      transition:
        background 0.2s ease,
        color 0.2s ease,
        transform 0.2s ease;
    }

    .legal-back-button:hover {
      background: var(--ink);
      color: #ffffff;

      transform: translateY(-2px);
    }

    .to-top {
      font-family: "Space Mono", monospace;

      font-size: 0.67rem;

      text-transform: uppercase;
      letter-spacing: 0.08em;

      color: var(--steel);

      transition: color 0.2s ease;
    }

    .to-top:hover {
      color: var(--red);
    }

    /* =========================================================
       FOOTER
    ========================================================= */

    footer {
      background: var(--ink);

      color: #ffffff;
    }

    .footer-main {
      display: grid;

      grid-template-columns: 1.3fr 0.7fr 0.7fr;

      gap: 70px;

      padding: 75px 0 60px;
    }

    .footer-brand .brand-copy strong {
      color: #ffffff;
    }

    .footer-brand .brand-copy small {
      color: rgba(255, 255, 255, 0.42);
    }

    .footer-text {
      max-width: 430px;

      margin: 25px 0 0;

      color: rgba(255, 255, 255, 0.58);

      font-size: 0.88rem;
      line-height: 1.7;
    }

    .footer-column h3 {
      margin: 0 0 18px;

      font-family: "Space Mono", monospace;

      font-size: 0.65rem;
      font-weight: 400;

      text-transform: uppercase;
      letter-spacing: 0.1em;

      color: rgba(255, 255, 255, 0.4);
    }

    .footer-column a {
      display: block;

      width: fit-content;

      margin-bottom: 10px;

      color: rgba(255, 255, 255, 0.72);

      font-size: 0.86rem;

      transition: color 0.2s ease;
    }

    .footer-column a:hover {
      color: #ffffff;
    }

    .footer-bottom {
      display: flex;
      align-items: center;
      justify-content: space-between;

      gap: 20px;

      padding: 23px 0;

      border-top: 1px solid rgba(255, 255, 255, 0.12);

      color: rgba(255, 255, 255, 0.42);

      font-family: "Space Mono", monospace;

      font-size: 0.62rem;
    }

    .footer-bottom-links {
      display: flex;
      align-items: center;

      gap: 9px;
    }

    .footer-bottom a {
      transition: color 0.2s ease;
    }

    .footer-bottom a:hover {
      color: #ffffff;
    }

    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 980px) {
      .legal-layout {
        grid-template-columns: 205px minmax(0, 1fr);

        gap: 42px;
      }

      .legal-document {
        padding: 50px 45px;
      }

      .footer-main {
        grid-template-columns: 1.2fr 0.8fr;
      }
    }

    @media (max-width: 820px) {

      .legal-hero {
        padding: 65px 0 60px;
      }

      .legal-layout {
        grid-template-columns: 1fr;

        gap: 32px;
      }

      .legal-index {
        position: relative;

        top: auto;

        padding: 25px;

        background: var(--paper);

        border: 1px solid var(--line);
        border-radius: var(--radius-md);
      }

      .legal-index nav {
        display: grid;

        grid-template-columns: repeat(2, 1fr);

        gap: 0 20px;
      }

      .legal-document {
        padding: 45px 40px;
      }

      .footer-main {
        grid-template-columns: 1fr 1fr;
      }

      .footer-brand {
        grid-column: 1 / -1;
      }
    }

    @media (max-width: 560px) {
      .wrap {
        width: min(calc(100% - 32px), var(--max));
      }

      .legal-hero {
        padding: 52px 0 48px;
      }

      .legal-hero::before,
      .legal-hero::after {
        display: none;
      }

      .legal-hero h1 {
        margin-top: 22px;

        font-size: clamp(2.7rem, 15vw, 4rem);
      }

      .legal-lead {
        margin-top: 24px;

        font-size: 0.98rem;
      }

      .legal-meta {
        align-items: flex-start;
        flex-direction: column;
      }

      .legal-section {
        padding: 45px 0 75px;
      }

      .legal-index {
        padding: 22px 20px;
      }

      .legal-index nav {
        grid-template-columns: 1fr;
      }

      .legal-index a {
        font-size: 0.8rem;
      }

      .legal-document {
        padding: 34px 22px;

        border-radius: 20px;
      }

      .legal-block {
        padding: 34px 0;
      }

      .legal-block h2 {
        font-size: 1.35rem;
      }

      .legal-block p,
      .legal-block li {
        font-size: 0.93rem;
      }

      .legal-note,
      .purpose-group {
        padding: 20px;
      }

      .legal-actions {
        align-items: stretch;
        flex-direction: column;
      }

      .legal-back-button {
        width: 100%;
      }

      .to-top {
        text-align: center;
      }

      .footer-main {
        grid-template-columns: 1fr;

        gap: 35px;

        padding: 55px 0 45px;
      }

      .footer-brand {
        grid-column: auto;
      }

      .footer-bottom {
        align-items: flex-start;
        flex-direction: column;
      }

      .footer-bottom-links {
        flex-wrap: wrap;
      }
    }
  </style>
</head>

<body id="top">

  <?php include __DIR__ . '/navbar.php'; ?>
  <!-- =======================================================
       CONTENIDO
  ======================================================== -->

  <main>
    <!-- =====================================================
         HERO
    ====================================================== -->

    <section class="legal-hero">
      <div class="wrap">
        <div class="legal-hero-inner">
          <div class="eyebrow">
            <strong> (Privacidad) </strong>

            Protección de datos personales
          </div>

          <h1>
            Aviso de
            <span>Privacidad.</span>
          </h1>

          <p class="legal-lead">
            Conoce qué datos personales podemos recabar, para qué los
            utilizamos y cuáles son tus derechos respecto al tratamiento de tu
            información.
          </p>

          <div class="legal-meta">
            <div class="legal-date">
              Última actualización · 8 de septiembre de 2026
            </div>

            <a href="index.php" class="back-home">
              ← Volver a CNE Consultorías
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- =====================================================
         DOCUMENTO LEGAL
    ====================================================== -->

    <section class="legal-section">
      <div class="wrap">
        <div class="legal-layout">
          <!-- ===============================================
               ÍNDICE
          ================================================ -->

          <aside class="legal-index">
            <div class="legal-index-head">Contenido</div>

            <nav aria-label="Índice del aviso de privacidad">
              <a href="#datos">
                <span>01</span>
                Datos personales
              </a>

              <a href="#finalidades">
                <span>02</span>
                Finalidades
              </a>

              <a href="#whatsapp">
                <span>03</span>
                WhatsApp y contacto
              </a>

              <a href="#transferencia">
                <span>04</span>
                Transferencias
              </a>

              <a href="#arco">
                <span>05</span>
                Derechos ARCO
              </a>

              <a href="#cookies">
                <span>06</span>
                Cookies
              </a>

              <a href="#seguridad">
                <span>07</span>
                Seguridad
              </a>

              <a href="#cambios">
                <span>08</span>
                Modificaciones
              </a>

              <a href="#contacto">
                <span>09</span>
                Contacto
              </a>
            </nav>
          </aside>

          <!-- ===============================================
               DOCUMENTO
          ================================================ -->

          <article class="legal-document">
            <!-- INTRODUCCIÓN -->

            <div class="legal-intro">
              <div class="legal-intro-label">
                CNE Consultorías · Protección de datos
              </div>

              <p>
                De conformidad con la Ley Federal de Protección de Datos
                Personales en Posesión de los Particulares y su Reglamento,
                <strong>CNE Consultores</strong>
                ("CNE", "nosotros"), con domicilio en Privada de Las Torres
                44, Las Torres, Pachuca de Soto, Hidalgo, C.P. 42082, México,
                correo de contacto
                <strong>
                  <a href="mailto:cneconsultoria40@gmail.com"> cneconsultoria40@gmail.com </a>
                </strong>
                y teléfono
                <strong>
                  <a href="tel:+527711300791"> 771 130 0791 </a> </strong>, es responsable del tratamiento de sus datos personales
                conforme a lo establecido en el presente Aviso de Privacidad.
              </p>
            </div>

            <!-- =================================================
                 01
            ================================================== -->

            <section class="legal-block" id="datos">
              <span class="section-number"> 01 / Datos personales </span>

              <h2>Datos personales que recabamos</h2>

              <p>
                A través de nuestro sitio web, incluyendo el formulario de
                contacto, solicitud de diagnóstico gratuito, descarga de
                recursos como el checklist NOM-035, así como mediante el trato
                directo con usted, podemos recabar los siguientes datos:
              </p>

              <ul>
                <li>Nombre completo.</li>

                <li>Nombre de la empresa.</li>

                <li>Correo electrónico.</li>

                <li>Teléfono.</li>

                <li>
                  Motivo de la consulta y mensaje que usted proporcione
                  voluntariamente.
                </li>
              </ul>

              <div class="legal-note">
                <p>
                  <strong> No recabamos datos personales sensibles </strong>
                  a través de este sitio web.
                </p>
              </div>

              <p>
                En caso de que, con motivo de la prestación de servicios de
                consultoría, sea necesario tratar información adicional de su
                empresa, incluyendo información financiera, operativa o de
                recursos humanos, esto se regulará mediante el contrato de
                servicios y, en su caso, un acuerdo de confidencialidad
                específico.
              </p>
            </section>

            <!-- =================================================
                 02
            ================================================== -->

            <section class="legal-block" id="finalidades">
              <span class="section-number"> 02 / Finalidades </span>

              <h2>Finalidades del tratamiento</h2>

              <p>
                Los datos personales que recabamos serán utilizados para las
                siguientes finalidades:
              </p>

              <!-- PRIMARIAS -->

              <div class="purpose-group">
                <span class="purpose-label"> Finalidades primarias </span>

                <h3>Necesarias para proporcionar el servicio</h3>

                <ul>
                  <li>
                    Responder a su solicitud de contacto o diagnóstico
                    gratuito.
                  </li>

                  <li>Agendar y dar seguimiento a citas de diagnóstico.</li>

                  <li>
                    Elaborar propuestas y contratos de prestación de
                    servicios.
                  </li>

                  <li>
                    Realizar procesos de facturación y dar cumplimiento a las
                    obligaciones fiscales derivadas de la relación comercial.
                  </li>

                  <li>
                    Enviarle el material descargable solicitado, por ejemplo,
                    el checklist de NOM-035.
                  </li>
                </ul>
              </div>

              <!-- SECUNDARIAS -->

              <div class="purpose-group">
                <span class="purpose-label"> Finalidades secundarias </span>

                <h3>No indispensables para proporcionar el servicio</h3>

                <ul>
                  <li>
                    Enviarle contenido informativo, boletines o novedades
                    sobre nuevos servicios de CNE Consultorías.
                  </li>

                  <li>
                    Fines de mercadotecnia y publicidad de nuestros servicios.
                  </li>
                </ul>
              </div>

              <p style="margin-top: 25px">
                Si no desea que sus datos sean tratados para estas finalidades
                secundarias, puede indicarlo enviando un correo electrónico a
                <strong>
                  <a
                    href="mailto:cneconsultoria40@gmail.com?subject=No%20deseo%20finalidades%20secundarias">
                    cneconsultoria40@gmail.com
                  </a>
                </strong>
                con el asunto
                <strong> "No deseo finalidades secundarias". </strong>
              </p>

              <div class="legal-note">
                <p>
                  La negativa al tratamiento de sus datos para finalidades
                  secundarias
                  <strong>
                    no afectará la prestación del servicio principal
                  </strong>
                  que haya solicitado.
                </p>
              </div>
            </section>

            <!-- =================================================
                 03
            ================================================== -->

            <section class="legal-block" id="whatsapp">
              <span class="section-number"> 03 / Canales de contacto </span>

              <h2>Uso de WhatsApp Business y otros canales de contacto</h2>

              <p>
                Al proporcionar su número de teléfono, usted acepta ser
                contactado por nuestro equipo a través de
                <strong>WhatsApp Business</strong>, llamada telefónica o
                correo electrónico para dar seguimiento a su solicitud.
              </p>
            </section>

            <!-- =================================================
                 04
            ================================================== -->

            <section class="legal-block" id="transferencia">
              <span class="section-number"> 04 / Transferencias </span>

              <h2>Transferencia de datos</h2>

              <p>
                Sus datos personales no serán transferidos a terceros ajenos a
                CNE Consultorías, salvo en los siguientes casos:
              </p>

              <ul>
                <li>
                  Cuando sea necesario para el cumplimiento de obligaciones
                  legales o fiscales, por ejemplo, ante autoridades fiscales.
                </li>

                <li>
                  Cuando se requiera compartir información con colaboradores,
                  asociados o subcontratistas de CNE estrictamente para la
                  ejecución del servicio contratado, quienes estarán sujetos a
                  obligaciones de confidencialidad.
                </li>

                <li>
                  Cuando exista su consentimiento expreso para cualquier otro
                  fin.
                </li>
              </ul>
            </section>

            <!-- =================================================
                 05
            ================================================== -->

            <section class="legal-block" id="arco">
              <span class="section-number"> 05 / Derechos ARCO </span>

              <h2>Acceso, Rectificación, Cancelación y Oposición</h2>

              <p>
                Usted tiene derecho a
                <strong>Acceder, Rectificar, Cancelar u Oponerse</strong>
                al tratamiento de sus datos personales.
              </p>

              <p>
                Para ejercer cualquiera de estos derechos puede enviar una
                solicitud a
                <strong>
                  <a href="mailto:cneconsultoria40@gmail.com">
                    cneconsultoria40@gmail.com
                  </a> </strong>, incluyendo la siguiente información:
              </p>

              <ul>
                <li>Nombre completo y datos de contacto.</li>

                <li>
                  Descripción clara del dato personal sobre el cual desea
                  ejercer el derecho.
                </li>

                <li>
                  Cualquier documento o información que facilite localizar sus
                  datos.
                </li>
              </ul>

              <p>
                CNE Consultorías dará respuesta a su solicitud dentro de los
                plazos establecidos por la legislación aplicable.
              </p>

              <div class="legal-contact">
                <span> Solicitudes de derechos ARCO </span>

                <a
                  href="mailto:cneconsultoria40@gmail.com?subject=Solicitud%20de%20Derechos%20ARCO">
                  cneconsultoria40@gmail.com
                </a>
              </div>
            </section>

            <!-- =================================================
                 06
            ================================================== -->

            <section class="legal-block" id="cookies">
              <span class="section-number"> 06 / Cookies </span>

              <h2>Uso de cookies y tecnologías de rastreo</h2>

              <p>
                Este sitio web puede utilizar cookies u otras tecnologías
                similares para mejorar la experiencia de navegación y, en su
                caso, analizar el tráfico del sitio a través de herramientas
                de analítica web.
              </p>

              <p>
                Usted puede deshabilitar las cookies desde la configuración de
                su navegador, aunque esto podría afectar algunas
                funcionalidades del sitio.
              </p>
            </section>

            <!-- =================================================
                 07
            ================================================== -->

            <section class="legal-block" id="seguridad">
              <span class="section-number"> 07 / Seguridad </span>

              <h2>Medidas de seguridad</h2>

              <p>
                CNE Consultorías implementa medidas administrativas y técnicas
                razonables para proteger sus datos personales contra daño,
                pérdida, alteración, destrucción o uso no autorizado.
              </p>
            </section>

            <!-- =================================================
                 08
            ================================================== -->

            <section class="legal-block" id="cambios">
              <span class="section-number"> 08 / Actualizaciones </span>

              <h2>Cambios al Aviso de Privacidad</h2>

              <p>
                Este Aviso de Privacidad puede sufrir modificaciones derivadas
                de nuevos requerimientos legales, de nuestras propias
                necesidades o de cambios en nuestros servicios.
              </p>

              <p>
                Cualquier modificación estará disponible en esta misma página,
                indicando la fecha correspondiente a su última actualización.
              </p>
            </section>

            <!-- =================================================
                 09
            ================================================== -->

            <section class="legal-block" id="contacto">
              <span class="section-number"> 09 / Contacto </span>

              <h2>Contacto</h2>

              <p>
                Para cualquier duda relacionada con el presente Aviso de
                Privacidad puede comunicarse con CNE Consultorías mediante el
                siguiente correo electrónico:
              </p>

              <div class="legal-contact">
                <span> Privacidad y datos personales </span>

                <a href="mailto:cneconsultoria40@gmail.com"> cneconsultoria40@gmail.com </a>
              </div>
            </section>

            <!-- =================================================
                 ACCIONES FINALES
            ================================================== -->

            <div class="legal-actions">
              <a href="index.php" class="legal-back-button">
                ← Regresar a CNE Consultorías
              </a>

              <a href="#top" class="to-top"> Volver arriba ↑ </a>
            </div>
          </article>
        </div>
      </div>
    </section>
  </main>

  <!-- =======================================================
       FOOTER
  ======================================================== -->

  <footer>
    <div class="wrap footer-main">
      <!-- MARCA -->

      <div class="footer-brand">
        <a href="./" class="brand">
          <span class="brand-mark"> CNE </span>

          <span class="brand-copy">
            <strong> CNE Consultorías </strong>

            <small> Consultoría empresarial </small>
          </span>
        </a>

        <p class="footer-text">
          Consultoría estratégica para empresas que buscan convertir sus retos
          operativos en sistemas claros, medibles y sostenibles.
        </p>
      </div>

      <!-- NAVEGACIÓN -->

      <div class="footer-column">
        <h3>Navegación</h3>

        <a href="index.php#home">Inicio</a>
        <a href="index.php#unidades">Unidades</a>
        <a href="index.php#coss">Metodología</a>
        <a href="index.php#contacto">Contacto</a>
      </div>

      <!-- CONTACTO -->

      <div class="footer-column">
        <h3>Contacto</h3>

        <a href="mailto:cneconsultoria40@gmail.com"> cneconsultoria40@gmail.com </a>

        <a href="tel:+527711300791"> 771 130 0791 </a>

        <a href="index.php#contacto">Solicitar diagnóstico</a>
      </div>
    </div>

    <!-- =====================================================
         PARTE INFERIOR
    ====================================================== -->

    <div class="wrap footer-bottom">
      <span> © 2026 CNE Consultorías · cnemx.com </span>

      <div class="footer-bottom-links">
        <a href="aviso-privacidad.php"> Aviso de privacidad </a>

        <span> · </span>

        <a href="terminos.php"> Términos y Condiciones </a>
      </div>
    </div>
  </footer>

  <!-- =======================================================
       JAVASCRIPT
  ======================================================== -->
</body>

</html>