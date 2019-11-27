<header class="content__header">
            <a  href="index.php?page=home" class="header--link">
                <h2 class="content__title">Gift<span class="content--apos">'</span>it</h2>
            </a>
        </header>

<main class="content__content">
            <section class="form">
                <h3 class="hidden">Formulier</h3>
                <div class="form--container">
                    <form action="" class="form">
                            <label for="category" class="form--label">Categorie Cadeau</label>
                            <p class="error"></p>
                            <select name="category" id="category" class="form--input" required>
                                    <option value="">--Kies een categroie--</option>
                                    <option value="technology">Technologie</option>
                                    <option value="toys">Kleren</option>
                            </select>

                            <label for="kind" class="form--label">Welk cadeau?</label>
                            <p class="error"></p>
                            <select name="kind" id="kind" class="form--input" required>
                                    <option value="">--Kies een cadeau--</option>
                                    <option value="playstation">PlayStation 4</option>
                                    <option value="wii">Wii</option>
                            </select>

                            <label for="date" class="form--label">Tegen welke datum?</label>
                            <p class="error"></p>
                            <input type="date" id="date" name="trip-start"
                                value="2019-12-25"
                                min="2019-01-01" max="2019-12-31"
                                class="form--input" required>

                            <input type="submit" value="plan it!" class="form--btn">
                    </form>
                </div>
            </section>

            <section class="preview">
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
            </section>
        </main>
