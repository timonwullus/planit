<header class="content__header">
  <a  href="index.php?page=home" class="header--link">
      <h2 class="content__title">Gift<span class="content--apos">'</span>it</h2>
  </a>
</header>

<main class="content__content">
    <section class="form">
        <h3 class="hidden">Formulier</h3>
        <div class="form--container">
        <form method="post" action="index.php?page=detail">
          <input type="hidden" name="action" value="insertData" />
          <div>
            <label for="inputKind">kind:</label>
            <input type="text" id="inputKind" name="product" value="<?php
            if (!empty($_POST['product'])) {
              echo $_POST['product'];
            }
            ?>" />

            <label for="inputDate">date:</label>
            <input type="date" id="inputDate" name="date" value="<?php
            if (!empty($_POST['date'])) {
              echo $_POST['date'];
            }
            ?>" />

            <label for="inputRegion">region:</label>
            <input type="text" id="inputRegion" name="region" value="<?php
            if (!empty($_POST['region'])) {
              echo $_POST['region'];
            }
            ?>" />
          </div>
          <div>
            <button type="submit">Add Todo</button>
          </div>
        </form>
        </div>
    </section>

<!-- <section class="preview">
  <h3 class="hidden">Preview eerste cadeaus</h3>
  <div class="preview--container">
      <ul class="preview__list">
        <li class="preview__list--item">
            <a href="index.php?page=detail" class="preview__link">
                <span class="preview--name">PlayStation 4</span>
                <span class="preview--date">2/12</span>
            </a>
        </li>

        <li class="preview__list--item">
            <a href="detail.html" class="preview__link">
                <span class="preview--name">Wii</span>
                <span class="preview--date">9/12</span>
            </a>
        </li>

        <li class="preview__list--item">
            <a href="detail.html" class="preview__link">
                <span class="preview--name">Xbox One</span>
                <span class="preview--date">24/12</span>
            </a>
        </li>

        <li>
            <a href="index.php?page=list" class="preview__dots">
                <img src="assets/img/dots.svg" alt="dots">
            </a>
        </li>
      </ul>
    </div>
  </section> -->
</main>
