<?php include "include/meta.php"; ?>
<body>
    <?php include "include/header.php"; ?>   
    <div class="member_wrap">
        <div class="container">
            <div class="flex">
                <div class="member_menu">
                    <h1>會員中心</h1>
                    <ul>
                        <li class="active"><a href="">會員資料修改</a> <i class="fa-solid fa-caret-left"></i></li>
                        <li><a href="history.php">訂單明細</a> <i class="fa-solid fa-caret-left"></i></li>
                        <li><a href="login.php">登出會員</a> <i class="fa-solid fa-caret-left"></i></li>
                    </ul>
                </div>
                <div class="member_modify">
                    <div class="box">
                        <label>
                            E-mail:
                        </label>
                        julia@authma.com.tw
                    </div>
                    <div class="box">
                        <label>密碼:</label>
                        <a href="">重設密碼</a>
                    </div>
                    <div class="box">
                        <label>姓名:</label>
                       <input type="text" value="楊冠瑩">
                    </div>
                    <div class="box">
                        <label>生日:</label>
                        <input type="date" value="1985-08-19">
                    </div>
                    <div class="box">
                        <label>連絡電話:</label>
                        <input type="text" value=" 04 3707 1105">
                    </div>
                    <div class="box">
                        <label>地址:</label>
                        <input type="text" value="407台中市西屯區臺灣大道二段633號5F-5">
                    </div>
                    <div class="box">
                        <label>公司統編:</label>
                        <input type="text" value="">
                    </div>
                    <div class="box">
                        <label>發票抬頭:</label>
                        <input type="text" value="">
                    </div>
                    <div class="box-last">
                        <p><span>第三方登入綁定</span></p>
                        <p><a href="">FACEBOOK 綁定</a></p>
                    </div>
                    <div class="box-btn">
                        <a href="" class="sendBtn btnStyle">修改會員資料</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="dist/js/tw-city-selector.js"></script>
    <?php include "include/footer.php"; ?>
    <script>
        new TwCitySelector({
            el: '.city-selector',
            hasZipcode: true
        });
    </script>
</body>
</html>