<html lang="zh-cn">
<head>
    <title>分类</title>
</head>
<body>
    <form method="post" name="category_form" action="{{route('post.category')}}">
        <input name="_token" type="hidden" value="{{ csrf_token() }}">
        <div>
        <ul>
            <li>分类名：<input id="title" name="title" value="{!! Request::old('title') !!}" /></li>
            <li>图片:<input id="img" name="img" value="{!! Request::old('img') !!}" /></li>
            <li>排序:<input id="sort" name="sort" value="{!! Request::old('sort') !!}" /></li>
            <li>内容:
                <textarea id="content" name="content">{!! Request::old('content') !!}</textarea>
            </li>
        </ul>
            <input type="submit" id="btnLogin" name="btnLogin" value="保存"/>
    </div>

</form>
        <div>
{{--            {{$category->title}}--}}
            {!! ($errors->has('title') ? $errors->first('title') : '') !!}
        </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>