
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
<body >
<div class="DemoBS3">
    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#listEpmloyee" data-toggle="tab">Employee List</a></li>
        <li><a href="#addEmployee" data-toggle="tab">Add Employee</a></li>

    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane in active" id="listEpmloyee">

            <!--search-->
            <div class="input-group" style="padding: 5%">
                <input type="text" class="form-control" placeholder="Search" name="q">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>


            <!--finSearch-->

            <!--user list -->
            <div class="row">


                <div class="col-lg-5">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object dp img-circle"  src="../assets/img/avatar5.png" style="width: 100px;height:100px;">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Hardik Sondagar <small> India</small></h4>
                            <h5>Software Developer</h5>
                            <hr style="margin:8px auto">
                            <table cellpadding="50px">
                                <tr>
                           <td> <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                           <td> <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>

                <div class="col-lg-5">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object dp img-circle"  src="../assets/img/avatar5.png" style="width: 100px;height:100px;">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Hardik Sondagar <small> India</small></h4>
                            <h5>Software Developer</h5>
                            <hr style="margin:8px auto">
                            <table cellpadding="50px">
                                <tr>
                                    <td> <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                    <td> <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>





                <div class="col-lg-5">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object dp img-circle"  src="../assets/img/avatar5.png" style="width: 100px;height:100px;">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Hardik Sondagar <small> India</small></h4>
                            <h5>Software Developer</h5>
                            <hr style="margin:8px auto">
                            <table cellpadding="50px">
                                <tr>
                                    <td> <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                    <td> <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <nav>
                        <ul class="pager">
                            <li><a href="#">Previous</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </nav>



                </div>



            </div>
    </div>






        <div class="tab-pane " id="addEmployee">
            <!--registration form -->

            <form class="form-horizontal">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Form Name</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="fn">First name</label>
                        <div class="col-md-4">
                            <input id="txtFirstName" name="txtFirstName" type="text" placeholder="first name" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="ln">Last name</label>
                        <div class="col-md-4">
                            <input id="txtLastName" name="txtLastName" type="text" placeholder="last name" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="CIN">CIN </label>
                        <div class="col-md-4">
                            <input id="txtCin" name="txtCin" type="text" placeholder="CIN" class="form-control input-md" required="">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Birth date">Birth Date</label>
                        <div class="col-md-4">
                            <input id="date" name="date" type="date"  class="form-control input-md" required="">

                        </div>
                    </div>
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="BirthCountry">Birth Country</label>
                        <div class="col-md-4">
                            <select id="ComboCountry" name="ComboCountry" class="form-control input-md">
                                <option>Tunisa</option>
                                <option>France</option>
                            </select>
                        </div>
                    </div>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email</label>
                        <div class="col-md-4">
                            <input id="txtEmail" name="txtEmail" type="text" placeholder="email" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="phone">Text InputPhone</label>
                        <div class="col-md-4">
                            <input id="txtphone" name="txtphone" type="text" placeholder="Phone#" class="form-control input-md" required="">

                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="add1">Address </label>
                        <div class="col-md-4">
                            <input id="txtAddress" name="txtAddress" type="text" placeholder="Address" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="CodePostal">Postal code</label>
                        <div class="col-md-4">
                            <input id="txtPostal" name="txtPostal" type="text" placeholder="Postal code" class="form-control input-md" required="">

                        </div>
                    </div>




                    <!-- Multiple Radios (inline) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Situation">Situation </label>
                        <div class="col-md-4">
                            <label class="radio-inline" for="Training-0">
                                <input type="radio" name="Training" id="Training-0" value="yes" checked="checked">
                                Married
                            </label>
                            <label class="radio-inline" for="Training-1">
                                <input type="radio" name="Training" id="Training-1" value="no">
                                Not Married
                            </label>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Birth date">Start Date</label>
                        <div class="col-md-4">
                            <input id="Startdate" name="Startdate" type="date"  class="form-control input-md" required="">

                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Bank">Bank account</label>
                        <div class="col-md-4">
                            <input id="txtBank" name="txtBank" type="text" placeholder="Account number" class="form-control input-md" required="">

                        </div>
                    </div>





                    <div class="form-group">
                        <label class="col-md-4 control-label" for="Status">Status </label>
                        <div class="col-md-4">
                            <select id="comboStatus" name="comboStatus" class="form-control input-md">
                                <option>Engineer</option>
                                <option>Designer</option>
                                <option>Developer</option>
                            </select>
                        </div>
                    </div>




                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit"></label>
                        <div class="col-md-4">
                            <button id="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
    </div>


</div>
</body>
</html>
