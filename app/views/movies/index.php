<div class="container mt-5">
    <h1 class="text-center mb-4">My Movies List</h1>
    <div class="row">
        <?php foreach ($data['mov'] as $mov): ?>
            <div class="col-md-4 mb-4">
                <div class="card d-flex flex-column" style="height: 100%;">
                    <img class="card-img-top" src="<?= $mov['poster'] ?>" alt="<?= htmlspecialchars($mov['title']); ?>" style="height: 500px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= htmlspecialchars($mov['title']); ?></h5>
                        <ul class="list-unstyled mt-auto">
                            <li><strong>Year:</strong> <?= htmlspecialchars($mov['year']); ?></li>
                            <li><strong>Rated:</strong> <?= htmlspecialchars($mov['rated']); ?></li>
                            <li><strong>Genre:</strong> <?= htmlspecialchars($mov['genre']); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>