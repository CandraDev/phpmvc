<div class="container mt-5">
    <h1 class="text-center mb-4">My Movies List</h1>
    <div class="row-12 mx-auto">
        <?php Flasher::flash(); ?>
        <button type="button" class="btn btn-primary mb-3 addMovieButton" data-toggle="modal" data-target="#addMovie">
            Add Movie
        </button>

        <ul class="list-group">
            <?php $movies = new Movies_model;
            foreach ($movies->getAllMovies() as $mov): ?>
                <li class="list-group-item "><?= htmlspecialchars($mov['title']); ?>
                <a href="<?= BASEURL; ?>/movies/delete/<?= $mov['id'] ?>" class="badge badge-danger float-right ml-1">Hapus</a>
                <a href="<?= BASEURL; ?>/movies/update/<?= $mov['id'] ?>" data-toggle="modal" data-target="#addMovie" data-id="<?= $mov['id'] ?>" class="badge badge-warning float-right ml-2 showModalUpdate">Update</a>
                <a href="<?= BASEURL; ?>/movies/detail/<?= $mov['id'] ?>" class="badge badge-primary float-right ml-2">Detail</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<div class="modal fade" id="addMovie" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Add Movie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="movies/add/" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="movieTitle">Movie Title</label>
                        <input type="text" name="movieTitle" class="form-control" id="movieTitle" placeholder="Insert the movie's title...">
                    </div>
                    <div class="form-group">
                        <label for="movieYear">Movie Year</label>
                        <input type="number" name="movieYear" class="form-control" id="movieYear" placeholder="Insert the movie's year release...">
                    </div>
                    <div class="form-group">
                        <label for="movieRated">Movie Rated</label>
                        <input type="text" name="movieRated" class="form-control" id="movieRated" placeholder="Insert the movie's rated rating...">
                    </div>
                    <div class="form-group">
                        <label for="movieGenre">Movie Genre</label>
                        <input type="text" name="movieGenre" class="form-control" id="movieGenre" placeholder="Insert the movie's genres...">
                    </div>
                    <div class="form-group">
                        <label for="moviePoster">Movie Poster Link</label>
                        <input type="text" name="moviePoster" class="form-control" id="moviePoster" placeholder="Insert the movie's poster link...">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>

