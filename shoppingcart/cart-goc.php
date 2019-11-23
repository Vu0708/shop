<?php
require_once "BookFunx.php";
require_once "DvdFunx.php"
?>
<?php
// セッションを開始
session_start();

// セッションからカートを取得
$book_cart = null;
$dvd_cart = null;
if (isset($_SESSION["book_cart"])) {
	$book_cart = $_SESSION["book_cart"];
} else {
	$book_cart = [];
}

// リクエストパラメータを取得
$book_id = -1;
if (isset($_REQUEST["book_id"])) {
	$book_id = $_REQUEST["book_id"];
}
$book_mode = "";
if (isset($_REQUEST["book_mode"])) {
	$book_mode = $_REQUEST["book_mode"];
}

// リクエストパラメータに対応する楽器を取得
if ($book_id > -1) {
	$bookItems = createBookItems();
	$bookItem = $bookItems[$book_id];
	// カートに選択された楽器を追加
	$book_cart[] = $bookItem;
	// セッションに再設定する
	$_SESSION["book_cart"] = $book_cart;
}

// カートのクリア処理
if ($book_mode === "clear") {
	$book_cart = [];
	unset($_SESSION["book_cart"]);
	session_destroy();
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>カート</title>
	<link rel="stylesheet" href="./css/style.css" />
	<link rel="stylesheet" href="./css/shoppingcart.css" />	
</head>

<body>
	<h1>カート</h1>
	<p><a href="entry.php">買い物を続ける</a>　<a href="cart.php?book_mode=clear">カートをクリアする</a></p>
	<?php if (count($book_cart) === 0) { ?>
		<p>カートに商品は入っていません。</p>
	<?php } else { ?>
	<table>
		<tr>
			<th>書籍名</th>
			<th>価格</th>
			<th>著者</th>
			<th>ISBN</th>
		</tr>
		<?php foreach ($book_cart as $product) { ?>
		<tr>
			<td><?= $product->getBookName() ?></td>
			<td><?= $product->getBookAuthor() ?></td>
			<td><?= $product->getBookPrice() ?>円</td>
			<td><?= $product->getBookCode() ?></td>
		</tr>
		<?php } ?>
	</table>
	<?php } ?>
</body>

</html>
