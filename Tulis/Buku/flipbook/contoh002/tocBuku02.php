<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuxt Tips Collection</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            padding: 20px;
            font-family: 'Times New Roman', Times, serif;
        }

        .page {
            width: 210mm;
            min-height: 297mm;
            background: white;
            padding: 1.5cm 2cm 3cm 2cm;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1 {
            font-size: 26pt;
            font-weight: bold;
            text-align: center;
            letter-spacing: 2px;
            margin-bottom: 2px;
        }

        .sub {
            text-align: center;
            font-size: 12pt;
            color: #555;
            margin-bottom: 24px;
            border-bottom: 2px solid #222;
            padding-bottom: 12px;
        }

        .section {
            margin-top: 20px;
        }

        .section-title {
            font-size: 16pt;
            font-weight: bold;
            padding: 4px 10px;
            background: #eee;
            border-left: 6px solid #1a3a5c;
            margin-bottom: 8px;
        }

        .section-desc {
            font-size: 11pt;
            font-style: italic;
            color: #555;
            margin-bottom: 6px;
            padding-left: 6px;
        }

        /* ===== TOC DENGAN LEADER() ===== */
        .toc {
            width: 100%;
            border-collapse: collapse;
        }

        .toc tr {
            border-bottom: 1px dotted #ddd;
        }

        .toc td {
            padding: 3px 0;
            font-size: 11.5pt;
            vertical-align: baseline;
        }

        .toc .num {
            width: 32px;
            font-weight: bold;
            color: #1a3a5c;
            padding-right: 4px;
        }

        .toc .title {
            width: auto;
            padding-right: 4px;
        }

        /* ===== GUNA LEADER() ===== */
        .toc .title a {
            text-decoration: none;
            color: #1a1a1a;
            display: inline-block;
            width: 100%;
        }

        /* leader() untuk print */
        .toc .title a::after {
            content: leader('.') " " target-counter(attr(href), page);
            color: #1a3a5c;
            font-weight: bold;
            font-size: 11pt;
            float: right;
            padding-left: 8px;
        }

        /* fallback untuk screen - tunjuk nama page */
        .toc .title a .page-num {
            float: right;
            font-weight: bold;
            color: #1a3a5c;
            padding-left: 8px;
        }

        /* sembunyi page-num masa print, guna leader() */
        @media print {
            .toc .title a .page-num {
                display: none;
            }
            .toc .title a::after {
                content: leader('.') " " target-counter(attr(href), page);
            }
            .page {
                box-shadow: none;
            }
            body {
                background: white;
                padding: 0;
            }
        }

        @media screen {
            /* leader() tak jalan kat screen, so guna flex */
            .toc .title a {
                display: flex;
                justify-content: space-between;
                align-items: baseline;
                width: 100%;
            }
            .toc .title a .page-num {
                display: inline;
            }
            /* titik-titik guna pseudo untuk screen */
            .toc .title a .dots-placeholder {
                flex: 1;
                text-align: right;
                color: #999;
                letter-spacing: 2px;
                font-size: 10pt;
                margin: 0 6px;
                overflow: hidden;
                white-space: nowrap;
            }
            .toc .title a .dots-placeholder::after {
                content: "....................................................................................................................................................................................................................................................................................................................................................";
            }
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 10pt;
            border-top: 2px solid #222;
            padding-top: 10px;
            color: #555;
            letter-spacing: 2px;
        }

        @media print {
            .toc .title a .dots-placeholder {
                display: none;
            }
        }

        @media screen and (max-width: 800px) {
            .page {
                width: 100%;
                min-height: auto;
                padding: 20px;
            }
            h1 {
                font-size: 20pt;
            }
            .toc td {
                font-size: 10pt;
            }
        }
    </style>
</head>
<body>

<div class="page">

    <h1>Nuxt Tips Collection</h1>
    <div class="sub">Tips &amp; panduan untuk Nuxt 3</div>

    <!-- BAHAGIAN 1 -->
    <div class="section">
        <div class="section-title">1. Component Chronicles</div>
        <div class="section-desc">Komponen custom &amp; built-in</div>

        <table class="toc">
            <tr><td class="num">1.</td>
                <td class="title"><a href="#page5">Keep Page Component Between Routes<span class="page-num">5</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">2.</td>
                <td class="title"><a href="#page7">DevOnly Component<span class="page-num">7</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">3.</td>
                <td class="title"><a href="#page8">Client Only Component<span class="page-num">8</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">4.</td>
                <td class="title"><a href="#page9">Client Component Caveats<span class="page-num">9</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">5.</td>
                <td class="title"><a href="#page10">Lazy Loading (and code splitting) components<span class="page-num">10</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">6.</td>
                <td class="title"><a href="#page11">Global Components<span class="page-num">11</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">7.</td>
                <td class="title"><a href="#page12">NuxtLink Basics<span class="page-num">12</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">8.</td>
                <td class="title"><a href="#page14">Use NuxtLink to open links in a new tab<span class="page-num">14</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">9.</td>
                <td class="title"><a href="#page15">Prefetch Pages with NuxtLink<span class="page-num">15</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">10.</td>
                <td class="title"><a href="#page16">Custom NuxtLink Component<span class="page-num">16</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">11.</td>
                <td class="title"><a href="#page17">Layout Components<span class="page-num">17</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">12.</td>
                <td class="title"><a href="#page19">Layout fallbacks<span class="page-num">19</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">13.</td>
                <td class="title"><a href="#page21">Dynamic Layouts<span class="page-num">21</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">14.</td>
                <td class="title"><a href="#page21a">When to use a layout (instead of pages or component)<span class="page-num">21</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">15.</td>
                <td class="title"><a href="#page22">Using NuxtImg to compress images<span class="page-num">22</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">16.</td>
                <td class="title"><a href="#page24">The App Component<span class="page-num">24</span><span class="dots-placeholder"></span></a></td></tr>
        </table>
    </div>

    <!-- BAHAGIAN 2 -->
    <div class="section">
        <div class="section-title">2. Composable Chaos</div>
        <div class="section-desc">Composable built-in, custom &amp; macam-macam cara guna</div>

        <table class="toc">
            <tr><td class="num">17.</td>
                <td class="title"><a href="#page27">Create Your Own Keyed Composable<span class="page-num">27</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">18.</td>
                <td class="title"><a href="#page30">Hooking into Hydration<span class="page-num">30</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">19.</td>
                <td class="title"><a href="#page32">Advanced Hydration with onPreHydrate<span class="page-num">32</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">20.</td>
                <td class="title"><a href="#page33">Using useHead<span class="page-num">33</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">21.</td>
                <td class="title"><a href="#page34">callOnce<span class="page-num">34</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">22.</td>
                <td class="title"><a href="#page35">How useFetch is sync and async<span class="page-num">35</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">23.</td>
                <td class="title"><a href="#page36">Using useState for client-side state sharing<span class="page-num">36</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">24.</td>
                <td class="title"><a href="#page37">Using onNuxtReady<span class="page-num">37</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">25.</td>
                <td class="title"><a href="#page38">Using useNuxtApp and tryUseNuxtApp<span class="page-num">38</span><span class="dots-placeholder"></span></a></td></tr>
            <tr><td class="num">26.</td>
                <td class="title"><a href="#page39">Loading API<span class="page-num">39</span><span class="dots-placeholder"></span></a></td></tr>
        </table>
    </div>

    <div class="footer">NUXT TIPS COLLECTION</div>

</div>

</body>
</html>