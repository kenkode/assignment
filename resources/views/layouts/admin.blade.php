<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>Products</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">

  <style type="text/css">
  	body{
  		margin-left: 150px;
  	}
  </style>

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
  <script src="{{asset('js/price_format.js')}}"></script>
  <script type="text/javascript">
   $(function () {
    $('#example1').DataTable(); 
   });
  </script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
@yield('content') 
</body>

</html>