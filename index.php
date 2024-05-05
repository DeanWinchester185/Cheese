<?php
include("db.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/public/logo.png" />
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cheese Shop</title>
  </head>
  <body>
    <script src="main.js"></script>
    <header>
        <img class="logo" src="/images/logo.png">
        <div class="heading">
          <h1>Добро пожаловать в «Cheese Shop»</h1>
          <h2>Если хотите сыр, Скажите «Cheese!»</h2>
        </div>
        <button class="btn1"><p>К покупкам</p></button>
    </header>
    <div class="block1">
      <h1 class="heading2">Популярные сыры</h1>
        <div class="pictures">
            <div class="picture">
                <a href="#"><img class="img" src="/images/cheder.jpg" alt="Чеддер" /></a>
                <a class="name" href="#">Чеддер</a>
                <p class="sell">310 ₽/100 г</p>
                <button class="buy"><p>Купить</p></button>
            </div>
            <div class="picture">
                <a href="#"><img class="img" src="/images/camamber.jpg" alt="Камамбер" /></a>
                <a class="name" href="#">Камамбер</a>
                <p class="sell">400 ₽/100 г</p>
                <button class="buy"><p class="buytext">Купить</p></button>
            </div>
            <div class="picture">
                <a href="#"><img class="img" src="/images/parmezan.jpg" alt="Пармезан" /></a>
                <a class="name" href="#">Пармезан</a>
                <p class="sell">270 ₽/100 г</p>
                <button class="buy"><p>Купить</p></button>
            </div>
            <div class="picture">
                <a href="#"><img class="img" src="/images/maasdam.jpg" alt="Маасдам" /></a>
                <a class="name" href="#">Маасдам</a>
                <p class="sell">300 ₽/100 г</p>
                <button class="buy"><p>Купить</p></button>
            </div>    
        </div>
        <button class="btn2">
          <p>Еще больше сыров</p>
        </button>
    </div>
    <div class="block2">
      <h1 class="heading2">Каталог</h1>
      <div class="cards">
        <div class="card">
          <img class="cover" src="/images/cover1.png">
          <div class="vidjet">
          <h3>Фермерские сыры</h3>
          <button class="choose"><p>Выбрать</p></button>
        </div>
        </div>
        <div class="card">
          <img class="cover" src="/images/cover2.png">
          <div class="vidjet">
          <h3>Сырные тарелки</h3>
          <button class="choose"><p>Выбрать</p></button>
        </div>
        </div>
        <div class="card">
          <img class="cover" src="/images/cover3.png">
          <div class="vidjet">
          <h3>Подарочные наборы</h3>
          <button class="choose"><p>Выбрать</p></button>
          </div>
        </div>  
        <div class="card">
          <img class="cover" src="/images/cover4.png">
          <div class="vidjet">
          <h3>К сыру</h3>
          <button class="choose"><p>Выбрать</p></button>
        </div>
        </div>
      </div> 
      <button class="btn2">
        <p>К покупкам</p>
      </button>
    </div>
    <footer>
       <div class="comment">
        <h1 class="heading2">Оставьте отзыв о нашем сыре</h1>
      <form action="comments.php" method="POST" class="form">
        <input type="text" class="NameInput" name="name" placeholder="ФИО" required><br><br>
        <textarea name="comment" class="FeedbackTextarea"  placeholder="Комментарий" rows="5" required></textarea><br><br>
        <input type="submit" class="SendButton" name="btn"  value="Отправить комментарий">
      </form>
        <div class="comments">
        <?php 
        $valid = $db->prepare("SELECT * FROM comment");
        $valid->execute();
        $rows = $valid->fetchAll(PDO::FETCH_ASSOC);?>
        <?php foreach ($rows as $row): ?>
            <div class="fio">
              <div class="name2"><?php echo ($row['name']); ?></div>
              <div class="text"><?php echo ($row['comment']); ?></div>
              <hr>
            </div>
          <?php endforeach; ?>
      </div>
      </div>    
      <h2 class="citata">«Сыр — это больше, чем просто еда. Это искусство вкуса!»</h2>
    <div><img class="logo" src="/images/logo.png"></div>
    </footer>
  </body>
</html>
