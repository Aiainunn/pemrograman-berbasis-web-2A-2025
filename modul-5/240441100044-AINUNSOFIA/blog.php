<?php
$artikel = [
    [
        'id' => 1, 
        'judul' => 'Belajar Python', 
        'tanggal' => '2024-09-01'
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog Reflektif</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-60 min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-5xl bg-white p-10 rounded-2xl shadow-2xl border-4 border-green-400">
        <h1 class="text-4xl font-extrabold text-center text-green-700 mb-8">Blog Reflektif </h1>

        <!-- Navigasi -->
        <div class="mb-8 flex justify-center space-x-6">
            <a href="profil1.php" class="text-green-800 font-semibold hover:underline">Profil</a>
            <a href="timeline.php" class="text-green-800 font-semibold hover:underline">Timeline</a>
            <a href="blog.php" class="text-green-800 font-semibold hover:underline">Blog</a>
        </div>

        <!-- Daftar Artikel -->
        <ul class="space-y-4">
            <?php foreach ($artikel as $a): ?>
                <li class="bg-green-50 border border-green-200 rounded-lg p-4 shadow hover:shadow-md transition">
                    <a href="artikel.php?id=<?= $a['id'] ?>" class="text-xl text-green-800 font-semibold hover:underline">
                        <?= $a['judul'] ?>
                    </a>
                    <p class="text-green-600 text-sm mt-1"><?= date("d F Y", strtotime($a['tanggal'])) ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>