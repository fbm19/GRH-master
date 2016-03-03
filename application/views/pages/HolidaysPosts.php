<html>

<head>
    <title>


    </title>
    <script>
        $(function () {
            $('.panel-google-plus > .panel-footer > .input-placeholder, .panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea > button[type="reset"]').on('click', function(event) {
                var $panel = $(this).closest('.panel-google-plus');
                $comment = $panel.find('.panel-google-plus-comment');

                $comment.find('.btn:first-child').addClass('disabled');
                $comment.find('textarea').val('');

                $panel.toggleClass('panel-google-plus-show-comment');

                if ($panel.hasClass('panel-google-plus-show-comment')) {
                    $comment.find('textarea').focus();
                }
            });
            $('.panel-google-plus-comment > .panel-google-plus-textarea > textarea').on('keyup', function(event) {
                var $comment = $(this).closest('.panel-google-plus-comment');

                $comment.find('button[type="submit"]').addClass('disabled');
                if ($(this).val().length >= 1) {
                    $comment.find('button[type="submit"]').removeClass('disabled');
                }
            });
        });
    </script>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Roboto:400,700);

        body {
            background-color: rgb(229, 229, 229);
            padding-top: 60px;
            padding-bottom: 30px;
        }

        .panel-google-plus {
            position: relative;
            border-radius: 0px;
            border: 1px solid rgb(216, 216, 216);
            font-family: 'Roboto', sans-serif;
        }
        .panel-google-plus > .dropdown {
            position: absolute;
            top: 5px;
            right: 15px;
        }
        .panel-google-plus > .dropdown > span > span {
            font-size: 10px;
        }
        .panel-google-plus > .dropdown > .dropdown-menu {
            left: initial;
            right: 0px;
            border-radius: 2px;
        }
        .panel-google-plus > .panel-google-plus-tags {
            position: absolute;
            top: 35px;
            right: -3px;
        }
        .panel-google-plus > .panel-google-plus-tags > ul {
            list-style: none;
            padding: 0px;
            margin: 0px;
        }
        .panel-google-plus > .panel-google-plus-tags > ul:hover {
            box-shadow: 0px 0px 3px rgb(0, 0, 0);
            box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.25);
        }
        .panel-google-plus > .panel-google-plus-tags > ul > li {
            display: block;
            right: 0px;
            width: 0px;
            padding: 5px 0px 5px 0px;
            background-color: rgb(245, 245, 245);
            font-size: 12px;
            overflow: hidden;
        }
        .panel-google-plus > .panel-google-plus-tags > ul > li::after {
            content:"";
            position: absolute;
            top: 0px;
            right: 0px;
            height: 100%;
            border-right: 3px solid rgb(66, 127, 237);
        }
        .panel-google-plus > .panel-google-plus-tags > ul:hover > li,
        .panel-google-plus > .panel-google-plus-tags > ul > li:first-child {
            padding: 5px 15px 5px 10px;
            width: auto;
            cursor: pointer;
            margin-left: auto;
        }
        .panel-google-plus > .panel-google-plus-tags > ul:hover > li {
            background-color: rgb(255, 255, 255);
        }
        .panel-google-plus > .panel-google-plus-tags > ul > li:hover {
            background-color: rgb(66, 127, 237);
            color: rgb(255, 255, 255);
        }
        .panel-google-plus > .panel-heading,
        .panel-google-plus > .panel-footer {
            background-color: rgb(255, 255, 255);
            border-width: 0px;
        }
        .panel-google-plus > .panel-heading {
            margin-top: 20px;
            padding-bottom: 5px;
        }
        .panel-google-plus > .panel-heading > img {
            margin-right: 15px;
        }
        .panel-google-plus > .panel-heading > h3 {
            margin: 0px;
            font-size: 14px;
            font-weight: 700;
        }
        .panel-google-plus > .panel-heading > h5 {
            color: rgb(153, 153, 153);
            font-size: 12px;
            font-weight: 400;
        }
        .panel-google-plus > .panel-body {
            padding-top: 5px;
            font-size: 13px;
        }
        .panel-google-plus > .panel-body > .panel-google-plus-image {
            display: block;
            text-align: center;
            background-color: rgb(245, 245, 245);
            border: 1px solid rgb(217, 217, 217);
        }
        .panel-google-plus > .panel-body > .panel-google-plus-image > img {
            max-width: 100%;
        }

        .panel-google-plus > .panel-footer {
            font-size: 14px;
            font-weight: 700;
            min-height: 54px;
        }
        .panel-google-plus > .panel-footer > .btn {
            float: left;
            margin-right: 8px;
        }
        .panel-google-plus > .panel-footer > .input-placeholder {
            display: block;
            margin-left: 98px;
            color: rgb(153, 153, 153);
            font-size: 12px;
            font-weight: 400;
            padding: 8px 6px 7px;
            border: 1px solid rgb(217, 217, 217);
            border-radius: 2px;
            box-shadow: rgba(0, 0, 0, 0.0470588) 0px 1px 0px 0px;
        }
        .panel-google-plus.panel-google-plus-show-comment > .panel-footer > .input-placeholder {
            display: none;
        }
        .panel-google-plus > .panel-google-plus-comment {
            display: none;
            padding: 10px 20px 15px;
            border-top: 1px solid rgb(229, 229, 229);
            background-color: rgb(245, 245, 245);
        }
        .panel-google-plus.panel-google-plus-show-comment > .panel-google-plus-comment {
            display: block;
        }
        /*.panel-google-plus > .panel-google-plus-comment > img {
            float: left;
        }*/
        .panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea {
            float: right;
            width: calc(100% - 56px);
        }
        .panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea > textarea {
            display: block;
            /*margin-left: 60px;
            width: calc(100% - 56px);*/
            width: 100%;
            background-color: rgb(255, 255, 255);
            border: 1px solid rgb(217, 217, 217);
            box-shadow: rgba(0, 0, 0, 0.0470588) 0px 1px 0px 0px;
            resize: vertical;
        }
        .panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea > .btn {
            margin-top: 10px;
            margin-right: 8px;
            width: 100%;
        }
        @media (min-width: 992px) {
            .panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea > .btn {
                width: auto;
            }
        }


        .panel-google-plus .btn {
            border-radius: 3px;
        }
        .panel-google-plus .btn-default {
            border: 1px solid rgb(217, 217, 217);
            box-shadow: rgba(0, 0, 0, 0.0470588) 0px 1px 0px 0px;
        }
        .panel-google-plus .btn-default:hover,
        .panel-google-plus .btn-default:focus,
        .panel-google-plus .btn-default:active {
            background-color: rgb(255, 255, 255);
            border-color: rgb(0, 0, 0);
        }

    </style>
</head>
<body>

<!--request post-->
<div class="container">
    <div class="row">
        <div class="[ col-xs-12 col-sm-offset-1 col-sm-5 ]">
            <div class="[ panel panel-default ] panel-google-plus">
                <div class="panel-google-plus-tags">
                    <ul>
                        <li>Accept</li>

                    </ul>
                    <ul>
                        <li>Delete</li>
                    </ul>
                </div>
                <div class="panel-heading">
                    <img class="[ img-circle pull-left ]" src="https://lh3.googleusercontent.com/-CxXg7_7ylq4/AAAAAAAAAAI/AAAAAAAAAQ8/LhCIKQC5Aq4/s46-c-k-no/photo.jpg" alt="Mouse0270" />
                    <h3>Robert McIntosh</h3>
                    <h5>Type:Illness</h5>

                    <h5><span>Period : </span> - <span>from 9 june to 18 june 2016</span> </h5>

                </div>

            </div>
        </div>
    </div>
</div>

<!--Finrequest post-->

<!--request post-->
<div class="container">
    <div class="row">
        <div class="[ col-xs-12 col-sm-offset-1 col-sm-5 ]">
            <div class="[ panel panel-default ] panel-google-plus">
                <div class="panel-google-plus-tags">
                    <ul>
                        <li>Accept</li>

                    </ul>
                    <ul>
                        <li>Delete</li>
                    </ul>
                </div>
                <div class="panel-heading">
                    <img class="[ img-circle pull-left ]" src="https://lh3.googleusercontent.com/-CxXg7_7ylq4/AAAAAAAAAAI/AAAAAAAAAQ8/LhCIKQC5Aq4/s46-c-k-no/photo.jpg" alt="Mouse0270" />
                    <h3>Robert McIntosh</h3>
                    <h5>Type:Illness</h5>

                    <h5><span>Period : </span> - <span>from 9 june to 18 june 2016</span> </h5>

                </div>

            </div>
        </div>
    </div>
</div>
<!--Finrequest post-->
<!--request post-->
<div class="container">
    <div class="row">
        <div class="[ col-xs-12 col-sm-offset-1 col-sm-5 ]">
            <div class="[ panel panel-default ] panel-google-plus">
                <div class="panel-google-plus-tags">
                    <ul>
                        <li>Accept</li>

                    </ul>
                    <ul>
                        <li>Delete</li>
                    </ul>
                </div>
                <div class="panel-heading">
                    <img class="[ img-circle pull-left ]" src="https://lh3.googleusercontent.com/-CxXg7_7ylq4/AAAAAAAAAAI/AAAAAAAAAQ8/LhCIKQC5Aq4/s46-c-k-no/photo.jpg" alt="Mouse0270" />
                    <h3>Robert McIntosh</h3>
                    <h5>Type:Illness</h5>

                    <h5><span>Period : </span> - <span>from 9 june to 18 june 2016</span> </h5>

                </div>

            </div>
        </div>
    </div>
</div>

<!--Finrequest post-->
</body>
</html>