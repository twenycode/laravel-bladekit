<div class="table-responsive">

    <table {{$attributes->merge(['class'=>'table table-striped table-bordered table-hover table-sm'])}} id="{{$id}}" >

        <thead class="text-center">
            <tr>
                {{$thead}}
            </tr>
        </thead>

        <!-- Table Body -->
        <tbody>
            {{$slot}}
        </tbody>

    </table>


    <div class="row">
        <div class="col-md-12">
            <div class="float-left"></div>
            <div class="float-right">
                @if(!is_null($collection))
                    {{$collection->links()}}
                @endif
            </div>
        </div>
    </div>

</div>

