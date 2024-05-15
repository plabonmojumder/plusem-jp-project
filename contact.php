<!DOCTYPE html>
<html dir="ltr" lang="ja" >
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        

        <title>お問い合わせ - 株式会社プラセム クリエイティブ制作</title>

          <!-- Stylesheets -->
    <?php include('_partials/stylesheet.php'); ?>
        <link rel="stylesheet" id="page-css" href="assets/css/page.css"  />
        <link rel="stylesheet" id="page-contact-css" href="assets/css/contact.css"  />
        <link rel="stylesheet" href="assets/css/custom.css" />
        <script src="assets/js/jquery-migrate.min.js"></script>
        <script src="assets/js/sakurav3.js"></script>
    </head>

    <body class="page-template-default page page-id-19 wp-custom-logo drawer drawer--right">
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
                            <img src="assets/images/logo_sp.svg"  alt=""  />
                        </a>
                    </div>
                    <ul class="drawer-menu">
                        <li class="acc">
                            <span>サービス</span>
                            <ul>
                                <li><a href="service.php">ウェブサイト制作</a></li>
                                <li><a href="service.php">LP制作</a></li>
                                <li><a href="service.php">ECサイト制作</a></li>
                                <li><a href="service.php">バナー制作</a></li>
                                <li><a href="service.php">動画制作</a></li>
                                <li><a href="service.php">イラスト制作</a></li>
                                <li><a href="service.php">ロゴ制作</a></li>
                                <li><a href="service.php">DTP制作</a></li>
                            </ul>
                        </li>
                        <li class="acc">
                            <span>制作実績</span>
                            <ul>
                                <li><a href="work.php">ウェブサイト</a></li>
                                <li><a href="work.php">LP</a></li>
                                <li><a href="work.php">バナー</a></li>
                                <li><a href="work.php">DTP</a></li>
                            </ul>
                        </li>
                        <li class="acc">
                            <span>よくあるご質問</span>
                            <ul>
                                <li><a href="faq.php">制作について</a></li>
                                <li><a href="faq.php">料金について</a></li>
                                <li><a href="faq.php">その他</a></li>
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
                            <li><a href="company.php">会社概要</a></li>
                            <li><a href="contact.php">お問い合わせ</a></li>
                            <li><a href="privacypolicy.php">プライバシーポリシー</a></li>
                        </ul>
                        <small>© 2023 PLUSEM Co., Ltd</small>
                    </div>
                </nav>
            </div>
            <section class="cover">
                <div class="inner">
                    <header class="coverHead">
                        <span>Contact</span>
                        <h1>お問い合わせ</h1>
                    </header>
                    <img class="coverImg" src="assets/images/cover.svg"  alt="Service"  />
                </div>
            </section>
            <div class="inner">
                <ul class="breadcrumbs">
                    <li><a href="">TOP</a></li>
                    <li>Contact</li>
                </ul>
            </div>

            <section id="contact" class="contents">
                <div class="inner">
                    <p class="txt">
                        サービスのお見積もりやご相談の依頼は無料です。<br />
                        以下のフォームに必要事項をご記入いただき、<br class="sp" />
                        お気軽にお問い合わせください。<br />
                        確認後、弊社担当からご連絡差し上げます。
                    </p>

                    <div class="contactForm">
                        <ul class="contactFlow">
                            <li class="active"><span>入力</span></li>
                            <li><span>確認</span></li>
                            <li><span>送信</span></li>
                        </ul>

                        <div id="mw_wp_form_mw-wp-form-24" class="mw_wp_form mw_wp_form_input">
                            <form method="post" action="" enctype="multipart/form-data">
                                <dl>
                                    <dt>お問い合わせ種別<span class="required">必須</span></dt>
                                    <dd>
                                        <span class="select-box">
                                            <select name="お問い合わせ種別">
                                                <option value="制作について"> 制作について </option>
                                                <option value="お見積もりについて"> お見積もりについて </option>
                                                <option value="その他"> その他 </option>
                                            </select>

                                            <input
                                                type="hidden"
                                                name="__children[お問い合わせ種別][]"
                                                value='{"\u5236\u4f5c\u306b\u3064\u3044\u3066":"\u5236\u4f5c\u306b\u3064\u3044\u3066","\u304a\u898b\u7a4d\u3082\u308a\u306b\u3064\u3044\u3066":"\u304a\u898b\u7a4d\u3082\u308a\u306b\u3064\u3044\u3066","\u305d\u306e\u4ed6":"\u305d\u306e\u4ed6"}'
                                            />
                                        </span>
                                    </dd>
                                    <dt>想定ページ数</dt>
                                    <dd>
                                        <span class="select-box">
                                            <select name="想定ページ数">
                                                <option value="未定"> 未定 </option>
                                                <option value="1ページ"> 1ページ </option>
                                                <option value="5ページ"> 5ページ </option>
                                                <option value="10ページ"> 10ページ </option>
                                                <option value="20ページ"> 20ページ </option>
                                                <option value="20ページ以上"> 20ページ以上 </option>
                                            </select>

                                            <input
                                                type="hidden"
                                                name="__children[想定ページ数][]"
                                                value='{"\u672a\u5b9a":"\u672a\u5b9a","1\u30da\u30fc\u30b8":"1\u30da\u30fc\u30b8","5\u30da\u30fc\u30b8":"5\u30da\u30fc\u30b8","10\u30da\u30fc\u30b8":"10\u30da\u30fc\u30b8","20\u30da\u30fc\u30b8":"20\u30da\u30fc\u30b8","20\u30da\u30fc\u30b8\u4ee5\u4e0a":"20\u30da\u30fc\u30b8\u4ee5\u4e0a"}'
                                            />
                                        </span>
                                    </dd>
                                    <dt>想定ご予算</dt>
                                    <dd>
                                        <span class="select-box">
                                            <select name="想定ご予算">
                                                <option value="未定"> 未定 </option>
                                                <option value="5万円"> 5万円 </option>
                                                <option value="10万円"> 10万円 </option>
                                                <option value="30万円"> 30万円 </option>
                                                <option value="50万円"> 50万円 </option>
                                                <option value="100万円"> 100万円 </option>
                                                <option value="100万円以上"> 100万円以上 </option>
                                            </select>

                                            <input
                                                type="hidden"
                                                name="__children[想定ご予算][]"
                                                value='{"\u672a\u5b9a":"\u672a\u5b9a","5\u4e07\u5186":"5\u4e07\u5186","10\u4e07\u5186":"10\u4e07\u5186","30\u4e07\u5186":"30\u4e07\u5186","50\u4e07\u5186":"50\u4e07\u5186","100\u4e07\u5186":"100\u4e07\u5186","100\u4e07\u5186\u4ee5\u4e0a":"100\u4e07\u5186\u4ee5\u4e0a"}'
                                            />
                                        </span>
                                    </dd>
                                    <dt>貴社名</dt>
                                    <dd>
                                        <input type="text" name="貴社名" size="60" value="" />
                                    </dd>
                                    <dt>お名前<span class="required">必須</span></dt>
                                    <dd>
                                        <input type="text" name="お名前" size="60" value="" />
                                    </dd>
                                    <dt>電話番号</dt>
                                    <dd>
                                        <input type="text" name="電話番号" size="60" value="" />
                                    </dd>
                                    <dt>メールアドレス<span class="required">必須</span></dt>
                                    <dd>
                                        <input type="email" name="メールアドレス" size="60" value="" data-conv-half-alphanumeric="true" />
                                    </dd>
                                    <dt>お問い合わせ内容</dt>
                                    <dd>
                                        <textarea name="お問い合わせ内容" cols="50" rows="5"></textarea>
                                    </dd>
                                </dl>
                                <div class="agree">
                                    <p>
                                        <em><a href="privacypolicy.php" target="_blank" rel="noopener">プライバシーポリシー</a>に</em>

                                        <span class="mwform-checkbox-field horizontal-item">
                                            <label>
                                                <input type="checkbox" name="同意[data][]" value="同意する" />
                                                <span class="mwform-checkbox-field-text">同意する</span>
                                            </label>
                                        </span>

                                        <input type="hidden" name="同意[separator]" value="," />

                                        <input type="hidden" name="__children[同意][]" value='{"\u540c\u610f\u3059\u308b":"\u540c\u610f\u3059\u308b"}' />
                                    </p>
                                </div>
                                <div class="btnMore anm800 elm animate__animated">
                                    <span>
                                        <input type="submit" name="submitConfirm" value="入力内容を確認する" />
                                    </span>
                                </div>
                                <input type="hidden" id="mw_wp_form_token" name="mw_wp_form_token" value="636f788fb2" /><input type="hidden" name="_wp_http_referer" value="/creative/contact/" />
                                <input type="hidden" name="mw-wp-form-form-id" value="24" /><input type="hidden" name="mw-wp-form-form-verify-token" value="3ac01e88ec942ec31496766f2c6b141426820400" />
                            </form>
                            <!-- end .mw_wp_form -->
                        </div>
                    </div>
                </div>
            </section>

            <section id="contactArea" class="anm elm animate__animated">
                <div class="inner">
                    <header class="secHead">
                        <span class="ttl">Contact</span>
                        <h2 class="anm">お問い合わせ</h2>
                        <p class="anmleft">お見積もりやご相談、その他お問い合わせは、お気軽にご連絡ください。</p>
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

            <footer>
                <div class="fInner top">
                    <ul class="infoArea">
                        <li class="fLogo anm">
                            <img src="assets/images/f-logo.svg" alt="" />
                        </li>
                        <li class="fInfo anm">
                            〒812-0011<br />
                            福岡県福岡市博多区博多駅前3-13-4<br />
                            リアンプレミアム博多駅前ビル 3F
                        </li>
                        <li class="fTel anm">TEL:092-791-7613</li>
                    </ul>
                    <div class="fMenu">
                        <dl class="menu menu1 anm">
                            <dt>サービス</dt>
                            <dd><a href="service.php">ウェブサイト制作</a></dd>
                            <dd><a href="service.php">動画制作</a></dd>
                            <dd><a href="service.php">LP制作</a></dd>
                            <dd><a href="service.php">イラスト制作</a></dd>
                            <dd><a href="service.php">ECサイト制作</a></dd>
                            <dd><a href="service.php">ロゴ制作</a></dd>
                            <dd><a href="service.php">バナー制作</a></dd>
                            <dd><a href="service.php">DTP制作</a></dd>
                        </dl>
                        <dl class="menu menu2 anm">
                            <dt>制作実績</dt>
                            <dd><a href="work.php">ウェブサイト</a></dd>
                            <dd><a href="work.php">LP</a></dd>
                            <dd><a href="work.php">バナー</a></dd>
                            <dd><a href="work.php">DTP</a></dd>
                        </dl>
                        <dl class="menu menu3 anm">
                            <dt>よくあるご質問</dt>
                            <dd><a href="faq.php">制作について</a></dd>
                            <dd><a href="faq.php">料金について</a></dd>
                            <dd><a href="faq.php">その他</a></dd>
                        </dl>
                    </div>
                </div>
                <div class="fInner bottom">
                    <ul class="anm">
                        <li><a href="company.php">会社概要</a></li>
                        <li><a href="contact.php">お問い合わせ</a></li>
                        <li><a href="privacypolicy.php">プライバシーポリシー</a></li>
                    </ul>
                    <small class="anm">© 2023 PLUSEM Co., Ltd</small>
                </div>
            </footer>
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
       <script src="assets/js/form.js"></script>
        </div>
    </body>
</html>
