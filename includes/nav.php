<nav>
  <div class="nav-menu">
    <a href="./" class="light">  
      <h3>
        Universitas Kita
      </h3>
    </a>
    <ul>
      <?php if(isset($_POST['name'])): ?>
        <li>
          <h4>Hai, <?=$_POST['name']?>!</h4>
        </li>
      <?php else: ?>
        <li>
          <a href="?register" class="light ml-auto">Register</a>
        </li>
        <li>
          <b class="ml-12 mr-12">|</b>
        </li>
        <li>
          <a href="?login" class="light">Login</a>
        </li>
      <?php endif ?>
    </ul>
  </div>
</nav>