
<?php include "header.php"?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home page</title>
	<link rel="image_src" href="/images/immersive_slider_image.png" />

	<meta content="http://www.thepetedesign.com/images/immersive_slider_image.png" property="og:image" />
	<link rel="shortcut icon" id="favicon" href="favicon.png"> 
	<link rel="canonical" href="http://www.thepetedesign.com/demos/immersive_slider_demo.html" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="jquery.immersive-slider.js"></script>
  <link href='immersive-slider.css' rel='stylesheet' type='text/css'>
  <style>
    html {
      height: 100%;
    }
    body {
      background-image: url(kosmos1920x1080.jpg); 
    /* background-color: #9B68D4;   */
      padding: 0;
      text-align: center;
      font-family: 'open sans';
      position: relative;
      margin: 0;
      height: 100%;
    }
    
    
    .wrapper {
    	height: auto !important;
    	height: 100%;
    	margin: 0 auto; 
    	overflow: hidden;
    }
    
    a {
      text-decoration: none;
    }
    
    
    h1, h2 {
      width: 100%;
      float: left;
    }
    h1 {
      margin-top: 25px;
      color: #BAC8FF;
      margin-bottom: 5px;
      font-size: 50px;
      letter-spacing: -4px;
    }
    h2 {
      color: #B7C4FA;
      font-weight: 100;
      margin-top: 0;
      margin-bottom: 10px;
    }
    
    .pointer {
      color: #9b59b6;
      font-family: 'Pacifico', cursive;
      font-size: 30px;
      margin-top: 15px;
    }
    pre {
      margin: 80px auto;
    }
    pre code {
      padding: 35px;
      border-radius: 5px;
      font-size: 15px;
      background: rgba(0,0,0,0.1);
      border: rgba(0,0,0,0.05) 5px solid;
      max-width: 500px;
    }


    .main {
      float: left;
      width: 100%;
      margin: 0 auto;
      background: #161923;
    }
    
    .main h1 {
      padding:20px 50px;
      float: left;
      width: 100%;
      font-size: 90px;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      font-weight: 100;
      color: black;
      margin: 0;
      margin-top: 70px;
      font-family: 'Playfair Display';
      letter-spacing: -1px;
    }
   
    .main h1.demo1 {
      background: #1ABC9C;
    }
    
    .reload.bell {
      font-size: 12px;
      padding: 20px;
      width: 45px;
      text-align: center;
      height: 47px;
      border-radius: 50px;
      -webkit-border-radius: 50px;
      -moz-border-radius: 50px;
    }
    
    .reload.bell #notification {
      font-size: 25px;
      line-height: 140%;
    }
    
    .reload, .btn{
      display: inline-block;
      border: 4px solid #A2261E;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
      background: #CC3126;
      display: inline-block;
      line-height: 100%;
      padding: 0.7em;
      text-decoration: none;
      color: #fff;
      width: 100px;
      line-height: 140%;
      font-size: 17px;
      font-family: open sans;
      font-weight: bold;
    }
    .reload:hover{
      background: #A2261E;
    }
    .btn {
      width: 200px;
      color: #fff;
      border: none;
      margin-left: 10px;
      background: black;
      display: none;
    }
    .clear {
      width: auto;
    }
    .btn:hover{
      background: rgba(0,0,0,0.8);
    }
    .btns {
      width: 410px;
      margin: 50px auto;
    }
    .credit {
      text-align: center;
      color: #444;
      padding: 10px;
      margin: 0 0 0 0;
      background: #161923;
      color: #FFF;
      float: left;
      width: 100%;
    }
    .credit a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }
    
    .back {
      position: absolute;
      top: 0;
      left: 0;
      text-align: center;
      display: block;
      padding: 7px;
      width: 100%;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      background: rgba(255, 255, 255, 0.25);
      font-weight: bold;
      font-size: 13px;
      color: #000;
      -webkit-transition: all 200ms ease-out;
      -moz-transition: all 200ms ease-out;
      -o-transition: all 200ms ease-out;
      transition: all 200ms ease-out;
    }
    .back:hover {
      color: black;
      background: rgba(255, 255, 255, 0.5);
    }
    
    
    .page_container {
      max-width: 960px;
      margin: 50px auto;
    }

    .header {
      background: white;
      padding-top: 10px;
      margin-bottom: 0;
    }
    .header h1{
      margin-bottom: 0;
      font-size: 45px;
    }

    .header .menu {
      padding-bottom: 10px;
    }

    .benefits {
      color: black;
      height: 100px;
      background: #FFF;
      position: relative;
      width: 100%;
      padding: 25px;
      font-size: 40px;
      font-weight: 100;
      float: left;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
    }

    .benefits .page_container{
      margin-bottom: 50px;
      margin-top: 0;
    }
  
    .immersive_slider .is-slide .content h2{
      line-height: 140%;
      font-weight: 100;
      color: white;
      font-weight: 100;
    }
    .immersive_slider .is-slide .content a {
      color: white;
    }
  
  .immersive_slider .is-slide .content p{
    float: left;
    font-weight: 100;
    width: 100%;
    font-size: 17px;
    margin-top: 5px;
  }body .one .bsa_it_ad { background: transparent; border: none; font-family: inherit; padding: 0 15px 0 10px; margin: 0; text-align: center; }
body .one .bsa_it_ad:hover img { -moz-box-shadow: 0 0 3px #000; -webkit-box-shadow: 0 0 3px #000; box-shadow: 0 0 3px #000; }
body .one .bsa_it_ad .bsa_it_i { display: block; padding: 0; float: none; margin: 0 0 5px; }
body .one .bsa_it_ad .bsa_it_i img { padding: 0; border: none; }
body .one .bsa_it_ad .bsa_it_t { padding: 6px 0; }
body .one .bsa_it_ad .bsa_it_d { padding: 0; font-size: 12px; color: #333; }
body .one .bsa_it_p { display: none; }
body #bsap_aplink, body #bsap_aplink:hover { display: block; font-size: 10px; margin: 12px 15px 0; text-align: center; }

.ads {
  position: fixed;
  left: 10px;
  bottom: 10px;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  z-index: 99;
  text-align: center;
  max-width: 200px;
}

.ads a {
  color: wheat;
}

.ad-header {
  margin: 0 0 -2px 0px;
  background: white;
  border-radius: 3px 3px 0 0;
  overflow: hidden;
}
.ad-header a {
  float: right;
  border-left: 1px solid #f3f3f3;
  padding:10px;
  line-height: 100%;
  font-weight: bold;
  text-transform: uppercase;
  text-align: center;
  color: white;
}
.ad-header a:hover {
  background: #eee;
}

.ads .promo {
  position: absolute;
  top: -195px;
  left: 0;
}

.message {
  max-width: 550px;
  margin: 50px auto 0;
  padding: 14px;
  background: #72EC80;
  color: #0E530E;
  font-weight: normal;
  font-style: normal;
  border-radius: 3px;
}

.success-message a{
  color: black;
  border-bottom: 1px dotted #000;
}

.success-message {
  background: #72EC80;
  color: #0E530E;
}

.error-message a{
  color: #FFF;
  border-bottom: 1px dotted #fff;
}

.error-message {
  background: #EC7272;
  color: #FFF;
}

.socials {
  text-align: center;
  background: rgba(255, 255, 255, 0.1);
  width: 100%;
  float: left;
  padding: 9px 5px 5px;
  margin: 0 0 60px 0;
}
.socials > * {
  display: inline !important;
}
.socials .fb-like {
  top: -5px;
  min-width: 85px;
  text-align: left;
}
.socials .fb-like > span {
  vertical-align: top;
}
.socials .twitter-share-button {
  width: 85px  !important;
}
	  
#carbonads {
  --width: 180px;
  --font-size: 14px;
}

#carbonads {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
  display: block;
  overflow: hidden;
  margin-bottom: 20px;
  max-width: var(--width);
  border-radius: 4px;
  text-align: center;
  box-shadow: 0 0 0 1px hsla(0, 0%, 0%, .1);
  background-color: hsl(0, 0%, 98%);
  font-size: var(--font-size);
  line-height: 1.5;
}

#carbonads a {
  color: inherit;
  text-decoration: none;
}

#carbonads a:hover {
  color: inherit;
}

#carbonads span {
  position: relative;
  display: block;
  overflow: hidden;
}

.carbon-img {
  display: block;
  margin-bottom: 8px;
  max-width: var(--width);
  line-height: 1;
}

.carbon-img img {
  display: block;
  margin: 0 auto;
  max-width: var(--width) !important;
  width: var(--width);
  height: auto;
}

.carbon-text {
  display: block;
  padding: 0 1em 8px;
}

.carbon-poweredby {
  display: block;
  padding: 10px var(--font-size);
  background: repeating-linear-gradient(-45deg, transparent, transparent 5px, hsla(0, 0%, 0%, .025) 5px, hsla(0, 0%, 0%, .025) 10px) hsla(203, 11%, 95%, .4);
  text-transform: uppercase;
  letter-spacing: .5px;
  font-weight: 600;
  font-size: 9px;
  line-height: 0;
}

@media only screen and (min-width: 320px) and (max-width: 759px) {
  #carbonads {
    float: none;
    margin: 0 auto;
    max-width: 330px;
  }
  #carbonads span {
    position: relative;
  }
  #carbonads > span {
    max-width: none;
  }
  .carbon-img {
    float: left;
    margin: 0;
  }

  .carbon-img img {
    max-width: 130px !important;
  }
  .carbon-text {
    float: left;
    margin-bottom: 0;
    padding: 8px 20px;
    text-align: left;
    max-width: calc(100% - 130px - 3em);
  }
  .carbon-poweredby {
    left: 130px;
    bottom: 0;
    display: block;
    width: 100%;
  }}


  
	</style>
</head>
<body>
<?php include "menu.php"?>
  <div class="wrapper">
	  <!-- AdPacks.com Zone Code -->
      <div class="ads">
      <!-- <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CKYI5KJE&placement=wwwthepetedesigncom" id="_carbonads_js"></script> -->
      </div>
      <!-- End AdPacks.com Zone Code -->
    <header>
        <div class="nazv"><h1>Космические Аппараты </h1></div>
      
      <div class="nazv1"><h2>Всё про космические аппараты и даже больше</h2></div>
      <p class="credit">Created by Soffy H.</a></p>
      
     
    </header>
    <div class="main">
      <div class="page_container">
        <div id="immersive_slider">
          <div class="slide" data-blurred="image/expressAm2.jpg">
            <div class="content">
              <h2><a href="http://www.bucketlistly.com" target="_blank">Экспресс-АМ8</a></h2>
              <p>...Космический аппарат "Экспресс-АМ8" по заказу ФГУП "Космическая связь" создан ОАО "Информационные спутниковые системы" имени академика М.Ф. Решетнёва» совместно с компанией Thales Alenia Space (Франция). Запуск спутника осуществлен 14 сентября 2015 года. КА "Экспресс-АМ8" введен в эксплуатацию 1 декабря 2015 года...</p>
            </div>
            <div class="image">
              <a href="http://www.bucketlistly.com" target="_blank">
                <img src="image\express-am8.jpg" alt="Slider 1">
              </a>
            </div>
          </div>
          <div class="slide" data-blurred="image/yamal1.jpg">
            <div class="content">
              <h2><a href="http://www.bucketlistly.com/apps" target="_blank">Ямал-401</a></h2>
              <p>...Спутник установлен в орбитальную позицию 90 градусов восточной долготы. В январе 2015 года, после завершения летных испытаний, на спутнике Ямал-401 началось предоставление ресурса и услуг...</p>
            </div>
            <div class="image">
             <a href="http://www.bucketlistly.com/apps" target="_blank"> <img src="image/yamal-401.jpg" alt="Slider 1"></a>
            </div>
          </div>
          <div class="slide" data-blurred="image/gonec2.jpg">
            <div class="content">
              <h2><a href="http://www.thepetedesign.com" target="_blank">Гонец-М</a></h2>
              <p>...В результате успешного группового запуска КА «Гонец-М» орбитальная группировка пополнилась тремя спутниками с номерами 21, 22 и 23 и стала насчитывать 13 космических аппаратов (12 – «Гонец-М» и 1 – «Гонец-Д1»). Это позволило значительно улучшить пропускную способность МСПСС «Гонец-Д1М», ее пользовательские характеристики и, прежде всего, существенно сократить время ожидания сеанса связи..</p>
            </div>
            <div class="image">
              <a href="http://www.thepetedesign.com" target="_blank"><img src="image/gonec-m.jpg" alt="Slider 1"></a>
            </div>
          </div>
          
          <a href="#" class="is-prev">&laquo;</a>
          <a href="#" class="is-next">&raquo;</a>
        </div>
      </div>
  	</div>
  	<div class="benefits">
      <div class="page_container">

  	  </div>
  	</div>
  	<script type="text/javascript">
  	  $(document).ready( function() {
  	    $("#immersive_slider").immersive_slider({
  	      container: ".main"
  	    });
  	  });

    </script>
  </div>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-11278966-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-11278966-3');
</script>

</body>
</html>
