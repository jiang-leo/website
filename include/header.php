<header>
    <div class="logo">
        <a href="./"><img src="dist/img/logo.png" alt=""></a>
    </div>
    <menu>
        <ul class="flex">
            <li><a href="">關於Capies</a></li>
            <li><a href="">手工書</a></li>
            <li><a href="">手作禮物盒</a></li>
            <li><a href="">永生花禮物盒</a></li>
            <li><a href="">節慶主題</a></li>
            <li><a href="">其他服務</a></li>
        </ul>
    </menu>
    <div class="menu_link">
        <section class="searchBtn">
            <a href="javascript:;" class="searchnone">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            <input type="text" class="searchInput">
            <a href="" class="fa-solid fa-magnifying-glass sendBtn"></a>
        </section>
        <section><a href="javascript:;"><i class="fa-solid fa-cart-shopping cartBtn"></i><span class="cart_span_len"></span></a></section>
        <section><a href="login.php"><i class="fa-solid fa-user"></i></a></section>
    </div>
</header>   
<div class="cart_lightbox">
    <div class="content">
        <div class="cart_lightbox_close" title="關閉視窗"></div>
        <div class="title">
            <p>YOUR CART</p>
            <p>你的購物車總計<span class="cart__span"></span>件商品</p>
        </div> <!-- 已登入 -->       
        <!-- <div class="title">訪客</div> //未登入-->   
        <div class="cart_table">        
            <?php for($i=0;$i<6;$i++){?> 
            <div class="cart_col col flex">
                <div class="img"><img src="dist/img/product_01.png" alt=""></div>
                <div class="intro">
                    <p>粉紅色主題有錢花手工禮物盒</p>
                    <p>數量:*1</p>
                    <p>價錢:2,000元</p>
                </div>
                <div class="delete"><i class="deleteBtn fa-solid fa-trash"></i></div>
            </div>  
            <?php };?>   
        </div>
        <div class="send_wrap">
            <a href="cart-details.php" class="btnStyle">前往結帳</a>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        let cart_len = $(".cart_col").length;
        $(".cart_span_len").html(cart_len);   
        $(".cart__span").html(cart_len);   
    });
    $(".deleteBtn").click(function(){
        $(this).parents(".col").remove();
        let cart_len = $(".cart_col").length;
        $(".cart__span").html(cart_len)
        $(".cart_span_len").html(cart_len); 
    });
    $(".cartBtn").click(function(){
       $(".cart_lightbox").fadeIn();
    });    
    $(".cart_lightbox_close").click(function(){
       $(".cart_lightbox").fadeOut();
    });   
    $(".searchnone").click(function(){
       $(this).parent(".searchBtn").toggleClass("searchToggle")
    });   
</script>