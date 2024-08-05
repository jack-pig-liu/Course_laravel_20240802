<div class="form-result">
@if( $errors and count($errors))
    <ul class="iconlist" data-username="envato" data-count="2">
    @foreach( $errors->all() as $err )
        <div class="alert text-center alert-danger">
        {{$err}} 
        </div>
    @endforeach
    </ul>
@endif 
</div>