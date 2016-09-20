<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PLAYGROUND</title>

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css" />
        <style>
            .margin-top {
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container margin-top">
            {!!form_open()!!}
            <div>
                {!!form_dropdown('select_to', $links)!!}
                {!!form_button(['type' => 'submit', 'content' => 'Go', 'class' => 'btn btn-sm btn-warning', 'name' => 'go', 'value' => 'submit'])!!}
                {!!form_button(['type' => 'submit', 'content' => 'Refresh', 'class' => 'btn btn-sm btn-info', 'name' => 'refresh', 'value' => 'submit'])!!}
            </div>

            {!!form_close()!!}
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            $(function(){
                $(":radio").change(function() {
                    var names = {};
                    $(':radio').each(function() {
                        names[$(this).attr('name')] = true;
                    });
                    var count = 0;
                    $.each(names, function() {
                        count++;
                    });
                    if ($(':radio:checked').length === count) {
                        $(":submit").removeAttr("disabled");
                    }
                }).change();
            });
        </script>
    </body>
</html>
