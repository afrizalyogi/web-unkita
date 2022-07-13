<?php
	$json1 = file_get_contents('study_program.json');
	$studyProgram = json_decode($json1);
	$studyProgramRange = count($studyProgram);
?>

<header>
  <div id="slider">
    <div>
      <img src="./img/sangga-rima-roman-selia-bgQgAKagQB4-unsplash.jpg" />
      <img src="./img/ryan-jacobson-cXUOQWdRV4I-unsplash.jpg" />
      <img src="./img/eric-sharp-JdzHrfX4l4Q-unsplash.jpg" />
    </div>
  </div>
</header>
<section id="about">
  <div class="row">
    <div class="col">
      <h1>Universitas Kita</h1>
    </div>
    <div class="col">
      <p>
        Universitas Kita adalah universitas negeri pertama di Provinsi
        Kita, Indonesia. Hari jadi Unkita ditetapkan pada tanggal 10 Juli
        2202, berdasarkan pada keluarnya Surat Keputusan Menteri PTIP yang
        menetapkan berdirinya Unkita.
      </p>
    </div>
  </div>
</section>
<section>
  <div class="row">
    <div class="col">
      <h1>Program Studi</h1>
    </div>
    <div class="col">
      <ul>
        <?php for($i = 0; $i < $studyProgramRange/2; $i++): ?>
        <div class="card-dark">
          <li class="list-none">
            <h2>
              Fakultas
              <?=$studyProgram[$i]->faculty?>
            </h2>
            <ul>
              <?php foreach($studyProgram[$i]->study as $j): ?>
              <li><?=$j?></li>
              <?php endforeach ?>
            </ul>
          </li>
        </div>
        <?php endfor ?>
      </ul>
    </div>
    <div class="col">
      <ul>
        <?php for($i = $studyProgramRange/2; $i < $studyProgramRange; $i++): ?>
        <div class="card-dark">
          <li class="list-none">
            <h2>
              Fakultas
              <?=$studyProgram[$i]->faculty?>
            </h2>
            <ul>
              <?php foreach($studyProgram[$i]->study as $j): ?>
              <li><?=$j?></li>
              <?php endforeach ?>
            </ul>
          </li>
        </div>
        <?php endfor ?>
      </ul>
    </div>
  </div>
</section>