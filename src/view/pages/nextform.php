<header class="content__header">
  <a  href="index.php?page=home" class="header--link">
      <h2 class="content__title">Gift<span class="content--apos">'</span>it</h2>
  </a>
</header>

<main class="content__content">
  <section class="form">
      <h3 class="hidden">Formulier</h3>
      <div class="form--container">
      <form method="post" action="index.php?page=nextform" class="form">
        <input type="hidden" name="action" value="insertData" />
        <div>
          <label class="form--label" for="product">kind:</label>
          <select class="form--input" name="product" id="product">
            <?php foreach($products as $product): ?>
              <option name="product" value="<?php echo $product['id']?>"><?php echo $product['name'] ?></option>
            <?php endforeach; ?>
          </select>

          <label class="form--label" for="date" min="<?php echo $currentDate; ?>">date:</label>
          <input class="form--input" type="date" id="date" name="date" value="<?php
          if (!empty($_POST['date'])) {
            echo $_POST['date'];
          }
          ?>" />

          <label class="form--label" for="region">region:</label>
          <select class="form--input" name="region" id="region">
            <?php foreach($regions as $region): ?>
              <option name="region" value="<?php echo $region['id']?>"><?php echo ucfirst($region['name']) ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div>
          <a href="index.php?page=detail">
          <button class="form--btn" type="submit">Add Todo</button>
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
                  <span class="preview--date">2/12</span>
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
