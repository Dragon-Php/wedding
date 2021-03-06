<head>
    <meta charset="utf-8" />
    <title>Wedding | Admin Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    {{ Html::style('assets/css/font-awesome.min.css')}}
    {{ Html::style('assets/css/simple-line-icons.min.css')}}
    {{ Html::style('assets/css/bootstrap.min.css')}}
    {{ Html::style('assets/css/bootstrap-switch.min.css')}}
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    {{ Html::style('assets/css/daterangepicker.min.css')}}
    {{ Html::style('assets/css/morris.css')}}

    {{ Html::style('assets/css/datatables.min.css')}}
    {{ Html::style('assets/css/datatables.bootstrap.css')}}

    {{ Html::style('assets/css/select2.min.css')}}
    {{ Html::style('assets/css/select2-bootstrap.min.css')}}
    {{ Html::style('assets/css/bootstrap-datepicker3.min.css')}}
    {{ Html::style('assets/css/bootstrap-multiselect.css')}}
    {{ Html::style('assets/css/bootstrap-fileinput.css')}}
   
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    {{ Html::style('assets/css/components.min.css')}}
    {{ Html::style('assets/css/plugins.min.css')}}
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    @if(\Request::segment('1') == 'Admin')
    {{ Html::style('assets/css/login.min.css')}}
    @endif
    {{ Html::style('assets/css/layout.min.css')}}
    {{ Html::style('assets/css/darkblue.min.css')}}
    {{ Html::style('assets/css/custom.min.css')}}
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> 
</head>