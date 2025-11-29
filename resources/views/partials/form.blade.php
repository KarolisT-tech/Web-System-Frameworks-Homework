<div class="mb-3">
    <label for="title-input" class="form-label m-1 fw-bold">{{__('app.title')}}</label>
    <input type="text" id="title-input" name="title" value="{{old('title', optional($conference ?? null)->title)}}"
           class="form-control @error('title') is-invalid @enderror m-1">
    @error('title')
        <p>{{$message}}</p>
    @enderror
</div>
<div class="mb-3">
    <label for="description-input" class="form-label m-1 fw-bold">{{__('app.description')}}</label>
    <textarea id="description-input" name="description" class="form-control @error('description') is-invalid @enderror m-1">
              {{old('description', optional($conference ?? null)->description)}}</textarea>
    @error('description')
    <p>{{$message}}</p>
    @enderror
</div>
<div class="mb-3">
    <label for="date-input" class="form-label m-1 fw-bold">{{__('app.date')}}</label>
    <input type="date" id="date-input" name="date" value="{{old('date', optional($conference ?? null)->date)}}"
           class="form-control @error('description') is-invalid @enderror m-1">
    @error('date')
    <p>{{$message}}</p>
    @enderror
</div>
<div class="mb-3">
    <label for="address-input" class="form-label m-1 fw-bold">{{__('app.address')}}</label>
    <input type="text" id="address-input" name="address" value="{{old('address', optional($conference ?? null)->address)}}"
           class="form-control @error('description') is-invalid @enderror m-1">
    @error('address')
    <p>{{$message}}</p>
    @enderror
</div>
<div class="mb-3">
    <label for="participant-input" class="form-label m-1 fw-bold">{{__('app.participants')}}</label>
    <input type="text" id="participant-input" name="participants" value="{{old('participants', optional($conference ?? null)->participants)}}"
           class="form-control @error('participants') is-invalid @enderror m-1">
    @error('participants')
    <p>{{$message}}</p>
    @enderror
</div>
