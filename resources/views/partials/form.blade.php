<div>
    <label for="title-input">{{__('app.title')}}</label>
    <input type="text" id="title-input" name="title" value="{{old('title', optional($conference ?? null)->title)}}">
    @error('title')
        <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="description-input">{{__('app.description')}}</label>
    <textarea id="description-input" name="description">{{old('description', optional($conference ?? null)->description)}}</textarea>
    @error('description')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="date-input">{{__('app.date')}}</label>
    <input type="date" id="date-input" name="date" value="{{old('date', optional($conference ?? null)->date)}}">
    @error('date')
    <p>{{$message}}</p>
    @enderror
</div>
<div>
    <label for="address-input">{{__('app.address')}}</label>
    <input type="text" id="address-input" name="address" value="{{old('address', optional($conference ?? null)->address)}}">
    @error('address')
    <p>{{$message}}</p>
    @enderror
</div>
