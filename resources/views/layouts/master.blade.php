
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jual Beli Sepatu</title>

    <link rel="stylesheet" type="text/css" href="theme/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="theme/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="theme/css/local.css" />

    <script type="text/javascript" src="theme/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="theme/bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="theme/http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <script type="text/javascript" src="theme/http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="theme/http://prepbootstrap.com/Content/js/gridData.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">JUAL BELI SEPATU</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"><a href="{{url('/home')}}"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    <li><a href="{{ url('stokbarang.index') }}">StokBarang</a></li>
                    <li><a href="{{url('/supplier')}}">Supplier</a></li>
                    <li><a href="{{url('/transaksibeli')}}">transaksibeli</a></li>
    <!-- /#wrapper -->
</body>
</html>
