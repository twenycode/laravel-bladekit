<div {{ $attributes->merge(['class' => 'card']) }} >

    @if(is_null($cardTitle))
        hureee
    @else
        <div class="card-header text-bold">
            <div class="card-title">
                <h4>{{$cardTitle}}</h4>
            </div>
        </div>
    @endif

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                {{$cardButtons}}
            </div>
        </div>

        {{$slot}}

    </div>
</div>
