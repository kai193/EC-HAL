<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スキルシェアECサイト</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/index.css">
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
                                    <p> <a href="{{route('about')}}">新規会員登録</a></p>
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
    <main class="main">
        <div class="main-visual">
            <div class="main-visual-slider">
                <div class="image-container">
                    <img src="images/Group 50.jpg" alt="メインビジュアルスライダー">
                    <img src="images/Group 52.jpg" alt="メインビジュアルスライダー">
                    <img src="images/Group 54.jpg" alt="メインビジュアルスライダー">
                </div>
                <h1 class="main"><a href="{{ route('about') }}">Skill Masterとは？</a></h1>
            </div>
        </div>
        <section class="ranking">
            <h2 class="ranking_ttl">Ranking</h2>
            <p class="ranking_text">ランキング</p>
            <div class="ranking_item">
                <figure class="ranking_content">
                    <p class="ranking_item_text">no.<span class="number">1</span></p>
                    <a href="{{ route('E-sport') }}"><img src="images/programming1.jpg"></a>
                    <figcaption class="ranking_introduction">
                        <p class="ranking_item_introduction">現役エンジニアが教える！<br>即戦力プログラミング講座</p>
                        <div class="bg_popularity">
                        </div>
                        <p class="popularity">人気上昇中🔥<span class="yen">¥3,740</span></p>
                        <div class="ranking_btn">
                            <button><a href="{{route('programming')}}">詳細を見る</a></button>
                        </div>
                    </figcaption>
                </figure>
                <figure class="ranking_content">
                    <p class="ranking_item_text">no.<span class="number">2</span></p>
                    <img src="images/programming2.jpg">
                    <figcaption class="ranking_introduction">
                        <p class="ranking_item_introduction">現役エンジニアが教える！<br>ハイレベルプログラミング</p>
                        <div class="bg_popularity">
                        </div>
                        <p class="popularity">殿堂入り👑<span class="yen">¥3,740</span></p>
                        <button class="ranking_btn"><a href="{{route('programming')}}">詳細を見る</a></button>
                    </figcaption>
                </figure>
                <figure class="ranking_content">
                    <p class="ranking_item_text">no.<span class="number">4</span></p>
                    <img src="images/programming4.jpg">
                    <figcaption class="ranking_introduction">
                        <p class="ranking_item_introduction">本格中華料理の極意<br>家庭で味わえる本格中華</p>
                        <div class="bg_popularity">
                        </div>
                        <p class="popularity">殿堂入り👑<span class="yen">¥3,740</span></p>
                        <button class="ranking_btn"><a href="{{route('cooking')}}">詳細を見る</a></button>
                    </figcaption>
                </figure>
                <figure class="ranking_content">
                    <p class="ranking_item_text">no.<span class="number">5</span></p>
                    <img src="images/programming4.jpg">
                    <figcaption class="ranking_introduction">
                        <p class="ranking_item_introduction">本格中華料理の極意<br>家庭で味わえる本格中華</p>
                        <div class="bg_popularity">
                        </div>
                        <p class="popularity">殿堂入り👑<span class="yen">¥3,740</span></p>
                        <button class="ranking_btn"><a href="{{route('cooking')}}">詳細を見る</a></button>
                    </figcaption>
                </figure>
            </div>
        </section>
        <section class="recommended">
            <h2 class="recommended_ttl">Recommended</h2>
            <p class="recommended_text">おすすめ</p>
            <div class="ranking_item">
                <figure class="ranking_content">
                    <img src="images/gengo1.jpg">
                    <figcaption class="ranking_introduction">
                        <p class="ranking_item_introduction">現役エンジニアが教える！<br>即戦力プログラミング講座</p>
                        <div class="bg_popularity">
                        </div>
                        <p class="popularity">人気上昇中🔥<span class="yen">¥3,740</span></p>
                        <div class="ranking_btn">
                            <button><a href="{{route('programming')}}">詳細を見る</a></button>
                        </div>
                    </figcaption>
                </figure>
                <figure class="ranking_content">
                    <img src="images/gengo.jpg">
                    <figcaption class="ranking_introduction">
                        <p class="ranking_item_introduction">現役エンジニアが教える！<br>ハイレベルプログラミング</p>
                        <div class="bg_popularity">
                        </div>
                        <p class="popularity">殿堂入り👑<span class="yen">¥3,740</span></p>
                        <button class="ranking_btn"><a href="{{route('programming')}}">詳細を見る</a></button>
                    </figcaption>
                </figure>
                <figure class="ranking_content">
                    <img src="images/gengo1.jpg">
                    <figcaption class="ranking_introduction">
                        <p class="ranking_item_introduction">現役デザイナーが教える！<br>デザイン基礎講座</p>
                        <p><br><br><br><br><br><br><br></p>
                    </figcaption>
                </figure>
                <figure class="ranking_content">
                    <img src="images/gengo1.jpg">
                    <figcaption class="ranking_introduction">
                        <p class="ranking_item_introduction">本格中華料理の極意<br>家庭で味わえる本格中華</p>
                        <div class="bg_popularity">
                        </div>
                        <p class="popularity">殿堂入り👑<span class="yen">¥3,740</span></p>
                        <button class="ranking_btn"><a href="{{route('cooking')}}">詳細を見る</a></button>
                    </figcaption>
                </figure>
            </div>
        </section>
        <section class="learn">
            <h2 class="learn_ttl">You can learn</h2>
            <p class="learn_text">おすすめ</p>
            <div class="learn_bg1">
                <div class="learn_bg">
                    <img src="images/Vector 8.png">
                    <div class="content_item">
                        <div class="learn_content">
                            <img src="images/design.jpg">
                            <ul class="list">
                                <li class="le_content">学べる内容</li>
                                <li>・HTML/CSS</li>
                                <li>・javascript</li>
                                <li>・php</li>
                                <li>・java</li>
                            </ul>
                        </div>
                    </div>
                    <div class="learn_content_text">
                        <p>好きな時間に、好きな場所で学習: 通勤時間や家事の合間など、スキマ時間を有効活用できます。
                            プロの講師から直接指導: 実務経験豊富な講師から、実践的なスキルを学ぶことができます。
                            繰り返し学習できる: 理解できない部分は何度でも繰り返し学習できます。</p>
                    </div>
                </div>
                <div class="learn_bg2">
                    <img src="images/Vector 8.png">
                        <div class="content_item">
                            <div class="learn_content1">
                                <img src="images/design.jpg">
                                <ul>
                                    <li class="le_content">学べる内容</li>
                                    <li>・HTML/CSS</li>
                                    <li>・javascript</li>
                                    <li>・php</li>
                                    <li>・java</li>
                                </ul>
                            </div>
                        </div>
                    <div class="learn_content_text">
                        <p>好きな時間に、好きな場所で学習: 通勤時間や家事の合間など、スキマ時間を有効活用できます。
                            プロの講師から直接指導: 実務経験豊富な講師から、実践的なスキルを学ぶことができます。
                            繰り返し学習できる: 理解できない部分は何度でも繰り返し学習できます。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="scene">
            <h1 class="scene_ttl">scene</h1>
            <p class="scene_text">シーンや気持ちで探す</p>
            <div class="scene-list">
                <ul class="scene_list_ul">
                    <li><a href="{{route('music')}}">音楽したい🎹</li></a>
                    <li><a href="{{route('programming')}}">プログラミングを学びたい  💻</li></a>
                    <li><a href="{{route('language')}}">外国語を学びたい🇺🇸</li></a>
                </ul>
                <ul class="scene_list_ul">
                    <li><a href="{{route('cooking')}}">料理したい気分🍳</li></a>
                    <li><a href="{{route('design')}}">デザインしたい  🎨</li></a>
                    <li><a href="{{route('E-sport')}}">ゲームしたい</li></a>
                </ul>
            </div>
        </div>
        </section>
        <section class="category">
            <h1 class="category_ttl">Category</h1>
            <p class="category_text">カテゴリーから探す</p>
            <div class="circle_content">
                <figure class="circle_img">
                <a href="{{route('music')}}"><img src="images/music.jpg"></a>
                    <figcaption class="circle_title">
                        <p class="circle_text">#音楽</p>
                    </figcaption>
                </figure>
                <figure class="circle_img">
                <a href="{{route('programming')}}"><img src="images/programming.jpg"></a>
                    <figcaption class="circle_title">
                        <p class="circle_text">#プログラミング</p>
                    </figcaption>
                </figure>
                <figure class="circle_img">
                <a href="{{route('language')}}"><img src="images/gengo.jpg"></a>
                    <figcaption class="circle_title">
                        <p class="circle_text">#語学</p>
                    </figcaption>
                </figure>
            </div>
            <div class="circle_content">
                <figure class="circle_img">
                <a href="{{route('cooking')}}"><img src="images/ryouri.jpg"></a>
                    <figcaption class="circle_title">
                        <p class="circle_text">#料理</p>
                    </figcaption>
                </figure>
                <figure class="circle_img">
                <a href="{{route('design')}}"><img src="images/design.jpg"></a>
                    <figcaption class="circle_title">
                        <p class="circle_text">#デザイン</p>
                    </figcaption>
                </figure>
                <figure class="circle_img">
                <a href="{{ route('E-sport') }}"><img src="images/E-spo.jpg"></a>
                    <figcaption class="circle_title">
                        <p class="circle_text"> #E-sport</p>
                    </figcaption>
                </figure>
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
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/header-nave.js') }}"></script>
    <script>
         document.addEventListener("DOMContentLoaded", function() {
            let currentIndex = 0;
            const images = document.querySelectorAll('.image-container img');
            const totalImages = images.length;

            function showNextImage() {
                images[currentIndex].classList.remove('active');
                currentIndex = (currentIndex + 1) % totalImages;
                images[currentIndex].classList.add('active');
            }

            // 最初の画像を表示
            images[currentIndex].classList.add('active');

            // 3秒ごとに画像を切り替える
            setInterval(showNextImage, 3000);
        });


         document.addEventListener('DOMContentLoaded', () => {
            const sliderWrapper = document.querySelector('.slider-wrapper');
            const prevButton = document.querySelector('.prev');
            const nextButton = document.querySelector('.next');
            const slides = document.querySelectorAll('.slide');
            let currentIndex = 0;

            function showSlide(index) {
                const totalSlides = slides.length;
                if (index < 0) index = totalSlides - 1;
                if (index >= totalSlides) index = 0;
                sliderWrapper.style.transform = `translateX(-${index * 100}%)`;
                currentIndex = index;
            }

            prevButton.addEventListener('click', () => {
                showSlide(currentIndex - 1);
            });

            nextButton.addEventListener('click', () => {
                showSlide(currentIndex + 1);
            });


        });
    </script>
</body>

</html>
