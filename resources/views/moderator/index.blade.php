<x-alerts></x-alerts>
<x-links></x-links>

<div class="container mt-4">
    <h2 class="text-center mb-4">Объявления о найденных животных</h2>
    <div class="d-flex flex-column gap-3 mb-3">
        <a href="{{ route('admin', ['sort_field' => 'status', 'sort_order' => 'asc']) }}" class="text-decoration-none">Сортировка Заявок от А до Я</a>
        <a href="{{ route('admin', ['sort_field' => 'status', 'sort_order' => 'desc']) }}" class="text-decoration-none">Сортировка Заявок от Я до А</a>
        <a href="{{ route('admin', ['sort_fiel' => 'created_at', 'sort_orde' => 'asc']) }}" class="text-decoration-none">Сортировка по времени от Ранних к Поздним</a>
        <a href="{{ route('admin', ['sort_fiel' => 'created_at', 'sort_orde' => 'desc']) }}" class="text-decoration-none">Сортировка по времени от Поздних к Ранним</a>
    </div>

    <!-- Объявления о найденных животных -->
    <div class="row">
        @forelse ($animals as $animal)
        <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">Вид животного: {{$animal->breeds_model->title}}</h5>
                <p class="card-text">Доп. информация: {{$animal->additionalInfo}}</p>
                <p class="card-text">Клеймо: {{$animal->claim}}</p>
                <p class="card-text">Район: {{$animal->district}}</p>
                <p class="card-text">Дата найденного животного: {{$animal->foundDate}}</p>
                <p class="card-text">Контактный номер: {{$animal->users_model->phone}}</p>
                <p class="card-text">Статус: {{$animal->status_model->title}}</p>
                <a href="/{{$animal->id}}/card" role="button" class="btn btn-primary">Перейти</a>
              </div>
              <div class="card-footer">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <form method="post" action="{{ route('change-status', ['id' => $animal->id, 'status' => '2']) }}">
                        @csrf
                        <button type="submit" class="btn btn-success">Активно</button>
                    </form>
                    <form class="mx-2" method="post" action="{{ route('change-status', ['id' => $animal->id, 'status' => '3']) }}">
                        @csrf
                        <button type="submit" class="btn btn-warning">Найдено</button>
                    </form>
                    <form method="post" action="{{ route('change-status', ['id' => $animal->id, 'status' => '4']) }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">В архиве</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        @empty
        <p>Нет объявлений</p>
        @endforelse
    </div>
  </div>
