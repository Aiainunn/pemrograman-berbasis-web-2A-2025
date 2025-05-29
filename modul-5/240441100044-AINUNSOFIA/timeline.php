<?php
$pengalaman = [
    "Maret 2024" => "Pengumuman Hasil Seleksi SNBP",
    "Agustus 2024" => "Ospek MABA, awal masuk perkuliahan smt 1",
    "Desember2024" => "UAS smt 1, libur semester",
    "Februari 2024" => "Awal masuk perkuliahan smt 2"
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Timeline Pengalaman Kuliah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-60 min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-6xl bg-white p-10 rounded-2xl shadow-2xl border-4 border-green-400">
        <h1 class="text-4xl font-extrabold text-center text-green-700 mb-8">Timeline Pengalaman Kuliah</h1>

        <!-- Navigasi -->
        <div class="mb-10 flex justify-center space-x-6">
            <a href="profil1.php" class="text-green-800 font-semibold hover:underline">Profil</a>
            <a href="timeline.php" class="text-green-800 font-semibold hover:underline">Timeline</a>
            <a href="blog.php" class="text-green-800 font-semibold hover:underline">Blog</a>
        </div>

        <!-- Timeline -->
        <div class="space-y-6">
            <?php foreach ($pengalaman as $tahun => $kegiatan): ?>
                <div class="border-l-4 border-green-500 pl-6 relative">
                    <h3 class="text-xl font-bold text-green-800"><?= $tahun ?></h3>
                    <p class="text-green-700"><?= $kegiatan ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>