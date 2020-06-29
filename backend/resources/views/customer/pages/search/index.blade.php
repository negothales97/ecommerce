@extends('customer.templates.default')

@section('content')

<section id="box-title">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item">
                            <a href="#"></a>
                        </li>
                        @if(isset($category))
                        @if($category->category_id == null)
                        <li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
                        @else
                        <li class="breadcrumb-item active">
                            <a
                                href="{{route('company',['category'=> $category->category->slug,'company' => $company->slug])}}">
                                {{$category->category->name}}
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
                        @endif
                        @endif
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1></h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            @include('customer.components.filter')
            <div class="col-sm-10 mt-3">
                <div id="list-product">
                    <div class="row">
                        <?php
					$numOfCols = 3;
					$rowCount = 0;
					$bootstrapColWidth = 12 / $numOfCols;
					?>
                        @foreach($products as $product)
                        <div class="col-sm-{{$bootstrapColWidth}}">
                            <div class="box-product mb-4" data-url="{{route('product', ['slug' => $product->slug])}}">
                                <div class="box-img-product">
                                    @if($product->images()->first())
                                    <img src="{{$product->images()->first()->link}}" alt="{{$product->name}}">
                                    @endif
                                </div>
                                <div class="box-title-product">
                                    <h2>{{$product->name}}</h2>
                                </div>
                            </div>
                        </div>
                        @php($rowCount++)
                        @if($rowCount % $numOfCols == 0)
                    </div>
                    <div class="row">
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="row mt-3 mb-4 box-load" style="display:none">
                    <div class="col">
                        <img src="{{asset('img/loading.gif')}}" width="100" alt="Carregando" class="img-loading">
                        <p class="text-center">Carregando mais produtos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('scripts')
<script type="text/javascript">
$('.box-product').on('click', function(e){
    e.preventDefault();
    let url = $(this).data('url');
    window.location.href=url;

})
</script>
@endsection