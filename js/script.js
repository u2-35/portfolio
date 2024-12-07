$(function() {

    $(document).ready(function () {
        // メインビジュアルの高さを取得
        const sliderHeight = $("#main-visual").outerHeight(); // outerHeightに変更し、paddingも含めた高さを取得
        const isTopPage = location.pathname === "/" || location.pathname.endsWith("index.html");
    
        if (isTopPage) {
            // 初期状態でロゴを非表示
            $(".logo").removeClass("logo-show");
    
            // トップページのスクロールイベント
            $(window).on("scroll", function () {
                if ($(this).scrollTop() > sliderHeight - 10) {
                    $(".logo").addClass("logo-show");
                } else {
                    $(".logo").removeClass("logo-show");
                }
            });
        } else {
            // 下層ページの場合は最初からロゴを表示
            $(".logo").addClass("logo-show");
        }
    });

    ////////// タブの切り替え
    $(document).ready(function () {
        // タブをクリックしたときの動作
        $('.cnav-list .tab').on('click', function () {
            // 対象のセクションに限定
            const $section = $(this).closest('.box'); 
            const index = $section.find('.cnav-list .tab').index(this);
      
            // タブのアクティブ状態を切り替え
            $section.find('.cnav-list .tab').removeClass('active');
            $(this).addClass('active');
      
            // コンテンツの切り替え
            $section.find('.container .content').removeClass('show').fadeOut(0); // 全コンテンツ非表示
            $section.find('.container .content').eq(index).fadeIn(300).addClass('show'); // 該当コンテンツを表示

            // 新しいタブを開いたときにスクロール位置をリセット
            $section.find(".container").scrollTop(0); 
        });  
    });
    //////////

    ////////// スムーススクロール
    // ページ内リンクのスムーススクロール
    $('a[href^="#"]').on('click', function (event) {
        event.preventDefault();  
        const targetId = $(this).attr('href');  
        const targetElement = $(targetId);  
    
        if (targetElement.length) {
            const offset = targetElement.offset().top;
    
            // スナップスクロールを無効化
            $('html, body').css('scroll-snap-type', 'none');
    
            $('html, body').animate({ scrollTop: offset }, 600, function () {
                // スクロール終了後にスナップスクロールを再度有効化
                setTimeout(() => {
                    $('html, body').css('scroll-snap-type', 'y mandatory');
                }, 100); // 少し遅延を入れて安定させる
            });
        }
    });

    // ページ遷移時のスムーススクロール
    $(window).on('load', function () {
        // ハッシュが存在するか確認
        const hash = window.location.hash;
        // ハッシュが存在する場合
        if (hash) {  
            // ページをトップに戻す         
            $(document).scrollTop(0);  
            // スナップスクロールを無効化
            $('html, body').css('scroll-snap-type', 'none');
            // 該当ハッシュまでスクロールする
            setTimeout(function () {
                const targetElement = $(hash);
                if (targetElement.length) {
                    $('html, body').animate({ scrollTop: targetElement.offset().top }, 600, function () {
                        console.log("Smooth scroll completed.");
                        // スムーススクロール後にスナップスクロールを再度有効化
                        $('html, body').css('scroll-snap-type', 'y mandatory');
                    });
                }
            }, 100); // 少し遅延させてスクロール処理を実行
        }
    });
    //////////

    ////////// プログレスバー
    // Intersection Observerのコールバック関数
    function handleIntersection(entries, progressObserver) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const $target = $(entry.target); // jQueryでターゲット取得
                const score = $target.find(".score").data("score"); // スコア取得
                const progressBar = $target.find(".progress-detail");

                // スコアに応じた幅を設定
                progressBar.css("width", score + "%");

                // スコアを表示
                const scoreText = $target.find(".score");
                scoreText.text(score + " / 100");

                // クラスを追加してアニメーションさせる
                progressBar.addClass("progress-detail-active");
                scoreText.addClass("score-active");

                // 監視を停止
                progressObserver.unobserve(entry.target);
            }
        });
    }
    // Intersection Observerの設定
    const progressObserver = new IntersectionObserver(handleIntersection, {
        root: null,
        rootMargin: "0px",
        threshold: 0.1,
    });

    // 各プログレスバーを監視
    $(".progress-list").each(function () {
        progressObserver.observe(this);
    });
    //////////

    ////////// ハンバーガーメニューの設定
	$('.menu-btn').click(function() {
        // nav-containerがopenクラスを持っていた（＝メニューが開いていた）ら、
        if($('.gnav-list').hasClass('nav-open')) {
            // 1. openクラスを外してメニューを閉じる
            $('.gnav-list').removeClass('nav-open');
            // 2. メニューボタンを×ではなくする
            $('.menu-btn').find('i').removeClass('fa-xmark');
            // 3. メニューボタンを≡にする
            $('.menu-btn').find('i').addClass('fa-bars');
            
        // nav-containerがopenクラスを持っていない（＝メニューが開いていない）ときは、  
        }else{
            // 1. openクラスを加えてメニューを開く
            $('.gnav-list').addClass('nav-open');
            // 2. メニューボタンを≡でなくする
            $('.menu-btn').find('i').removeClass('fa-bars');
            // 3. メニューボタンを×にする
            $('.menu-btn').find('i').addClass('fa-xmark');
        }
    });

    // クリックした場所がメニューボタンでもメニューそのものでもない場合
    $(document).click(function(e) {
        if (!$(e.target).closest('.menu-btn, .gnav-list').length) {
            // メニューが開いていたら
            if ($('.gnav-list').hasClass('nav-open')) {
                // メニューを閉じる
                $('.gnav-list').removeClass('nav-open');
                $('.menu-btn').find('i').removeClass('fa-xmark').addClass('fa-bars');
            }
        }
    });
    //////////

    ////////// iOSでハッシュリンクを踏んだ時に1回でページ遷移するようにする
    document.querySelectorAll('a[href^="index.html#"]').forEach(anchor => {
        anchor.addEventListener('touchend', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').split('#')[1];
            window.location.href = `index.html#${targetId}`;
        });
    });
    //////////

});