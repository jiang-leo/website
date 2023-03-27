<?php include "include/meta.php";?>
<body>
    <?php include "include/header.php";?>    
    <div class="cart_wrap">
        <div class="container">
            <div class="list flex">
                <div class="list_row active">
                    <div class="icon"><i class="fa-solid fa-cash-register"></i></div>
                    <p>確認訂購內容</p>
                    <div class="stelp">STEP1</div>
                </div>
                <div class="order_icon"><i class="fa-solid fa-angles-right"></i></div>
                <div class="list_row">
                    <div class="icon"><div class="icon_radius"><i class="fa-solid fa-pen-to-square"></i></div>   </div>                
                    <p>填寫訂購資料</p>                    
                    <div class="stelp">STEP2</div>
                </div>
                <div class="order_icon"><i class="fa-solid fa-angles-right"></i> </div>
                <div class="list_row">
                    <div class="icon"><i class="fa-solid fa-truck"></i></div>  
                    <p>訂單完成</p>
                    <div class="stelp">STEP3</div>
                </div>
            </div>
            <div class="cart_details">
                <div class="user">會員:楊冠瑩 <div class="mail">julia@authma.com.tw</div></div>   
                <div class="title">
                    商品選購清單<span>(總計1件商品)</span>                             
                </div>    
                <div class="details_table_wrap">
                    <div class="details_table">
                        <div class="header flex">
                            <div class="imgUrl">產品圖片</div>
                            <div class="name">商品名稱</div>
                            <div class="price">單價</div>
                            <div class="quantity">數量</div>
                            <div class="subtotal">小計</div>
                            <div class="delete">刪除</div>
                        </div>
                        <div class="main flex">
                            <div class="imgUrl"><img src="dist/img/product_01.png" alt=""></div>
                            <div class="name">
                                <p>粉紅色主題有錢花手工禮物盒</p>
                                <span>規格:05號-日本貓咪風(含代洗代貼照片2張)</span>
                            </div>
                            <div class="price">2,000</div>
                            <div class="quantity">
                                <select>
                                    <?php for($i=1;$i<999;$i++){?>
                                    <option><?php echo $i;?></option>
                                    <?php };?>
                                </select>
                            </div>
                            <div class="subtotal">2,000</div>
                            <div class="delete"><a class="fa-solid fa-trash deleteBtn"></a></div>
                        </div> 
                        <div class="main flex">
                            <div class="imgUrl"><img src="dist/img/product_01.png" alt=""></div>
                            <div class="name">
                                <p>粉紅色主題有錢花手工禮物盒</p>
                                <span>規格:05號-日本貓咪風(含代洗代貼照片2張)</span>
                            </div>
                            <div class="price">2,000</div>
                            <div class="quantity">
                                <select>
                                    <?php for($i=1;$i<999;$i++){?>
                                    <option><?php echo $i;?></option>
                                    <?php };?>
                                </select>
                            </div>
                            <div class="subtotal">2,000</div>
                            <div class="delete"><a class="fa-solid fa-trash deleteBtn"></a></div>
                        </div>                            
                        <div class="subtotal_all">
                            <section>
                                <div>
                                    <p><span>全館活動</span></p>
                                    <p>全館 再 $ 970 元，抵 $ 100 元</p>
                                </div>
                                <div>尚未符合</div>
                            </section>
                        </div>  
                        <div class="subtotal_all">
                            <section>
                                <div>
                                    <p><span>折扣代碼與點數折抵</span></p>                                   
                                </div>
                                <div><input type="text"></div>
                            </section>
                        </div>   
                        <div class="subtotal_all">
                            <section>
                                <div>折扣</div>
                                <div></div>
                            </section>
                        </div>   
                        <div class="subtotal_all">
                            <section>
                                <div>小計</div>
                                <div>2000</div>
                            </section>
                        </div>  
                        <div class="subtotal">
                            <section></section>
                            <section>
                               <textarea placeholder="給商家的備註"></textarea>
                            </section>
                        </div>   
                    </div>
                </div>
                <div class="cart_wrapBtn">
                    <a href="" class="repage">繼續購物</a>
                    <a href="cart-date.php" class="nextBtn btnStyle">前往結帳</a>
                </div>
            </div>
        </div>
    </div>
    <?php include "include/footer.php";?>       
</body>
</html>