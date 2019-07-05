<div class="row">
    @foreach($galleries as $gallery)
    <div class="col-md-3">
        {{ Html::image($gallery->image, '', ['class'=>'img-responsive', 'width'=>'100%'])}}
        <a onclick="remove_gallery({{$gallery->id}})" =""><i class="fa fa-times remove_gallery"></i></a>
    </div>
    @endforeach
</div>