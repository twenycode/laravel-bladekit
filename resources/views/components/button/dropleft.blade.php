<div class="btn-group {{$align}}">

    <button {{$attributes->merge(['class'=>'btn'])}} style=".btn:hover{border:0;}" data-toggle="dropdown">
        <i class="{{$icon}}"></i>
    </button>

    <div class="dropdown-menu">

        {{$slot}}

    </div>

</div>
