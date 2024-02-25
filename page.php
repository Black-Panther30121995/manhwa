<?php
session_start();
if(!isset($_SESSION["loggedin"])  || $_SESSION['loggedin']!=true)
{
  header("location:login.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css - Copy/bootstrap-grid.css">
    <link rel="stylesheet" href="css - Copy/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad:wght@600&family=Nunito:wght@900&family=Rubik+Bubbles&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Page</title>
<style>
  a{
    text-decoration: none;
  }
</style>
</head>


<body style="width:100%">
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-1">
          <img class="logo" style="margin-bottom:10px" src="images/logo.jpg">
        </div>
        <div class="col-md-3">
          <a class="main"href="page.php"><h3 class="title">NOVICS</h3></a>
        </div>
        <div class="col-md-8">
          <div class="nav justify-content-md-end">
            <a href="logout.php" class="nav-link" style="font-size: 18px;color:black;margin-right: 10px;">LOGOUT</a>
            <a href="completed.php" class="nav-link" style="font-size: 18px;color:black;margin-right: 10px;" >COMPLETED</a>
            <a href="planning.php" class="nav-link" style="font-size: 18px;color:black;margin-right: 10px;">PLANNING TO WATCH</a>
            <a href="watching.php" class="nav-link" style="font-size: 18px;color:black;margin-right: 10px;">WATCHING</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  


  <div class="container1" style="background-image: url(images/bg.png);">

    <div class="disp " style="background-color: rgb(229, 229, 231);">
      <div class="books fade">
        <div class="books-image" style="display: inline-block;">
          <a href="Your-Throne/yt.php"><img class="image1" src="https://swebtoon-phinf.pstatic.net/20200513_169/1589334371783aBm6j_JPEG/04_EC9E91ED9288EC8381EC84B8_mobile.jpg?type=crop540_540"></a>
          </div>
          <div class="book-info">
          <h3 class="book-name">YOUR THRONE</h3>
          <hr>
          <p class="info">
            Cunning and ruthless, Lady Medea Solon has only had one goal in her life: to become the princess of the Vasilios Empire by marrying Crown Prince Eros Orna Vasilios. However, Medea's ambitious scheme collapses when the crown prince chooses naive Psyche Callista as his fiancée instead of her. As a result, she resolves to remove Psyche by any means necessary and secure her place on the throne.
          </p>
          </div>
      </div>
      <div class="books fade">
        <img class="image1" src="https://swebtoon-phinf.pstatic.net/20230520_45/16845483728712v8Tm_JPEG/4RemarriedEmpress_landingpage_mobile.jpg?type=crop540_540" >
        <div class="book-info">
          <h3 class="book-name">THE REMARRIED EMPRESS</h3>
          <hr>
          <p class="info">
          Empress of the Eastern Nation Navier Ellie Trovi stands at the pinnacle of noblewomen with dignity and grace. Although she and her husband, Emperor Sovieshu, are not as intimate as other couples, their trust in each other has been built over years of friendship. But then, wanting something more, he brings in a concubine—a former slave named Rashta—and that is when everything begins to fall apart.
          </p>
        </div>
      </div>
      <div class="books fade">
        <img class="image1" src="https://swebtoon-phinf.pstatic.net/20210612_298/1623447598834mhoa1_JPEG/0VillaintoKillLaunch_mobile_landingpage.jpg?type=crop540_540" >
        <div class="book-info">
          <h3 class="book-name">VILLAIN TO KILL</h3>
          <hr>
          <p class="info">
            There are two kinds of people with special abilities: villains, who are driven by their evil desires, and psykers, who pursue justice and work against villains. Cassian Lee is a very powerful psyker with a good heart. But one day, when he visits his friend in Greece, things take a wrong turn. Following an unexpected chain of events, Cassian ends up in the body of a Korean high school boy... who has just become a villain! Will his sense of justice win in the end or will he end up becoming a cold-blooded villain?
          </p>
        </div>
      </div>
      <div class="books fade">
        <img class="image1" src="https://swebtoon-phinf.pstatic.net/20230130_85/1675035632712X6CbX_JPEG/4Connect_landingpage_mobile.jpg?type=crop540_540" >
        <div class="book-info">
          <h3 class="book-name">CONNECT</h3>
          <hr>
          <p class="info">
            Seeing life through someone else's eyes seems appealing, but less so when it's your own eye that was gouged out by a murderous serial killer. Fortunately for Dongsu Ha, he's a Connect—an immortal being with supernatural healing ability. Thanks to this strange power, Dongsu is able to see through his stolen eye, which the killer is still using. Dongsu must use this connection and his newfound ability to track down his killer and recover his eye before more innocent people are hurt, but at what cost?
          </p>
        </div>
      </div>
      <div class="books fade">
        <img class="image1" src="https://upload.wikimedia.org/wikipedia/en/7/7d/Tower_of_God_Volume_1_Cover.jpg" >
        <div class="book-info">
          <h3 class="book-name">TOWER OF GOD</h3>
          <hr>
          <p class="info">
            Twenty-Fifth Bam had been alone his whole life until he met Rachel. Now, however, Rachel is set on climbing the Tower, and she is willing to leave Bam behind to do so. After Rachel disappears in a veil of light, Bam follows her, vowing to ascend the Tower in hopes of meeting her again.
                                            
            But the Tower is a dangerous place full of ancient secrets, fearsome monsters, and nefarious humans. Each floor is protected by an Administrator who puts the daring challengers through grueling tests that will push them to their limits.
          </p>
          </div>
      </div>
      </div>
   

      
    <a class="prev" onclick="plusSlides(-1)">&#10094</a>
    <a class="next" onclick="plusSlides(1)">&#10095</a>

  <div  class="show"  style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"><button class="slider"></button></span>
    <span class="dot" onclick="currentSlide(2)"><button class="slider"></button></span>
    <span class="dot" onclick="currentSlide(3)"><button class="slider"></button></span>
    <span class="dot" onclick="currentSlide(4)"><button class="slider"></button></span>
    <span class="dot" onclick="currentSlide(5)"><button class="slider"></button></span>
  </div>
  </div>
  </div>
  <hr> 
  <div class="thriller">
    <div class="heading-thriller">
      <h4 class="one">Thriller</h4><span class="arr">&#10095</span>
    </div>
    <div class="thriller-content">
       <img src="https://64.media.tumblr.com/80ddf2988044fe77d97a6dfd697afa32/tumblr_nvvqfgWga11u34m9qo7_1280.jpg" class="thriller-1">
      <div class="text"><h4 style="color: white; text-align: center;">Distant Sky</h4><p style="color: white;font-size: 13px;text-align: center;">"Am I the only one still alive?" A boy wakes up to find himself in a building full of dead people, and Gangnam is shrouded in complete darkness. </p></div>
    </div>
    <div class="thriller-content1">
      <img src="https://swebtoon-phinf.pstatic.net/20180209_260/1518136656996FmwcK_JPEG/04_EC9E91ED9288EC8381EC84B8_mobile.jpg?type=crop540_540" alt="" class="thriller-2">
      <div class="text1"><h4 style="color: white; text-align: center;">Ghost Teller</h4><p style="color: white;font-size: 13px;text-align: center;">You think your ghost stories are scary? Try listening to these stories from the ghosts themselves. </p></div>
    </div>
    <div class="thriller-content2">
      <img src="https://swebtoon-phinf.pstatic.net/20210211_268/1612983724061bQqWM_JPEG/4Escape+Room_mobile_landingpage.jpg?type=crop540_540" alt="" class="thriller-3">
      <div class="text2"><h4 style="color: white; text-align: center;">Escape Room</h4><p style="color: white;font-size: 13px;text-align: center;"> Sean's unfeeling personality consistently drives people away from him. That is, until he wakes up after a night of heavy drinking in... an escape room? </p></div>
    </div>
    <div class="thriller-content3">
      <img src="https://upload.wikimedia.org/wikipedia/en/0/0d/Kim_Carnby_and_Hwang_Young-chan_-_Sweet_Home_vol._1_%282020%2C_Wisdom_House%29_book_cover.jpg" alt="" class="thriller-4">
      <div class="text3"><h4 style="color: white; text-align: center;">Sweet Home</h4><p style="color: white;font-size: 13px;text-align: center;">Cha Hyn is an unfortunate student whose parents died in a car accident. His pathetic life is least of his worries as people around him suddenly start turning into ...Monsters!!</p></div>
    </div>
    <div class="thriller-content4">
      <img src="https://pm1.aminoapps.com/6497/41a3c7e9a2a6cd89083441d7f960e3f0abcb943e_00.jpg" alt="" class="thriller-5">
      <div class="text4"><h4 style="color: white; text-align: center;">Black Survival</h4><p style="color: white;font-size: 13px;text-align: center;">Hyun-Woo, Ai Sol and Nuna are three strangers who must band together to survive. Who will emerge the victor?</p></div>
    </div>
    <div class="thriller-content5">
      <a href ="bastard/bastard.php"><img src="https://cdn.myanimelist.net/r/360x360/images/manga/1/205549.jpg?s=130585cd7c43297f637da53f5fab55b4" alt="" class="thriller-6"></a>
     <div class="text5"><h4 style="color: white; text-align: center;">Bastard</h4> <a href ="bastard/bastard.php"><p style="color: white;font-size: 13px;text-align: center;">What would you do if your own father who is an ideal person for everyone, turns out to be a Serial Killer..?? </p></div></a>
    </div>
  </div>
  <hr>
  <div class="horror">
    <div class="heading-horror" style="background-color: rgb(54, 54, 183);">
      <h4 class="one">Horror</h4><span class="arr">&#10095</span>
    </div>
    <div class="horror-content">
       <img src="https://static.bunnycdn.ru/i/cache/images/f/fa/fa3ff4e7098b6014455f308309dc7f7f.jpg" class="horror-1" >
      <div class="text"><h4 style="color: white; text-align: center;">Rotten</h4><p style="color: white;font-size: 13px;text-align: center;">Jaeshin sees dead people, and Officer Han can sniff out evil. Literally. Can they handle the overpowering stench of evil? </p></div>
    </div>
    <div class="horror-content1">
      <img src="https://m.media-amazon.com/images/I/81gv-D-LqhL._AC_UF1000,1000_QL80_.jpg" alt="" class="horror-2">
      <div class="text1"><h4 style="color: white; text-align: center;">Tokyo Ghoul</h4><p style="color: white;font-size: 13px;text-align: center;">Ken Kaneki is an ordinary college student until a violent encounter turns him into the first half-human half-ghoul hybrid. Learn more about Ghoul society and master his new powers.</p></div>
    </div>
    <div class="horror-content2">
      <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1564947086l/50957719.jpg" alt="" class="horror-3">
      <div class="text2"><h4 style="color: white; text-align: center;">Monster Child</h4><p style="color: white;font-size: 13px;text-align: center;">Not only is Charlotte becoming stronger, but Charlie is also changing... Each of them are missing something the other has... But will they be able to help each other out?</p></div>
    </div>
    <div class="horror-content3">
      <img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1654321786i/61221864.jpg" alt="" class="horror-4">
      <div class="text3"><h4 style="color: white; text-align: center;">Delusion</h4><p style="color: white;font-size: 13px;text-align: center;">It's 1935 in Gyeongseong, and struggling artist Iho Yun has been commissioned by the reclusive, elderly Madam Jeonghwa Song to paint a portrait.But what will happen if Iho finishes the portrait?</p></div>
    </div>
    <div class="horror-content4">
      <img src="https://cdn.myanimelist.net/images/manga/3/208547.jpg" alt="" class="horror-5">
      <div class="text4"><h4 style="color: white; text-align: center;">Winter Woods</h4><p style="color: white;font-size: 13px;text-align: center;">A few thousand years has passed since an alchemist created Winter. He is now living with Jane learning what it means to be alive as a human.
      </p></div>
    </div>
    <div class="horror-content5">
      <img src="https://upload.wikimedia.org/wikipedia/en/thumb/f/f5/Killing_Stalking.jpg/220px-Killing_Stalking.jpg" alt="" class="horror-6">
      <div class="text5"><h4 style="color: white; text-align: center;">Killing Stalking</h4><p style="color: white;font-size: 13px;text-align: center;">“Killing Stalking” is based around Yoonbum’s unhealthy obsession with his classmate, Sangwoo. Yoonbum eventually sneaks into his home where he is knocked out cold by his beloved Sangwoo.</p></div>
    </div>
  </div>
  <hr>
  <div class="romance">
    <div class="heading-romance">
      <h4 class="one">Romance</h4><span class="arr">&#10095</span>
    </div>
    <div class="romance-content">
       <img src="https://swebtoon-phinf.pstatic.net/20210714_49/16262094425114mCso_JPEG/5AfterSchoolLessonsForUnripeApples_mobile_landingpage.jpg?type=crop540_540" class="romance-1">
      <div class="text"><h4 style="color: white; text-align: center;">After School Lessons For Unripe Apples</h4><p style="color: white;font-size: 13px;text-align: center;">"Am I the only one still alive?" A boy wakes up to find himself in a building full of dead people, and Gangnam is shrouded in complete darkness. </p></div>
    </div>
    <div class="romance-content1">
      <img src="https://vofeg.com/wp-content/uploads/2024/01/7f71e4bc86c7b72d.jpg" alt="" class="romance-2">
      <div class="text1"><h4 style="color: white; text-align: center;">Dreaming Freedom</h4><p style="color: white;font-size: 13px;text-align: center;">You think your ghost stories are scary? Try listening to these stories from the ghosts themselves. </p></div>
    </div>
    <div class="romance-content2">
      <img src="https://preview.redd.it/2kzwna8ri6x61.jpg?width=640&crop=smart&auto=webp&s=b23022b61f9213130e9428c011bbfbc6ed13458e" alt="" class="romance-3">
      <div class="text2"><h4 style="color: white; text-align: center;">Heaven's Official Blessing</h4><p style="color: white;font-size: 13px;text-align: center;"> Sean's unfeeling personality consistently drives people away from him. That is, until he wakes up after a night of heavy drinking in... an escape room? </p></div>
    </div>
    <div class="romance-content3">
      <img src="https://swebtoon-phinf.pstatic.net/20220707_236/165714993807663THN_JPEG/9OperationTrueLove_landingpage_mobile.jpg?type=crop540_540" alt="" class="romance-4">
      <div class="text3"><h4 style="color: white; text-align: center;">Operation: True Love</h4><p style="color: white;font-size: 13px;text-align: center;">Cha Hyn is an unfortunate tsudent whose parents died in a car accident. His pathetic life is least of his worries as people around him suddenly start turning into ...Monsters!!</p></div>
    </div>
    <div class="romance-content4">
      <img src="https://swebtoon-phinf.pstatic.net/20231117_39/17001732047764nikV_JPEG/6LandingPage_mobile.jpg?type=crop540_540" alt="" class="romance-5">
      <div class="text4"><h4 style="color: white; text-align: center;">Mafia Nanny</h4><p style="color: white;font-size: 13px;text-align: center;">Hyun-Woo, Ai Sol and Nuna are three strangers who must band together to survive. Who will emerge the victor?</p></div>
    </div>
    <div class="romance-content5">
    <a href ="whw/whw.php"><img src="https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1636576879i/58666592.jpg" alt="" class="romance-6"></a>
      <div class="text5"><h4 style="color: white; text-align: center;">When Jasy Whistles</h4><a href ="whw/whw.php"><p style="color: white;font-size: 13px;text-align: center;">What would you do if your own father who is an ideal person for everyone, turns out to be a Serial Killer..?? </p></a></div>
    </div>
  </div>
  <hr>
  <div class="historical">
    <div class="heading-historical">
      <h4 class="one">Action</h4><span class="arr">&#10095</span>
    </div>
    <div class="historical-content">
       <img src="https://w0.peakpx.com/wallpaper/43/891/HD-wallpaper-sukuna-yuji-itadori-jujutsu-kaisen.jpg" class="historical-1">
      <div class="text"><h4 style="color: white; text-align: center;">Jujutsu Kaisen</h4><a href="jjk/jjk.php"><p style="color: white;font-size: 13px;text-align: center;">"Am I the only one still alive?" A boy wakes up to find himself in a building full of dead people, and Gangnam is shrouded in complete darkness. </p></a></div>
    </div>
    <div class="historical-content1">
      <img src="https://upload.wikimedia.org/wikipedia/en/thumb/1/17/Lookism_Volume_1_Cover.jpg/220px-Lookism_Volume_1_Cover.jpg" alt="" class="historical-2">
      <div class="text1"><h4 style="color: white; text-align: center;">Lookism</h4><p style="color: white;font-size: 13px;text-align: center;">You think your ghost stories are scary? Try listening to these stories from the ghosts themselves. </p></div>
    </div>
    <div class="historical-content2">
      <img src="https://upload.wikimedia.org/wikipedia/en/9/90/One_Piece%2C_Volume_61_Cover_%28Japanese%29.jpg" alt="" class="historical-3">
      <div class="text2"><h4 style="color: white; text-align: center;">One Piece</h4><p style="color: white;font-size: 13px;text-align: center;"> Sean's unfeeling personality consistently drives people away from him. That is, until he wakes up after a night of heavy drinking in... an escape room? </p></div>
    </div>
    <div class="historical-content3">
      <img src="https://m.media-amazon.com/images/I/71tnjmKWwJL._AC_UF1000,1000_QL80_.jpg" alt="" class="historical-4">
      <div class="text3"><h4 style="color: white; text-align: center;">Solo Levelling</h4><p style="color: white;font-size: 13px;text-align: center;">Cha Hyn is an unfortunate tsudent whose parents died in a car accident. His pathetic life is least of his worries as people around him suddenly start turning into ...Monsters!!</p></div>
    </div>
    <div class="historical-content4">
      <img src="https://swebtoon-phinf.pstatic.net/20210410_35/16180079370625ksUI_JPEG/004_EC9E91ED9288EC8381EC84B8_mobile.jpg?type=crop540_540" alt="" class="historical-5">
      <div class="text4"><h4 style="color: white; text-align: center;">The Boxer</h4><p style="color: white;font-size: 13px;text-align: center;">Hyun-Woo, Ai Sol and Nuna are three strangers who must band together to survive. Who will emerge the victor?</p></div>
    </div>
    <div class="historical-content5">
      <img src="https://static.tvtropes.org/pmwiki/pub/images/weak_cover.png" alt="" class="historical-6">
      <div class="text5"><h4 style="color: white; text-align: center;">Weak Hero</h4><p style="color: white;font-size: 13px;text-align: center;">What would you do if your own father who is an ideal person for everyone, turns out to be a Serial Killer..?? </p></div>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>