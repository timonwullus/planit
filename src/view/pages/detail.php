<header class="content__header">
    <a href="index.php?page=home" class="header--link">
        <h2 class="content__title">Gift<span class="content--apos">'</span>it</h2>
    </a>
</header>

<main class="content__content">
  <a href="index.php?page=form" class="content__back"> <img src="assets/img/arrow.svg" alt="arrow" class="back--arrow">
      Terug</a>

  <section class="detail">
      <div class="detail__timer">
          <img src="assets/img/timer.svg" alt="timer" class="detail__timer--image">
          <p class="timer--days"><?php
          $date = strtotime($complete['date']);
          $remaining = $date - time();
          $days_remaining = floor($remaining / 86400);
          echo $days_remaining?>
          <p class="timer--text">dagen</p>
      </div>
      <div class="detail__text">
          <h5 class="detail__title"><?php echo $complete['name'] ?></h5>
          <p class="detail__date"><?php echo $complete['date'] ?></p>

      </div>
  </section>

  <section class="stores">
    <h6 class="stores__title">Kies een winkel</h6>

    <ul class="stores__list">
      <?php foreach($stores as $store): ?>
        <li class="store">
            <a href="index.php?page=planner" class="store__link store__link--active">
                <img src="assets/img/coolblue.jpg" alt="coolblue" class="store--image">
                <div class="store--details">
                    <p class="store--name"><?php echo $store['name'] ?></p>
                    <p class="store--street">Antwerpsesteenweg693</p>
                    <p class="store--location">9040 Gent</p>
                </div>
                <p class="store--price">333,99 EUR</p>
            </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>
</main>
