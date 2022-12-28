<head>
    <!-- Styles -->
    <title>Profiles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-danger-subtle">
    <div class="container">   
            <ul>
            @foreach($data as $data)
                <li class="card m-3" style="width: 25rem;">
                    <div class="card-body">
                        <p class="m-1"><b>Nama:</b> {{$data['nama']}}</p>
                        <p><b>Sekolah:</b> {{$data['school']}}</p>
                    </div>
                </li>
            @endforeach
            </ul>  
            <a href="/" class="btn btn-primary">
                Back to Dashboard
            </a> 
    </div>
</body>
