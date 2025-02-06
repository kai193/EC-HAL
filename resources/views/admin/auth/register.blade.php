<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    <link rel="stylesheet" href="css/teacher.css">
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
    <main>
        <section class="new_member">
            <div class="new_member_container">
                <h1>講師登録</h1>
                <p>先生としてSkill Masterを始めるための
                    <br>ご登録方法や各種機能についてご案内します。
                </p>
            </div>
            <ul class="new_member_process">
                <li>
                    <h3 class="number">1</h3>
                    <p class="number_txt">情報の入力</p>
                </li>
                <li>
                    <h3 class="number">2</h3>
                    <p class="number_txt">メールアドレス認証</p>
                </li>
                <li>
                    <h3 class="number">3</h3>
                    <p class="number_txt">登録完了</p>
                </li>
            </ul>
        </section>

        <!-- <x-guest-layout> -->
            <form method="POST" action="{{ route('admin.register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="phone" :value="__('Phone')" />
                    <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="phone" />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- 性別 -->
                <div class="mt-4">
                    <x-input-label for="gender" :value="__('Gender')" />
                    <select id="gender" name="gender" class="block mt-1 w-full" required>
                        <option value="">性別を選択</option>
                        <option value="male">男性</option>
                        <option value="female">女性</option>
                        <option value="other">その他</option>
                    </select>
                    <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                </div>

                <!-- 生年月日の代わりに年齢 -->
                <div class="mt-4">
                    <x-input-label for="age" :value="__('Age')" />
                    <x-text-input id="age" class="block mt-1 w-full"
                                  type="number"
                                  name="age"
                                  :value="old('age')"
                                  required
                                  min="18"
                                  max="100" />
                    <x-input-error :messages="$errors->get('age')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ms-4">
                        {{ __('Register') }}
                    </x-primary-button>

                </div>
            </form>
        <!-- </x-guest-layout> -->
    </main>
    <footer class="footer">
        <div class="footer-text">
            <p>© 2024 See heart</p>
        </div>
    </footer>
</body>
</html>

