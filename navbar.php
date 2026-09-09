<style>
    :root {
        --paper: #ffffff;
        --bone: #f6f5f3;
        --line: #e3e1dd;
        --slate: #5b5a57;
        --ink: #17171a;
        --red: #e12d22;
        --red-deep: #b71f16;
        --maxw: 1240px;
    }

    .nav,
    .mobile-menu {
        font-family: "Archivo", system-ui, sans-serif;
    }

    .nav a,
    .mobile-menu a {
        color: inherit;
        text-decoration: none;
    }

    /* NAV */
    .nav {
        position: sticky;
        top: 0;
        z-index: 120;
        background: rgba(255, 255, 255, 0.82);
        backdrop-filter: blur(16px);
        border-bottom: 1px solid transparent;
        transition: border-color 0.3s;
    }

    .nav.sticky {
        border-color: var(--line);
    }

    .nav-in {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 76px;
        max-width: var(--maxw);
        margin: 0 auto;
        padding: 0 32px;
    }

    .logo-dark {
        height: 30px;
        width: auto;
    }

    .menu {
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .menu a {
        font-size: 0.9rem;
        font-weight: 500;
        color: var(--slate);
        padding: 9px 14px;
        border-radius: 10px;
        transition:
            color 0.2s,
            background 0.2s;
    }

    .menu a:hover {
        color: var(--ink);
        background: var(--bone);
    }

    .n-cta {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--red);
        color: #fff !important;
        font-weight: 600;
        font-size: 0.88rem;
        padding: 11px 18px !important;
        border-radius: 11px;
        transition:
            background 0.2s,
            transform 0.2s;
    }

    .n-cta:hover {
        background: var(--red-deep);
        transform: translateY(-1px);
    }

    .n-cta svg {
        width: 15px;
        height: 15px;
        stroke: #fff;
        fill: none;
        stroke-width: 2;
    }

    .burger {
        display: none;
        flex-direction: column;
        gap: 5px;
        background: none;
        border: none;
        cursor: pointer;
        padding: 8px;
    }

    .burger span {
        width: 24px;
        height: 2px;
        background: var(--ink);
        border-radius: 2px;
        transition: 0.3s;
    }

    /* RESPONSIVE */
    .mobile-menu {
        display: none;
    }

    @media (max-width: 860px) {
        .menu {
            display: none;
        }

        .burger {
            display: flex;
        }

        .mobile-menu {
            position: fixed;
            inset: 76px 0 0;
            background: var(--paper);
            z-index: 110;
            padding: 24px;
            flex-direction: column;
            gap: 4px;
            overflow-y: auto;
        }

        .mobile-menu.open {
            display: flex;
        }

        .mobile-menu a {
            padding: 16px 12px;
            font-size: 1.1rem;
            font-weight: 600;
            border-bottom: 1px solid var(--line);
        }

        .mobile-menu .n-cta {
            margin-top: 18px;
            justify-content: center;
        }
    }

    @media (max-width: 640px) {
        .nav-in {
            padding: 0 20px;
        }
    }
</style>

<header class="nav" id="nav">
    <div class="nav-in">
        <a href="index.php#home" aria-label="CNE Consultorías"><img
                class="logo-dark"
                src="data:image/png;base64,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"
                alt="CNE Consultorías" /></a>
        <nav class="menu">
            <a href="index.php#home">Inicio</a>
            <a href="index.php#unidades">Unidades</a>
            <a href="index.php#coss">Metodología</a>
            <a href="index.php#recursos">Recursos</a>
            <a href="index.php#casos">Casos</a>
            <a href="index.php#contacto">Contacto</a>
            <a href="index.php#contacto" class="n-cta">Diagnóstico gratis
                <svg viewBox="0 0 24 24">
                    <path d="M5 12h14M13 6l6 6-6 6" />
                </svg></a>
        </nav>
        <button class="burger" id="burger" aria-label="Menú">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
<div class="mobile-menu" id="mm">
    <a href="index.php#home">Inicio</a>
    <a href="index.php#unidades">Unidades de negocio</a>
    <a href="index.php#coss">Metodología COSS</a>
    <a href="index.php#recursos">Recursos / Blog</a>
    <a href="index.php#casos">Casos de éxito</a>
    <a href="index.php#contacto">Contacto</a>
    <a href="index.php#contacto" class="n-cta">Diagnóstico gratis
        <svg viewBox="0 0 24 24">
            <path d="M5 12h14M13 6l6 6-6 6" />
        </svg></a>
</div>

<script>
    (() => {
        const nav = document.getElementById("nav");
        const burger = document.getElementById("burger");
        const mm = document.getElementById("mm");

        if (nav) {
            window.addEventListener(
                "scroll",
                () => {
                    nav.classList.toggle("sticky", window.scrollY > 8);
                }, {
                    passive: true
                }
            );
        }

        if (burger && mm) {
            burger.addEventListener("click", () => {
                mm.classList.toggle("open");
            });

            mm.querySelectorAll("a").forEach((a) => {
                a.addEventListener("click", () => {
                    mm.classList.remove("open");
                });
            });
        }
    })();
</script>