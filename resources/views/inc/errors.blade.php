@if($errors->count() > 0 )
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach 
@elseif(Session::get('message'))
<div class="alert alert-success"> {{Session::get('message')}}</div>
@endif