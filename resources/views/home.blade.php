<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Reconmate</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container">
            <h1>HALAMAN UTAMA</h1>
            <div class="row">
                @foreach ($jsonData as $data) 
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                @foreach ($data['Links'] as $link)
                                    {{ $link['Title'] }}
                                @endforeach
                            </h5>
                            <p class="card-text">
                                Authors : 
                                @foreach ($data['Authors'] as $author)
                                     {{ $author }}
                                @endforeach
                            </p>
                            <p class="card-text">
                                Programs :
                                @foreach ($data['Programs'] as $program)
                                     {{ $program }}
                                @endforeach
                            </p>
                            <p class="card-text">
                                Bugs :
                                @foreach ($data['Bugs'] as $bug)
                                     {{ $bug }}
                                @endforeach
                            </p>
                            <p class="card-text">
                                Bounty : {{ $data['Bounty'] }}
                            </p>
                            @foreach ($data['Links'] as $link)
                            <a href="{{ $link['Link'] }}" class="btn btn-primary">Go to article</a>                                
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </body>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
    ></script>
</html>
