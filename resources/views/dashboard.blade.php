<head>
    <!-- Styles -->
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-danger-subtle">
    <div class="container">
        <h2>
            {{$item['head']}}
        </h2>
        <p>
            {{$item['text']}}
        </p>
        <a class="btn btn-primary" href="/profiles" role="button">
            Profiles
        </a>

    </div>
</body>