<body class="">
  <div class="wrapper ">
  <div class="sidebar" data-color="rose" data-background-color="black" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
      	<a href="" class="simple-text logo-normal"><img class="rounded-circle" src="f.png" width="50px">
          สสจ.มุกดาหาร
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php if($menu=="covid_all"){echo "active";} ?> ">
            <a class="nav-link" href="index.php">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>สถานการโควิด แบบ 1 page</p>
            </a>
          </li>

          <li class="nav-item <?php if($menu=="covid_world"){echo "active";} ?> ">
            <a class="nav-link" href="covid_19_world.php">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>สถานการโควิด 19 ทั่วโลก</p>
            </a>
          </li>

          <li class="nav-item <?php if($menu=="covid_thai"){echo "active";} ?> ">
            <a class="nav-link" href="covid_19_thai.php">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>สถานการโควิด 19 ในประเทศไทย</p>
            </a>
          </li>

          <li class="nav-item <?php if($menu=="from"){echo "active";} ?> ">
            <a class="nav-link" href="from.php">
              <i class="nav-icon fab fa-wpforms"></i>
              <p>page 1 (form)</p>
            </a>
          </li>

          <li class="nav-item <?php if($menu=="login"){echo "active";} ?> ">
            <a class="nav-link" href="login.php">
               <i class="nav-icon fas fa-user-lock"></i>
              <p>page 2 (login)</p>
            </a>
          </li>

          <li class="nav-item <?php if($menu=="table"){echo "active";} ?> ">
            <a class="nav-link" href="table.php">
               <i class="nav-icon fas fa-list-alt"></i>
              <p>page 3 (tebles)</p>
            </a>
          </li>

          <li class="nav-item <?php if($menu=="icon"){echo "active";} ?> ">
            <a class="nav-link" href="icon.php">
               <i class="nav-icon fas fa-icons"></i>
              <p>page 4 (icon)</p>
            </a>
          </li>


          <li class="nav-item <?php if($menu=="pdf"){echo "active";} ?> ">
            <a class="nav-link" href="pdf.php">
               <i class="nav-icon fas fa-file-pdf"></i>
              <p>page 5 (report_pdf)</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="http://203.157.172.1/computer/web51v2/">
               <i class="nav-icon fas fa-power-off text-danger"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li>

          
        </ul>
      </div>
    </div>