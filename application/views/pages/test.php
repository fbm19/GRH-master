
<!DOCTYPE html>
<html>
<head>
    <title>Twitter Bootstrap : Tabs Events using Javascript </title>
    <link rel="stylesheet"
          href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <style>
        .media
        {
            /*box-shadow:0px 0px 4px -2px #000;*/
            margin: 20px 0;
            padding:30px;
        }
        .dp
        {
            border:10px solid #eee;
            transition: all 0.2s ease-in-out;
        }
        .dp:hover
        {
            border:2px solid #eee;
            transform:rotate(360deg);
            -ms-transform:rotate(360deg);
            -webkit-transform:rotate(360deg);
            /*-webkit-font-smoothing:antialiased;*/
        }

        #custom-search-input{
            padding: 3px;
            border: solid 1px #E4E4E4;
            border-radius: 6px;
            background-color: #fff;
        }

        #custom-search-input input{
            border: 0;
            box-shadow: none;
        }

        #custom-search-input button{
            margin: 2px 0 0 0;
            background: none;
            box-shadow: none;
            border: 0;
            color: #666666;
            padding: 0 8px 0 10px;
            border-left: solid 1px #ccc;
        }

        #custom-search-input button:hover{
            border: 0;
            box-shadow: none;
            border-left: solid 1px #ccc;
        }

        #custom-search-input .glyphicon-search{
            font-size: 23px;
        }
    </style>
</head>
<script>
    $(document).ready(function(){
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
            var currentTab = $(e.target).text(); // get current tab
            var LastTab = $(e.relatedTarget).text(); // get last tab
            $(".current-tab span").html(currentTab);
            $(".last-tab span").html(LastTab);
        });
    });
</script>
<style>
    .DemoBS3{
        margin:40px;
    }

</style>
<body>