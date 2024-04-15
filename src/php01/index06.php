<?php
// 引数に $score1、$score2、$score3 を持ち、合計点が 210 より大きい時「合計点は OO なので合格です」、そうではなかったら「合計点は OO なので不合格です」と表示する関数を作りなさい。

function triangle($base, $height) {
    return $base * $height / 2;
}

echo triangle(3, 4);