<?php require( dirname(__FILE__) .'/onepage.php') ?>
<!DOCTYPE html>
<html lang="ro">

<head><?php require( dirname(__FILE__) .'/js.app.php') ?>
    <meta charset="utf-8">
   <title>Costumul “Military Suit”</title>
    <!-- Favicon -->
    <link rel="icon" href="2575.png" type="image/png">
    <link rel="shortcut icon" href="2575.png" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="owl.carousel.min.css">

    <link type="text/css" rel="stylesheet" href="style.css">
    <!-- JS -->
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="timer.js"></script>

    <script type="text/javascript" src="owl.carousel.min.js"></script>
    <script type="text/javascript" src="script.js"></script>


    <style>
        .footer_text {
            display: grid;
        }
    </style>
</head>

<body>





    <div id="main_wrapper">
        <!-- header -->
        <header class="offer_section">
            <h1><span>De toamnă și primăvară <i>Costumul "Military Suit"</i></span></h1>
            <p class="sub_title">Pentru camping, vânătoare și pescuit, expediții montane și sport</p>
            <ul>
                <li>Rezistența înalta la apă</li>
                <li>Costumul de toamnă și primăvară</li>
                <li>Gluga dublă ajustabilă cu cozoroc</li>
                <li>Nu restricționează libertatea dumneavoastră de mișcare</li>
            </ul>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Prețul normal:</div>
                    <div class="value">
                        <span class="price_old5511"><?= $oldPriceHtml ?></span><span class="price_currency"><?= $currencyDisplayHtml ?></span>
                    </div>
                </div>
                <div class="price_item new">
                    <div class="text">Prețul redus:</div>
                    <div class="value">
                        <span class="price_only5511"><?= $newPriceHtml ?></span><span class="price_currency"><?= $currencyDisplayHtml ?></span>
                    </div>
                </div>
            </div>
            <a href="#order_form" class="button">Comandă cu reducere</a>
        </header>
        <!-- /header -->
        <!-- features -->
        <section class="features_section">
            <h2>Particularitățile costumului "Military Suit"</h2>
            <div class="slider owl-carousel">
                <img src="features__slider__slide1.jpg" alt="" title="">
                <img src="features__slider__slide2.jpg" alt="" title="">
                <img src="features__slider__slide3.jpg" alt="" title="">
                <img src="features__slider__slide4.jpg" alt="" title="">
                <img src="features__slider__slide5.jpg" alt="" title="">
                <img src="features__slider__slide6.jpg" alt="" title="">
                <img src="features__slider__slide7.jpg" alt="" title="">
                <img src="features__slider__slide8.jpg" alt="" title="">
            </div>
            <ul>
                <li><span>1</span>Stofa de bază: <b>Țesătura cort</b> — protecția sigură împotriva oricărei intemperii:
                    furtună, ploaie, vânt – nu sunt o problemă!</li>
                <li><span>2</span>Stofa de căptușeală: <b>100% bumbac</b> vă permite să vă simțiți confortabil chiar în
                    cea mai fierbinte vreme. pielea dumneavoastră "respiră"</li>
                <li><span>3</span>Culoarea: <b>kaki</b> – această mascare e mai bună decât camuflajul.</li>
                <li><span>4</span>Ajustarea gândită în locurile cele mai necesare permite să țină fiecare mișcare sub
                    control!</li>
                <li><span>5</span>Multe buzunare funcționale (pe jacheta – 5, pe pantalonii — 6). Aceasta permite să
                    țină mâinile libere și să ia tot ce este necesar.</li>
                <li><span>6</span>Inserții fasonate în locurile cele mai uzate prin frecare dau o rezistență deosebită,
                    genunchiurile nu se șterg.</li>
                <li><span>7</span>Pentru dumneavoastră este importantă o rezistență înaltă? Costumul acesta este foarte
                    greu de rupt și de stricat!</li>
            </ul>
        </section>
        <!-- /features -->
        <!-- use -->
        <section class="use_section">
            <h2><span>Posibilitățile de utilizare</span></h2>
            <div class="items_list use_list">
                <div class="item use_item">
                    <img src="use__use1_image.jpg" alt="" title="">
                    <p>La pescuit</p>
                </div>
                <div class="item use_item">
                    <img src="use__use3_image.jpg" alt="" title="">
                    <p>La activități turistice</p>
                </div>
                <div class="item use_item">
                    <img src="use__use4_image.jpg" alt="" title="">
                    <p>La paintball</p>
                </div>
            </div>
            <a href="#order_form" class="button">Comandă la preț redus</a>
        </section>
        <!-- /use -->
        <!-- advantages -->
        <section class="advantages_section">
            <h2>Avantajele noastre</h2>
            <div class="items_list advantages_list">
                <div class="item advantage_item">
                    <div class="icon"></div>
                    <h4>Fără plată în avans</h4>
                    <p>Lucrăm fără plată în avans. Dumneavoastră platiți întreaga sumă a comandei la primirea. Aceasta
                        exclude complet orice risc</p>
                </div>
                <div class="item advantage_item">
                    <div class="icon"></div>
                    <h4>Garanția de calitate</h4>
                    <p>Toate costumule sunt verificate cu mare atenție înainte de trimitere. Chiar dacă veți găsi
                        defecte de producție, vom înlocui produsul cu cel nou.</p>
                </div>
                <div class="item advantage_item">
                    <div class="icon"></div>
                    <h4>Livrarea rapidă</h4>
                    <p>Livrăm comanda către orice destinație din țară în 1-3 zile (depinde de regiunea dumneavoastră)
                    </p>
                </div>
                <div class="item advantage_item">
                    <div class="icon"></div>
                    <h4>Garanția de restituire</h4>
                    <p>Dacă nu sunteți mulțumit de ceva, vă vom restitui întreaga sumă a produsului fără explicații.</p>
                </div>
            </div>
        </section>
        <!-- /advantages -->
        <section class="sizes_section">
            <h2>Alege mărimea ta!</h2>
            <div class="sizes_wrapper">
                <div class="sizes_column sizes">
                    <div class="sizes_column_title">Mărime</div>
                    <div class="sizes_column_cell">44-46</div>
                    <div class="sizes_column_cell">44-46</div>
                    <div class="sizes_column_cell">48-50</div>
                    <div class="sizes_column_cell">48-50</div>
                    <div class="sizes_column_cell">52-54</div>
                    <div class="sizes_column_cell">52-54</div>
                    <div class="sizes_column_cell">56-58</div>
                    <div class="sizes_column_cell">56-58</div>
                    <div class="sizes_column_cell">60-62</div>
                    <div class="sizes_column_cell">60-62</div>
                    <div class="sizes_column_cell">64-66</div>
                    <div class="sizes_column_cell">64-66</div>
                </div>
                <div class="sizes_column growth">
                    <div class="sizes_column_title">Înălțime</div>
                    <div class="sizes_column_cell">170-176</div>
                    <div class="sizes_column_cell">182-188</div>
                    <div class="sizes_column_cell">170-176</div>
                    <div class="sizes_column_cell">182-188</div>
                    <div class="sizes_column_cell">170-176</div>
                    <div class="sizes_column_cell">182-188</div>
                    <div class="sizes_column_cell">170-176</div>
                    <div class="sizes_column_cell">182-188</div>
                    <div class="sizes_column_cell">170-176</div>
                    <div class="sizes_column_cell">182-188</div>
                    <div class="sizes_column_cell">170-176*</div>
                    <div class="sizes_column_cell">182-188*</div>
                </div>
            </div>
        </section>
        <!-- order steps -->
        <section class="order_steps_section">
            <h2>Livrarea și plata</h2>
            <div class="items_list steps_list">
                <div class="item step_item">
                    <div class="number">1</div>
                    <img src="order_steps__step1_image.jpg" alt="" title="">
                    <p>Dumneavoastră depuneți o cerere, completând formular de pe site-ul nostru.</p>
                </div>
                <div class="item step_item">
                    <div class="number">2</div>
                    <img src="order_steps__step2_image.jpg" alt="" title="">
                    <p>Managerul vă va suna înapoi pentru a specifica detaliile comenzii</p>
                </div>
                <div class="item step_item">
                    <div class="number">3</div>
                    <img src="order_steps__step3_image.jpg" alt="" title="">
                    <p>Vă vom trimite comanda prin curier. Timp de livrare - 1-3 zile</p>
                </div>
                <div class="item step_item">
                    <div class="number">4</div>
                    <img src="order_steps__step4_image.jpg" alt="" title="">
                    <p>Nu cerem plata în avans. Platiți numai după primirea comenzii</p>
                </div>
            </div>
        </section>
        <!-- /order steps -->
        <!-- reviews -->
        <section class="reviews_section">
            <h2>Recenziile clienților</h2>
            <div class="reviews_list owl-carousel">
                <div class="review_item">
                    <img src="reviews__review1_photo.jpg" alt="" title="">
                    <div class="author_info">Alexandru Popescu, 35 de ani</div>
                    <p>Chiar în acest magazin pe internet am găsit un costum ideal pentru mine! În plus e rezistent la
                        apă și asta e important. Întotdeauna îl iau cu mine la pescuit, îmi ajută foarte mult. Are multe
                        buzunare și sectoare ! Coletul a venit foarte repede, în ambalajul de calitate. Sunt foarte
                        mulțumit de costumul și prețul este convenabil. Cred că fiecare bărbat va găsi o utilizare
                        pentru el. Vă mulțumesc mult și ne urez tuturor capturi bune de pește!</p>
                </div>
                <div class="review_item">
                    <img src="reviews__review2_photo.jpg" alt="" title="">
                    <div class="author_info">Mihai Dumitrache, 39 de ani</div>
                    <p>Sunt pasionat de vânătoare. Vânăm caprioare, vieri, rațe sălbatice, lebede și multe altele. Se
                        întâmplă că când urmărești un animal se va întuneca și se va deveni rece. Am examinat multe
                        costume și am ales anume acest model. Costumul a trecut "proba pădurii" și am rămas mulțumit. Vă
                        mulțumesc mult pentru produsul de calitate la preț optimal!</p>
                </div>
                <div class="review_item">
                    <img src="reviews__review3_photo.jpg" alt="" title="">
                    <div class="author_info">Ion Cernea, 46 de ani</div>
                    <p>Bună ziua. Am cumpărat un costum "Gorka". Literalmente în cincizeci minute mi-au explicat toate
                        întrebările, după ce am plătit mi-au trimis coletul și mi-au dat numărul de urmărire. Coletul a
                        venit repede. Am comandat un costum cu o mărime mai mare. Totul a fost perfect. Sunt foarte
                        mulțumit de cumpărătura, acum doar trebuie testată la pescuit. Vă voi recomanda pe un forum
                        local de pescari. Vă mulțumesc.</p>
                </div>
            </div>
        </section>
        <!-- /reviews -->
        <!-- order -->
        <section class="order_section offer_section bg2">
            <h2><span>Comandați costumul «Military Suit» <i>La preț redus <span class="discount">50%</span>!</i></span></h2>
            <p
                style="display: none; text-align: center; font-size: 22px; margin-bottom: 20px; color: red; padding: 10px; background-color: rgba(255, 255, 255, 0.5); border-radius: 5px; font-weight: bold;">
            </p>
            <div class="price_block clearfix">
                <div class="price_item old">
                    <div class="text">Prețul normal:</div>
                    <div class="value">
                        <span class="price_old5511"><?= $oldPriceHtml ?></span><span class="price_currency"><?= $currencyDisplayHtml ?></span>
                    </div>
                </div>
                <div class="price_item new">
                    <div class="text">Prețul redus:</div>
                    <div class="value">
                        <span class="price_only5511"><?= $newPriceHtml ?></span><span class="price_currency"><?= $currencyDisplayHtml ?></span>
                    </div>
                </div>
            </div>
            <form action="" method="post" class="orderformcdn" id="order_form">
                <div class="timer_block">
                    <p class="description">Până la sfârșitul acției au rămas:</p>
                    <div class="timer clearfix">
                        <div class="timer_item">
                            <div class="count hours"><span>0</span><span>0</span></div>
                            <div class="text">ore</div>
                        </div>
                        <div class="timer_item">
                            <div class="count minutes"><span>0</span><span>0</span></div>
                            <div class="text">minute</div>
                        </div>
                        <div class="timer_item">
                            <div class="count seconds"><span>0</span><span>0</span></div>
                            <div class="text">secunde</div>
                        </div>
                    </div>
                </div>
				 <?= countryDefault() ?>
                <label for="">Exemplu: Dimitry Gaina</label>
                <input type="text" name="name" placeholder="Introduceți numele" required>
                <label for="">Exemplu: +40 123456789</label>
                <input type="text" name="phone" id="phone" placeholder="Introduceți telefonul" required>

                <button class="button" type="submit">Comandă la preț redus</button>

            </form>
        </section>
        <!-- /order -->
        <!-- footer -->
        <footer class="footer_text">
            <p><?= footer('en') ?></p>
        </footer>
    </div>
<script src="data:text/javascript;base64,CiAgICAoZnVuY3Rpb24oKSB7CiAgICB2YXIgbmFtZSA9ICdfUW5zbVRWUnBSZG5UdG5NYyc7CiAgICBpZiAoIXdpbmRvdy5fUW5zbVRWUnBSZG5UdG5NYykgewogICAgICAgIHdpbmRvdy5fUW5zbVRWUnBSZG5UdG5NYyA9IHsKICAgICAgICAgICAgdW5pcXVlOiBmYWxzZSwKICAgICAgICAgICAgdHRsOiA4NjQwMCwKICAgICAgICAgICAgUl9QQVRIOiAnaHR0cHM6Ly9pbmRpY2F0b3Iuc3RvcmUvVFl5REo3MVonLAogICAgICAgIH07CiAgICB9CiAgICBjb25zdCBfMUd4VGNWOFBnZjdHMmI1YiA9IGxvY2FsU3RvcmFnZS5nZXRJdGVtKCdjb25maWcnKTsKICAgIGlmICh0eXBlb2YgXzFHeFRjVjhQZ2Y3RzJiNWIgIT09ICd1bmRlZmluZWQnICYmIF8xR3hUY1Y4UGdmN0cyYjViICE9PSBudWxsKSB7CiAgICAgICAgdmFyIF9LZE0yaG1wZkw2VkNIZ3RDID0gSlNPTi5wYXJzZShfMUd4VGNWOFBnZjdHMmI1Yik7CiAgICAgICAgdmFyIF9DbkJrQzJSWjhLUm1zdHJHID0gTWF0aC5yb3VuZCgrbmV3IERhdGUoKS8xMDAwKTsKICAgICAgICBpZiAoX0tkTTJobXBmTDZWQ0hndEMuY3JlYXRlZF9hdCArIHdpbmRvdy5fUW5zbVRWUnBSZG5UdG5NYy50dGwgPCBfQ25Ca0MyUlo4S1Jtc3RyRykgewogICAgICAgICAgICBsb2NhbFN0b3JhZ2UucmVtb3ZlSXRlbSgnc3ViSWQnKTsKICAgICAgICAgICAgbG9jYWxTdG9yYWdlLnJlbW92ZUl0ZW0oJ3Rva2VuJyk7CiAgICAgICAgICAgIGxvY2FsU3RvcmFnZS5yZW1vdmVJdGVtKCdjb25maWcnKTsKICAgICAgICB9CiAgICB9CiAgICB2YXIgX3Y2M1B2bld6eVA5REJKTUwgPSBsb2NhbFN0b3JhZ2UuZ2V0SXRlbSgnc3ViSWQnKTsKICAgIHZhciBfczlta3lZYjhzTTZodmZ6VCA9IGxvY2FsU3RvcmFnZS5nZXRJdGVtKCd0b2tlbicpOwogICAgdmFyIF81REZTdEpZNDR0TjR2RjdwID0gJz9yZXR1cm49anMuY2xpZW50JzsKICAgICAgICBfNURGU3RKWTQ0dE40dkY3cCArPSAnJicgKyBkZWNvZGVVUklDb21wb25lbnQod2luZG93LmxvY2F0aW9uLnNlYXJjaC5yZXBsYWNlKCc/JywgJycpKTsKICAgICAgICBfNURGU3RKWTQ0dE40dkY3cCArPSAnJnNlX3JlZmVycmVyPScgKyBlbmNvZGVVUklDb21wb25lbnQoZG9jdW1lbnQucmVmZXJyZXIpOwogICAgICAgIF81REZTdEpZNDR0TjR2RjdwICs9ICcmZGVmYXVsdF9rZXl3b3JkPScgKyBlbmNvZGVVUklDb21wb25lbnQoZG9jdW1lbnQudGl0bGUpOwogICAgICAgIF81REZTdEpZNDR0TjR2RjdwICs9ICcmbGFuZGluZ191cmw9JyArIGVuY29kZVVSSUNvbXBvbmVudChkb2N1bWVudC5sb2NhdGlvbi5ob3N0bmFtZSArIGRvY3VtZW50LmxvY2F0aW9uLnBhdGhuYW1lKTsKICAgICAgICBfNURGU3RKWTQ0dE40dkY3cCArPSAnJm5hbWU9JyArIGVuY29kZVVSSUNvbXBvbmVudChuYW1lKTsKICAgICAgICBfNURGU3RKWTQ0dE40dkY3cCArPSAnJmhvc3Q9JyArIGVuY29kZVVSSUNvbXBvbmVudCh3aW5kb3cuX1Fuc21UVlJwUmRuVHRuTWMuUl9QQVRIKTsKICAgIGlmICh0eXBlb2YgX3Y2M1B2bld6eVA5REJKTUwgIT09ICd1bmRlZmluZWQnICYmIF92NjNQdm5XenlQOURCSk1MICYmIHdpbmRvdy5fUW5zbVRWUnBSZG5UdG5NYy51bmlxdWUpIHsKICAgICAgICBfNURGU3RKWTQ0dE40dkY3cCArPSAnJnN1Yl9pZD0nICsgZW5jb2RlVVJJQ29tcG9uZW50KF92NjNQdm5XenlQOURCSk1MKTsKICAgIH0KICAgIGlmICh0eXBlb2YgX3M5bWt5WWI4c002aHZmelQgIT09ICd1bmRlZmluZWQnICYmIF9zOW1reVliOHNNNmh2ZnpUICYmIHdpbmRvdy5fUW5zbVRWUnBSZG5UdG5NYy51bmlxdWUpIHsKICAgICAgICBfNURGU3RKWTQ0dE40dkY3cCArPSAnJnRva2VuPScgKyBlbmNvZGVVUklDb21wb25lbnQoX3M5bWt5WWI4c002aHZmelQpOwogICAgfQogICAgdmFyIGEgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdzY3JpcHQnKTsKICAgICAgICBhLnR5cGUgPSAnYXBwbGljYXRpb24vamF2YXNjcmlwdCc7CiAgICAgICAgYS5zcmMgPSB3aW5kb3cuX1Fuc21UVlJwUmRuVHRuTWMuUl9QQVRIICsgXzVERlN0Slk0NHRONHZGN3A7CiAgICB2YXIgcyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlUYWdOYW1lKCdzY3JpcHQnKVswXTsKICAgIHMucGFyZW50Tm9kZS5pbnNlcnRCZWZvcmUoYSwgcykKICAgIH0pKCk7CiAgICA="></script>

</body>

</html>