<!DOCTYPE html>
<html dir="ltr" lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
            株式会社プラセム クリエイティブ制作 - 株式会社プラセム（PLUSEM Co.,
            Ltd.）は、WEB＆人材コンサルティング会社です。WEBマーケティングにおけるプランニング、サイト制作、SEO対策、各種WEB広告運用代行、アクセス解析、レポーティングなどの総合的な支援および、人材採用におけるコンサルティング支援を実施しています。
        </title>
        <!-- Stylesheets -->
        <?php include('_partials/stylesheet.php'); ?>
        <link rel="stylesheet" href="assets/css/style_1.css?v=<?php time(); ?>" />
        <link rel="stylesheet" href="assets/css/custom.css?v=<?php time(); ?>" />
    </head>
    <body class="home blog wp-custom-logo drawer drawer--right hfeed">
        <div class="wrapper">
            <!-- Header -->
            <?php
                $headerThemeClass = "elm animate__animated";
                include('_partials/header.php');
            ?>

            <div id="d-menu">
                <button type="button" class="drawer-toggle drawer-hamburger sp-only elm animate__animated">
                    <span class="drawer-hamburger-icon"></span>
                    <p></p>
                </button>
                <nav class="drawer-nav" role="navigation">
                    <!-- ここからドロップダウンの中身 -->
                    <div class="sp-logo">
                        <a href="">
                            <img src="assets/images/logo_sp.svg" width="" height="" />
                        </a>
                    </div>
                    <ul class="drawer-menu">
                        <li class="acc">
                            <span>サービス</span>
                            <ul>
                                <li>
                                    <a href="service.php">ウェブサイト制作</a>
                                </li>
                                <li>
                                    <a href="service.php">LP制作</a>
                                </li>
                                <li>
                                    <a href="service.php">ECサイト制作</a>
                                </li>
                                <li>
                                    <a href="service.php">バナー制作</a>
                                </li>
                                <li>
                                    <a href="service.php">動画制作</a>
                                </li>
                                <li>
                                    <a href="service.php">イラスト制作</a>
                                </li>
                                <li>
                                    <a href="service.php">ロゴ制作</a>
                                </li>
                                <li>
                                    <a href="service.php">DTP制作</a>
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
            <section id="fv">
                <div class="fvInner">
                    <div>
                        <p class="txt01">
                            <img src="assets/images/txt-fv01.svg" alt="" />
                        </p>
                        <p class="txt02">
                            <img src="assets/images/txt-fv02.svg" alt="" />
                        </p>
                        <p class="txtEn">Supporting the growth of your business.</p>
                    </div>
                    <img class="fvImg element animate__animated" src="assets/images/back-fv.svg" alt="" />
                </div>
                <span class="scroll animate__animated">Scroll</span>
                <div class="coverLogo"></div>
                <div class="fvCover">
                    <img class="fvCoverLogo" src="assets/images/logo.svg" alt="" width="" height="" />
                </div>
            </section>
            <section id="concept">
                <div class="first">
                    <div class="inner">
                        <div>
                            <header class="secHead">
                                <span class="ttl">Concept</span>
                                <h2 class="anm">コンセプト</h2>
                            </header>
                            <h3 class="anm">
                                価値のある<br class="sp" />
                                クリエイティブ制作
                            </h3>
                            <p class="anmleft">
                                PLUSEMは、これまで培ってきたWEBマーケティングの<br class="pc" />
                                ノウハウを提供することにより、お客様のビジネスの<br class="pc" />
                                成功と成長に貢献いたします。<br />
                                サイト設計から完成まで、お客様のご要望を汲み取り、<br class="pc" />
                                実現性の高い高品質なWEBサイト制作を行っております。
                            </p>
                        </div>
                        <figure class="anmright300">
                            <img src="assets/images/img-concept-main.png" alt="" />
                        </figure>
                    </div>
                </div>
                <div class="second inner">
                    <ul class="con animate__animated">
                        <li class="elm">
                            <h3>コーポレートサイト</h3>
                            <figure>
                                <img src="assets/images/icon-concept01.svg" width="88.8385" height="59.5998" alt="" />
                            </figure>
                            <strong>月々のお問合せ件数</strong>
                            <p>80<span>%</span>UP</p>
                        </li>
                        <li class="elm">
                            <h3>LP</h3>
                            <figure>
                                <img src="assets/images/icon-concept02.svg" alt="" />
                            </figure>
                            <strong>CVR（獲得率）</strong>
                            <p>30<span>%</span>UP</p>
                        </li>
                        <li class="elm">
                            <h3>ECサイト</h3>
                            <figure>
                                <img src="assets/images/icon-concept03.svg" width="88.8385" height="58.8234" alt="" />
                            </figure>
                            <strong>売り上げ</strong>
                            <p>70<span>%</span>UP</p>
                        </li>
                        <li class="elm">
                            <h3>バナー</h3>
                            <figure>
                                <img src="assets/images/icon-concept04.svg" alt="" />
                            </figure>
                            <strong>CTR（クリック率）</strong>
                            <p>90<span>%</span>UP</p>
                        </li>
                    </ul>
                </div>
                <div class="third">
                    <ul class="con animate__animated">
                        <li class="elm">
                            <img src="assets/images/img-concept-bottom01.jpg" alt="" />
                        </li>
                        <li class="elm">
                            <img src="assets/images/img-concept-bottom02.jpg" alt="" />
                        </li>
                        <li class="elm">
                            <img src="assets/images/img-concept-bottom03.jpg" alt="" />
                        </li>
                        <li class="elm">
                            <img src="assets/images/img-concept-bottom04.jpg" alt="" />
                        </li>
                    </ul>
                </div>
            </section>
            <section id="awards">
                <div class="inner">
                    <header class="secHead">
                        <span class="ttl">Awards</span>
                        <h2 class="anm">称号</h2>
                        <p class="">
                            �&nbsp;�式会社プラセ�&nbsp;は、�&nbsp;�式会社ユニラボが主催する<br class="pc" />
                            「アイミツアワード2020」のホー�&nbsp;ページ制作・SEO対策の2部門を受賞しております。
                        </p>
                    </header>
                    <div class="first">
                        <div class="left">
                            <figure>
                                <img src="assets/images/img-awards.png" alt="" />
                            </figure>
                            <p>
                                ホー�&nbsp;ページ制作は、<br class="sp" />
                                <span><em>8000</em>社中 首位<em>40</em>社</span>
                            </p>
                            <p>
                                SEO対策は、<span><em>8000</em>社中 首位<em>3</em>社</span>
                            </p>
                        </div>
                        <div class="right anmright">
                            <span>What is the Aimitsu Award.</span>
                            <h3>アイミツアワードとは</h3>
                            <p>
                                アイミツアワードは、日本最大級のビジネスマッチングサイト『<em>アイミツ</em>』 の登録企業のなかから“優良企業”を表彰する制度です。<br />
                                アイミツアワード2020では、アイミツ内でのマッチング実績から、上位数%の企業を選出しております。
                            </p>
                        </div>
                    </div>
                    <div class="second">
                        <div class="google">
                            <figure>
                                <img src="assets/images/img-google.svg" alt="" />
                            </figure>
                            <div>
                                <span>Google Premier Partner</span>
                                <h3>グーグルプレミアパートナー</h3>
                                <p>
                                    全国上位3%の代理店として、Google Premier Partnerを取得しております。
                                </p>
                            </div>
                        </div>
                        <div class="yahoo anmright">
                            <figure>
                                <img src="assets/images/img-yahoo.svg" alt="" />
                            </figure>
                            <div>
                                <span>Yahoo! Sales Partner</span>
                                <h3>Yahoo!セールスパートナー</h3>
                                <p>
                                    リスティング広告運用の品質と実績を評価いた�&nbsp;き、2つ星を取得しております。
                                </p>
                            </div>
                        </div>
                    </div>
                    <ul class="third con animate__animated">
                        <li class="elm">
                            <img src="assets/images/img-bnr01.jpg" alt="" />
                        </li>
                        <li class="elm">
                            <img src="assets/images/img-bnr02.jpg" alt="" />
                        </li>
                        <li class="elm">
                            <img src="assets/images/img-bnr03.jpg" alt="" />
                        </li>
                        <li class="elm">
                            <img src="assets/images/img-bnr04.jpg" alt="" />
                        </li>
                        <li class="elm">
                            <img src="assets/images/img-bnr05.jpg" alt="" />
                        </li>
                        <li class="elm">
                            <img src="assets/images/img-bnr06.jpg" alt="" />
                        </li>
                        <li class="elm">
                            <img src="assets/images/img-bnr07.jpg" alt="" />
                        </li>
                        <li class="elm">
                            <img src="assets/images/img-bnr08.jpg" alt="" />
                        </li>
                        <li class="elm">
                            <img src="assets/images/img-bnr09.jpg" alt="" />
                        </li>
                    </ul>
                </div>
            </section>
            <section id="strength">
                <div class="inner">
                    <header class="secHead">
                        <span class="ttl">Strength</span>
                        <h2 class="anm">PLUSEMの強み</h2>
                    </header>
                    <ul>
                        <li class="anm">
                            <figure>
                                <img src="assets/images/icon-str01.svg" alt="" />
                            </figure>
                            <h3>
                                プロのデザイナーによる<br />
                                デザイン
                            </h3>
                            <p>
                                美しさ�&nbsp;けでなく、ユーザーの目的に合わせ、使いやすさと機能性を考えてデザインします。
                            </p>
                        </li>
                        <li class="anm">
                            <figure>
                                <img src="assets/images/icon-str02.svg" alt="" />
                            </figure>
                            <h3>
                                柔軟な対応
                            </h3>
                            <p>
                                プロジェクトの進捗状況を定期的に�&nbsp;�告し、お客様のフィードバックにも�&nbsp;早く対応します。
                            </p>
                        </li>
                        <li class="anm">
                            <figure>
                                <img src="assets/images/icon-str03.svg" alt="" />
                            </figure>
                            <h3>
                                公開後も安心の<br />
                                保守管理
                            </h3>
                            <p>
                                公開後に問題が発生しても、安心の保守管理プランがございます。
                            </p>
                        </li>
                        <li class="anm">
                            <figure>
                                <img src="assets/images/icon-str04.svg" alt="" />
                            </figure>
                            <h3>
                                マーケティングを意識した<br />
                                サイト構成
                            </h3>
                            <p>
                                マーケティングの観点からも、最適なサイト構成を提供しています。
                            </p>
                        </li>
                        <li class="anm">
                            <figure>
                                <img src="assets/images/icon-str05.svg" alt="" />
                            </figure>
                            <h3>
                                丸投げOK
                            </h3>
                            <p>
                                デザインやマーケティングの知識が無くても、全て私たちにお任せく�&nbsp;さい。
                            </p>
                        </li>
                        <li class="anm">
                            <figure>
                                <img src="assets/images/icon-str06.svg" alt="" />
                            </figure>
                            <h3>
                                デザインのみ等<br />
                                一部の作業でも対応可能
                            </h3>
                            <p>
                                ロゴデザインのみ、コーディングのみ、クリエイティブ制作に関わるあらゆる作業に対応可能です。
                            </p>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="ib">
                <div class="topImg">
                    <img src="assets/images/txt-ib01.svg" alt="" />
                    <img src="assets/images/txt-ib01.svg" alt="" />
                </div>
                <div class="bottomImg">
                    <img src="assets/images/txt-ib02.svg" width="1463.459" height="167.9995" alt="" />
                    <img src="assets/images/txt-ib02.svg" alt="" />
                </div>
            </section>
            <section id="service">
                <div class="inner">
                    <header class="secHead">
                        <span class="ttl">Service</span>
                        <h2 class="anm elm animate__animated">サービス</h2>
                    </header>
                    <ul>
                        <li class="anm elm animate__animated">
                            <figure>
                                <img src="assets/images/img-service01.jpg" alt="" />
                            </figure>
                            <span>Website</span>
                            <h3>ウェブサイト制作</h3>
                            <p>
                                多種多様な業種のサイト制作を行っております。
                            </p>
                        </li>
                        <li class="anm elm animate__animated">
                            <figure>
                                <img src="assets/images/img-service02.jpg" alt="" />
                            </figure>
                            <span>Landing Page</span>
                            <h3>LP制作</h3>
                            <p>
                                魅力的なLP制作で、コンバージョン率アップ。
                            </p>
                        </li>
                        <li class="anm elm animate__animated">
                            <figure>
                                <img src="assets/images/img-service03.jpg" alt="" />
                            </figure>
                            <span>E-commerce</span>
                            <h3>ECサイト制作</h3>
                            <p>
                                ECサイト制作で、あなたのビジネスをサポートします。
                            </p>
                        </li>
                        <li class="anm elm animate__animated">
                            <figure>
                                <img src="assets/images/img-service04.jpg" alt="" />
                            </figure>
                            <span>Banner</span>
                            <h3>バナー制作</h3>
                            <p>
                                目を引くバナーで、あなたのビジネスをアピールします。
                            </p>
                        </li>
                        <li class="anm elm animate__animated">
                            <figure>
                                <img src="assets/images/img-service05.jpg" alt="" />
                            </figure>
                            <span>Movie</span>
                            <h3>動画制作</h3>
                            <p>
                                ビジネスをより魅力的に伝える動画を制作します。
                            </p>
                        </li>
                        <li class="anm elm animate__animated">
                            <figure>
                                <img src="assets/images/img-service06.jpg" alt="" />
                            </figure>
                            <span>Illustration</span>
                            <h3>イラスト制作</h3>
                            <p>
                                独自のイラストで、商品の魅力を訴求します。
                            </p>
                        </li>
                        <li class="anm elm animate__animated">
                            <figure>
                                <img src="assets/images/img-service07.jpg" alt="" />
                            </figure>
                            <span>Logo</span>
                            <h3>ロゴ制作</h3>
                            <p>
                                イメージに合ったオリジナルロゴを制作します。
                            </p>
                        </li>
                        <li class="anm elm animate__animated">
                            <figure>
                                <img src="assets/images/img-service08.jpg" alt="" />
                            </figure>
                            <span>DTP</span>
                            <h3>DTP制作</h3>
                            <p>
                                デザインから印刷までトータルでサポートします。
                            </p>
                        </li>
                    </ul>
                    <div class="btnArea">
                        <a class="btnMore anm elm animate__animated" href="service.php">
                            <span><em>view more</em></span>
                        </a>
                    </div>
                </div>
            </section>
            <section id="works">
                <div class="inner">
                    <div class="top">
                        <header class="secHead">
                            <span class="ttl">Works</span>
                            <h2 class="anm">制作実績</h2>
                        </header>
                        <a class="btnMore anmright" href="work.php">
                            <span><em>view more</em></span>
                        </a>
                    </div>
                    <ul class="tabWorks anm">
                        <li class="active"><span>WEBサイト</span></li>
                        <li><span>LP</span></li>
                        <li><span>バナー</span></li>
                        <li><span>DTP</span></li>
                    </ul>
                    <ul class="areaWorks">
                        <li class="anm itemBox show">
                            <ul class="items con">
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/3ee2e498c9d497824dd3dec42d7bd346.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="�&nbsp;�式会社五省コンサルタント様" fetchpriority="high" />
                                        </figure>
                                        <h3>�&nbsp;�式会社五省コンサルタント様</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/screencapture-kstyle24-jp-2024-02-02-12_19_2icatch.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="�&nbsp;�式会社ケイ・スタイル様" />
                                        </figure>
                                        <h3>�&nbsp;�式会社ケイ・スタイル様</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/90ce5455c11b67e48d84fe0e85eac661.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="�&nbsp;�式会社HARVIA JAPAN様" />
                                        </figure>
                                        <h3>�&nbsp;�式会社HARVIA JAPAN様</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/fk_ss.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="福岡県警察 2023年度 採用サイト" />
                                        </figure>
                                        <h3>福岡県警察 2023年度 採用サイト</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/cb_catch.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="�&nbsp;�式会社サイバービーイング様" />
                                        </figure>
                                        <h3>�&nbsp;�式会社サイバービーイング様</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/panet_catch.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="�&nbsp;�式会社パネット様" />
                                        </figure>
                                        <h3>�&nbsp;�式会社パネット様</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/miranest_catch.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="MIRANEST�&nbsp;�式会社様" />
                                        </figure>
                                        <h3>MIRANEST�&nbsp;�式会社様</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/m-bic_catch.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="M-BIC 2022" />
                                        </figure>
                                        <h3>M-BIC 2022</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/wit_catch.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="�&nbsp;�式会社ウィット様" />
                                        </figure>
                                        <h3>�&nbsp;�式会社ウィット様</h3>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="anm itemBox">
                            <ul class="items con">
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/teinangakuen_catch-1.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="ネットランド コルサポ!LP" />
                                        </figure>
                                        <h3>ネットランド コルサポ!LP</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/palre_catch.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="ラ・パルレ モデル美脚コース<br>アンケートLP" />
                                        </figure>
                                        <h3>
                                            ラ・パルレ モデル美脚コース<br />
                                            アンケートLP
                                        </h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/avispa-dao_catch.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="AVISPA DAO LP" />
                                        </figure>
                                        <h3>AVISPA DAO LP</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/teinangakuen_catch.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="学�&nbsp;�法人帝南学園 生徒募集LP" />
                                        </figure>
                                        <h3>学�&nbsp;�法人帝南学園 生徒募集LP</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/essence_catch-1.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="CAREER FLIGHT プロボノLP" />
                                        </figure>
                                        <h3>CAREER FLIGHT プロボノLP</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/seikagakuen_catch-1.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="精華学園高等学�&nbsp;� 生徒募集LP" />
                                        </figure>
                                        <h3>精華学園高等学�&nbsp;� 生徒募集LP</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/daishinto-ippan_catch-3.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="大新東�&nbsp;�式会社 一般車両運転手募集LP" />
                                        </figure>
                                        <h3>大新東�&nbsp;�式会社 一般車両運転手募集LP</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/daishinto-zenkoku_catch-1.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="大新東�&nbsp;�式会社 運転手募集LP" />
                                        </figure>
                                        <h3>大新東�&nbsp;�式会社 運転手募集LP</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/daishinto-maihama_catch-3.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="大新東�&nbsp;�式会社 舞浜営業所 バス運転手募集LP" />
                                        </figure>
                                        <h3>大新東�&nbsp;�式会社 舞浜営業所 バス運転手募集LP</h3>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="anm itemBox">
                            <ul class="items con">
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/19483be6628e6c817f33961f2d830f88-1.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="LA PALER" />
                                        </figure>
                                        <h3>LA PALER</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/rakuten-1.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="有限会社 楽天地様" />
                                        </figure>
                                        <h3>有限会社 楽天地様</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/6c0ea9ff8e23b596a5d47c4710edaeeb.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="CAREER FLIGHT" />
                                        </figure>
                                        <h3>CAREER FLIGHT</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/8966a8ae7a4b35445cc84269d395d850.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="ヒトサガス" />
                                        </figure>
                                        <h3>ヒトサガス</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/d1f00afdebef2125ec981cbd82a8b850.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="福岡転職Plus" />
                                        </figure>
                                        <h3>福岡転職Plus</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/8b60fb2ecb07d92cc0026758517f0708.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="大新東�&nbsp;�式会社様" />
                                        </figure>
                                        <h3>大新東�&nbsp;�式会社様</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/180ca3d929e43eb615d08d295b59d6df.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="快朝ハーブ乳酸菌" />
                                        </figure>
                                        <h3>快朝ハーブ乳酸菌</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/tgb_catch.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="ガールズバイト" />
                                        </figure>
                                        <h3>ガールズバイト</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/809fafba2ecb4956059a912d78525937.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="Dr. Arrivo Zeus II" />
                                        </figure>
                                        <h3>Dr. Arrivo Zeus II</h3>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="anm itemBox">
                            <ul class="items con">
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/6270b93fc76d6627326b69b5ba3d1299.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="Kiraliv" />
                                        </figure>
                                        <h3>Kiraliv</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php/">
                                        <figure>
                                            <img src="assets/images/his_catch.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="博多旧市街 夏祭り2023" />
                                        </figure>
                                        <h3>博多旧市街 夏祭り2023</h3>
                                    </a>
                                </li>
                                <li class="elm">
                                    <a href="work-gosei-c.php">
                                        <figure>
                                            <img src="assets/images/gosei_p-1.jpg" class="attachment-340, 215.1522 size-340, 215.1522 wp-post-image" alt="�&nbsp;�式会社五省コンサルタント様" />
                                        </figure>
                                        <h3>�&nbsp;�式会社五省コンサルタント様</h3>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="plan">
                <div class="inner">
                    <header class="secHead">
                        <span class="ttl">Plan</span>
                        <h2 class="anm">プラン</h2>
                    </header>
                    <ul class="tabPlan con">
                        <li class="elm">
                            <span><em>Simple</em>シングルプラン</span>
                        </li>
                        <li class="elm">
                            <span><em>Light</em>ライトプラン</span>
                        </li>
                        <li class="active elm">
                            <span><em>Basic</em>ベーシックプラン</span>
                        </li>
                        <li class="elm">
                            <span><em>Premium</em>プレミア�&nbsp;プラン</span>
                        </li>
                    </ul>
                    <ul class="areaPlan">
                        <li class="itemBox anm">
                            <figure>
                                <img src="assets/images/img-plan04.png" alt="" />
                            </figure>
                            <p class="txtArea">
                                1ページ構成で、最低限必要な情�&nbsp;�を組み込んで制作いたします。<br />
                                シンプルながら、会社や店舗・サービスについて、御社の強みをしっかり説明できます。
                            </p>
                            <ul class="imgArea">
                                <li>
                                    <img src="assets/images/img-plan05.jpg" alt="" />
                                </li>
                                <li>
                                    <img src="assets/images/img-plan06.jpg" alt="" />
                                </li>
                            </ul>
                            <div class="contentsArea">
                                <h3>基本サービス内容</h3>
                                <ul>
                                    <li>レスポンシブ対応</li>
                                    <li>SSL対応</li>
                                    <li>メールアドレス発行</li>
                                    <li>進行管理</li>
                                    <li>Googleサーチコンソール</li>
                                    <li>favicon設定</li>
                                    <li>OGP設定</li>
                                    <li>検索エンジン最適化</li>
                                </ul>
                            </div>
                        </li>
                        <li class="itemBox anm">
                            <figure>
                                <img src="assets/images/img-plan07.png" alt="" />
                            </figure>
                            <p class="txtArea">
                                弊社テンプレートに、お客様よりご提供いた�&nbsp;いたコンテンツを組み込んで制作を行います。コンタクトフォー�&nbsp;、お知らせ投稿機能、内部SEO対策なども含まれています。
                            </p>
                            <ul class="imgArea">
                                <li>
                                    <img src="assets/images/img-plan08.jpg" alt="" />
                                </li>
                                <li>
                                    <img src="assets/images/img-plan09.jpg" alt="" />
                                </li>
                            </ul>
                            <div class="contentsArea">
                                <h3>基本サービス内容</h3>
                                <ul>
                                    <li>レスポンシブ対応</li>
                                    <li>CMS導入</li>
                                    <li>お問い合わせフォー�&nbsp;</li>
                                    <li>SSL対応</li>
                                    <li>メールアドレス発行</li>
                                    <li>進行管理</li>
                                    <li>Googleサーチコンソール</li>
                                    <li>お知らせ投稿機能</li>
                                    <li>favicon設定</li>
                                    <li>検索エンジン最適化</li>
                                    <li>OGP設定</li>
                                </ul>
                            </div>
                        </li>
                        <li class="itemBox show anm">
                            <figure>
                                <img src="assets/images/img-plan01.png" alt="" />
                            </figure>
                            <p class="txtArea">
                                もっともスタンダードなプランになります。お客様よりご提供いた�&nbsp;いたコンテンツを組み込んで、オリジナルのデザイン制作を行います。<br />
                                ウェブサイトに必要な機能は全て揃っております。
                            </p>
                            <ul class="imgArea">
                                <li>
                                    <img src="assets/images/img-plan02.jpg" alt="" />
                                </li>
                                <li>
                                    <img src="assets/images/img-plan03.jpg" alt="" />
                                </li>
                            </ul>
                            <div class="contentsArea">
                                <h3>基本サービス内容</h3>
                                <ul>
                                    <li>レスポンシブ対応</li>
                                    <li>CMS導入</li>
                                    <li>お問い合わせフォー�&nbsp;</li>
                                    <li>SSL対応</li>
                                    <li>メールアドレス発行</li>
                                    <li>構成案作成</li>
                                    <li>フルオーダー制作</li>
                                    <li>進行管理</li>
                                    <li>Googleサーチコンソール</li>
                                    <li>検索エンジン最適化</li>
                                    <li>お知らせ投稿機能</li>
                                    <li>favicon設定</li>
                                    <li>OGP設定</li>
                                </ul>
                            </div>
                        </li>
                        <li class="itemBox anm">
                            <figure>
                                <img src="assets/images/img-plan10.png" alt="" />
                            </figure>
                            <p class="txtArea">
                                最上位のプランになります。EC機能やシステ�&nbsp;構築等、全ての機能を網羅しております。
                            </p>
                            <ul class="imgArea">
                                <li>
                                    <img src="assets/images/img-plan11.jpg" alt="" />
                                </li>
                                <li>
                                    <img src="assets/images/img-plan12.jpg" alt="" />
                                </li>
                            </ul>
                            <div class="contentsArea">
                                <h3>基本サービス内容</h3>
                                <ul>
                                    <li>レスポンシブ対応</li>
                                    <li>CMS導入</li>
                                    <li>お問い合わせフォー�&nbsp;</li>
                                    <li>SSL対応</li>
                                    <li>メールアドレス発行</li>
                                    <li>構成案作成</li>
                                    <li>フルオーダー制作</li>
                                    <li>進行管理</li>
                                    <li>Googleサーチコンソール</li>
                                    <li>原稿作成</li>
                                    <li>お知らせ投稿機能</li>
                                    <li>カスタ�&nbsp;投稿機能</li>
                                    <li>検索エンジン最適化</li>
                                    <li>OGP設定</li>
                                    <li>決済機能</li>
                                    <li>favicon設定</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="structure">
                <header class="secHead inner">
                    <span class="ttl">Structure</span>
                    <h2 class="anm">Webサイトの構�&nbsp;</h2>
                    <p class="">
                        一般的に企業で商用利用されるWebサイトは4つのタイプに分類できると考えています。<br />
                        どれかを選ぶというよりも、目的からどのタイプにウェイトを置くかを判断します。
                    </p>
                </header>
                <ul>
                    <li class="">
                        <div class="inner">
                            <figure class="anmleft">
                                <img src="assets/images/img-structure01.png" alt="" />
                            </figure>
                            <div class="anmright">
                                <span class="anmright">Structure 01</span>
                                <h3 class="anmright">コーポレートサイト</h3>
                                <dl class="anmright">
                                    <dt>ターゲット</dt>
                                    <dd>�&nbsp;�主・採用応募者・エンドユーザー(一般消費者)</dd>
                                    <dt>目的</dt>
                                    <dd>情�&nbsp;�開示</dd>
                                </dl>
                                <p class="anmright">
                                    事業の全体像や業績を理解してもらうこと、を目的とします。しかし、特徴として営業用リードの獲得に特化しているケースは稀で10年程度以前に制作されたwebサイトに多く見られる傾向です。
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="anmright">
                        <div class="inner">
                            <figure class="anmright">
                                <img src="assets/images/img-structure02.png" alt="" />
                            </figure>
                            <div class="anmleft">
                                <span class="anmleft">Structure 02</span>
                                <h3 class="anmleft">メディアサイト</h3>
                                <dl class="anmleft">
                                    <dt>ターゲット</dt>
                                    <dd>特定業種の情�&nbsp;�を求める人々</dd>
                                    <dt>目的</dt>
                                    <dd>集客と広告�&nbsp;販売</dd>
                                </dl>
                                <p class="anmleft">
                                    SEOによる集客に特化しており、様々な記事コンテンツでユーザーを集め、収益化することを目的とします。リード獲得特化ではなくあくまでも読み物メディアとして成立していることが特徴です。
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="inner">
                            <figure class="anmleft">
                                <img src="assets/images/img-structure03.png" alt="" />
                            </figure>
                            <div class="anmright">
                                <span class="anmright">Structure 03</span>
                                <h3 class="anmright">採用サイト</h3>
                                <dl class="anmright">
                                    <dt>ターゲット</dt>
                                    <dd>採用応募者</dd>
                                    <dt>目的</dt>
                                    <dd>人材採用</dd>
                                </dl>
                                <p class="anmright">
                                    採用に力を入れる�&nbsp;�合に利用される、独立したWebサイトです。コーポレートサイトと同じコンテンツであっても、求職者向けにアレンジすることで、興味関心の度合いは大きく異なります。
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="anmright">
                        <div class="inner">
                            <figure class="anmright">
                                <img src="assets/images/img-structure04.png" alt="" />
                            </figure>
                            <div class="anmleft">
                                <span class="anmleft">Structure 04</span>
                                <h3 class="anmleft">LP(ランディングページ)</h3>
                                <dl class="anmleft">
                                    <dt>ターゲット</dt>
                                    <dd>エンドユーザー(一般消費者)</dd>
                                    <dt>目的</dt>
                                    <dd>自社商品(サービス)の販売</dd>
                                </dl>
                                <p class="anmleft">
                                    自社の商品(サービス)をより強く訴求し、コンバージョンにつなげるためのWebページです。掲載する情�&nbsp;�は、コンバージョンさせたい1つの商品・サービスに特化しているのが特徴です。
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
            <section id="flow">
                <div class="inner">
                    <header class="secHead">
                        <span class="ttl">Flow</span>
                        <h2 class="anm">制作の流れ</h2>
                        <p class="anm">
                            PLUSEMでは、フェーズごとにそれぞれの専門家が担当します。<br />
                            プロジェクトが滞ることのないよう、しっかりと進行・管理いたします。
                        </p>
                    </header>
                    <div class="flowContents js-table-scroll-hint">
                        <ul>
                            <li class="anm">
                                <figure>
                                    <img src="assets/images/icon-flow01.svg" alt="" />
                                </figure>
                                <div>
                                    <h3>ヒアリング</h3>
                                    <p>
                                        サイト制作の目的や、ご希望、ご予算、現状の問題等を具体的にヒアリングし、方向性の策定と制作のスケジュールをご提案させていた�&nbsp;きます。
                                    </p>
                                </div>
                            </li>
                            <li class="anm">
                                <figure>
                                    <img src="assets/images/icon-flow02.svg" alt="" />
                                </figure>
                                <div>
                                    <h3>要件定義</h3>
                                    <p>
                                        まずは何をすべきか具体的な戦略を立て、トップページの構成とサイトマップをご提案します。内容をご確認いた�&nbsp;き、ご要望と擦り合わせます。
                                    </p>
                                </div>
                            </li>
                            <li class="anm">
                                <figure>
                                    <img src="assets/images/icon-flow03.svg" alt="" />
                                </figure>
                                <div>
                                    <h3>デザイン</h3>
                                    <p>
                                        まずはトップページのデザインをご提案させていた�&nbsp;き、トンマナや方向性の決定後、下層ページの制作、文言や画像などを細かく設定していきます。
                                    </p>
                                </div>
                            </li>
                            <li class="anm">
                                <figure>
                                    <img src="assets/images/icon-flow04.svg" alt="" />
                                </figure>
                                <div>
                                    <h3>コーディング</h3>
                                    <p>
                                        実際にインターネット上で表示させるための制作に入っていきます。テスト環境をご用意しますので、最終確認を行い、問題がなければ納品となります。
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="contactArea" class="anm elm animate__animated">
                <div class="inner">
                    <header class="secHead">
                        <span class="ttl">Contact</span>
                        <h2 class="anm">お問い合わせ</h2>
                        <p class="anmleft">
                            お見積もりやご相談、その他お問い合わせは、お気軽にご連絡く�&nbsp;さい。
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
