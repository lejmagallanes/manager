    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- PACE LOAD BAR PLUGIN - This creates the subtle load bar effect at the top of the page. -->
    <link href="{{ asset('css/plugins/pace/pace.css') }}" rel="stylesheet">
    <script src="{{ asset('js/plugins/pace/pace.js') }}"></script>

    <!-- GLOBAL STYLES - Include these on every page. -->
    <link href="{{ asset('css/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{ asset('css/plugins/messenger/messenger.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/messenger/messenger-theme-flat.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/morris/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/datatables/datatables.css') }}" rel="stylesheet">

    <!-- THEME STYLES - Include these on every page. -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">

    <!-- THEME DEMO STYLES - Use these styles for reference if needed. Otherwise they can be deleted. -->
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->