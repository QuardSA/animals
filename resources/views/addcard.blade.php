<x-header></x-header>
<div class="container mt-4">
    <h2 class="text-center mb-4">Добавление информации о найденном животном</h2>

    <form id="animalForm">
      <!-- Контактный номер телефона -->
      <div class="mb-3">
        <label for="phoneNumber" class="form-label">Контактный номер телефона</label>
        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
      </div>

      <!-- Email человека -->
      <div class="mb-3">
        <label for="email" class="form-label">Email человека</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <!-- Вид животного -->
      <div class="mb-3">
        <label for="animalType">Вид животного</label>
        <select class="form-select" id="animalType">
          <option value="cat">Кошка</option>
          <option value="dog">Собака</option>
          <option value="squirrel">Суслик</option>
          <option value="hamster">Хорек</option>
        </select>
      </div>

      <!-- Фото найденного животного -->
      <div class="mb-3">
        <label for="animalPhoto" class="form-label">Фото найденного животного</label>
        <input type="file" class="form-control" id="animalPhoto" name="animalPhoto" accept="image/*" required>
      </div>

      <!-- Дополнительная информация -->
      <div class="mb-3">
        <label for="additionalInfo" class="form-label">Дополнительная информация</label>
        <textarea class="form-control" id="additionalInfo" name="additionalInfo"></textarea>
      </div>

      <!-- Клеймо -->
      <div class="mb-3">
        <label for="claim" class="form-label">Клеймо (если есть)</label>
        <input type="text" class="form-control" id="claim" name="claim">
      </div>

      <!-- Район -->
      <div class="mb-3">
        <label for="district" class="form-label">Район</label>
        <input type="text" class="form-control" id="district" name="district" required>
      </div>

      <!-- Дата -->
      <div class="mb-3">
        <label for="foundDate" class="form-label">Дата, когда было найдено животное</label>
        <input type="date" class="form-control" id="foundDate" name="foundDate" required>
      </div>

      <!-- Согласие на обработку персональных данных -->
      <div class="form-check mb-3">
        <input type="checkbox" class="form-check-input" id="consent" name="consent" required>
        <label class="form-check-label" for="consent">Согласие на обработку персональных данных</label>
      </div>

      <!-- Кнопка отправки формы -->
      <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
  </div>
<x-footer></x-footer>
