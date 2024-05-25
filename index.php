<?
if(isset($_GET['helloboys'])){
	print('
	<body style="background: url(\'https://i.kym-cdn.com/entries/icons/original/000/028/367/cover1.jpg\');background-size: cover;background-repeat: no-repeat;background-position: center;">
	</body>
	');
	exit;
}

if(isset($_GET['hellogirls'])){
	print('
	<body style="background: url(\'https://parade.com/.image/t_share/MTkxODY5ODI4ODU0NzE5OTg2/best-mean-girls-meme.jpg\');background-size: cover;background-repeat: no-repeat;background-position: center;">
	</body>
	');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Шапка сайта с использованием Bootstrap</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
     <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		 <div class="container">
      <a class="navbar-brand" href="#">Beautybar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#nav">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about-us">О нас</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#services">Услуги <span class="sr-only">(текущая)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Контакты</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
                  <?
          if(isset($_COOKIE['uid'])){
            echo '<a class="nav-link" href="profile.php">Личный кабинет</a>
          </li>';
          }else{
            echo '<a class="nav-link" href="registration.html">Регистрация</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Вход</a>
          </li>';
          }
        ?>
        </ul>
      </div>
		 </div>
    </nav>
  </header>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/image2.jpg" class="d-block w-100" alt="image2.jpg">
      </div>
      <div class="carousel-item">
        <img src="img/image1.jpg" class="d-block w-100" alt="image1.jpg">
      </div>
      <div class="carousel-item">
        <img src="img/image3.jpg" class="d-block w-100" alt="image3.jpg">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <section id="about-us" class="container mt-4">
    <div class="row">
      <div class="col-md-6">
        <h2>О нас</h2>
        <p>Добро пожаловать в наш бьюти-салон! Мы стремимся создать уютную и расслабляющую атмосферу для наших клиентов, где они могут насладиться широким спектром профессиональных услуг по уходу за собой. Наша команда специалистов по красоте и стилистов обеспечит вас высококачественными услугами, включая ламинирование и наращивание ресниц, маникюр, педикюр, стрижку и окрашивание волос. Мы гордимся нашими навыками и преданностью удовлетворению потребностей каждого клиента. Независимо от того, нужен ли вам экспресс-маникюр перед важным событием или полный релаксационный день в салоне красоты, мы здесь, чтобы сделать ваше время с нами незабываемым и приятным. Доверьтесь нам и отдайте себя в руки наших профессионалов, чтобы преобразить вашу красоту и подчеркнуть вашу уникальность.</p>
      </div>
      <div class="col-md-6">
        <h3>Фотографии работы</h3>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/321.jpg" class="d-block w-100" alt="Фото 1">
            </div>
            <div class="carousel-item">
              <img src="img/231.jpg" class="d-block w-100" alt="Фото 2">
            </div>
            <div class="carousel-item">
              <img src="img/123.jpg" class="d-block w-100" alt="Фото 3">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11626.190603715764!2d76.90775191250097!3d43.23994287331493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836ecfcbef593d%3A0x139342d51e53badb!2z0JHQsNC50LrQvtC90YvRgA!5e0!3m2!1sru!2skz!4v1714365177356!5m2!1sru!2skz" width="100%" height="450" style="border:0; margin-top:2rem;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>
  <section id="services" class="container mt-4">
    <h2>Услуги</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card service-card">
          <div class="card-body">
            <h3>Ламинирование ресниц</h3>
            <p>Ламинирование ресниц — это процедура, направленная на укрепление и визуальное увеличение объема естественных ресниц.</p>
            <p>Цена: $50</p>
            <?
            if (isset($_COOKIE['uid'])) {
              echo '<button class="btn btn-custom" onclick="window.location.href=\'form.html\'">Записаться</button>';
            }else{
              echo '<span>Для записи необходима <a href="login.php" class="form-button">Регистрация</a></span>';
            }
            ?>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card service-card">
          <div class="card-body">
            <h3>Наращивание ресниц</h3>
            <p>Наращивание ресниц — это процесс добавления искусственных ресниц к естественным для увеличения их объема и длины.</p>
            <p>Цена: $70</p>
            <?
            if (isset($_COOKIE['uid'])) {
              echo '<button class="btn btn-custom" onclick="window.location.href=\'form.html\'">Записаться</button>';
            }else{
              echo '<span>Для записи необходима <a href="login.php" class="form-button">Регистрация</a></span>';
            }
            ?>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card service-card">
          <div class="card-body">
            <h3>Маникюр</h3>
            <p>Маникюр — это уход за ногтями и кожей рук, включающий обрезание, формирование и покрытие ногтевой пластины.</p>
            <p>Цена: $25</p>
            <?
            if (isset($_COOKIE['uid'])) {
              echo '<button class="btn btn-custom" onclick="window.location.href=\'form.html\'">Записаться</button>';
            }else{
              echo '<span>Для записи необходима <a href="login.php" class="form-button">Регистрация</a></span>';
            }
            ?>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card service-card">
          <div class="card-body">
            <h3>Педикюр</h3>
            <p>Педикюр — это процедура ухода за ногтями и кожей стоп, включая обрезание ногтей, удаление ороговевшей кожи и массаж стоп.</p>
            <p>Цена: $35</p>
            <?
            if (isset($_COOKIE['uid'])) {
              echo '<button class="btn btn-custom" onclick="window.location.href=\'form.html\'">Записаться</button>';
            }else{
              echo '<span>Для записи необходима <a href="login.php" class="form-button">Регистрация</a></span>';
            }
            ?>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card service-card">
          <div class="card-body">
            <h3>Стрижка</h3>
            <p>Стрижка — это процесс обрезания или формирования волос с целью изменения их длины или стиля.</p>
            <p>Цена: $40</p>
            <?
            if (isset($_COOKIE['uid'])) {
              echo '<button class="btn btn-custom" onclick="window.location.href=\'form.html\'">Записаться</button>';
            }else{
              echo '<span>Для записи необходима <a href="login.php" class="form-button">Регистрация</a></span>';
            }
            ?>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card service-card">
          <div class="card-body">
            <h3>Окрашивание</h3>
            <p>Окрашивание — это процедура изменения цвета волос с помощью красящих средств.</p>
            <p>Цена: $60</p>
            <?
            if (isset($_COOKIE['uid'])) {
              echo '<button class="btn btn-custom" onclick="window.location.href=\'form.html\'">Записаться</button>';
            }else{
              echo '<span>Для записи необходима <a href="login.php" class="form-button">Регистрация</a></span>';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
	<section id="services" class=" bg-grey">
        <div class="container">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 col-xs-12">
                                    <div class="section-title  text-center mb-5">
                                        <h2 data-bigletter="">Отзывы</h2>
                                        <hr class="m-2">
                                        <p>У нас всегда профессиональный подход к каждому клиенту.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="service-single clearfix res-margin" style="display: flex; align-items: flex-start;">
                                        <img src="img/quote.svg" width="20" style="margin-right: 10px;">
                                        <div class="service-text">
                                            <h3>Беназир Саидова</h3>
                                            <p>Кто еще не был в салоне Professional, Вы можете без сомнений идти в этот салон. А кто уже был хоть раз, понимает, о чем я говорю. Когда я в первый раз зашла сюда, я сразу поняла, что не ошиблась с выбором. Ведь
                                                весь персонал соответствует названию салона, а дизайн и уют создают атмосферу комфорта. Администрация приветливо встречает и заботится о вашем комфорте. Вы всегда будете выходить из этого салона красивой
                                                и счастливой. А также я хочу выразить отдельную благодарность стилисту Андрею и косметологу Анне за великолепную работу!!!!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service-single clearfix res-margin" style="display: flex; align-items: flex-start;">
                                        <img src="img/quote.svg" width="20" style="margin-right: 10px;">
                                        <div class="service-text">
                                            <h3>Дарья Кейль</h3>
                                            <p>Очень полюбила этот салон! приятная обстановка, персонал очень вежливый и всегда встречают с улыбкой. Спасибо большое Жанне за ее волшебные руки, за качественную работу. Очень приятная девушка и, действительно,
                                                мастер своего дела! Всегда предлагает креативное решение и с полуслова понимает желания клиента. меня еще никогда так не обслуживали. Я очень довольна! Большое спасибо!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="service-single clearfix res-margin" style="display: flex; align-items: flex-start;">
                                        <img src="img/quote.svg" width="20" style="margin-right: 10px;">
                                        <div class="service-text">
                                            <h3>Игорь Белоусов</h3>
                                            <p>Хотел выразить огромную благодарность за обслуживание парикмахерскому салону Professional. За период нашего знакомства, а это ни мало ни много - 2 года. Персоналу никаких нареканий нет. Всегда все на высшем
                                                уровне. Парикмахеры высокого класса - обходительны и великолепны. В общем название салона говорит само за себя. Здесь работают настоящие профессионалы своего дела. Огромное Вам спасибо за то, что я всегда
                                                с красивой прической.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <footer id="contact">
    <div class="container">
      <div class="footer-content">
        <p>Адрес: ул. Примерная, 123</p>
        <p>Телефон: +7 (123) 456-78-90</p>
        <p>Почта: example@example.com</p>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
