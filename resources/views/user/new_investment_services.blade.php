@extends('user.base')
@section('content')

    <div class="pricing-area">
        <div class="container-fluid">
            <div class="row justify-content-center">

                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-pricing-card">
                            <div class="pricing-bar">
                                <span>{{$service->title}}</span>
                                <p>

                                    {!! \Illuminate\Support\Str::words(str_replace('MYSITE',$siteName,$service->short),50) !!}
                                </p>
                            </div>

                            <div class="price-list">

                                <a href="{{route('new_investment.plans',['id'=>$service->id])}}" class="default-btn">
                                    Choose plan
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
