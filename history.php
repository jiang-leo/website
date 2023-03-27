<?php include "include/meta.php"; ?>

<body>
    <?php include "include/header.php"; ?>
    <div class="member_wrap">
        <div class="container">
            <div class="flex">
                <div class="member_menu">
                    <h1>會員中心</h1>
                    <ul>
                        <li><a href="member.php">會員資料修改</a> <i class="fa-solid fa-caret-left"></i></li>
                        <li  class="active"><a href="history.php">訂單明細</a> <i class="fa-solid fa-caret-left"></i></li>
                        <li><a href="login.php">登出會員</a> <i class="fa-solid fa-caret-left"></i></li>
                    </ul>
                </div>           
                <div class="history">
                    <div class="table">
                        <div class="header flex">
                            <div class="list">訂單編號</div>
                            <div class="staus">訂單狀態</div>
                            <div class="payment">付款狀態</div>
                            <div class="deliver">送貨狀態</div>
                            <div class="total">合計</div>
                            <div class="time">訂單日期</div>
                            <div class="view"><a href="">查看</a></div>
                        </div>
                        <div class="main flex">
                            <div class="list">20230324001</div>
                            <div class="staus">處理中</div>
                            <div class="payment">未付款</div>
                            <div class="deliver">未送貨</div>
                            <div class="total">2,135</div>
                            <div class="time">2023-03-24 15:00</div>
                            <div class="view"><a href="history-item.php">查看</a></div>
                        </div>
                        <div class="main flex">
                            <div class="list">20230324002</div>
                            <div class="staus">已完成</div>
                            <div class="payment">已付款</div>
                            <div class="deliver">已送貨</div>
                            <div class="total">3,688</div>
                            <div class="time">2023-03-24 16:30</div>
                            <div class="view"><a href="history-item.php">查看</a></div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>   
    <?php include "include/footer.php"; ?>   
</body>
</html>