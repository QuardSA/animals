<x-header></x-header>
<div class="container mt-4">
<!-- Общая информация о пользователе -->
<div class="row mb-4">
    <div class="col-md-6">
      <h4>Номер телефона: <span id="phoneNumber">{{Auth::user()->phone}}</span></h4>
      <form action="{{ route('update-phone') }}" method="POST">
        @csrf
        <input type="text" name="phone" placeholder="Новый номер телефона" required>
        <button type="submit" class="btn btn-primary">Изменить</button>
    </form>
    </div>
    <div class="col-md-6">
      <h4>Email: <span id="email">{{Auth::user()->email}}</span></h4>
      <form action="{{ route('update-email') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Новый email" required>
        <button type="submit" class="btn btn-primary">Изменить</button>
    </form>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-md-6">
      <h4>Добавленных объявлений: <span id="totalAds">2</span></h4>
    </div>
    <div class="col-md-6">
      <h4>Вернувшихся животных: <span id="returnedAnimals">0</span></h4>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-md-6">
      <h4>Дата регистрации: <span id="registrationDate">{{Auth::user()->created_at}}</span></h4>
    </div>
    <div class="col-md-6">
      <h4>Дней на сайте: <span id="daysOnSite">1</span></h4>
    </div>
  </div>

    <!-- Информация по объявлениям -->
    <div class="row">
        <div class="col-md-3">
            <h3>Активные объявления</h3>
            <ul>
                @forelse ($activeAnimals as $animal)
                    <li>
                        <strong>Район:</strong> {{ $animal->district }}<br>
                        <strong>Дата:</strong> {{ $animal->created_at->format('Y-m-d') }}<br>
                        <strong>Доп. информация:</strong> {{ $animal->additionalInfo }}<br>
                        <strong>Клеймо:</strong> {{ $animal->claim }}<br>
                        <div class="btn-group mt-2" role="group">
                            <form action="{{ route('animal.destroy', $animal->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </div>
                    </li>
                @empty
                    <li>Нет активных объявлений</li>
                @endforelse
            </ul>
        </div>

        <div class="col-md-3">
            <h3>На модерации</h3>
            <ul>
                @forelse ($moderationAnimals as $animal)
                    <li>
                        <strong>Район:</strong> {{ $animal->district }}<br>
                        <strong>Дата:</strong> {{ $animal->created_at->format('Y-m-d') }}<br>
                        <strong>Доп. информация:</strong> {{ $animal->additionalInfo }}<br>
                        <strong>Клеймо:</strong> {{ $animal->claim }}<br>
                        <div class="btn-group mt-2" role="group">
                            <form action="{{ route('animal.destroy', $animal->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </div>
                    </li>
                @empty
                    <li>Нет объявлений на модерации</li>
                @endforelse
            </ul>
        </div>
    </div>

  </div>
<x-footer></x-footer>
