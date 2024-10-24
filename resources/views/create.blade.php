<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Bootstrap demo</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container">
            <div class="text-center fs-2 mt-5 fw-bolder">
                <h1>ADD ARTICLES</h1>
            </div>
            <form action="{{ route('admin.data.store') }}" method="POST" enctype="multipart/form-data" class="my-5">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">TITLE :</label>
                    <input
                        type="text"
                        class="form-control"
                        id="title"
                        name="title"
                        required
                    />
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">LINK :</label>
                    <input type="url" class="form-control" id="link" name="link" required />
                </div>
                <div class="mb-3">
                    <label for="authors" class="form-label">AUTHORS :</label>
                    <input
                        type="text"
                        class="form-control"
                        id="authors"
                        name="authors"
                        required
                    />
                </div>
                <div class="mb-3">
                    <label for="programs" class="form-label">PROGRAMS :</label>
                    <input type="text" class="form-control" id="programs" name="programs" />
                </div>
                <div class="mb-3">
                    <label for="bugs" class="form-label">BUGS :</label>
                    <input type="text" class="form-control" id="bugs" name="bugs" />
                </div>
                <div class="mb-3">
                    <label for="bounty" class="form-label">BOUNTY :</label>
                    <input type="text" class="form-control" id="bounty" name="bounty" />
                </div>
                <div class="mb-3">
                    <label for="publication_date" class="form-label"
                        >PUBLICATION DATE :</label
                    >
                    <input
                        type="date"
                        class="form-control"
                        id="publication_date"
                        name="publication_date"
                        required
                    />
                </div>
                <div class="mb-3">
                    <label for="added_date" class="form-label"
                        >ADDED DATE :</label
                    >
                    <input
                        type="date"
                        class="form-control"
                        id="added_date"
                        name="added_date"
                        required
                    />
                </div>
                <button type="submit" class="btn btn-success">SIMPAN</button>
            </form>
        </div>
    </body>
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"
    ></script>
</html>
