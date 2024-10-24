<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>ADMIN PAGE</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container">
            <h1>ADMIN PAGE</h1>
            <a href="{{ route('admin.data.create') }}" class="btn btn-success"> TAMBAH DATA </a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Authors</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jsonData as $index => $data)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            @foreach ($data['Links'] as $link)
                                {{ $link['Title'] }}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($data['Authors'] as $author)
                                {{ $author }}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($data['Links'] as $link)
                                <a href="{{ $link['Link'] }}">
                                    <button class="btn btn-success">View</button>
                                </a>
                            @endforeach
                        </td>
                        <td>
                            <form action="{{ route('admin.data.destroy', $index) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
    ></script>
</html>
