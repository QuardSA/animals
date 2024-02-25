<x-header></x-header>
<div class="container mt-4">
<!-- Общая информация о пользователе -->
<div class="row mb-4">
    <div class="col-md-6">
      <h4>Номер телефона: <span id="phoneNumber">{{Auth::user()->phone}}</span></h4>
      <button class="btn btn-secondary">Изменить</button>
    </div>
    <div class="col-md-6">
      <h4>Email: <span id="email">{{Auth::user()->email}}</span></h4>
      <button class="btn btn-secondary">Изменить</button>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-md-6">
      <h4>Добавленных объявлений: <span id="totalAds">20</span></h4>
    </div>
    <div class="col-md-6">
      <h4>Вернувшихся животных: <span id="returnedAnimals">15</span></h4>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-md-6">
      <h4>Дата регистрации: <span id="registrationDate">{{Auth::user()->created_at}}</span></h4>
    </div>
    <div class="col-md-6">
      <h4>Дней на сайте: <span id="daysOnSite">365</span></h4>
    </div>
  </div>

    <!-- Информация по объявлениям -->
    <div class="row">
      <div class="col-md-3">
        <h3>Активные объявления</h3>
        <ul>
          <li>
            <strong>Район:</strong> Центральный<br>
            <strong>Дата:</strong> 2024-02-23<br>
            <strong>Доп. информация:</strong> Найден кот, порода: Британская<br>
            <strong>Клеймо:</strong> ABC123<br>
            <img src="path/to/photo1.jpg" alt="Фото объявления 1">
            <div class="btn-group mt-2" role="group">
              <button type="button" class="btn btn-danger">Удалить</button>
              <button type="button" class="btn btn-warning">Редактировать</button>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-md-3">
        <h3>На модерации</h3>
        <ul>
          <li>
            <strong>Район:</strong> Центральный<br>
            <strong>Дата:</strong> 2024-02-23<br>
            <strong>Доп. информация:</strong> Найден кот, порода: Британская<br>
            <strong>Клеймо:</strong> ABC123<br>
            <img src="path/to/photo1.jpg" alt="Фото объявления 1">
            <div class="btn-group mt-2" role="group">
              <button type="button" class="btn btn-danger">Удалить</button>
              <button type="button" class="btn btn-warning">Редактировать</button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
<x-footer></x-footer>
