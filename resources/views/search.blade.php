<x-header></x-header>
<div class="container mt-4">
    <h2 class="text-center mb-4">Результаты поиска животных</h2>

    <!-- Форма поиска -->
    <form>
      <div class="mb-3">
        <label for="animalType">Вид животного</label>
        <select class="form-select" id="animalType">
          <option value="cat">Кошка</option>
          <option value="dog">Собака</option>
          <option value="squirrel">Суслик</option>
          <option value="hamster">Хорек</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="location" class="form-label">Район</label>
        <input type="text" class="form-control" id="location" name="location" placeholder="Например, Центральный">
      </div>
      <button type="submit" class="btn btn-primary">Искать</button>
    </form>

    <!-- Информация о найденных животных -->
    <div class="row mt-4">
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="/img/1.webp" class="card-img-top" alt="Фото животного 1">
          <div class="card-body">
            <h5 class="card-title">Вид животного: Кот</h5>
            <p class="card-text">Доп. информация: Найден на улице, порода: Британская</p>
            <p class="card-text">Клеймо: ABC123</p>
            <p class="card-text">Район: Центральный</p>
            <p class="card-text">Дата найденного животного: 2024-02-23</p>
            <p class="card-text">Контактный номер: +7 (XXX) XXX-XX-XX</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<x-footer></x-footer>
