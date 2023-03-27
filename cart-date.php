<?php include "include/meta.php"; ?>
<body>
    <?php include "include/header.php"; ?>
    <div class="cart_wrap">
        <div class="container">
            <div class="list flex">
                <div class="list_row">
                    <div class="icon"><i class="fa-solid fa-cash-register"></i></div>
                    <p>確認訂購內容</p>
                    <div class="stelp">STEP1</div>
                </div>
                <div class="order_icon"><i class="fa-solid fa-angles-right"></i></div>
                <div class="list_row active">
                    <div class="icon">
                        <div class="icon_radius"><i class="fa-solid fa-pen-to-square"></i></div>
                    </div>
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
            <div class="ordering">
                <div class="title">訂購須知</div>
                <p>親愛的客戶您好</p>
                <p>為維護您的權益請務必在購物結帳前詳讀"訂購須知"，並確認您購買的產品數量與金額，無誤後再送出訂單</p>
            </div>    
            <div class="cart_details">
                <div class="title">商品選購清單</div>
                <div class="cart_details_open">
                    <div>合計有2項商品</div>
                    <div>小計NTD $2,000元</div>
                    <div class="details_openBtn"></div>
                </div>
                <div class="details_table_wrap details_none">
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
                                <div>小計</div>
                                <div>2000</div>
                            </section>
                        </div>    
                    </div>
                </div>
                <div class="cart_data">
                    <div class="flex">
                        <div class="transport">
                            <div class="title">選擇送貨時段及付款方式</div>
                            <div class="content">
                                <h2>送貨方式</h2>
                                <div class="box">
                                    <select name="" class="full" id="">
                                        <option selected="">黑貓宅配 - 貨到付款 (限台灣地區)</option>
                                        <option>黑貓宅配 - 信用卡 &amp; LINE Pay &amp; 轉帳匯款 (限台灣地區)</option>
                                        <option>全家超商 - 純取貨 信用卡付款 (限台灣地區)</option>
                                    </select>
                                </div>
                                <div class="box">
                                    <select name="" id="" class="">
                                        <option value="">送貨時段選擇</option>
                                        <option value="不指定">不指定</option>
                                        <option value="上午(8~13時)">上午(8~13時)</option>
                                        <option value="下午(13~17時)">下午(13~17時)</option>
                                    </select>
                                </div>
                                <article>
                                    <p>【台灣地區物流配送時間】</p>
                                    <p>配送時間 : ＊星期一～星期六 </p>
                                    <p>配送時段 : ＊實際配送時段依照配送物流為主</p>
                                    <p>【以下區域恕不提供宅急便包裹配送服務】</p>
                                    <p>澎湖縣 ：（馬公市：虎井島、桶盤島）、望安鄉、七美鄉、（白沙鄉：大倉嶼、員貝嶼、鳥嶼、吉貝嶼）。</p>
                                    <p>金門縣 ：（烈嶼：大膽島、二膽島）、烏坵鄉。</p>
                                    <p>台東縣 ：  蘭嶼鄉、釣魚台列嶼、東沙群島、南沙群島 。  </p>
                                    <p>【注意事項】</p>
                                    <p>*星期日不配送,晚上時段物流不配送，請勿指定並留意您的手機！</p>
                                    <p>註 ：由於訂單繁多，除特殊原因需指定配送時段外，無須另外備註。</p>
                                    <p>♡♡♡ 為加速出貨速度，感謝您的配合 ♡♡♡</p>
                                </article>
                                <div class="content_box">
                                    <h2>付款方式</h2>
                                    <div class="box">
                                        <select id="" name="" class="">
                                            <option value="" selected="">宅配貨到付款 (限台灣地區)</option>
                                        </select>
                                    </div>
                                    <article>
                                        <p>「貨到付款」付款方式：包裹送達時，宅配司機會同時向您(收件人)收取代收金額。</p>
                                        <p>※僅限台灣地區                                    </p>
                                        <p>※請務必確認送貨時段有人可以收件及備妥購買金額(訂單總金額)，再使用此付款方式</p>
                                        <p>※收件當日請收件人保持手機暢通，以利宅配司機送貨前與您聯繫。</p>
                                        <p>※請詳細確認寄件方資訊及包裹是否正確，再進行簽收及付款。</p>
                                    </article>
                                </div>
                            </div>
                            <div class="title">發票資訊填寫</div>
                            <div class="content">                               
                                <div class="box">
                                    <p>發票資訊</p>
                                    <select name="" class="select" id="bill">
                                        <option value="0" selected="">紙本發票</option>
                                        <option value="1">公司戶紙本發票</option>
                                        <option value="2">捐贈發票</option>
                                    </select>
                                    <div class="box_odd">
                                        <div class="bill_2">
                                            <input type="text" placeholder="發票抬頭">
                                            <input type="text" placeholder="統一編號">
                                        </div>
                                        <div class="bill_3">
                                            <input type="text" placeholder="捐贈碼">
                                        </div>
                                        <p>需求備註</p>
                                        <textarea></textarea>
                                    </div>
                                </div>                              
                            </div>
                        </div>
                        <div class="data">
                            <div class="title">訂購人與收件人資訊填寫</div>
                            <div class="content">
                                <h2>收件人資訊 <a href="login.php">會員登入</a></h2>                               
                                <div class="box">
                                    <p>
                                        <span class="important">※</span>收件人姓名 
                                        <label for="man"><input type="radio" id="man" name="sex">先生</label>
                                        <label for="woman"><input type="radio" id="woman" name="sex" checked>小姐</label>                                         
                                    </p>
                                </div>
                                <div class="box">
                                    <p>
                                        <span class="important">※</span>電子信箱 
                                    </p>
                                    <input type="text">                                      
                                </div>
                                <article>
                                    *如訂購人同收件人，訂購通知相關訊息將會發送至此，為維護您的權益以及即時收到重要通知，請正確填寫信箱資訊。
                                </article>
                                <div class="box">
                                    <p>聯絡電話</p>
                                    <input type="text">                                      
                                </div>
                                <div class="box">
                                    <p><span class="important">※</span>行動電話</p>
                                    <input type="text">                                      
                                </div>
                                <div class="box">
                                    <p><span class="important">※</span>收件地址</p>
                                    <section class="city-selector" role="tw-city-selector"></section>    
                                    <input type="text" class="addInput">                                    
                                </div>
                                <div class="content_box">
                                    <h2>訂購人資訊 <label for="same"><input type="checkbox" id="same">與收件人相同</label></h2>
                                </div>
                                <div class="box">
                                    <p>
                                        <span class="important">※</span>收件人姓名 
                                        <label for="man"><input type="radio" id="man" name="sex">先生</label>
                                        <label for="woman"><input type="radio" id="woman" name="sex" checked>小姐</label>                                         
                                    </p>
                                </div>
                                <div class="box">
                                    <p>
                                        <span class="important">※</span>電子信箱 
                                    </p>
                                    <input type="text">                                      
                                </div>
                                <article>
                                    *如訂購人同收件人，訂購通知相關訊息將會發送至此，為維護您的權益以及即時收到重要通知，請正確填寫信箱資訊。
                                </article>
                                <div class="box">
                                    <p>聯絡電話</p>
                                    <input type="text">                                      
                                </div>
                                <div class="box">
                                    <p><span class="important">※</span>行動電話</p>
                                    <input type="text">                                      
                                </div>
                                <div class="box">
                                    <p><span class="important">※</span>收件地址</p>
                                    <section class="city-selector-same" role="tw-city-selector"></section>    
                                    <input type="text" class="addInput">                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="data_total">
                        <div class="title">訂單資訊</div>
                        <div class="box">
                            <div class="col">商品總計</div>
                            <div class="col">NTD.$2,000</div>
                        </div>
                        <div class="box">
                            <div class="col">折扣總計</div>
                            <div class="col">NTD.$0</div>
                        </div>
                        <div class="box_wrap">
                            <div class="box">
                                <div class="col">折扣後總額	</div>
                                <div class="col">NTD.$2000</div>
                            </div>
                            <div class="box">
                                <div class="col">商品運費</div>
                                <div class="col">NTD.$120</div>
                            </div>
                        </div>
                        <div class="box_wrap">
                            <div class="box">
                                <div class="col">結帳金額</div>
                                <div class="col important">NTD.$2,120</div>
                            </div>
                            <p>
                                請務必核對選購商品金額與數量，確認無誤後再送出訂單!
                            </p>
                        </div>
                    </div>
                    <div class="data_illustrate">
                        <p>為了維護您的消費權益，請務必再次確認結帳金額！</p>
                        <p>
                            <label for="agree"><input type="checkbox" id="agree">我同意網站</label>
                            <a href="privacy.php" target="_blank">服務條款</a>及<a href="privacy.php" target="_blank">隱私政策</a>
                        </p>
                    </div>
                    <div class="cart_wrapBtn">
                        <a href="cart-details.php" class="repage">回購物明細</a>
                        <a href="cart-check.php" class="nextBtn btnStyle">提交訂單</a>
                    </div>
                </div>
            </div>   
        </div>
    </div>
    <script src="dist/js/tw-city-selector.js"></script>
    <?php include "include/footer.php"; ?>
    <script>
        $(".details_openBtn").click(function(){
            $(this).toggleClass("details_openBtn_toggle")
            $(".details_none").slideToggle();
        });
        new TwCitySelector({
            el: '.city-selector',
            hasZipcode: true,
            countyValue: '台中市',
            districtValue: '西區',
        });
        new TwCitySelector({
            el: '.city-selector-same',
            hasZipcode: true,
        });
        $("#bill").change(function(){
            if($(this).val()==1){
                $(".bill_3").hide();
                $(".bill_2").show();
            }else if($(this).val()==2){
                $(".bill_2").hide();
                $(".bill_3").show();
            }else{
                $(".bill_2").hide();
                $(".bill_3").hide();
            }
        });
    </script>
</body>
</html>