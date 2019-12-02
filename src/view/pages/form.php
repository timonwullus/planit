<header class="content__header">
  <a  href="index.php?page=home" class="header--link">
      <h2 class="content__title">Gift<span class="content--apos">'</span>it</h2>
  </a>
</header>

<main class="content__content">
  <section class="form">
    <h3 class="hidden">Formulier</h3>
    <div class="form--container">
        <ul class="category__list">
          <?php foreach ($categories as $category): ?>
            <li class="category__item"><a class="category__link" href="index.php?page=nextform&amp;id=<?php echo $category['id'] ?>"><?php echo $category['name'] ?></a></li>
          <?php endforeach; ?>
        </ul>
    </div>
  </section>

  <section class="preview">
    <h3 class="hidden">Preview eerste cadeaus</h3>
    <div class="preview--container">
      <ul class="preview__list">
        <?php foreach ($complete as $complete): ?>
          <li class="preview__list--item">
              <a href="index.php?page=detail&amp;id=<?php echo $complete['id'] ?>" class="preview__link">
                  <span class="preview--name"><?php echo $complete['name'] ?></span>
                  <span class="preview--date"><?php
          $date = strtotime($complete['date']);
          $remaining = $date - time();
          $days_remaining = floor($remaining / 86400);
          echo $days_remaining?> d.</span>
              </a>
          </li>
        <?php endforeach; ?>

        <li>
            <a href="index.php?page=list" class="preview__dots">
                <img src="assets/img/dots.svg" alt="dots">
            </a>
        </li>
      </ul>
    </div>
  </section>
</main>
