<?php
$name = "Кот Шрёдингера";
$prof = "Суперпозиционер";
$city = "Коробка";
$email = "schrödinger@cat.murr";
$phone = "911";
$skills = [
    [
        'name' => 'Жизнь',
        'percent' => 50,
    ],
    [
        'name' => 'Смерть',
        'percent' => 50,
    ],
    [
        'name' => 'Неопределенность',
        'percent' => 100,
    ],
    [
        'name' => 'Пушистость',
        'percent' => 38,
    ],
];
$jobexp = [
    [
        'title' => 'Квантовик-затейник',
        'start' => 'Jan 1935',
        'end' => 'Current',
        'description' => 'Согласно квантовой механике, если над ядром не производится наблюдение, 
        то его состояние описывается суперпозицией (смешением) двух состояний — распавшегося ядра 
        и нераспавшегося ядра, следовательно, кот, сидящий в ящике, и жив, и мёртв одновременно. 
        Если же ящик открыть, то экспериментатор может увидеть только какое-нибудь одно конкретное 
        состояние — «ядро распалось, кот мёртв» или «ядро не распалось, кот жив».',
    ],
    [
        'title' => 'Копенгагенский интерпретатор',
        'start' => 'Jul 1927',
        'end' => 'Jan 1935',
        'description' => 'В копенгагенской интерпретации система перестаёт быть смешением состояний 
        и выбирает одно из них в тот момент, когда происходит наблюдение. ',
    ],
    [
        'title' => 'Многомировой интерпретатор',
        'start' => 'Mar 1932',
        'end' => 'Sep 1935',
        'description' => 'В многомировой интерпретации квантовой механики, которая не считает 
        процесс измерения чем-то особенным, оба состояния кота существуют, но декогерируют.',
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://wl-adme.cf.tsp.li/resize/728x/jpg/efe/f44/d1b92154af915fb4b6d012586e.jpg"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-white">
              <h2><?= $name;?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $prof;?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $city;?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email;?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone;?></p>
 
            <hr>
 
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <?php for ($i = 0; $i < count($skills); $i++):?>
                <p><?php echo $skills[$i]['name'];?></p>
                <div class="w3-light-grey w3-round-xlarge w3-small">
                    <div class="w3-container w3-center w3-round-xlarge w3-teal" 
                      style="width:<?php echo $skills[$i]['percent'];?>%">
                        <?php echo $skills[$i]['percent'];?>%
                    </div>
                </div>
            <?php endfor;?>
            <br>
 
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p>Немецкий</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Английский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
            </div>
            <p>Русский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:15%"></div>
            </div>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
          <div class="w3-container">
            <?php for ($i = 0; $i < count($jobexp); $i++):?> 
            <h5 class="w3-opacity"><b><?php echo $jobexp[$i]['title'];?></b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $jobexp[$i]['start'];?> - 
            <?php if ($jobexp[$i]['end'] == 'Current') {?>
                <span class="w3-tag w3-teal w3-round">Current</span></h6>
            <?php }?>
            <?php echo $jobexp[$i]['end'];?></h6>
            <p><?php echo $jobexp[$i]['description'];?></p>
          <?php endfor;?><br>
          </div>
        </div>
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Венский университет</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>1906 - 1911</h6>
            <p>Физматик</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Императорско-королевская Венская высшая техническая школа</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>1887 - 1898</h6>
            <p>Лучший котик в классе</p><br>
            </div>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>