<html>
<head>
    <title>上传回调</title>
    <script type="text/javascript" src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    {{--<script type="text/javascript" src="/public/js/jquery-3.1.1.min.js"></script>--}}
    <script type="text/javascript">
        var query = {};
        var urlParams = window.location.search.split('?')[1];
        if(typeof urlParams !== 'undefined') {
            urlParams = urlParams.split("&");
            for (var i = 0; i < urlParams.length; i++) {
                var param = urlParams[i].split("=");
                query[param[0]] = param[1];
            }
            var imageDialog = window.parent.document.getElementById(query['dialog_id']);
            //console.log(imageDialog,chileEle, window.parent.document, window.parent, query);
        }


        
        $(function () {
            var obj_parent = $(window.parent.document.getElementById(query['dialog_id']))
//                .find('.editormd-dialog-container')
                .find('.editormd-form');
            console.log(obj_parent);
            obj_parent.find('input[type=text]').eq(0).val(query['url']);
            obj_parent.find('input[type=text]').eq(1).val(query['url']);
            obj_parent.find('input[type=text]').eq(2).val(query['url']);
        })
    </script>
</head>
<body>
{
"success":{{$success}},
"message":"{{$message}}",
"urls":"{{$urls}}",
"dialog_id":"{{$dialog_id}}"
}
</body>
</html>