<header class="content__header">
            <a href="index.php?page=home" class="header--link">
                <h2 class="content__title">Gift<span class="content--apos">'</span>it</h2>
            </a>
        </header>

        <main class="content__content">
            <a href="index.php?page=form" class="content__back"> <img src="assets/img/arrow.svg" alt="arrow" class="back--arrow">
                Terug</a>

            <section class="list">
                <h3 class="hidden">Lijst cadeaus</h3>
                <div class="list--container">
                    <ul class="list__list">
                      <?php foreach ($complete as $complete): ?>
                        <li class="list__list--item">
                            <a class="category__link category__link--list" href="index.php?page=detail&id=<?php echo $complete['id']?>" class="list--name">
                                <span class="list--date">nog <?php
                                  $date = strtotime($complete['date']);
                                  $remaining = $date - time();
                                  $days_remaining = floor($remaining / 86400);
                                  echo $days_remaining?> dagen</span>
                                <?php echo $complete['name']; ?>
                            </a>
                        </li>
                      <?php endforeach; ?>
                        <!-- <li class="list__list--item">
                            <a href="detail.html" class="list--name">
                                PlayStation 4
                                <span class="list--date">2/12</span>
                                <img src="img/checked.svg" alt="checked">
                            </a>
                        </li>

                        <li class="list__list--item">
                            <a href="detail.html" class="list--name">
                                Wii
                                <span class="list--date">9/12</span>
                                <img src="img/checked.svg" alt="checked">
                            </a>
                        </li>

                        <li class="list__list--item">
                            <a href="detail.html" class="list--name">
                                Xbox One
                                <span class="list--date">24/12</span>
                                <img src="img/checked.svg" alt="checked">
                            </a>
                        </li> -->
                    </ul>
                </div>
            </section>
        </main>
