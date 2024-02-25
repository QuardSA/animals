<x-header></x-header>
<div class="container mt-4">
    <div class="card">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($cardinfo->animal_Photo as $photo)
          <div class="carousel-item active">
            <img src="/storage/img/{{$photo->animalPhoto}}" class="card-img-top slider-img" alt="Фото животного 1">
          </div>
          @endforeach
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="card-body">
        <h5 class="card-title">Вид животного: {{$cardinfo->breeds_model->title}}</h5>
        <p class="card-text">Имя нашедшего: {{$cardinfo->users_model->name}}</p>
        <p class="card-text">Контактный номер: {{$cardinfo->users_model->phone}}</p>
        <p class="card-text">Email: {{$cardinfo->users_model->email}}</p>
        <p class="card-text">Дополнительная информация: {{$cardinfo->additionalInfo}}</p>
        <p class="card-text">Клеймо: {{$cardinfo->claim}}</p>
        <p class="card-text">Район: {{$cardinfo->district}}</p>
        <p class="card-text">Дата найденного животного: {{$cardinfo->foundDate}}</p>
      </div>
    </div>
  </div>
<x-footer></x-footer>
