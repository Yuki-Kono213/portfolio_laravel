<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body>
    <div class="title">Yuki's Portfolio</div>
    <div class="top-image">
        <img src="{{ asset('img/MyImage.png') }}" alt="">
    </div>
    <div class="profile-logo">Profile</div>
    <div class="profile">河野佑希</div>
    <div class="profile">生年月日:1989年2月13日</div>
    <div class="profile">私は高校在学中にプログラミングに興味を持ち、学習を開始しています。
        その後は、高校を卒業して家業を手伝う合間に独学で学習していました。<br>
        2015年、アカデミックな学問を学びたいと考え、大学に入学しています。<br>
        大学を卒業した後は、エイコー測器株式会社にエンジニアとして入社し、簡単なアプリケーションの制作や組み込みシステムのテストを担当しておりました。<br>
        しかし、働いている中で、作業の効率化や業務の短縮といったもののためにソフトウェアを製作することに興味を持ち、プログラミングスクールで学習を開始しました。<br>
        自分の長所は製作物の出来栄えにこだわる所です。製作物を使っていて不満を感じた箇所は、すぐに修正することを心掛けています。<br>
        特技は、文章の間違いを発見することです。本をざっと見て違和感を感じた箇所は体感で8割程度の確率で誤字や脱字が存在しています。<br>
        また、歴史について学ぶこととゲーム制作が趣味です。
    </div>

    <div class="skill">Skill</div>
    <table class="skillList">
        <tr class="skillTable">
            <td class="skillBox">
                <span class="skillHeader">C#</span>
                <span class="skillRate">★★★☆☆</span>
            </td>
            <td class="skillBox">
                <span class="skillHeader">Java</span>
                <span class="skillRate">★★★☆☆</span>
            </td>
            <td class="skillBox">
                <span class="skillHeader">PHP</span>
                <span class="skillRate">★★☆☆☆</span>
            </td>
        <tr class="skillTable">
            <td class="skillBox">
                <span class="skillHeader">JavaScript</span>
                <span class="skillRate">★★☆☆☆</span>
            </td>
            <td class="skillBox">
                <span class="skillHeader">Laravel</span>
                <span class="skillRate">★★☆☆☆</span>
            </td>
            <td class="skillBox">
                <span class="skillHeader">Unity</span>
                <span class="skillRate">★☆☆☆☆</span>
            </td>
        </tr>
    </table>
    <div class="skillRank">
        スキルランク説明<br>
        3:Paiza Aランクテストに合格できるレベル<br>
        2:技術を使用して制作物が公開できるレベル<br>
        1:制作物が公開できるが、あまり理解できていないレベル<br>
    </div>
    <div class="works">My Products</div>
    <div class="container">
        <div class="product">
            <div class="title">地震監視システム<br>
                (講師によるチェック中)</div>
            <div class="imgbox">
                <img src="{{ asset('img/QuakeMonitor.png') }}" alt="">
            </div>
            <div class="button-box">
                <a class="button" href="https://team45.herokuapp.com">WebSite</a>
                {{-- <a class="button" href="https://github.com/Yuki-Kono213/TEAM45">GitHub</a> --}}
            </div>
            <div>　プログラミングスクール『テックアイエス』のチーム開発で製作しました。
                私は地震をデータベースに保存する処理と画面表示機能を担当しました。<br>
                地震を視覚的に分かりやすく表現するためにJavaScriptで描画しています。
                また、特定の地震をクリックすると中央に表示される機能も実装されています。
            </div>
            <br>
            <div>laravel / SQL / JavaScript</div>
        </div>
        <div class="product">
            <div class="title"> ランダム映画 <br><br> </div>
            <div class="imgbox">
                <img id="randommoviepic" src="{{ asset('img/Random-Movie1.png') }}" alt="">
            </div>
            <div class="button-box">
                <a class="button" href="https://movie-randomizer-kono.herokuapp.com/">WebSite</a>
                <a class="button" href="https://github.com/Yuki-Kono213/Movie-Randomizer">GitHub</a>
            </div>
            <div>　映画サイト『TMDB』のAPIを使用したツールです。
                「暇だけど、見たい映画がない人」のために作りました。<br>
                条件を指定すると、その条件に合致する映画をランダムで探し出してくれます。
                会員登録をすれば、すでに見た映画を登録、採点することができます。
                画像の表示を行うので速度を確保するために、非同期通信を用いています。
            </div>
            <br>
            <div>laravel / SQL / TMDB API</div>
        </div>
        <div class="product">
            <div class="title">pdfビューワー</div>
            <div class="imgbox">
                <img src="{{ asset('img/pdfViewer.png') }}" alt="">
            </div>
            <div class="button-box">
                <a class="button" href="https://github.com/Yuki-Kono213/pdfViewer2021">GitHub</a>
                <a class="button" href="{{ asset('zip/PDFViewer.zip') }}" download="PDFViewer.zip">Windows</a>
            </div>
            <div>　指定したフォルダ内のPDFファイルをリストに表示し、
                選択するだけでビューを表示できるソフトです。<br>
                以前の職場でpdfファイルを使用する機会が多く、その都度ファイルを開くより効率的な方法を考えて作りました。
            </div>
            <br>
            <div>C#</div>
        </div>
        <div class="product">
            <div class="title">有名人誕生周年表示ツール</div>
            <div class="imgbox">
                <img src="{{ asset('img/PersonBirth.png') }}" alt="">
            </div>
            <div class="button-box">
                <a class="button" href="https://github.com/Yuki-Kono213/WikiPersonCalendar">GitHub</a>
                <a class="button" href="{{ asset('zip/WikiPersonCalendar') }}" download="WikiPersonCalendar.zip">Windows</a>
            </div>
            <div>　起動した日付のWikipediaからデータを取得し、
                誕生から10の倍数周年が経過した人物の名前と周年を表示します。<br>
                Webスクレイピングの練習を兼ねて作成しました。
                Wikipediaは色々な人が手打ちで入力するため、ガイドラインに沿っていない記述によっては例外処理が発生し、すべての人物を取得できないことが課題です。
            </div>
            <br>
            <div>C#</div>
        </div>
        <div class="product">
            <div class="title">自作シミュレーションゲーム<br>(作成中 完成日未定)
            </div>
            <div class="imgbox">
                <img src="{{ asset('img/SLG.png') }}" alt="">
            </div>
            <div class="button-box">
                <a class="button" href="https://srpg-slg.herokuapp.com/index.html">Play</a>
            </div>
            <div>　C#の学習を兼ねて作成しているゲームです。<br>
                Unityでゲームを作成しているので、Web環境でも遊ぶことができます。
                戦闘の場面で思ったようにCPUキャラクターが行動してくれなかったので、試行錯誤を重ねました。
            </div>
            <br>
            <div>C# / Unity</div>
        </div>
        <div class="product">

            <div class="title">請求書管理ツール<br>(作成中 5月完成予定)
            </div>
            <div class="imgbox">
                <img id="clientmanagerpic" src="{{ asset('img/ClientManager.png') }}" alt="">
            </div>
            <div class="button-box">
                <a class="button" href="https://github.com/Yuki-Kono213/ClientManager">Github</a>
                <a class="button" href="{{ asset('zip/ClientManager.zip') }}" download="ClientManager.zip">Windows</a>
            </div>
            <div>　Javaの学習で作成しているツールです。<br>
                入力フォームで打ち込まれた値をExcelで作成された請求書の雛型に書き込む処理と、
                値をデータベースに保存し、ビューで閲覧できるようにする機能を持っています。
                実家の民宿の業務効率化を目的として作成しています。
            </div>
            <br>
            <div>Java / SQL</div>
            <script type="text/javascript">
                var elem = document.getElementById("clientmanagerpic");
                elem.addEventListener("mouseover", function(event) {
                    setTimeout(function() {
                        elem.src = "{{ asset('img/ClientManagerPic.png') }}";
                    }, 200);
                }, false);
                var elem = document.getElementById("clientmanagerpic");
                elem.addEventListener("mouseleave", function(event) {
                    setTimeout(function() {
                        elem.src = "{{ asset('img/ClientManager.png') }}";
                    }, 200);
                }, false);
                var elem2 = document.getElementById("randommoviepic");
                elem2.addEventListener("mouseover", function(event) {
                    setTimeout(function() {
                        elem2.src = "{{ asset('img/Random-Movie2.png') }}";
                    }, 200);
                }, false);
                var elem2 = document.getElementById("randommoviepic");
                elem2.addEventListener("mouseleave", function(event) {
                    setTimeout(function() {
                        elem2.src = src = "{{ asset('img/Random-Movie1.png') }}";
                    }, 200);
                }, false);
            </script>
        </div>
    </div>
</body>

</html>
