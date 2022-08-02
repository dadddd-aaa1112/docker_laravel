@extends('admin.layouts.main')
@section('content')
    <h3>Удобрения</h3>
    <div class="mb-3">
        <a class="btn btn-outline-secondary" href="{{route('admin.fertilizer.index')}}">На главную</a>
    </div>
    <form action="{{route('admin.fertilizer.store')}}" method="post">
        @csrf
        @method('post')
        <div class="mb-3">
            <label class="form-label">Наименование</label>
            <input type="text" value="{{old('title')}}" name="title" class="form-control" placeholder="Наименование">
            @error('title')
            {{$message}}
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Нормы азота</label>
            <input type="number" step="0.01" value="{{old('norm_azot')}}" name="norm_azot" class="form-control"
                   placeholder="Нормы азота">
            @error('norm_azot')
            {{$message}}
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Нормы фосфора</label>
            <input type="number" step="0.01" value="{{old('norm_fosfor')}}" name="norm_fosfor" class="form-control"
                   placeholder="Нормы фосфора">
            @error('norm_fosfor')
            {{$message}}
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Нормы калия</label>
            <input type="number" step="0.01" value="{{old('norm_kalii')}}" name="norm_kalii" class="form-control"
                   placeholder="Нормы калия">
            @error('norm_kalii')
            {{$message}}
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Культуры</label>

            <select class="form-control" name="culture_id">
                @foreach($cultures as $culture)
                    <option value="{{$culture->id}}"
                        {{$culture->id == old('culture_id') ? 'selected' : ''}}
                    >{{$culture->title}}</option>
                @endforeach
            </select>

            @error('culture_id')
            {{$message}}
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Район</label>
            <input type="text" value="{{old('raion')}}" name="raion" class="form-control"
                   placeholder="Район">
            @error('raion')
            {{$message}}
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Цена</label>
            <input type="number" step="0.01" value="{{old('cost')}}" name="cost" class="form-control"
                   placeholder="Цена">
            @error('cost')
            {{$message}}
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Описание</label>
            <input type="text" value="{{old('description')}}" name="description" class="form-control"
                   placeholder="Описание">
            @error('description')
            {{$message}}
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Назначение</label>
            <input type="text" value="{{old('target')}}" name="target" class="form-control"
                   placeholder="Назначение">
            @error('target')
            {{$message}}
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
@endsection
