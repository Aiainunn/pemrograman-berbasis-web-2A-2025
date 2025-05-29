<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Interaktif Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center p-6 text-center">
    <div class="w-full max-w-6xl mx-auto bg-white shadow-2xl rounded-2xl p-10 border-4 border-green-400">
        <h1 class="text-4xl font-extrabold mb-6 text-green-700">Profil Interaktif Mahasiswa</h1>

        <!-- Navigasi antar halaman -->
        <div class="mb-8 flex justify-center space-x-6">
            <a href="profil1.php" class="text-green-800 font-semibold hover:underline">Profil</a>
            <a href="timeline.php" class="text-green-800 font-semibold hover:underline">Timeline</a>
            <a href="blog.php" class="text-green-800 font-semibold hover:underline">Blog</a>
        </div>

        <?php
        function formatTanggal($tgl) {
            return date("d F Y", strtotime($tgl));
        }

        $profil = [
            "Nama" => "Ainun Sofia",
            "NIM" => "240441100044",
            "Tempat, Tanggal Lahir" => "Bangkalan, " . formatTanggal("2006-05-12"),
            "Email" => "aiainunmata1256@gmail.com",
            "Nomor HP" => "085791709387"
        ];
        ?>

        <table class="table-auto bg-green-50 shadow rounded-lg mb-10 w-full text-left">
            <?php foreach ($profil as $key => $value): ?>
                <tr class="border-b border-green-200">
                    <td class="p-3 font-semibold text-green-800 w-1/3"><?= $key ?></td>
                    <td class="p-3 text-green-700 w-2/3">: <?= $value ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <h2 class="text-2xl font-semibold mb-4 text-green-800">Form Isian Dinamis</h2>

        <form action="" method="POST" class="bg-green-50 p-8 shadow rounded-xl border border-green-300 text-left">
            <label class="block font-medium text-green-900 mb-1">Bahasa Pemrograman yang Dikuasai:</label>
            <input type="text" name="bahasa[]" class="border border-green-300 p-2 my-1 w-full rounded focus:ring-2 focus:ring-green-400">
            <input type="text" name="bahasa[]" class="border border-green-300 p-2 my-1 w-full rounded focus:ring-2 focus:ring-green-400">
            <input type="text" name="bahasa[]" class="border border-green-300 p-2 my-1 w-full rounded focus:ring-2 focus:ring-green-400"><br><br>

            <label class="block font-medium text-green-900 mb-1">Pengalaman Proyek:</label>
            <textarea name="pengalaman" class="w-full p-2 border border-green-300 rounded mb-3 focus:ring-2 focus:ring-green-400"></textarea><br>

            <label class="block font-medium text-green-900 mb-1">Software yang Sering Digunakan:</label>
            <div class="mb-3 text-green-800">
                <label><input type="checkbox" name="software[]" value="VS Code" class="mr-1"> VS Code</label><br>
                <label><input type="checkbox" name="software[]" value="XAMPP" class="mr-1"> XAMPP</label><br>
                <label><input type="checkbox" name="software[]" value="Git" class="mr-1"> Git</label>
            </div>

            <label class="block font-medium text-green-900 mb-1">Sistem Operasi:</label>
            <div class="mb-3 text-green-800">
                <label><input type="radio" name="os" value="Windows" class="mr-1"> Windows</label>
                <label class="ml-4"><input type="radio" name="os" value="Linux" class="mr-1"> Linux</label>
                <label class="ml-4"><input type="radio" name="os" value="Mac" class="mr-1"> Mac</label>
            </div>

            <label class="block font-medium text-green-900 mb-1">Tingkat Penguasaan PHP:</label>
            <select name="tingkat" class="border border-green-300 p-2 rounded focus:ring-2 focus:ring-green-400">
                <option value="">-- Pilih --</option>
                <option value="Pemula">Pemula</option>
                <option value="Menengah">Menengah</option>
                <option value="Mahir">Mahir</option>
            </select><br><br>

            <div class="flex items-center space-x-4">
                <button type="submit" name="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg font-semibold shadow transition">Kirim</button>
            </div>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            function tampilkanHasil($data) {
                echo "<h3 class='mt-10 font-bold text-green-800 text-center'>Hasil Input:</h3>";
                echo "<table class='table-auto bg-green-50 shadow rounded-lg mt-2 w-full text-left'>";
                foreach ($data as $k => $v) {
                    if (is_array($v)) $v = implode(", ", $v);
                    echo "<tr class='border-b border-green-200'><td class='p-2 w-1/3 font-semibold text-green-900'>{$k}</td><td class='p-2 text-green-800 w-2/3'>: {$v}</td></tr>";
                }
                echo "</table>";
            }

            $bahasa = array_filter($_POST['bahasa']);
            $pengalaman = $_POST['pengalaman'];
            $software = $_POST['software'] ?? [];
            $os = $_POST['os'] ?? '';
            $tingkat = $_POST['tingkat'];

            if (count($bahasa) && $pengalaman && $software && $os && $tingkat) {
                $hasil = [
                    "Bahasa Pemrograman" => $bahasa,
                    "Pengalaman Proyek" => $pengalaman,
                    "Software" => $software,
                    "Sistem Operasi" => $os,
                    "Tingkat PHP" => $tingkat
                ];
                tampilkanHasil($hasil);

                if (count($bahasa) > 2) {
                    echo "<p class='mt-2 text-green-600 font-semibold text-left'>Anda cukup berpengalaman dalam pemrograman!</p>";
                }
            } else {
                echo "<p class='text-red-600 mt-4 font-semibold text-left'>Semua input wajib diisi!</p>";
            }
        }
        ?>
    </div>
</body>
</html>