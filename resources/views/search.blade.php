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
        @forelse ($animals as  $animal)
            <div class="col-md-4">
                <div class="card mb-4">
                    @foreach ($animal->animal_Photo as $photo)
                        <img src="/storage/img/{{$photo->animalPhoto}}" class="card-img-top" alt="Фото животного 1">
                        @break
                    @endforeach
                  <div class="card-body">
                    <h5 class="card-title">Вид животного: {{$animal->breeds_model->title}}</h5>
                    <p class="card-text">Доп. информация:{{$animal->additionalInfo}} </p>
                    <p class="card-text">Клеймо: {{$animal->claim}}</p>
                    <p class="card-text">Район: {{$animal->district}}</p>
                    <p class="card-text">Дата найденного животного: {{$animal->district}}</p>
                    <p class="card-text">Контактный номер: {{$animal->users_model->phone}}</p>
                    <a href="/{{$animal->id}}/card" role="button" class="btn btn-primary">Перейти</a>
                  </div>
                </div>
            </div>
        @empty
            <p>Больше нет животных</p>
        @endforelse
        {{ $animals->withQueryString()->links('pagination::bootstrap-5') }}
    </div>
  </div>
<x-footer></x-footer>
