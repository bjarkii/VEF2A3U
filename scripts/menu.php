	
	<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
	
	<div class="menu pure-u-lg-2-3 pure-u-1">
          <ul>
            <li><a <?php if ($currentPage == 'index.php') {echo 'id="current-page"';}?> href="#">Heim</a></li>
            <li><a <?php if ($currentPage == 'senda-inn.php') {echo 'id="current-page"';}?> href="#">Senda Inn</a></li>
            <li><a <?php if ($currentPage == 'adgangur.php') {echo 'id="current-page"';}?> href="#">Aðgangurinn minn</a></li>
          </ul>
      </div>

      <div class="profile pure-u-lg-1-3 pure-u-1">
        <div class="profile-image pure-u-1-2">
        </div>

        <div class="profile-username pure-u-1-2">
          <a href="#">Notendanafn</a>
        </div>
      </div>