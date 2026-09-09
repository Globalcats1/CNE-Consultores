<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta
    name="description"
    content="Consulta los Términos y Condiciones de CNE Consultorías para el uso del sitio web y la contratación de servicios de consultoría empresarial." />

  <title>Términos y Condiciones | CNE Consultorías</title>

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

      --red-deep: #b71f16;
      --maxw: 1240px;
      --ease: cubic-bezier(0.2, 0.7, 0.2, 1);
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
       HERO LEGAL
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
      max-width: 880px;

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
      max-width: 710px;

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
       ÍNDICE LATERAL
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

      padding: 11px 0;

      border-bottom: 1px solid var(--line);

      color: var(--slate);

      font-size: 0.78rem;
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

    /* SECCIONES */

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
      max-width: 630px;

      margin: 0 0 20px;

      font-size: clamp(1.4rem, 2vw, 1.75rem);
      line-height: 1.15;

      letter-spacing: -0.03em;
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

    /* LISTAS */

    .legal-block ul {
      margin: 20px 0 22px;
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

    /* DESTACADOS */

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

    /* CONTACTO */

    .legal-contact {
      margin-top: 25px;

      padding: 25px;

      background: var(--ink);

      border-radius: var(--radius-md);

      color: #fff;
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

      color: #fff;

      font-size: clamp(1.15rem, 3vw, 1.55rem);
      font-weight: 600;

      transition: color 0.2s ease;
    }

    .legal-contact a:hover {
      color: #ff655b;
    }

    /* =========================================================
       NAVEGACIÓN FINAL
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
      color: #fff;

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
      color: #fff;
    }

    .footer-main {
      display: grid;

      grid-template-columns: 1.3fr 0.7fr 0.7fr;

      gap: 70px;

      padding: 75px 0 60px;
    }

    .footer-brand .brand-copy strong {
      color: #fff;
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
      color: #fff;
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
      color: #fff;
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

        background: var(--paper);

        padding: 25px;

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

      .legal-note {
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
       CONTENIDO PRINCIPAL
  ======================================================== -->

  <main>
    <!-- =====================================================
         HERO
    ====================================================== -->

    <section class="legal-hero">
      <div class="wrap">
        <div class="legal-hero-inner">
          <div class="eyebrow">
            <strong>(Legal)</strong>
            Información del sitio
          </div>

          <h1>
            Términos y
            <span>Condiciones.</span>
          </h1>

          <p class="legal-lead">
            Estos Términos y Condiciones establecen las reglas generales para
            el uso del sitio web y la contratación de los servicios
            profesionales ofrecidos por CNE Consultorías.
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

            <nav aria-label="Índice de términos y condiciones">
              <a href="#identificacion">
                <span>01</span>
                Identificación
              </a>

              <a href="#servicios">
                <span>02</span>
                Servicios
              </a>

              <a href="#naturaleza">
                <span>03</span>
                Naturaleza de los servicios
              </a>

              <a href="#diagnostico">
                <span>04</span>
                Diagnóstico gratuito
              </a>

              <a href="#contratacion">
                <span>05</span>
                Contratación
              </a>

              <a href="#honorarios">
                <span>06</span>
                Honorarios
              </a>

              <a href="#confidencialidad">
                <span>07</span>
                Confidencialidad
              </a>

              <a href="#propiedad">
                <span>08</span>
                Propiedad intelectual
              </a>

              <a href="#cancelacion">
                <span>09</span>
                Cancelación
              </a>

              <a href="#responsabilidad">
                <span>10</span>
                Responsabilidad
              </a>

              <a href="#uso-sitio">
                <span>11</span>
                Uso del sitio
              </a>

              <a href="#modificaciones">
                <span>12</span>
                Modificaciones
              </a>

              <a href="#legislacion">
                <span>13</span>
                Legislación
              </a>

              <a href="#contacto">
                <span>14</span>
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
                CNE Consultorías · Documento legal
              </div>

              <p>
                Lea cuidadosamente los presentes Términos y Condiciones. El
                acceso y uso de este sitio web, así como la solicitud o
                contratación de servicios, implica la aceptación de las
                disposiciones establecidas a continuación.
              </p>
            </div>

            <!-- 01 -->

            <section class="legal-block" id="identificacion">
              <span class="section-number"> 01 / Identificación </span>

              <h2>Identificación del prestador de servicios</h2>

              <p>
                Estos Términos y Condiciones ("Términos") regulan el uso del
                sitio web y la contratación de servicios ofrecidos por
                <strong>CNE Consultores</strong> ("CNE", "nosotros"), con
                domicilio en Privada de Las Torres 44, Las Torres, Pachuca de
                Soto, Hidalgo, C.P. 42082, México, correo de contacto
                <strong>
                  <a href="mailto:cneconsultoria40@gmail.com">
                    cneconsultoria40@gmail.com
                  </a>
                </strong>
                y teléfono de contacto
                <strong>
                  <a href="tel:+527711300791"> 771 130 0791 </a> </strong>.
              </p>

              <p>
                Al navegar en este sitio, solicitar un diagnóstico o contratar
                cualquiera de nuestros servicios, usted ("el Cliente" o
                "usted") acepta los presentes Términos.
              </p>
            </section>

            <!-- 02 -->

            <section class="legal-block" id="servicios">
              <span class="section-number"> 02 / Servicios </span>

              <h2>Descripción de los servicios</h2>

              <p>
                CNE Consultorías ofrece servicios de asesoría y consultoría
                empresarial, incluyendo de manera enunciativa mas no
                limitativa:
              </p>

              <ul>
                <li>
                  <strong>Estrategia y Finanzas Corporativas:</strong>
                  ingeniería financiera, proyección de capital y reingeniería
                  de procesos.
                </li>

                <li>
                  <strong>Blindaje Normativo y Cultura Laboral:</strong>
                  auditoría e implementación de NOM-035, NOM-019, NOM-030,
                  programas de clima y retención de talento.
                </li>

                <li>
                  <strong>Liderazgo y Desarrollo Ejecutivo:</strong>
                  talleres directivos, coaching gerencial y workshops
                  corporativos.
                </li>

                <li>
                  <strong>Consultoría Sectorial a la Medida:</strong>
                  especialización por industria y acompañamiento en expansión
                  regional.
                </li>
              </ul>

              <p>
                Los servicios se prestan conforme a la metodología propia
                <strong>COSS</strong> (Claridad Estratégica, Orden Operativo,
                Sinergia Comercial, Sostenibilidad y Escalabilidad), y su
                alcance específico se define en cada propuesta o contrato
                individual acordado con el Cliente.
              </p>
            </section>

            <!-- 03 -->

            <section class="legal-block" id="naturaleza">
              <span class="section-number"> 03 / Alcance </span>

              <h2>
                Naturaleza de los servicios y exclusión de garantía de
                resultados
              </h2>

              <p>
                Los servicios de CNE consisten en diagnóstico, asesoría,
                capacitación y recomendaciones profesionales basadas en la
                experiencia y metodología de la firma.
              </p>

              <div class="legal-note">
                <p>
                  <strong>
                    CNE no garantiza resultados financieros, operativos o de
                    cumplimiento específicos,
                  </strong>
                  ya que estos dependen de factores fuera de nuestro control,
                  incluyendo la implementación de las recomendaciones por
                  parte del Cliente, condiciones de mercado y decisiones
                  internas de la empresa contratante.
                </p>
              </div>

              <p>
                La responsabilidad de implementar, ejecutar y tomar decisiones
                de negocio con base en las recomendaciones entregadas
                corresponde exclusivamente al Cliente.
              </p>
            </section>

            <!-- 04 -->

            <section class="legal-block" id="diagnostico">
              <span class="section-number"> 04 / Diagnóstico </span>

              <h2>Diagnóstico gratuito</h2>

              <p>
                El "diagnóstico básico" gratuito ofrecido a través del sitio
                es una evaluación preliminar sin costo, de alcance limitado, y
                no constituye un informe de consultoría completo ni genera
                obligación de contratación para ninguna de las partes.
              </p>
            </section>

            <!-- 05 -->

            <section class="legal-block" id="contratacion">
              <span class="section-number"> 05 / Contratación </span>

              <h2>Proceso de contratación</h2>

              <p>
                La contratación de servicios de consultoría se formaliza
                mediante una propuesta y/o contrato de prestación de servicios
                específico, en el que se detallará:
              </p>

              <ul>
                <li>Alcance del proyecto.</li>
                <li>Entregables acordados.</li>
                <li>Honorarios.</li>
                <li>Plazos de ejecución.</li>
                <li>Condiciones particulares de cada proyecto.</li>
              </ul>

              <p>
                Estos Términos aplican de manera general y complementaria a
                dicho contrato; en caso de conflicto entre ambos documentos,
                prevalecerá lo establecido en el contrato específico.
              </p>
            </section>

            <!-- 06 -->

            <section class="legal-block" id="honorarios">
              <span class="section-number"> 06 / Pagos </span>

              <h2>Honorarios y forma de pago</h2>

              <p>
                Los honorarios se determinan por proyecto, por hora o mediante
                el esquema acordado en la propuesta correspondiente.
              </p>

              <p>
                Las condiciones de pago, incluyendo anticipos, parcialidades,
                moneda y facturación, se especifican en cada contrato o
                propuesta.
              </p>

              <p>
                El incumplimiento de pago podrá resultar en la suspensión de
                los servicios.
              </p>
            </section>

            <!-- 07 -->

            <section class="legal-block" id="confidencialidad">
              <span class="section-number"> 07 / Confidencialidad </span>

              <h2>Confidencialidad</h2>

              <p>
                Ambas partes se obligan a mantener confidencial la información
                de negocio, financiera, operativa o estratégica compartida con
                motivo de la prestación de servicios, y a no divulgarla a
                terceros sin autorización previa, salvo requerimiento legal.
              </p>

              <p>
                Esta obligación podrá detallarse adicionalmente en un Acuerdo
                de Confidencialidad (NDA) específico.
              </p>
            </section>

            <!-- 08 -->

            <section class="legal-block" id="propiedad">
              <span class="section-number"> 08 / Propiedad intelectual </span>

              <h2>Propiedad intelectual</h2>

              <p>
                La metodología COSS, materiales, plantillas, presentaciones,
                contenido del sitio web, marca y logotipos de CNE Consultorías
                son propiedad de CNE y no podrán ser reproducidos,
                distribuidos o utilizados comercialmente por terceros sin
                autorización expresa.
              </p>

              <p>
                Los informes, diagnósticos y entregables finales elaborados
                específicamente para el Cliente podrán ser utilizados por este
                para fines internos de su empresa, salvo que se acuerde algo
                distinto en el contrato correspondiente.
              </p>
            </section>

            <!-- 09 -->

            <section class="legal-block" id="cancelacion">
              <span class="section-number"> 09 / Cancelación </span>

              <h2>Cancelación y suspensión de servicios</h2>

              <p>
                Las condiciones de cancelación anticipada de un proyecto,
                incluyendo avisos previos, penalizaciones y pagos por trabajo
                ya realizado, se establecerán en el contrato específico de
                cada servicio.
              </p>
            </section>

            <!-- 10 -->

            <section class="legal-block" id="responsabilidad">
              <span class="section-number"> 10 / Responsabilidad </span>

              <h2>Limitación de responsabilidad</h2>

              <p>
                En la máxima medida permitida por la ley, CNE Consultorías no
                será responsable por daños indirectos, pérdida de utilidades o
                consecuencias derivadas de decisiones tomadas por el Cliente
                con base en las recomendaciones brindadas.
              </p>

              <div class="legal-note">
                <p>
                  La responsabilidad total de CNE, en su caso, se limitará al
                  monto efectivamente pagado por el servicio específico en
                  cuestión.
                </p>
              </div>
            </section>

            <!-- 11 -->

            <section class="legal-block" id="uso-sitio">
              <span class="section-number"> 11 / Sitio web </span>

              <h2>Uso del sitio web y formulario de contacto</h2>

              <p>
                Al enviar el formulario de contacto, usted declara que la
                información proporcionada, incluyendo nombre, empresa, correo
                y teléfono, es verídica.
              </p>

              <p>
                Asimismo, acepta ser contactado por el equipo de CNE
                Consultorías por correo electrónico, teléfono o WhatsApp
                Business para dar seguimiento a su solicitud.
              </p>
            </section>

            <!-- 12 -->

            <section class="legal-block" id="modificaciones">
              <span class="section-number"> 12 / Actualizaciones </span>

              <h2>Modificaciones a los Términos</h2>

              <p>
                CNE podrá actualizar estos Términos en cualquier momento. La
                versión vigente será siempre la publicada en este sitio web,
                indicando su fecha de última actualización.
              </p>
            </section>

            <!-- 13 -->

            <section class="legal-block" id="legislacion">
              <span class="section-number"> 13 / Legislación </span>

              <h2>Legislación aplicable y jurisdicción</h2>

              <p>
                Estos Términos se rigen por las leyes de los Estados Unidos
                Mexicanos.
              </p>

              <p>
                Para cualquier controversia, las partes se someten a los
                tribunales competentes de Pachuca de Soto, Hidalgo,
                renunciando a cualquier otro fuero que pudiera
                corresponderles.
              </p>
            </section>

            <!-- 14 -->

            <section class="legal-block" id="contacto">
              <span class="section-number"> 14 / Contacto </span>

              <h2>Contacto</h2>

              <p>
                Para cualquier duda o aclaración relacionada con los presentes
                Términos y Condiciones, puede comunicarse con CNE Consultorías
                mediante el siguiente correo electrónico:
              </p>

              <div class="legal-contact">
                <span> Correo de contacto </span>

                <a href="mailto:cneconsultoria40@gmail.com">
                  cneconsultoria40@gmail.com
                </a>
              </div>
            </section>

            <!-- BOTONES FINALES -->

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
            <strong>CNE Consultorías</strong>
            <small>Consultoría empresarial</small>
          </span>
        </a>

        <p class="footer-text">
          Consultoría estratégica para empresas que buscan convertir sus retos
          operativos en sistemas claros, medibles y sostenibles.
        </p>
      </div>

      <!-- ENLACES -->

      <div class="footer-column">
        <h3>Navegación</h3>

        <a href="./"> Inicio </a>

        <a href="./#servicios"> Servicios </a>

        <a href="./#nosotros"> Nosotros </a>

        <a href="./#contacto"> Contacto </a>
      </div>

      <!-- CONTACTO -->

      <div class="footer-column">
        <h3>Contacto</h3>

        <a href="mailto:cneconsultoria40@gmail.com">
          cneconsultoria40@gmail.com
        </a>

        <a href="tel:+527711300791"> 771 130 0791 </a>

        <a href="./#contacto"> Solicitar diagnóstico </a>
      </div>
    </div>

    <!-- PARTE INFERIOR DEL FOOTER -->

    <div class="wrap footer-bottom">
      <span> © 2026 CNE Consultorías · cnemx.com </span>

      <div class="footer-bottom-links">
        <!-- Cuando hagamos el aviso, este enlace funcionará -->
        <a href="aviso-privacidad.html"> Aviso de privacidad </a>

        <span>·</span>

        <a href="terminos.php"> Términos y Condiciones </a>
      </div>
    </div>
  </footer>

  <!-- =======================================================
       JAVASCRIPT
  ======================================================== -->

</body>

</html>