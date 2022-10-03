<html>
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Заявки</title>
 </head> 
 <body>

 
 
 <p><img src="image/logo.png" width="70" height="70" align="middle" /> 
 Сделаем лучше вместе!</p>
  <header>
  
  <div class="menu"  >
    <ul>
      <li><a href="glavnaya.php">Главная</a></li>
      <li><a href="zayavka.php">Заявки</a></li>
    </ul>
  </div>
 
  </header>
 <h2 >Заявки</h2>
 
 <div class="forma">
<form>
        <label for="username">Название</label><br>
        <input name="username" id="username" type="text" size="40"  ><br>
        <label for="opisaniye">Описание</label><br>
        <input name="opisaniye" id="opisaniye" type="text" size="40"><br>
        <label for="kategory">Категория</label><br>
        <input name="kategory" id="kategory" type="spisok" size="40"><br>
        <label for="photo">Фото</label><br>

        </label>          
        <input class="operation__load-file-input" type="file" name="file-img" id="file-img">
        <a class="operation__link" href><span class="operation__file-name">new_photo.jpg</span></a>
        </div>
         <div class="operation__content">
        <div class="operation__img"><img src="images/image.png" alt></div>
        <div class="operation__bottom">
        <p><input type="submit" value="Добавить"></p>
         </div>
</form>
    </div>
</div>
                   
</form>
 </div>
  
 </body> 
</html>
