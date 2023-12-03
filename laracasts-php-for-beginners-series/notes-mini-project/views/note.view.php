<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="pb-6">
            <a href="/notes" class="text-blue-500 hover:underline">go back....</a>
        </p>
        <p><?= $note['body'] ?></p>
    </div>
</main>

<?php require('partials/footer.php') ?>