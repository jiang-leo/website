<?php include "include/meta.php";?>
<body>
    <?php include "include/header.php";?>    
    <div class="login_wrap">
        <div class="login">
            <div class="login_data">
                <div class="title">
                    <h1>Welcome to <span>Capies卡片</span></h1>
                    <p>歡迎登入Capies卡片會員</p>
                </div>
                <div class="form">
                    <div class="form_box">
                        <input type="text" placeholder="E-mail">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="form_box">
                        <input type="password" placeholder="密碼">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <div class="forget_row">
                        <a href="javascript:;" class="forgetBtn">忘記密碼?</a>
                    </div>
                    <a href="member.php" class="submit btnStyle">會員登入</a>
                    <div class="nomember">還不是會員嗎 ? <a href="register.php">立即註冊</a></div>
                    <div class="order_member">
                        <div class="title"><span>快速登入</span></div>
                        <a href="" class="fb" title="使用Facebook帳號登入"><svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path id="a" d="M.002.001H32v31.805H.002z"/></defs><g fill="none" fill-rule="evenodd"><g><path d="M0 0h32v32H0z"/><mask id="b" fill="#fff"><use xlink:href="#a"/></mask><path d="M32 16c0-8.837-7.163-16-16-16S0 7.163 0 16c0 7.986 5.851 14.605 13.5 15.806V20.625H9.437V16H13.5v-3.525c0-4.01 2.389-6.225 6.043-6.225 1.751 0 3.582.313 3.582.313V10.5h-2.018c-1.987 0-2.607 1.233-2.607 2.499V16h4.438l-.71 4.625H18.5v11.18C26.149 30.606 32 23.987 32 16" fill="#1977F2" mask="url(#b)"/></g><path d="M22.228 20.625l.71-4.625H18.5v-3.001c0-1.266.62-2.499 2.607-2.499h2.018V6.562s-1.831-.312-3.582-.312c-3.654 0-6.043 2.215-6.043 6.225V16H9.437v4.625H13.5v11.18a16.12 16.12 0 005 0v-11.18h3.728" fill="#FFFFFE"/></g></svg></a>
                        <a href="" class="google" title="使用Google帳號登入"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"><g fill="none" fill-rule="evenodd"><path d="M0 0h31.03v31.03H0z"/><path d="M31.38 16.837c0-1.1-.1-2.158-.283-3.173H16.485v6.001h8.35c-.36 1.94-1.453 3.583-3.096 4.683v3.893h5.014c2.934-2.7 4.626-6.678 4.626-11.404z" fill="#4285F4"/><path d="M16.485 32c4.189 0 7.701-1.39 10.268-3.759l-5.014-3.893c-1.39.931-3.167 1.481-5.254 1.481-4.041 0-7.462-2.73-8.682-6.396H2.62v4.02C5.173 28.523 10.42 32 16.485 32z" fill="#34A853"/><path d="M7.803 19.433a9.326 9.326 0 01-.486-2.948c0-1.023.176-2.017.486-2.948v-4.02H2.62a15.509 15.509 0 00-1.65 6.968c0 2.503.6 4.873 1.65 6.968l5.183-4.02z" fill="#FBBC05"/><path d="M16.485 7.14c2.278 0 4.323.783 5.93 2.32l4.45-4.45C24.18 2.508 20.668.97 16.486.97 10.42.97 5.173 4.447 2.62 9.517l5.183 4.02c1.22-3.667 4.64-6.397 8.682-6.397z" fill="#EA4335"/></g></svg></a>
                        <a href="" class="line" title="使用Line帳號登入"><svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h32v32H0z"/><path d="M25.067 32H6.933A6.933 6.933 0 010 25.067V6.933A6.933 6.933 0 016.933 0h18.134A6.933 6.933 0 0132 6.933v18.134A6.933 6.933 0 0125.067 32" fill="#00B900" fill-rule="nonzero"/><path d="M27.599 14.593c0-5.213-5.226-9.455-11.65-9.455-6.426 0-11.651 4.242-11.651 9.455 0 4.674 4.144 8.588 9.743 9.328.38.082.896.25 1.027.575.117.294.076.756.037 1.053l-.166.998c-.051.294-.235 1.152 1.009.628 1.243-.524 6.71-3.951 9.154-6.765 1.688-1.851 2.497-3.73 2.497-5.817" fill="#FFF" fill-rule="nonzero"/><g fill="#00B900" fill-rule="nonzero"><path d="M13.58 12.075h-.817a.227.227 0 00-.226.227v5.076c0 .125.101.225.226.225h.818c.125 0 .227-.1.227-.225V12.3a.227.227 0 00-.227-.226m5.625.001h-.819a.227.227 0 00-.226.227v3.016l-2.327-3.142a.27.27 0 00-.018-.023v-.002l-.019-.018-.012-.01a.04.04 0 00-.006-.004l-.012-.008-.006-.004-.012-.007-.008-.003-.013-.006-.007-.003a.104.104 0 00-.014-.004l-.008-.002-.013-.003a.044.044 0 00-.01-.001.132.132 0 00-.011-.002h-.837a.227.227 0 00-.227.226v5.077c0 .124.102.225.227.225h.817c.126 0 .227-.1.227-.225v-3.016l2.33 3.146a.226.226 0 00.06.058l.014.008.006.004a.137.137 0 00.01.005l.012.005.006.002.016.005h.003a.219.219 0 00.058.008h.817c.126 0 .227-.1.227-.225V12.3a.227.227 0 00-.227-.226M11.61 16.332H9.39V12.3a.227.227 0 00-.226-.227h-.818a.227.227 0 00-.227.227v5.075a.225.225 0 00.07.164c.042.04.098.063.157.063h3.265a.227.227 0 00.226-.227v-.817c0-.126-.1-.227-.226-.227m12.108-2.987a.227.227 0 00.226-.227v-.818c0-.125-.1-.227-.226-.227h-3.265a.225.225 0 00-.158.065l-.002.002-.004.004a.231.231 0 00-.063.156v5.077c0 .06.025.116.064.157l.003.003.003.003c.04.04.096.063.157.063h3.265a.227.227 0 00.227-.226v-.818c0-.125-.1-.227-.227-.227H21.5v-.858h2.22a.226.226 0 00.227-.227v-.817c0-.125-.1-.227-.227-.227H21.5v-.858h2.22-.001z"/></g></g></svg></a>
                    </div>
                    
                </div>
                <div class="login_password">
                    <div class="form_box">
                        <input type="text" placeholder="E-mail">
                        <i class="fa-solid fa-envelope"></i>
                        <button class="submit">查詢</button>
                        <div class="nomember"> <a href="javascript:;" class="repageBtn">回登入頁</a></div>
                    </div>
                </div>
            </div>
            <div class="order_login">
                <h4>非會員登錄</h4>
                <div class="form_box">
                    <input type="text" placeholder="信箱驗證">
                    <button>送出</button>
                    <p><a href="">前往信箱</a></p>
                </div>
                <div class="form_box">
                    <input type="text" placeholder="輸入信箱驗證碼" class="mailCode">
                </div>
                <div class="form_boxs">
                    <a href="member.php" class="submit btnStyle">送出驗證碼</a>
                </div>                
            </div>
        </div>
    </div>
    <?php include "include/footer.php";?>  
    <script>
        $(".forgetBtn").click(function(e){
            $(".form").slideUp();
            $(".login_password").slideDown();            
        });
        $(".repageBtn").click(function(e){
            $(".login_password").slideUp();
            $(".form").slideDown();            
        });
    </script>
</body>
</html>