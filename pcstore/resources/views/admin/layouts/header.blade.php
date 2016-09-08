<!DOCTYPE html>
<html>

<head>
    <title>
        PCStore - @yield('title')
    </title>
    {!! Html::style('http://fonts.googleapis.com/css?family=Lato:100,300,400,700') !!}
    {!! Html::Style('stylesheets/bootstrap.min.css') !!}
    {!! Html::Style('stylesheets/font-awesome.css') !!}
    {!! Html::Style('stylesheets/se7en-font.css') !!}
    {!! Html::Style('stylesheets/isotope.css') !!}
    {!! Html::Style('stylesheets/jquery.fancybox.css') !!}
    {!! Html::Style('stylesheets/fullcalendar.css') !!}
    {!! Html::Style('stylesheets/wizard.css') !!}
    {!! Html::Style('stylesheets/select2.css') !!}
    {!! Html::Style('stylesheets/morris.css') !!}
    {!! Html::Style('stylesheets/datatables.css') !!}
    {!! Html::Style('stylesheets/datepicker.css') !!}
    {!! Html::Style('stylesheets/timepicker.css') !!}
    {!! Html::Style('stylesheets/colorpicker.css') !!}
    {!! Html::Style('stylesheets/bootstrap-switch.css') !!}
    {!! Html::Style('stylesheets/daterange-picker.css') !!}
    {!! Html::Style('stylesheets/typeahead.css') !!}
    {!! Html::Style('stylesheets/summernote.css') !!}
    {!! Html::Style('stylesheets/pygments.css') !!}
    {!! Html::Style('stylesheets/style.css') !!}
    {!! Html::Style('stylesheets/color/green.css') !!}
    {!! Html::Style('stylesheets/color/orange.css') !!}
    {!! Html::Style('stylesheets/color/magenta.css') !!}
    {!! Html::Style('stylesheets/color/gray.css') !!}

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
</head>
<body>
<div class="modal-shiftfix">
    <!-- Navigation -->
    <div class="navbar navbar-fixed-top scroll-hide">
        <div class="container-fluid top-bar">
            <div class="pull-right">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown settings hidden-xs">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-gear"></span>
                            <div class="sr-only">
                                Settings
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="settings-link blue" href="javascript:chooseStyle('none', 30)"><span></span>Blue</a>
                            </li>
                            <li>
                                <a class="settings-link green" href="javascript:chooseStyle('green-theme', 30)"><span></span>Green</a>
                            </li>
                            <li>
                                <a class="settings-link orange" href="javascript:chooseStyle('orange-theme', 30)"><span></span>Orange</a>
                            </li>
                            <li>
                                <a class="settings-link magenta" href="javascript:chooseStyle('magenta-theme', 30)"><span></span>Magenta</a>
                            </li>
                            <li>
                                <a class="settings-link gray" href="javascript:chooseStyle('gray-theme', 30)"><span></span>Gray</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown user hidden-xs"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            {!! Html::image('images/avatar-male.jpg', 'Avatar', array('width'=>'34', 'height'=>'34')) !!}
                            USUARIO<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">
                                    <i class="icon-user"></i>Mi Cuenta</a>
                            </li>
                            <li><a href="#">
                                    <i class="icon-gear"></i>Configuraciones de Cuenta</a>
                            </li>
                            <li><a href="#">
                                    <i class="icon-signout"></i>Salir</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="logos" href="#" ><h1>PcStore</h1></a>
        </div>
        <div class="container-fluid main-nav clearfix">
            <div class="nav-collapse">
                <ul class="nav">
                    <li>
                        <a class="current" href="#"><span aria-hidden="true" class="icon-home"></span>Inicio</a>
                    </li>
                    <li class="dropdown"><a data-toggle="dropdown" href="#">
                            <span aria-hidden="true" class="icon-dropbox"></span>Almacen<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{!! URL::to('admin/almacen/category') !!}">Categoria</a>
                            </li>
                            <li>
                                <a href="#">Marca</a>
                            </li>
                            <li>
                                <a href="#">Modelo</a>
                            </li>
                            <li>
                                <a href="#">Productos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a data-toggle="dropdown" href="#">
                            <span aria-hidden="true" class="icon-shopping-cart"></span>Ventas<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Clientes</a>
                            </li>
                            <li>
                                <a href="#">Ventas</a>
                            </li>
                            <li>
                                <a href="#">Consultar Ventas</a>
                            </li>
                            <li>
                                <a href="#">Consultar Ventas por Fecha</a>
                            </li>
                            <li>
                                <a href="#">informes Mensuales</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a data-toggle="dropdown" href="#">
                            <span aria-hidden="true" class="icon-file-text"></span>Inventario<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Inventario Inicial</a>
                            </li>
                            <li>
                                <a href="#">Abrir Nuevo Inventario</a>
                            </li>
                            <li>
                                <a href="#">Res. Saldos &amp; Movimientos</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a data-toggle="dropdown" href="#">
                            <span aria-hidden="true" class="se7en-tables"></span>Reporte de Ventas<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Reporte General</a>
                            </li>
                            <li>
                                <a href="#">Reporte Anual</a>
                            </li>
                            <li>
                                <a href="#">Reporte Mensual</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a data-toggle="dropdown" href="#">
                            <span aria-hidden="true" class="icon-bar-chart"></span>Graficos Estadisticos<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Ingresos &amp; Egresos</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">
                            <span aria-hidden="true" class="icon-cloud-upload"></span>Backup</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Navigation -->

    <!-- List -->
    <div class="container-fluid main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="widget-container fluid-height clearfix">
                    <?php $status=Session::get('status'); ?>
                    @if($status=='ok_create')
                        <div class="alert alert-success fade in">
                            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">X</button>
                            <i class="icon-check"></i> Guardado exitosamente</div>
                    @endif
                    @if($status=='ok_delete')
                        <div class="alert alert-danger fade in">
                            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">X</button>
                            <i class="icon-trash"></i> Eliminado exitosamente</div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- End List -->
</div>
</body>
    {!! Html::script('javascripts/jquery-1.10.2.min.js') !!}
    {!! Html::script('javascripts/jquery-ui.js') !!}
    {!! Html::script('javascripts/bootstrap.min.js') !!}
    {!! Html::script('javascripts/raphael.min.js') !!}
    {!! Html::script('javascripts/selectivizr-min.js') !!}
    {!! Html::script('javascripts/jquery.mousewheel.js') !!}
    {!! Html::script('javascripts/jquery.vmap.min.js') !!}
    {!! Html::script('javascripts/jquery.vmap.sampledata.js') !!}
    {!! Html::script('javascripts/jquery.vmap.world.js') !!}
    {!! Html::script('javascripts/jquery.bootstrap.wizard.js') !!}
    {!! Html::script('javascripts/fullcalendar.min.js') !!}
    {!! Html::script('javascripts/gcal.js') !!}
    {!! Html::script('javascripts/jquery.dataTables.min.js') !!}
    {!! Html::script('javascripts/datatable-editable.js') !!}
    {!! Html::script('javascripts/jquery.easy-pie-chart.js') !!}
    {!! Html::script('javascripts/excanvas.min.js') !!}
    {!! Html::script('javascripts/jquery.isotope.min.js') !!}
    {!! Html::script('javascripts/isotope_extras.js') !!}
    {!! Html::script('javascripts/modernizr.custom.js') !!}
    {!! Html::script('javascripts/jquery.fancybox.pack.js') !!}
    {!! Html::script('javascripts/select2.js') !!}
    {!! Html::script('javascripts/styleswitcher.js') !!}
    {!! Html::script('javascripts/wysiwyg.js') !!}
    {!! Html::script('javascripts/summernote.min.js') !!}
    {!! Html::script('javascripts/jquery.inputmask.min.js') !!}
    {!! Html::script('javascripts/jquery.validate.js') !!}
    {!! Html::script('javascripts/bootstrap-fileupload.js') !!}
    {!! Html::script('javascripts/bootstrap-datepicker.js') !!}
    {!! Html::script('javascripts/bootstrap-timepicker.js') !!}
    {!! Html::script('javascripts/bootstrap-colorpicker.js') !!}
    {!! Html::script('javascripts/bootstrap-switch.min.js') !!}
    {!! Html::script('javascripts/typeahead.js') !!}
    {!! Html::script('javascripts/daterange-picker.js') !!}
    {!! Html::script('javascripts/date.js') !!}
    {!! Html::script('javascripts/morris.min.js') !!}
    {!! Html::script('javascripts/skycons.js') !!}
    {!! Html::script('javascripts/fitvids.js') !!}
    {!! Html::script('javascripts/jquery.sparkline.min.js') !!}
    {!! Html::script('javascripts/main.js') !!}
    {!! Html::script('javascripts/respond.js') !!}
    @yield('scripts')
</html>