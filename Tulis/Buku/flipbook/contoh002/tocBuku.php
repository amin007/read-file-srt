<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuxt Tips Collection · A4 print</title>
    <style>
        /* ----------------------------------------------
            RESET & PAGE SETUP (A4 portrait)
        ------------------------------------------------ */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #e6e9ef;    /* soft page background */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Segoe UI', Roboto, system-ui, -apple-system, sans-serif;
            padding: 1rem;
        }

        /* A4 sheet – exactly the size with margins as requested */
        .page {
            width: 210mm;           /* A4 width */
            min-height: 297mm;      /* A4 height */
            background: white;
            box-shadow: 0 8px 28px rgba(0,0,0,0.1);
            padding: 1.5cm 2cm 3cm 2cm;    /* top right bottom left */
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            transition: all 0.2s;
            border-radius: 4px;
        }

        /* ----------------------------------------------
            TYPOGRAPHY & LAYOUT
        ------------------------------------------------ */
        .title-main {
            font-size: 2.2rem;
            font-weight: 700;
            letter-spacing: -0.5px;
            color: #0b1e33;
            margin-bottom: 0.25rem;
            border-bottom: 4px solid #2b6f9c;
            padding-bottom: 0.3rem;
            display: inline-block;
        }

        .subhead {
            font-size: 1rem;
            font-weight: 400;
            color: #2c3e50;
            margin-top: 0.1rem;
            margin-bottom: 1.8rem;
            opacity: 0.8;
            border-left: 4px solid #2b6f9c;
            padding-left: 1rem;
        }

        /* section headers */
        .section-title {
            font-size: 1.6rem;
            font-weight: 600;
            color: #1a2d3f;
            margin: 1.6rem 0 0.6rem 0;
            padding-bottom: 0.2rem;
            border-bottom: 2px dashed #a0b8cf;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .section-title span {
            background: #2b6f9c;
            color: white;
            font-size: 1.2rem;
            font-weight: 500;
            padding: 0.1rem 0.9rem;
            border-radius: 40px;
            margin-right: 0.3rem;
        }

        /* two‑column grid for tips */
        .tip-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.6rem 1.8rem;
            margin-top: 0.4rem;
            margin-bottom: 1.2rem;
        }

        .tip-item {
            display: flex;
            align-items: baseline;
            gap: 0.4rem;
            font-size: 0.95rem;
            line-height: 1.5;
            padding: 0.15rem 0;
            border-bottom: 1px solid #f0f3f8;
        }
        .tip-item .num {
            font-weight: 600;
            color: #1f4b6e;
            min-width: 2.1rem;
            font-size: 0.85rem;
            letter-spacing: 0.3px;
        }
        .tip-item .desc {
            color: #1f2e3f;
            font-weight: 450;
        }
        .tip-item .page-ref {
            margin-left: auto;
            color: #2b6f9c;
            font-weight: 500;
            background: #eaf0f8;
            padding: 0 0.6rem;
            border-radius: 30px;
            font-size: 0.75rem;
            line-height: 1.6;
            letter-spacing: 0.3px;
            white-space: nowrap;
        }

        /* special full-width items (like "Component Chronicles" intro) */
        .intro-note {
            font-size: 0.98rem;
            color: #1f3a54;
            background: #f4f8fe;
            padding: 0.6rem 1.2rem;
            border-radius: 60px;
            display: inline-block;
            margin-bottom: 0.8rem;
            font-weight: 450;
            border: 1px solid #d7e2ee;
        }

        .spacer {
            flex: 1;
        }

        /* footer / subtle branding */
        .footer-note {
            margin-top: 1.8rem;
            font-size: 0.75rem;
            text-align: right;
            color: #7b8fa5;
            letter-spacing: 0.5px;
            border-top: 1px solid #e2eaf2;
            padding-top: 0.8rem;
            font-weight: 400;
        }
        .footer-note strong {
            color: #1f4b6e;
            font-weight: 600;
        }

        /* ---- print optimisation ---- */
        @media print {
            body {
                background: white;
                padding: 0;
                margin: 0;
                display: block;
            }
            .page {
                box-shadow: none;
                border-radius: 0;
                width: 100%;
                min-height: 100vh;  /* fill page */
                padding: 1.5cm 2cm 3cm 2cm; /* exactly as required */
                margin: 0 auto;
            }
            .tip-item {
                break-inside: avoid;
                page-break-inside: avoid;
            }
            .section-title {
                break-after: avoid;
            }
        }

        /* small screen (＜A4) – keep readable */
        @media screen and (max-width: 800px) {
            .page {
                width: 100%;
                min-height: auto;
                padding: 1.5rem 1.5rem 2.5rem 1.5rem;
            }
            .tip-grid {
                grid-template-columns: 1fr;
                gap: 0.3rem;
            }
            .title-main {
                font-size: 1.8rem;
            }
        }

        /* extra touch: hover effect on screen */
        @media screen and (min-width: 801px) {
            .tip-item:hover {
                background: #f7faff;
                border-radius: 20px;
                padding-left: 0.5rem;
                transition: 0.1s ease;
            }
        }
    </style>
</head>
<body>
    <div class="page">

        <!-- main header -->
        <h1 class="title-main">Nuxt Tips Collection</h1>
        <div class="subhead">Curated tips &amp; best practices for Nuxt 3</div>

        <!-- =============================================
        SECTION 1 – COMPONENT CHRONICLES
        ============================================= -->
        <div class="section-title">
            <span>1</span> Component Chronicles
        </div>
        <div class="intro-note">
            ⚡ Custom &amp; built‑in components — everything you need
        </div>

        <div class="tip-grid">
            <div class="tip-item"><span class="num">1.</span><span class="desc">Keep Page Component Between Routes</span><span class="page-ref">5</span></div>
            <div class="tip-item"><span class="num">2.</span><span class="desc">DevOnly Component</span><span class="page-ref">7</span></div>
            <div class="tip-item"><span class="num">3.</span><span class="desc">Client Only Component</span><span class="page-ref">8</span></div>
            <div class="tip-item"><span class="num">4.</span><span class="desc">Client Component Caveats</span><span class="page-ref">9</span></div>
            <div class="tip-item"><span class="num">5.</span><span class="desc">Lazy Loading (and code splitting) components</span><span class="page-ref">10</span></div>
            <div class="tip-item"><span class="num">6.</span><span class="desc">Global Components</span><span class="page-ref">11</span></div>
            <div class="tip-item"><span class="num">7.</span><span class="desc">NuxtLink Basics</span><span class="page-ref">12</span></div>
            <div class="tip-item"><span class="num">8.</span><span class="desc">Use NuxtLink to open links in a new tab</span><span class="page-ref">14</span></div>
            <div class="tip-item"><span class="num">9.</span><span class="desc">Prefetch Pages with NuxtLink</span><span class="page-ref">15</span></div>
            <div class="tip-item"><span class="num">10.</span><span class="desc">Custom NuxtLink Component</span><span class="page-ref">16</span></div>
            <div class="tip-item"><span class="num">11.</span><span class="desc">Layout Components</span><span class="page-ref">17</span></div>
            <div class="tip-item"><span class="num">12.</span><span class="desc">Layout fallbacks</span><span class="page-ref">19</span></div>
            <div class="tip-item"><span class="num">13.</span><span class="desc">Dynamic Layouts</span><span class="page-ref">21</span></div>
            <div class="tip-item"><span class="num">14.</span><span class="desc">When to use a layout (instead of pages or component)</span><span class="page-ref">21</span></div>
            <div class="tip-item"><span class="num">15.</span><span class="desc">Using NuxtImg to compress images</span><span class="page-ref">22</span></div>
            <div class="tip-item"><span class="num">16.</span><span class="desc">The App Component</span><span class="page-ref">24</span></div>
        </div>

        <!-- =============================================
        SECTION 2 – COMPOSABLE CHAOS
        ============================================= -->
        <div class="section-title" style="margin-top: 2.2rem;">
            <span>2</span> Composable Chaos
        </div>
        <div class="intro-note" style="background: #f0f6fe;">
            🧩 Built‑in, custom, and every way to use them
        </div>

        <div class="tip-grid">
            <div class="tip-item"><span class="num">17.</span><span class="desc">Create Your Own Keyed Composable</span><span class="page-ref">27</span></div>
            <div class="tip-item"><span class="num">18.</span><span class="desc">Hooking into Hydration</span><span class="page-ref">30</span></div>
            <div class="tip-item"><span class="num">19.</span><span class="desc">Advanced Hydration with onPreHydrate</span><span class="page-ref">32</span></div>
            <div class="tip-item"><span class="num">20.</span><span class="desc">Using useHead</span><span class="page-ref">33</span></div>
            <div class="tip-item"><span class="num">21.</span><span class="desc">callOnce</span><span class="page-ref">34</span></div>
            <div class="tip-item"><span class="num">22.</span><span class="desc">How useFetch is sync and async</span><span class="page-ref">35</span></div>
            <div class="tip-item"><span class="num">23.</span><span class="desc">Using useState for client‑side state sharing</span><span class="page-ref">36</span></div>
            <div class="tip-item"><span class="num">24.</span><span class="desc">Using onNuxtReady</span><span class="page-ref">37</span></div>
            <div class="tip-item"><span class="num">25.</span><span class="desc">Using useNuxtApp and tryUseNuxtApp</span><span class="page-ref">38</span></div>
            <div class="tip-item"><span class="num">26.</span><span class="desc">Loading API</span><span class="page-ref">39</span></div>
        </div>

        <!-- subtle spacing + footer -->
        <div class="spacer"></div>
        <div class="footer-note">
            <strong>NUXT TIPS COLLECTION</strong> &nbsp;·&nbsp; curated for clarity &nbsp;·&nbsp; A4 ready
        </div>

    </div> <!-- /.page -->
</body>
</html>