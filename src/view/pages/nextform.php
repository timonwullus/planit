<header class="content__header">
  <a  href="index.php?page=home" class="header--link">
      <h2 class="content__title">Gift<span class="content--apos">'</span>it</h2>
  </a>
</header>

<main class="content__content">
  <section class="form">
      <h3 class="hidden">Formulier</h3>
      <div class="form--container">
      <form method="post" action="index.php?page=nextform&id=1" class="form">
        <input type="hidden" name="action" value="insertData" />
        <div>
          <label class="form--label" for="product_id">Kies een cadeau</label>
          <select class="form--input" name="product_id" id="product_id">
            <?php foreach($products as $product): ?>
              <option name="product_id" value="<?php echo $product['product_id']?>"><?php echo $product['name'] ?></option>
            <?php endforeach; ?>
        </select>
            <!-- <p class="error"></p> -->

          <label class="form--label" for="date" min="<?php echo $currentDate; ?>">Wanneer wil je het afgeven?</label>
          <input class="form--input" type="date" id="date" name="date" value="<?php
          if (!empty($_POST['date'])) {
            echo $_POST['date'];
          }
          ?>" /><p class="error"></p>

          <label class="form--label" for="region_id">In welke regio zoek het cadeau?</label>
          <select class="form--input" name="region_id" id="region_id">
            <?php foreach($regions as $region): ?>
              <option name="region_id" value="<?php echo $region['region_id']?>"><?php echo strtoupper ($region['name']) ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div>
          <a href="index.php?page=detail">
          <button class="form--btn" type="submit">Voeg toe</button>
          </a>
        </div>
      </form>
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
