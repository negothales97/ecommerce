<form action="{{$route}}" method="post">
    @csrf
    {{$token ?? ''}}
    @foreach($inputs as $input)
    <div class="input-group mb-3">
        <input type="{{$input[0]}}" class="form-control {{$errors->any() ? 'is-invalid' : ''}}"
            placeholder="{{$input[2]}}" name="{{$input[1]}}" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-{{$input[3]}}"></span>
            </div>
        </div>
    </div>
    @endforeach
    <div class="row">
        <!-- /.col -->
        <div class="col-6"></div>
        <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">{{$btnName}}</button>
        </div>
        <!-- /.col -->
    </div>
</form>