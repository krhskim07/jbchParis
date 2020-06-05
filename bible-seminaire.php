<?php include_once('inc/head.inc.php') ?>

<?php include_once('inc/header.inc.php') ?>



  <!-- Page Content -->
  <div class="container-fluid seminar-tabs">
    <ul class="nav nav-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home">Coréen-Français</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu1">Français</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu2">Chinois</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#menu3">Coréen-Anglais</a>
      </li>
    </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>

    <div class="container">
        <?php include_once('section/fr-kr.section.php') ?>     

       
    </div><!--./container -->
    
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
        <div class="container">
            <?php include_once('section/fr.section.php') ?>  
            
        </div><!--./container -->


    </div>
    <div id="menu2" class="container tab-pane fade"><br>
        <div class="container">
            <?php include_once('section/ch.section.php') ?>  
            
        </div><!--./container -->
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
        <div class="container">
            <?php include_once('section/en-kr.section.php') ?>  
            
        </div><!--./container -->
    </div>
  </div>
</div>
  <!-- /.container -->

<?php include_once('inc/footer.inc.php') ?>