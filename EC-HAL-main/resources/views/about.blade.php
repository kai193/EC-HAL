<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/nav.css">
</head>

<body>
<header class="header">
        <div class="content">
            <div class="head_log">
                <img src="images/log.png" alt="ECサイトロゴ">
            </div>
                <div class="header_log_nav">
                    <div class="btn">
                        <button type="button"><a href="{{route('login')}}">LOGIN</a></button>
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
                                            <a href="{{route('about')}}">Skill Masterとは？</a>
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
                                            <a href="{{route('Member')}}">先生になる</a>
                                        </div>
                                        <figure class="line">
                                            <img src="images/Line.png" alt="矢印">
                                        </figure>
                                    </li>
                                </ul>
                                <div class="nav_text">
                                    <p> <a href="{{route('login')}}">ログイン</a></p>
                                    <p> <a href="{{route('register')}}">新規会員登録</a></p>
                                    <p> <a href="{{route('contact')}}">お問い合わせ</a></p>
                                </div>
                                <figure class="nav_sns_icon">
                                <a href="{{route('about')}}"><img src="images/instagram_icon.svg" alt="facebook"></a>
                                <a href="{{route('about')}}"><img src="images/twitter_icon.svg" alt="twitter"></a>
                                <a href="{{route('about')}}"><img src="images/facebook_icon.svg" alt="instagram"></a>
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

    <div class="wrapper">
        <div class="main-text">
            <h1>About</h1>
            <p>Skill Masterとは？</p>
        </div>

        <div class="content-wrapper">
            <div class="about-content">
                <div class="content-img1">
                    <img src="images/programming/program.a.jpg" alt="仮">
                </div>

                <div class="content-img2">
                    <img src="images/gengo/aboutg.jpg" alt="仮">
                </div>
            </div>
            <div class="about-text">
                <h1>スキルで繋がる新しい物語</h1>
                <p>スキルシェアを通して、思いがけない才能との出会い<br>
                    誰もが主人公になれる、自立と協働の社会の実現<br>
                    地域全体が豊かになる、持続可能な社会の実現<br>
                    変化の激しい時代を生き抜くための、学びと成長の場<br>
                    国境や文化を超えて、人々が繋がるグローバルなプラットフォーム
                </p>
            </div>
        </div>

        <div class="explanation-wrapper">
            <div class="explanation-text">
                <p>新しい出会い: 世界中の人とつながって、<br>
                    思わぬコラボが生まれたり、新しい趣味を見つかる。<br>
                    スキマ時間を有効活用: 通勤時間や家事の合間など、<br>
                    ちょっとした時間で収入を得られます。<br>
                    自己成長: 自分のスキルを人に教えることで、<br>
                    より深く理解を深めることができます。</p>

                <h2 class="sub-text">それを叶えられるのが Skill Master</h2>
            </div>

            <div class="explanation-image">
                <img src="images/kari.jpg" alt="Skill Master">
                <img src="images/kari.jpg" alt="Skill Master">
            </div>
        </div>
    </div>

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

    <footer class="footer">
        <div class="footer-text">
            <p>© 2024 See heart</p>
        </div>
    </footer>
</body>

</html>
