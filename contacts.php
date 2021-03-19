
<?php
    include($_SERVER['DOCUMENT_ROOT']."/header.php"); 
?>
<link rel="stylesheet" href="css/contacts/style_contacts.css">
    <div class="contacts">
        <div class="wrapper">  
        <h2>контакты</h2>
            <div class="text">
                <p> 
                    Мы - команда тех, кто любит историю и любит Москву. 
                </p> 
                <p>   
                    Москва – это не только место по «заколачиванию денег» и 
                    «взращиванию карьеры», а еще и бесконечно красивые 
                    памятники природы, заказники, парки, заповедники. 
                    Активный отдых в Москве и Подмосковье – это отличная 
                    возможность вырваться из душного мегаполиса куда-нибудь 
                    в «дебри», навстречу приключениям. К счастью, не все 
                    Подмосковье еще «облагорожено» асфальтными дорожками и 
                    высоченными коттеджными заборами. Еще встречаются места, 
                    настолько глухие и далекие, что, очутившись там, кажется, 
                    что ты – первый человек, ступивший на эту землю.
                </p>
                <p>
                    Там, где не проедет автомобилист и даже велосипедист, 
                    найдет лазейку и откроет для себя все красоты 100% 
                    бездорожья турист, проводящий свой активный отдых в 
                    Подмосковь
                </p> 
            </div>
            <div class="workers" >
                <div class="worker">
                    <div class="photo1"></div>
                    <div class="text">
                        <h3>Александр Рыбаков</h3>
                          заместитель финансового директора
                        <h4>По всем вопросам пишите на почту</h4>
                        <p>rybakow@mymoscow.ru</p>
                    </div>
                </div> 
                <div class="worker">
                    <div class="photo2"></div>
                    <div class="text">
                        <div class="polosa"></div>
                            <h3>Елена Белкина</h3>
                            руководитель корпоративного отдела
                            <h4>По вопросам корпоративных экскурсий</h4>
                            <p>belkina@mymoscow.ru</p>
                    </div>
                </div>
            </div>
            <div class="our-contact">
                <div class="wrapper">
                    <div>
                        <div class="contact">
                            <div class="picture-adres"></div>
                            <div class="text">Москва,  Большая Спаская 12</div>
                        </div>
                        <div class="contact">
                            <div class="picture-mail" ></div>
                            <div class="text">E-mail:  info@mymoscow.ru</div>
                        </div> 
                        <div class="contact">
                            <div class="picture-phone"></div> 
                            <div class="text">Телефон:  8(495)626-46-00</div>
                        </div>
                    </div>
                    <a href="subscriber.php">Список наших подписчиков
                    </a>
                </div>
                <form id="contacts" method="POST" action="/insert_contacts.php">
                    <input type="text" name="fio" placeholder="ФИО">
                    <input type="text" name="email" placeholder="E-mail">
                    <textarea name="text_comment" placeholder="Ваше сообщение"></textarea>
                    <button type="submit"> отправить </button>
                </form>
                <!-- popup-окно на подверждения отправки формы с контактами -->
            </div>   
                <div class="question2">         
                    <div class="popup2">          
                        <div class="popup-content2">
                            <div class="krestic2">&#10006</div>
                            <p></p>
                        </div>
                        <div class="del2"></div>
                    </div>
                </div> 
           
        </div>

        <div class="fon">
            <h3>
                МЫ ПОЛУЧИЛИ ВАШИ КОНТАКТЫ.
            </h3> 
      <div class="watch"><a href="../subscriber.php">ПОСМОТРЕТЬ СПИСОК КОНТАКТОВ</a></div> 
       </div> 
    </div>
    <iframe class="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A21915b0701a637fdf464dce3a7d738cd8444c7d66f4e02bb31771cad41ab85f6&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
    <?php
        include($_SERVER['DOCUMENT_ROOT']."/footer.php"); 
    ?> <?php
   