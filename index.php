<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="フリーでWEBデザイナー・コーダーを目指すU235のポートフォリオ。">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>U235 Portfolio</title>
    <!-- RESS -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link href="top.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/intersection-observer.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- favicon  -->
    <link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body ontouchstart="">
    <header>
        <div class="header">
            <a class ="logo" href="#main-visual">U235</a>
            <nav>
                <ul class="gnav-list">
                    <li class="sp"><a href="#main-visual">Top</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#works">Works</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <button type="button" class="sp menu-btn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </header>
    <main>
        <section id="main-visual" class="box">
            <div class="background-curve"></div>
            <div class="main-visual-content wrapper">
                <div class="catchphrase">
                    <h1>U235</h1>
                    <p>デザインとコードで紡ぐ、<br>心地よいWEBサイトづくり</p>
                </div>
                <div class="cat-container">
                    <img class="main-cat" src="img/main-cat.png" alt="黒猫">
                    <div class="speech-bubble">
                        <div class="speech-text">Welcome to<br>My Portfolio.</div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="box">
            <div class="wrapper">
                    <div class="content-menu">
                        <h2>About</h2>
                        <nav>
                            <ul class="cnav-list">
                                <li class="tab active">Profile</li>
                                <li class="tab">Skill</li>
                                <li class="tab">Career</li>
                                <li class="tab">Message</li>
                            </ul>
                        </nav>
                    </div>
                    <div class="container">
                        <div class="content show">
                            <h3>Profile</h3>
                            <div class="profile">
                                <div class="avatar">
                                    <img src="img/prof-cat.png" alt="U235のアバター">
                                </div>
                                <div class="profile-text">
                                    <span>U235</span>
                                    <p>1996年生まれ。千葉出身です。</p>
                                    <p>大学卒業後は上京し、総合病院にて看護師として勤めました。<br>現在は保育園看護師として働いています。</p>
                                    <p>将来的は在宅で仕事をしていきたいと思い、働きながらWEBCOACHでWEBデザインやコーディングを勉強中です。</p>
                                    <dl>
                                        <dt>保有資格</dt>
                                        <dd>看護師、保健師、助産師</dd>
                                        <dt>好きなもの</dt>
                                        <dd>猫、甘いもの、睡眠、Hello! Project</dd>
                                        <dt>趣味</dt>
                                        <dd>道の駅巡り、ドラクエウォークをしながら散歩</dd>
                                        <dt>強み</dt>
                                        <dd>継続力、勉強が好き、コミュニケーション力</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <h3>Skill</h3>
                            <div class="skill">
                                <div class="skill-item">
                                    <div class="skill-icon">
                                        <i class="fa-brands fa-html5"></i>
                                        <p>HTML</p>
                                    </div>
                                    <div class="skill-info">
                                        <p>見やすく、メンテナンスしやすいコーディングを心掛けています。</p>
                                    </div>
                                    <div class="progress-list">
                                        <div class="progress-detail"></div>
                                        <span class="score" data-score="70"></span>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-icon">
                                        <i class="fa-brands fa-css3-alt"></i>
                                        <p>CSS</p>
                                    </div>
                                    <div class="skill-info">
                                        <p>基本的なスタイリングが可能です。レスポンシブ対応もできます。</p>
                                    </div>
                                    <div class="progress-list">
                                        <div class="progress-detail"></div>
                                        <span class="score" data-score="60"></span>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-icon">
                                        <i class="fa-brands fa-js"></i>
                                        <p>JavaScript</p>
                                    </div>
                                    <div class="skill-info">
                                        <p>jQueryを用い、スムーズなスクロールやフィルター機能などの操作が可能です。</p>
                                    </div>
                                    <div class="progress-list">
                                        <div class="progress-detail"></div>
                                        <span class="score" data-score="40"></span>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-icon">
                                        <i class="fa-brands fa-php"></i>
                                        <p>PHP</p>
                                    </div>
                                    <div class="skill-info">
                                        <p>まだ勉強中です。Progateでの学習を一通り終えました。</p>
                                    </div>
                                    <div class="progress-list">
                                        <div class="progress-detail"></div>
                                        <span class="score" data-score="20"></span>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-icon">
                                        <i class="fa-brands fa-wordpress"></i>
                                        <p>WordPress</p>
                                    </div>
                                    <div class="skill-info">
                                        <p>まだ勉強中ではありますが、オリジナルテーマを作成できます。</p>
                                    </div>
                                    <div class="progress-list">
                                        <div class="progress-detail"></div>
                                        <span class="score" data-score="30"></span>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-icon">
                                        <i class="fa-brands fa-wix"></i>
                                        <p>WIX</p>
                                    </div>
                                    <div class="skill-info">
                                        <p>ノーコードでお客様が修正しやすいWEBサイト作成が可能です。</p>
                                    </div>
                                    <div class="progress-list">
                                        <div class="progress-detail"></div>
                                        <span class="score" data-score="60"></span>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-icon">
                                        <i class="fa-brands fa-figma"></i>
                                        <p>Figma</p>
                                    </div>
                                    <div class="skill-info">
                                        <p>ワイヤーフレームの作成やWEBページのデザインなど基本的な操作が可能です。</p>
                                    </div>
                                    <div class="progress-list">
                                        <div class="progress-detail"></div>
                                        <span class="score" data-score="70"></span>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <div class="skill-icon">
                                        <i class="fa-solid fa-c"></i>
                                        <p>Canva</p>
                                    </div>
                                    <div class="skill-info">
                                        <p>まだ勉強中ですが、基本的な操作が一通りできます。バナーの作成が可能です。</p>
                                    </div>
                                    <div class="progress-list">
                                        <div class="progress-detail"></div>
                                        <span class="score" data-score="70"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <h3>Career</h3>
                            <ul class="timeline">
                                <li>
                                    <p class="timeline-date">1997年～</p>
                                    <div class="timeline-content">
                                        <p>
                                            1歳でMSペイントで遊び、幼稚園でローマ字を取得。小学校2年生で初めてホームページを作成する。WEBの楽しさに触れる。
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <p class="timeline-date">2020年4月</p>
                                    <div class="timeline-content">
                                        <p>
                                            看護大を卒業し、看護師・保健師・助産師の資格を取得。混合病棟に就職し、看護師としてさまざまな患者さんのケアに携わる。
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <p class="timeline-date">2021年4月</p>
                                    <div class="timeline-content">
                                        <p>
                                            保育園看護師に転職。子どもや保護者へのケアやサポートを行う。コロナ禍では保健所や行政と連携して対応を行った。現在は子どもたちが安心して過ごせる環境作りに努めている。
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <p class="timeline-date">2024年9月</p>
                                    <div class="timeline-content">
                                        <p>
                                            WEBCOACHでWEBデザインとコーディングを学び始める。幼少期からのPC経験を活かし、スキルを磨いている。
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>Message</h3>
                            <div class="message">
                                <p>はじめまして。U235と申します。</p>
                                <p>幼い頃からWEBに親しんできた私にとって、WEB制作はただの仕事ではなく、大切なコミュニケーションツールです。初めてホームページを作り、人と繋がった時の感動を今でも大切にしています。その経験が、誰かに喜んでもらえるWEBサイトなどのコンテンツをつくる原動力になっています。</p>
                                <p>クライアント様の思いに寄り添い、目線を共有することを大切にしています。一緒に作り上げることで、より分かりやすく、伝わりやすい、そして訪れた人が心地よいと感じるWEBコンテンツをお届けしたいです。</p>
                                <p>WEBは常に進化する分野です。まだ学ぶ途中ではありますが、この変化を楽しみながら、新しい技術やトレンドを積極的に取り入れています。</p>
                                <p>ここまで読んでいただき、本当にありがとうございます。ひとつひとつの制作を丁寧に、大切に行いながら、あなたの想いを形にするお手伝いができれば嬉しいです。お仕事のご相談やお問い合わせをいただける日を、楽しみにお待ちしています。</p>
                                <p><span>U235</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="works" class="box">
            <div class="wrapper">
                <div class="content-menu">
                    <h2>Works</h2>
                    <nav>
                        <ul class="cnav-list">
                            <li class="tab active">Website</li>
                            <li class="tab">Graphics</li>
                            <li class="tab">Others</li>
                        </ul>
                    </nav>
                </div>
                <div class="container">
                    <div class="content show">
                        <h3>Website</h3>
                        <div class="work-list">
                            <div class="work-item">
                                <a href="works-website7.html" class="work-img">
                                    <img src="img/website7.png" alt="U235 Pordfolio">
                                </a>
                                <div class="work-text">
                                    <div class="work-name">
                                        <p>U235のポートフォリオ</p>
                                    </div>
                                    <ul class="work-type">
                                        <li>Design</li>
                                        <li>Coding</li>
                                    </ul>
                                    <ul class="work-tool">
                                        <li>Figma</li>
                                        <li>HTML/CSS</li>
                                        <li>JavaScript</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="work-item">
                                <a href="works-website6.html" class="work-img">
                                    <img src="img/website6.png" alt="U235 Pordfolio">
                                </a>
                                <div class="work-text">
                                    <div class="work-name">
                                        <p>五反田歯科医院LP（架空）</p>
                                    </div>
                                    <ul class="work-type">
                                        <li>Design</li>
                                    </ul>
                                    <ul class="work-tool">
                                        <li>Figma</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="work-item">
                                <a href="works-website5.html" class="work-img">
                                    <img src="img/website5.png" alt="五反田歯科医院">
                                </a>
                                <div class="work-text">
                                    <div class="work-name">
                                        <p>五反田歯科医院（架空）</p>
                                    </div>
                                    <ul class="work-type">
                                        <li>Design</li>
                                        <li>Coding</li>
                                    </ul>
                                    <ul class="work-tool">
                                        <li>Figma</li>
                                        <li>HTML/CSS</li>
                                        <li>JavaScript</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="work-item">
                                <a href="works-website4.html" class="work-img">
                                    <img src="img/website4.png" alt="Camellia Tea Café">
                                </a>
                                <div class="work-text">
                                    <div class="work-name">
                                        <p>Camellia Tea Café（架空）</p>
                                    </div>
                                    <ul class="work-type">
                                        <li>Coding</li>
                                    </ul>
                                    <ul class="work-tool">
                                        <li>HTML/CSS</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="work-item">
                                <a href="works-website3.html" class="work-img">
                                    <img src="img/website3.png" alt="The Axis Group">
                                </a>
                                <div class="work-text">
                                    <div class="work-name">
                                        <p>The Axis Group（架空）</p>
                                    </div>
                                    <ul class="work-type">
                                        <li>No-code</li>
                                    </ul>
                                    <ul class="work-tool">
                                        <li>WIX</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="work-item">
                                <a href="works-website2.html" class="work-img">
                                    <img src="img/website2.png" alt="CO-WORKING">
                                </a>
                                <div class="work-text">
                                    <div class="work-name">
                                        <p>CO-WORKING（架空）</p>
                                    </div>
                                    <ul class="work-type">
                                        <li>No-code</li>
                                    </ul>
                                    <ul class="work-tool">
                                        <li>WIX</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="work-item">
                                <a href="works-website1.html" class="work-img">
                                    <img src="img/website1.png" alt="WEB&COACH Design">
                                </a>
                                <div class="work-text">
                                    <div class="work-name">
                                        <p>WEB&COACH Design（架空）</p>
                                    </div>
                                    <ul class="work-type">
                                        <li>No-code</li>
                                    </ul>
                                    <ul class="work-tool">
                                        <li>WIX</li>
                                    </ul>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="content">
                        <h3>Graphics</h3>
                        <div class="work-list">
                            <div class="work-item">
                                <a href="works-graphics1.html" class="work-img">
                                    <img src="img/graphics1.png" alt="五反田歯科医院バナー">
                                </a>
                                <div class="work-text">
                                    <div class="work-name">
                                        <p>五反田歯科医院バナー（架空）</p>
                                    </div>
                                    <ul class="work-type">
                                        <li>Design</li>
                                        <li>Banner</li>
                                    </ul>
                                    <ul class="work-tool">
                                        <li>Figma</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Other</h3>
                            <p>準備中</p>
                            <p>現在公開できる制作物がありません。</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="blog" class="box">
            <div class="wrapper">
                <h2>Blog</h2>
                <div class="container">
                    <div class="content show">
                        <p>学んだことをアウトプットするブログを運営しています。</p>
                        <?php
                            // RSSフィードURL
                            $url = "https://u2-35.com/feed/";
                            // RSSフィードの取得
                            $feedContents = file_get_contents($url);
                            // フィードの内容をパース
                            $feedRSS = simplexml_load_string($feedContents);
                            $feedItem = $feedRSS->channel;
                            $i = 0;
                            $limit = 3; // 表示する記事の件数
                            // 記事の表示
                            foreach ($feedItem->item as $item) : 
                                if ($i === $limit) break;  // 表示する記事件数を制限
                                // サムネイル画像を取得（descriptionまたはcontent:encoded内から）
                                $thumbnail = '';
                                if (isset($item->description)) {
                                    // descriptionタグ内から画像URLを抽出
                                    preg_match('/<img[^>]+src=["\'](https?:\/\/[^"\']+)/i', $item->description, $matches);
                                    if (!empty($matches[1])) {
                                        $thumbnail = $matches[1]; // 画像URLを設定
                                    }
                                } elseif (isset($item->children('content', true)->encoded)) {
                                    // content:encoded内から画像URLを抽出
                                    preg_match('/<img[^>]+src=["\'](https?:\/\/[^"\']+)/i', $item->children('content', true)->encoded, $matches);
                                    if (!empty($matches[1])) {
                                        $thumbnail = $matches[1]; // 画像URLを設定
                                    }
                                }
                        ?>
                        <div class="BlogItem">
                            <a class="BlogItem_link" href="<?php echo htmlspecialchars($item->guid); ?>"> <!-- 記事のリンク -->
                                <div class="BlogItem_thumbnail">
                                    <?php if ($thumbnail): ?>
                                        <img src="<?php echo htmlspecialchars($thumbnail); ?>" alt="thumbnail">
                                    <?php endif; ?>
                                </div>
                                <div class="BlogItem_title">
                                    <?php echo htmlspecialchars($item->title); ?> <!-- 記事タイトル -->
                                </div>
                                <div class="BlogItem_meta">
                                    <div class="BlogItem_category">
                                        <span>
                                            <?php echo htmlspecialchars($item->category); ?> <!-- 記事のカテゴリ -->
                                        </span>
                                    </div>
                                    <div class="BlogItem_date">
                                        <?php echo htmlspecialchars(date("Y年 n月 j日", strtotime($item->pubDate))); ?> <!-- 記事の公開日 -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php $i++; endforeach; ?>
                        <div class="blog-button">
                            <a href="https://u2-35.com/" class="more-button" target="_blank">MORE　>></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="box">
            <div class="wrapper">
                <h2>Contact</h2>
                <div class="container">
                    <div class="content show">
                        <p>制作の依頼・ご相談など、お気軽にお問い合わせください。</p>
                        <form class="c-form" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSfnBkbFqQRYw-nGlnGslSu8fkN3-9IFIyxnrQc5f-6qAO7K7A/formResponse" method="post" target="hidden_iframe" onsubmit="submitted=true;">
                            <div class="c-form-item">
                                <label class="c-form-label" for="field-name">
                                    お名前
                                    <span class="c-form-required">必須</span>
                                </label>
                                <input name="entry.754029897" class="c-form-input" id="field-name" placeholder="" type="text" required="required">
                            </div>
                            <div class="c-form-item">
                                <label class="c-form-label" for="field-mail">
                                    メールアドレス
                                    <span class="c-form-required">必須</span>
                                </label>
                                <input name="entry.2073624662" class="c-form-input" id="field-mail" placeholder="" type="email" required="required">
                            </div>
                            <div class="c-form-item">
                                <label class="c-form-label" for="field-message">お問い合わせ内容</label>
                                <textarea name="entry.1818511285" class="c-form-input" id="field-message" placeholder=""></textarea>
                            </div>
                            <div class="c-form-submit">
                                <button type="submit">送信する</button>
                            </div>
                        </form>
                        <script type="text/javascript">
                            let submitted = false;
                        </script>
                        <iframe name="hidden_iframe" id="hidden_iframe" style="display: none" onload="if(submitted){window.location='thanks.html';}"></iframe>
                        <img class="contact-cat" src="img/contact-cat.png" alt="手紙をくわえた猫">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <small class="footer">© 2024 U235 All Rights Reserved.</small>
    </footer>
    <!-- jQuery -->
    <script src="js/script.js"></script>
</body>
</html>

