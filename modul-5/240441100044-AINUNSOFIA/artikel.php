<?php
$data = [
    'judul' => 'Python',
    'tanggal' => '2024-09-01',
    'refleksi' => 'Python adalah salah satu bahasa pemrograman yang paling populer dan banyak digunakan di dunia saat ini.
    Dengan sintaks yang sederhana dan mudah dipahami, Python cocok untuk pemula maupun profesional dalam berbagai bidang,
    mulai dari pengembangan web, analisis data, kecerdasan buatan, hingga otomatisasi tugas.',
    'gambar' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/172px-Python-logo-notext.svg.png'
];

$quotes = [
    "Belajarlah terus, jangan pernah berhenti.",
    "Sukses dimulai dari langkah kecil.",
    "Kegagalan adalah guru terbaik."
];

function tampilKutipan($quotes) {
    return $quotes[rand(0, count($quotes) - 1)];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $data['judul'] ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-100 min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-3xl bg-white rounded-2xl shadow-2xl border-4 border-green-400 p-10">
        <h1 class="text-3xl font-extrabold text-green-700 mb-4 text-center"><?= $data['judul'] ?></h1>
        <p class="text-green-600 text-sm text-center mb-6 italic"><?= date("d F Y", strtotime($data['tanggal'])) ?></p>

        <img src="<?= $data['gambar'] ?>" alt="Logo Python"
             class="h-24 mx-auto mb-6 rounded-lg shadow-md object-contain" />

        <p class="text-green-800 text-lg leading-relaxed mb-6 text-justify">
            <?= $data['refleksi'] ?>
        </p>

        <blockquote class="border-l-4 border-green-400 pl-4 italic text-green-700 mb-6">
            "<?= tampilKutipan($quotes) ?>"
        </blockquote>

        <!-- reverensi -->
        <a href="https://www.dicoding.com/blog/python-pengertian-contoh-penggunaan-dan-manfaat-mempelajarinya/" class="text-green-800 hover:text-green-700" target="_blank">Reverensi</a>

        <div class="text-center">
            <a href="blog.php" class="text-green-800 font-semibold hover:text-green-950">kembali</a>
        </div>
    </div>
</body>
</html>