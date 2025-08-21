<?php
$kuis = [
    [
        "soal" => "Ibukota Indonesia?",
        "pilihan" => ["Jakarta", "Bandung", "Surabaya"],
        "jawaban" => "Jakarta"
    ],
    [
        "soal" => "2 + 2 = ?",
        "pilihan" => ["3", "4", "5"],
        "jawaban" => "4"
    ],
    [
        "soal" => "Bahasa pemrograman web yang paling populer?",
        "pilihan" => ["Python", "PHP", "C++"],
        "jawaban" => "PHP"
    ]
];


$jawabanUser = ["Jakarta", "4", "PHP"];


$skorArray = array_map(function($q, $j){
    return (int)($q["jawaban"] === $j);
}, $kuis, $jawabanUser);

$skor = array_sum($skorArray);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kuis mini sederhana</title>
</head>
<body>
    <h2>Kuis Mini Polosan Tanpa If</h2>

    <?php foreach($kuis as $index => $q): ?>
        <p><strong><?= ($index+1) . ". " . $q["soal"] ?></strong></p>
        <ul>
            <?php foreach($q["pilihan"] as $pilihan): ?>
                <li>
                    <?= $pilihan ?> 
                    <?= ($pilihan === $jawabanUser[$index]) ? "(Jawaban User)" : "" ?>
                    <?= ($pilihan === $q["jawaban"]) ? "✅" : "" ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <hr>
    <?php endforeach; ?>

    <h3>Skor: <?= $skor ?> / <?= count($kuis) ?></h3>
</body>
</html>



