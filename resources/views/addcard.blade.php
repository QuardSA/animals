<x-header></x-header>
<div class="container mt-4">
    <h2 class="text-center mb-4">Добавление информации о найденном животном</h2>
    <form action="/addcard_validate" method="POST" enctype="multipart/form-data">
        @csrf
      <!-- Вид животного -->
      <div class="mb-3">
        <label for="animalType">Вид животного</label>
        <select class="form-select" id="animalType" name="breed">
            @foreach ($breeds as $breed)
            <option value="{{$breed->id}}">{{$breed->title}}</option>
            @endforeach
        </select>
      </div>
      @error('breed')
      <div class="alert alert-danger" role="alert">
          {{ $message }}
      </div>
        @enderror

      <!-- Фото найденного животного -->
      <div class="mb-3">
        <label for="animalPhoto" class="form-label">Фото найденного животного</label>
        <input type="file" class="form-control" id="animalPhoto" name="animalPhoto[]" multiple>
      </div>
      @error('animalPhoto')
      <div class="alert alert-danger" role="alert">
          {{ $message }}
      </div>
        @enderror

      <!-- Дополнительная информация -->
      <div class="mb-3">
        <label for="additionalInfo" class="form-label">Дополнительная информация</label>
        <textarea class="form-control" id="additionalInfo" name="additionalInfo"></textarea>
      </div>
      @error('additionalInfo')
      <div class="alert alert-danger" role="alert">
          {{ $message }}
      </div>
  @enderror

      <!-- Клеймо -->
      <div class="mb-3">
        <label for="claim" class="form-label">Клеймо (если есть)</label>
        <input type="text" class="form-control" id="claim" name="claim">
      </div>
      @error('claim')
      <div class="alert alert-danger" role="alert">
          {{ $message }}
      </div>
  @enderror

      <!-- Район -->
      <div class="mb-3">
        <label for="district" class="form-label">Район</label>
        <input type="text" class="form-control" id="district" name="district" >
      </div>
      @error('district')
      <div class="alert alert-danger" role="alert">
          {{ $message }}
      </div>
  @enderror

      <!-- Дата -->
      <div class="mb-3">
        <label for="foundDate" class="form-label">Дата, когда было найдено животное</label>
        <input type="date" class="form-control" id="foundDate" name="foundDate" >
      </div>
      @error('foundDate')
      <div class="alert alert-danger" role="alert">
          {{ $message }}
      </div>
  @enderror

      <!-- Согласие на обработку персональных данных -->
      <div class="form-check mb-3">
        <input type="checkbox" class="form-check-input" id="consent" name="check"  >
        <label class="form-check-label" for="consent">Согласие на обработку персональных данных</label>
      </div>
      @error('check')
      <div class="alert alert-danger" role="alert">
          {{ $message }}
      </div>
  @enderror

      <!-- Кнопка отправки формы -->
      <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
  </div>
<x-footer></x-footer>
