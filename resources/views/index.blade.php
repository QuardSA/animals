<x-header></x-header>
<div class="container">
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/1.webp" class="slider-img d-block w-100" alt="Изображение 1">
        <div class="carousel-caption d-none d-md-block">
          <h5>Кот</h5>
          <p>Найден в парке. Очень ласковый и игривый.</p>
          <a href="link-to-details-page" class="btn btn-primary">Подробнее</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/2.webp" class="slider-img d-block w-100" alt="Изображение 2">
        <div class="carousel-caption d-none d-md-block">
          <h5>Собака</h5>
          <p>Обнаружена на улице. Ищет свой дом.</p>
          <a href="link-to-details-page" class="btn btn-primary">Подробнее</a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="search mt-4">
    <h2>Быстрый поиск животного</h2>
    <div class="input-group mb-3">
      <input type="text" id="animalSearch" class="form-control" placeholder="Введите вид животного" autocomplete="off">
      <button class="btn btn-primary" type="button">Искать</button>
    </div>
  </div>

    <div class="about_us" class="mt-4">
        <h2>Факты о нас</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Помогли найти более 500 животных</h5>
                <p class="card-text">Мы активно участвуем в поиске и возвращении потерявшихся животных, помогая им найти новых домов.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Более трех лет опыта</h5>
                <p class="card-text">Мы успешно работаем более трех лет, способствуя возвращению потерявшихся питомцев к их заботливым хозяевам.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Все услуги бесплатны</h5>
                <p class="card-text">Мы предоставляем наши услуги абсолютно бесплатно, потому что для нас важно благополучие животных и их хозяев.</p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <h2>Найденные животные</h2>
    <div class="find d-flex flex-wrap">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="col">
                <div class="card mb-4">
                    <img src="/img/2.webp" class="card-img-top" alt="Фото животного 1">
                    <div class="card-body">
                        <h5 class="card-title">Кот</h5>
                        <p class="card-text">Район: Центральный</p>
                        <p class="card-text">Телефон: +7 (XXX) XXX-XX-XX</p>
                        <p class="card-text">Дата размещения: 2024-02-23</p>
                        <p class="card-text">Добавлено: Зарегистрированным пользователем</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <h2>Поиск питомца</h2>
        <form>
          <div class="row">
            <div class="col-md-4 mb-3">
              <label for="district">Район</label>
              <input type="text" class="form-control" id="district" placeholder="Введите район">
            </div>
            <div class="col-md-4 mb-3">
              <label for="animalType">Вид животного</label>
              <select class="form-select" id="animalType">
                <option value="cat">Кошка</option>
                <option value="dog">Собака</option>
                <option value="squirrel">Суслик</option>
                <option value="hamster">Хорек</option>
              </select>
            </div>
            <div class="col-md-4 mb-3">
              <label for="searchText">Поиск по виду</label>
              <input type="text" class="form-control" id="searchText" placeholder="Введите текст">
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Поиск питомца</button>
        </form>
      </в>
    </div>
    <div class="d-flex flex-column gap-3">
        <h2>Отзывы владельцев</h2>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Имя автора отзыва</h5>
            <img src="/img/2.webp" class="card-img-top" alt="Фото животного" style="max-width:20vw">
            <p class="card-text">Отзыв о том, как было найдено потерянное животное.</p>
            <p class="card-text">Дата отзыва: 2024-02-23</p>
          </div>
        </div>
    </div>
    <div class="advert">
        <h2>Подписка на новости</h2>
            <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Введите ваш email" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="consent" name="consent" required>
                <label class="form-check-label" for="consent">Согласие на обработку персональных данных</label>
            </div>
            <button type="submit" class="btn btn-primary">Подписаться</button>
        </form>
    </div>
</div>
<x-footer></x-footer>
