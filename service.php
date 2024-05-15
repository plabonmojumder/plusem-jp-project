<!DOCTYPE html>
<html dir="ltr" lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>サービス - 株式会社プラセム クリエイティブ制作</title>

        <!-- Stylesheets -->
        <?php include('_partials/stylesheet.php'); ?>

        <link rel="stylesheet" href="assets/css/page.css" />
        <link rel="stylesheet" href="assets/css/service.css" />
        <link rel="stylesheet" href="assets/css/custom.css" />

        <script src="assets/js/jquery-migrate.min.js"></script>
        <script src="assets/js/sakurav3.js"></script>
    </head>
    <body class="page-template-default page page-id-22 wp-custom-logo drawer drawer--right">
        <div class="wrapper">
            <!-- Header -->
            <?php
                $headerThemeClass = "";
                include('_partials/header.php');
            ?>

            <div id="d-menu">
                <button type="button" class="drawer-toggle drawer-hamburger sp-only">
                    <span class="drawer-hamburger-icon"></span>
                    <p></p>
                </button>
                <nav class="drawer-nav" role="navigation">
                    <!-- ここからドロップダウンの中身 -->
                    <div class="sp-logo">
                        <a href="">
                            <img src="assets/images/logo_sp.svg" />
                        </a>
                    </div>
                    <ul class="drawer-menu">
                        <li class="acc">
                            <span>サービス</span>
                            <ul>
                                <li>
                                    <a href="">ウェブサイト制作</a>
                                </li>
                                <li>
                                    <a href="">LP制作</a>
                                </li>
                                <li>
                                    <a href="">ECサイト制作</a>
                                </li>
                                <li>
                                    <a href="">バナー制作</a>
                                </li>
                                <li>
                                    <a href="">動画制作</a>
                                </li>
                                <li>
                                    <a href="">イラスト制作</a>
                                </li>
                                <li>
                                    <a href="">ロゴ制作</a>
                                </li>
                                <li>
                                    <a href="">DTP制作</a>
                                </li>
                            </ul>
                        </li>
                        <li class="acc">
                            <span>制作実績</span>
                            <ul>
                                <li>
                                    <a href="work.php">ウェブサイト</a>
                                </li>
                                <li>
                                    <a href="work.php">LP</a>
                                </li>
                                <li>
                                    <a href="work.php">バナー</a>
                                </li>
                                <li>
                                    <a href="work.php">DTP</a>
                                </li>
                            </ul>
                        </li>
                        <li class="acc">
                            <span>よくあるご質問</span>
                            <ul>
                                <li>
                                    <a href="faq.php">制作について</a>
                                </li>
                                <li>
                                    <a href="faq.php">料金について</a>
                                </li>
                                <li>
                                    <a href="faq.php">その他</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="drawerFooter">
                        <ul class="spContact">
                            <li class="tel">
                                <a href="tel:092-791-7613">
                                    <span>092-791-7613</span>
                                    <p>
                                        平日10:00~19:00 <br />
                                        (土・日・祝・年末年始を除く)
                                    </p>
                                </a>
                            </li>
                            <li class="mail">
                                <a href="contact.php">
                                    <span>CONTACT</span>
                                    <p>メールでのお問い合わせはこちら</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="spMenu">
                            <li>
                                <a href="company.php">会社概要</a>
                            </li>
                            <li>
                                <a href="contact.php">お問い合わせ</a>
                            </li>
                            <li>
                                <a href="privacypolicy.php">プライバシーポリシー</a>
                            </li>
                        </ul>
                        <small>© 2023 PLUSEM Co., Ltd</small>
                    </div>
                </nav>
            </div>
            <section class="cover">
                <div class="inner">
                    <header class="coverHead">
                        <span>Service</span>
                        <h1>サービス</h1>
                    </header>
                    <img class="coverImg" src="assets/images/cover.svg" alt="Service" />
                </div>
            </section>
            <div class="inner">
                <ul class="breadcrumbs anmleft">
                    <li><a href="">TOP</a></li>
                    <li>Service</li>
                </ul>
            </div>
            <section id="serviceContents" class="contents">
                <div class="inner">
                    <p class="txt anmleft">
                        デジタルからアナログまで、<br class="sp" />
                        あらゆるニーズに応えるサービスを<br class="sp" />
                        提供しています。
                    </p>
                    <ul>
                        <li id="sv01">
                            <div>
                                <span>Service 01</span>
                                <header class="serviceHead">
                                    <h2>ウェブサイト制作</h2>
                                    <em>Website</em>
                                </header>
                                <p>
                                    私たちは、お客様のビジネスの目的やニーズに合わせ、ユーザビリティやSEO対策にも配慮し、お客様のビジネスをオンラインで成功に導くウェブサイトをご提供いたします。<br />
                                    まずは弊社担当者がヒアリングを行い、その後、ニーズや目的に合わせたウェブサイトのコンセプト設計、ワイヤーフレームの作成、デザインカンプの提出、開発・実装、運用・保守まで、一貫してサポートいたします。
                                </p>
                            </div>
                            <figure>
                                <img src="assets/images/img01.jpg" alt="ウェブサイト制作" />
                            </figure>
                        </li>
                        <li id="sv02">
                            <div>
                                <header class="serviceHead">
                                    <span>Service 02</span>
                                    <h2>LP制作</h2>
                                    <em>Landing Page</em>
                                </header>
                                <p>
                                    LP（ランディングページ）とは、Web広告などを通じて訪れたユーザーが最初に接するウェブページのことです。商品やサービスのPRをするため、特別な目的のために作成されます。LP制作は、効果的な広告運用やコンバージョン率の向上に欠かせない重要な要素です。私たちは、ユーザビリティやデザインの美しさを追求しながら、より効果的なLP制作を実現します。
                                </p>
                            </div>
                            <figure>
                                <img src="assets/images/img02.jpg" alt="LP制作" />
                            </figure>
                        </li>
                        <li id="sv03">
                            <div>
                                <header class="serviceHead">
                                    <span>Service 03</span>
                                    <h2>ECサイト制作</h2>
                                    <em>E-commerce</em>
                                </header>
                                <p>
                                    ECサイト制作においては、使いやすさやセキュリティに加えて、デザインやコンテンツの質も重要です。私たちは、お客様のニーズに合わせたECサイトを制作し、利用者の購買意欲を高めることができるサイト制作をご提供いたします。
                                    <br />
                                    また、ECサイトにはセキュリティに関するリスクがつきまといます。当社では、SSL証明書の導入や定期的なサイト保守作業を行い、セキュリティ面にも万全を期しています。
                                </p>
                            </div>
                            <figure>
                                <img src="assets/images/img03.jpg" alt="ウェブサイト制作" />
                            </figure>
                        </li>
                        <li id="sv04">
                            <div>
                                <header class="serviceHead">
                                    <span>Service 04</span>
                                    <h2>バナー制作</h2>
                                    <em>Bunner</em>
                                </header>
                                <p>
                                    私たちは、高いクオリティと効果的なデザインで、ターゲット層の心をつかみ、アクションにつながる広告を実現します。デザインのみならず、広告効果の分析や改善提案にも力を入れており、お客様のビジネスの成功に向けたパートナーとしてサポートいたします。また、月額定額制でバナー作り放題のサービスも行なっております。詳しくはこちらをご確認ください。
                                </p>
                            </div>
                            <figure>
                                <img src="assets/images/img04.jpg" alt="バナー制作" />
                            </figure>
                        </li>
                        <li id="sv05">
                            <div>
                                <header class="serviceHead">
                                    <span>Service 05</span>
                                    <h2>動画制作</h2>
                                    <em>Video</em>
                                </header>
                                <p>
                                    動画は、視覚的な情報を伝える力に優れた媒体として、ビジネスの広告やプロモーションに欠かせない存在となっています。私たちは、貴社のニーズや要望に合わせたオリジナルの動画制作を行い、ビジネスを成功に導くための強力なツールとして提供しています。私たちが提供する動画制作サービスは、貴社のビジネスにおいて、差別化やブランド価値の向上をサポートいたします。
                                </p>
                            </div>
                            <figure>
                                <img src="assets/images/img05.jpg"  alt="動画制作" />
                            </figure>
                        </li>
                        <li id="sv06">
                            <div>
                                <header class="serviceHead">
                                    <span>Service 06</span>
                                    <h2>イラスト制作</h2>
                                    <em>Illustration</em>
                                </header>
                                <p>
                                    わかりやすく、親しみやすいイラストで、貴社のコンテンツをより魅力的に。私たちは、様々なジャンルに対応可能で、要望に応じたオリジナルイラストを制作いたします。ウェブサイトやSNS、プレゼン資料など、ビジネスにおいても、イラストは視覚的なアピールポイントとして大きな役割を果たします。ぜひ、弊社のイラスト制作サービスをご利用ください。
                                </p>
                            </div>
                            <figure>
                                <img src="assets/images/img06.jpg" alt="イラスト制作" />
                            </figure>
                        </li>
                        <li id="sv07">
                            <div>
                                <header class="serviceHead">
                                    <span>Service 07</span>
                                    <h2>ロゴ制作</h2>
                                    <em>Logo</em>
                                </header>
                                <p>
                                    貴社のビジネスに最適なロゴを制作いたします。ロゴはビジネスのアイデンティティを表すものであり、長期的に使用されるためには、そのデザインが鮮明かつ認識しやすくなければなりません。私たちは、あなたのビジネスやブランドの特性を理解し、それに合わせたオリジナルのロゴを制作いたします。また、ロゴが視認性が高く、印象的でありながら、シンプルかつモダンなデザインになるように、細部まで注意を払って制作いたします。
                                </p>
                            </div>
                            <figure>
                                <img src="assets/images/img07.jpg" alt="ロゴ制作" />
                            </figure>
                        </li>
                        <li id="sv08">
                            <div>
                                <header class="serviceHead">
                                    <span>Service 08</span>
                                    <h2>DTP制作</h2>
                                    <em>Desktop Publishing</em>
                                </header>
                                <p>
                                    パンフレット、カタログ、ポスター、名刺、など、様々な種類の印刷物のデザインから校正、印刷までを一貫して対応することが可能です。また、デジタル媒体においては、プレゼンテーション資料、PDF配布資料など、多彩なデザイン制作に対応しています。美しいデザインだけでなく、読みやすさや伝わりやすさなどの視点も重視し、高品質な制作を行い、貴社のブランディングをサポートします。
                                </p>
                            </div>
                            <figure>
                                <img src="assets/images/img08.jpg" alt="DTP制作" />
                            </figure>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="contactArea" class="anm elm animate__animated">
                <div class="inner">
                    <header class="secHead">
                        <span class="ttl">Contact</span>
                        <h2 class="anm">お問い合わせ</h2>
                        <p class="anmleft">
                            お見積もりやご相談、その他お問い合わせは、お気軽にご連絡ください。
                        </p>
                    </header>
                    <ul>
                        <li class="tel anm">
                            <a href="tel:092-791-7613">
                                <span>092-791-7613</span>
                                <p>平日10:00~19:00 (土・日・祝・年末年始を除く)</p>
                            </a>
                        </li>
                        <li class="mail anm">
                            <a href="contact.php">
                                <span>CONTACT</span>
                                <p>メールでのお問い合わせはこちら</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- Footer -->
            <?php include('_partials/footer.php'); ?>

            <div class="bgLine">
                <span class="line01">
                    <em></em>
                    <em></em>
                </span>
                <span class="line02">
                    <em></em>
                    <em></em>
                </span>
                <span class="line03">
                    <em></em>
                    <em></em>
                </span>
                <span class="line04">
                    <em></em>
                    <em></em>
                </span>
            </div>

            <!-- Scripts -->
            <?php include('_partials/scripts.php'); ?>
        </div>
    </body>
</html>
