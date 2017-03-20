<html lang="zh-cn">
<head>
    <title>添加用户</title>
</head>
<body>
<form method="post" name="users_form" action="{{route('post.users')}}">
    <input name="_token" type="hidden" value="{{ csrf_token() }}">
    <div>
        <ul>
            <li>用户名：<input id="name" name="name" value="{{Request::old('name')=='' ?'QQ':Request::old('name') }}" /></li>
            <li>邮箱:<input id="email" name="email" value="{!! Request::old('email')==''?'269043389@qq.com':Request::old('email') !!}" /></li>
            <li>密码:<input id="password" name="password" value="{!! Request::old('password')==''?'123456':Request::old('password') !!}" /></li>

        </ul>
        <input type="submit" id="btnLogin" name="btnLogin" value="保存"/>
    </div>
</form>

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