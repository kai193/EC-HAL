<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ECサイト</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Barcode+128+Text&display=swap" rel="stylesheet">


</head>
<body>
    <header class="header">
        <div class="content">
            <div class="head_log">
                <img src="images/log.png" alt="ECサイトロゴ">
            </div>
                <div class="header_log_nav">
                    <div class="btn">
                        <button type="button">LOGIN</button>
                    </div>
                    <div class="head_log_cart">
                        <img src="images/cart.svg" alt="カート">
                    </div>
                    <div id="navArea">
                        <nav class="header-nave">
                            <div class="inner">
                                <ul >
                                    <li class="inner_nav">
                                        <div class="nav_content">
                                            <img src="images/Vector.png" alt="疑問符">
                                            <a href="#">Skill Masterとは？</a>
                                        </div>
                                        <figure class="line">
                                            <img src="images/Line.png" alt="矢印">
                                        </figure>
                                    </li>
                                    <li class="inner_nav">
                                        <div class="nav_content">
                                            <img src="images/kensaku.png" alt="検索">
                                            <a href="#">先生を探す</a>
                                        </div>
                                        <figure class="line">
                                            <img src="images/Line.png" alt="矢印">
                                        </figure>
                                    </li>
                                    <li class="inner_nav">
                                        <div class="nav_content">
                                            <img src="images/teacher.png" alt="先生">
                                            <a href="#">先生になる</a>
                                        </div>
                                        <figure class="line">
                                            <img src="images/Line.png" alt="矢印">
                                        </figure>
                                    </li>
                                </ul>
                                <div class="nav_text">
                                    <p><a href="#">ログイン</a></p>
                                    <p><a href="#">新規会員登録</a></p>
                                    <p><a href="#">お問い合わせ</a></p>
                                </div>
                                <figure class="nav_sns_icon">
                                    <a href="#"><img src="images/instagram_icon.svg" alt="facebook"></a>
                                    <a href="#"><img src="images/twitter_icon.svg" alt="twitter"></a>
                                    <a href="#"><img src="images/facebook_icon.svg" alt="instagram"></a>
                                </figure>
                            </div>
                        </nav>
                        <div class="toggle-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div id="mask"></div>
                    </div>
                </div>
            </div>
    </header>
    <main>
        <section class="main_section">
            <h1 class="main_title">Programming</h1>
            <h2 class="main_title_sub">Programming</h1>
            <div class="main_visual">
                <figure class="main_img">
                    <img src="images/programming.jpg">
                </figure>
                <figcaption class="main_text">
                    <h2 class="text">初心者向けPythonコース<br>
                        Webサイト制作コース
                    </h2>
                    <div class="price_content">
                        <p class="price">¥5,740<span class="price_tex">消費税込み</span></p>
                        <figure class="main_figure">
                            <img src="images/heart.svg">
                        </figure>
                    </div>
                    <div class="second_btn">
                        <button type="button" class="detail"><img src="./images/cart_btn.png"><span class="cart_text"> カートに入れる</span></button>
                    </div>
                </figcaption>
            </div>
        </section>
        <section class="content_section">
            <h3 class="content_ttl">コース内容</h3>
            <div class="menu">
                <label for="menu_bar01">はじめに</label>
                <input type="checkbox" id="menu_bar01" />
                <ul id="links01" >
                    <li class="slide"><a href="">【スライド】 本講座について</a><span class="kousi">プレビュー<span class="time">03:40</span></span></li>
                    <li class="slide"><a href="">【スライド】 本講座について</a><span class="kousi">プレビュー<span class="time">03:40</span></span></li>
                </ul>
                <label for="menu_bar02">Pythonの基礎 変数、データ型、演算子 制御構文</label>
                <input type="checkbox" id="menu_bar02" />
                <ul id="links02">
                    <li class="slide"><a href="">【スライド】 本講座について</a><span class="kousi">プレビュー<span class="time">03:40</span></span></li>
                    <li class="slide"><a href="">【スライド】 本講座について</a><span class="kousi">プレビュー<span class="time">03:40</span></span></li>
                </ul>
                <label for="menu_bar03">関数 データ分析リスト、辞書、セット ファイル入出力</label>
                <input type="checkbox" id="menu_bar03" />
                <ul id="links03">
                    <li class="slide"><a href="">【スライド】 本講座について</a><span class="kousi">プレビュー<span class="time">03:40</span></span></li>
                    <li class="slide"><a href="">【スライド】 本講座について</a><span class="kousi">プレビュー<span class="time">03:40</span></span></li>
                </ul>
                <label for="menu_bar04">データ分析ライブラリ（NumPy、Pandas）</label>
                <input type="checkbox" id="menu_bar04" />
                <ul id="links04">
                    <li class="slide"><a href="">【スライド】 本講座について</a><span class="kousi">プレビュー<span class="time">03:40</span></span></li>
                    <li class="slide"><a href="">【スライド】 本講座について</a><span class="kousi">プレビュー<span class="time">03:40</span></span></li>
                </ul>
                <label for="menu_bar05">プログラミングによる問題解決 標準入力・出力</label>
                <input type="checkbox" id="menu_bar05" />
                <ul id="links05">
                    <li class="slide"><a href="">【スライド】 本講座について</a><span class="kousi">プレビュー<span class="time">03:40</span></span></li>
                    <li class="slide"><a href="">【スライド】 本講座について</a><span class="kousi">プレビュー<span class="time">03:40</span></span></li>
                </ul>
            </div>
        </section>
        <h2 class="instructor_txt">instructor</h2>
        <section class="profile_section">

            <div class="profile_content_main">
            <h3 class="profile_ttl">講師</h3>
            <h4 class="profile_name">Masaki kondo ( 近藤将暉 )</h4>
            <div class="profile_content">
                <figure class="profile_img">
                    <img src="images/programming1.jpg">
                </figure>
                <figcaption class="profile_caption">
                    <p class="profile_text">★ <span class="evaluation">講師評価 : 4.5</span></p>
                    <p class="profile_text">★ <span class="evaluation">レビューの数 : 552</span></p>
                    <p class="profile_text">★ <span class="evaluation">受講生 : 331人</span></p>
                </figcaption>
            </div>
                <div class="sentence">
                    <p class="sentence_text">株式会社マイクロソフトにてWebエンジニアとして5年間勤務
                        主な担当業務 : Webサイトの企画・設計・開発、保守運用
                        得意言語 : Python, JavaScript, HTML/CSS
                        好きな開発環境 : Visual Studio Code
                        講師歴 : 2年間
                        指導経験 : 初心者向けPythonコース、Webサイト制作コース</p>
                </div>
            </div>
        </section>
        <section class="course_section">
            <figure class="course_ttl">
                <img src="images/Star 2.svg">
                <figcaption class="course_text">
                    <p>コース評価 : 4.5 </p>
                </figcaption>
            </figure>
                <div class="content_01">
                    <div class="content_02">
                        <div class="course_content">
                            <figure class="course_img">
                                <img src="images/yuuki.jpeg">
                            </figure>
                            <figcaption class="coures_caption">
                                <p>佐々木浩志</p>
                                <p>★ ★ ★ ★ ★ <span>1週間前</span></p>
                            </figcaption>
                        </div>
                        <div class="course_content_text">
                            <p>データ分析の流れ・全体像を知る上で大変有
                                用な講座だと感じました。本講座の目的を十
                                分に達成する内容・構成になっていると感じ
                                ました。</p>
                        </div>
                    </div>
                    <div class="content_02">
                        <div class="course_content">
                            <figure class="course_img">
                                <img src="images/yuuki.jpeg">
                            </figure>
                            <figcaption class="coures_caption">
                                <p>佐々木浩志</p>
                                <p>★ ★ ★ ★ ★ <span>1週間前</span></p>
                            </figcaption>
                        </div>
                        <div class="course_content_text">
                            <p>データ分析の流れ・全体像を知る上で大変有
                                用な講座だと感じました。本講座の目的を十
                                分に達成する内容・構成になっていると感じ
                                ました。</p>
                        </div>
                    </div>
                </div>
                <div class="content_01">
                    <div class="content_02">
                        <div class="course_content">
                            <figure class="course_img">
                                <img src="images/yuuki.jpeg">
                            </figure>
                            <figcaption class="coures_caption">
                                <p>佐々木浩志</p>
                                <p>★ ★ ★ ★ ★ <span>1週間前</span></p>
                            </figcaption>
                        </div>
                        <div class="course_content_text">
                            <p>データ分析の流れ・全体像を知る上で大変有
                                用な講座だと感じました。本講座の目的を十
                                分に達成する内容・構成になっていると感じ
                                ました。</p>
                        </div>
                    </div>
                    <div class="content_02">
                        <div class="course_content">
                            <figure class="course_img">
                                <img src="images/yuuki.jpeg">
                            </figure>
                            <figcaption class="coures_caption">
                                <p>佐々木浩志</p>
                                <p>★ ★ ★ ★ ★ <span>1週間前</span></p>
                            </figcaption>
                        </div>
                        <div class="course_content_text">
                            <p>データ分析の流れ・全体像を知る上で大変有
                                用な講座だと感じました。本講座の目的を十
                                分に達成する内容・構成になっていると感じ
                                ました。</p>
                        </div>
                    </div>
                </div>
        </section>
        <section class="sns_content">
            <div class="sns_area">
                <figure class="sns_area_img">
                    <img src="images/log.png" alt="ECサイトロゴ">
                </figure>
                <figure class="sns_icon">
                    <a href="#"><img src="images/instagram_icon.svg" alt="facebook"></a>
                    <a href="#"><img src="images/twitter_icon.svg" alt="twitter"></a>
                    <a href="#"><img src="images/facebook_icon.svg" alt="instagram"></a>
                </figure>
                <div class="sns_area_text">
                    <p>先生になる</p>
                    <p><a href="{{route('login')}}">ログイン・新規会員登録</a></p>
                </div>
                <div class="inquiry">
                    <p><a href="{{route('contact')}}">| よくある質問</a></p>
                    <p><a href="{{route('contact')}}">| お問い合わせ</a></p>
                    <p><a href="{{route('cooking')}}">| プライバシーポリシー</a></p>
                    <p><a href="{{route('cooking')}}">| ご利用規約</a></p>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer-text">
            <p>© 2024 See heart</p>
        </div>
    </footer>

</main>
    <script src="js/header-nave.js"></script>
</body>
</html>
