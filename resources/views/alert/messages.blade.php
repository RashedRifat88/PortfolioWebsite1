{{--@if ($errors->any())--}}
{{--    @foreach ($errors->all() as $error)--}}
{{--        <div class="alert alert-danger alert-dismissible">--}}
{{--            <button type="button" class="btn-close" data-dismiss="alert">&times;</button>--}}
{{--            <button type="button" class="btn-close" aria-label="Close" data-dismiss="alert"><span aria-hidden="true"></span></button>--}}
{{--            <strong>Error! </strong>{{$error}}--}}
{{--        </div>--}}
{{--    @endforeach--}}
{{--@endif--}}


@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">

            <button type="button" class="close" data-dismiss="alert">&times;</button>

            <strong>Error! </strong>{{$error}}

        </div>
    @endforeach
@endif


{{--@if ($errors->any())--}}
{{--    <div class="alert alert-danger">--}}
{{--        <ul>--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                --}}{{--                <li>{{ $error }}</li>--}}
{{--                <li>--}}
{{--                    <button type="button" class="close" data-dismiss="alert">&times;</button>--}}
{{--                    <button type="button" class="btn-close" aria-label="Close"></button>--}}
{{--                    <strong>Error! </strong>{{$error}}--}}
{{--                </li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endif--}}
