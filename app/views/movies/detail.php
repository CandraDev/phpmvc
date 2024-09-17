<div class="container mt-5">
    <div class="row">
        <!-- Movie Poster -->
        <div class="col-md-6 mb-4" style="padding-right: 15px;">
            <img
                src="<?= htmlspecialchars($data['movie']['poster']); ?>"
                alt="<?= htmlspecialchars($data['movie']['title']); ?>"
                style="width: 100%; height: auto; max-height: 800px; object-fit: cover;">
        </div>

        <!-- Movie Details -->
        <div class="col-md-6 mb-4" style="padding-left: 15px; padding-right: 15px; background-color: #f8f9fa; border-radius: 5px;">
            <h1 class="text-center"><?= htmlspecialchars($data['movie']['title']); ?></h1>
            <p><strong>Year:</strong> <?= htmlspecialchars($data['movie']['year']); ?></p>
            <p><strong>Rated:</strong> <?= htmlspecialchars($data['movie']['rated']); ?></p>
            <p><strong>Genre:</strong> <?= htmlspecialchars($data['movie']['genre']); ?></p>
            <div class="text-center">
                <a
                    href="<?= htmlspecialchars($data['movie']['watch_link'] ?? '#'); ?>"
                    class="btn btn-primary"
                    style="margin-top: 20px; font-size: 1.25rem;">Watch Now</a>
            </div>
            <a href="<?=BASEURL;?>/movies/">Back to List</a>
        </div>
    </div>
</div>