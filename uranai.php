<!-- <!?php require_once("select_random.php") ?> -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>ほぼ大吉占い</title>
  </head>
  <body>

    <?php
    // 占い配列
    $uranai[0] = "大吉";
    $uranai[1] = "ちょっと大吉";
    $uranai[2] = "ほぼ大吉";
    $uranai[3] = "超大吉";
    $uranai[4] = "大きょち";
    $uranai[5] = "ウルトラ大吉";
    $uranai[6] = "すっっっごい大吉";
    $uranai[7] = "半分大吉";
    $uranai[8] = "気持ち大吉";
    $uranai[9] = "みんな大吉";
    $uranai[10] = "曇りのち大吉";
    $uranai[11] = "人生最後の大吉";
    $uranai[12] = "DAIKICHI";
    $uranai[13] = "ふわっと大吉";
    $uranai[14] = "マジ大吉";
    $uranai[15] = "パーフェクト大吉";
    $uranai[16] = "8割大吉";
    $uranai[17] = "華丸大吉";
    $uranai[18] = "けっこー大吉";
    $uranai[19] = "ベストオブ大吉";
    $uranai[20] = "キングオブ大吉";
    $uranai[21] = "スーパー大吉";
    $uranai[22] = "今日から大吉";
    $uranai[23] = "いつか大吉";
    $uranai[24] = "極大吉";
    $uranai[25] = "たまたま大吉";



    // コメント配列
    $comments[0] = "普通の大吉です。それ以上でもそれ以下でもありません。";
    $comments[1] = "いいことあるといいね。。";
    $comments[2] = "中吉じゃないだけマシ。";
    $comments[3] = "あなたが神です！";
    $comments[4] = "セーフ！セーフです！！";
    $comments[5] = "3分間無敵です。";
    $comments[6] = "もうほんとすっっっごいやつです。";
    $comments[7] = "残り半分は優しさです。";
    $comments[8] = "気持ちが大事！";
    $comments[9] = "ラブ＆ピース。";
    $comments[10] = "止まない雨はない。";
    $comments[11] = "噛み締めましょう。";
    $comments[12] = "ROMAJINISHITADAKEDESU.";
    $comments[13] = "大吉、なんでしょうね。";
    $comments[14] = "本気と書いてマジ。まじ卍。";
    $comments[15] = "完璧なやーつ。";
    $comments[16] = "残り2割は知りません。";
    $comments[17] = "吉本芸人です。";
    $comments[18] = "油断は禁物です。謙虚に。";
    $comments[19] = "最高の大吉です。";
    $comments[20] = "あなたが王様ってことです。";
    $comments[21] = "スーーーーーパーーーーー！";
    $comments[22] = "上り調子です。";
    $comments[23] = "いつかね。";
    $comments[24] = "大きそうですね。";
    $comments[24] = "人生そんなもんです。";

    ?>

    <button onclick="history.back()" class="uranai-button">
      <?php
        $min = 0;
        $max = count($uranai) - 1;
        $key = mt_rand($min, $max);
      ?>
      <!-- <p class="uranai"><!?php echo select_random($uranai) ?></p> -->
      <p class="uranai"><?php echo $uranai[$key] ?></p>
      <p class="comments"><?php echo $comments[$key] ?></p>
    </button>
  </body>
</html>