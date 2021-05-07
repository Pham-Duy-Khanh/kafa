<section class="home-slider owl-carousel">
    @foreach ($banner as $value)
        <div class="slider-item" style="background-image: url({{url('upload')}}/{{$value->image}})">
            <div class="overlay"></div>
        </div>
    @endforeach
</section>
