<?php
function connect(){
	$link = new mysqli('spalah/', 'root', 'root','spalah');
	if (!$link) {
		die('Ошибка соединения: ' . mysql_error());
	}
	echo 'Успешно соединились';
	return $link;
}
function getProduct(){
	$link = connect();
	$res = $link->query("SELECT * FROM spalah.product");
	?>
<pre>
	<?php print_r($res) ?>
</pre>
<?php
}
getProduct();
//	$product = array(
//		array(
//			'id' => 1,
//			'product_name'=>'Nike',
//			'product_price'=>150,
//			'product_img'=>'assets/images/nike.jpg',
//			'product_subtitle'=>'Lorem ipsum dolor 1',
//			'product_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam architecto blanditiis cum, ea eius iste laboriosam libero maxime nobis numquam obcaecati soluta voluptatem. Assumenda at autem cumque dicta, dolores explicabo fuga fugiat minus nemo, perferendis quia recusandae tempore. Delectus veniam, veritatis. Commodi culpa dolor fuga, itaque maiores nulla quam!',
//		),
//		array(
//			'id' => 2,
//			'product_name'=>'Puma',
//			'product_price'=>180,
//			'product_img'=>'assets/images/puma.jpg',
//			'product_subtitle'=>'Lorem ipsum dolor 2',
//			'product_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam architecto blanditiis cum, ea eius iste laboriosam libero maxime nobis numquam obcaecati soluta voluptatem. Assumenda at autem cumque dicta, dolores explicabo fuga fugiat minus nemo, perferendis quia recusandae tempore. Delectus veniam, veritatis. Commodi culpa dolor fuga, itaque maiores nulla quam!',
//		),
//		array(
//			'id' => 3,
//			'product_name'=>'Adidas',
//			'product_price'=>120,
//			'product_img'=>'assets/images/adidas.jpg',
//			'product_subtitle'=>'Lorem ipsum dolor 3',
//			'product_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam architecto blanditiis cum, ea eius iste laboriosam libero maxime nobis numquam obcaecati soluta voluptatem. Assumenda at autem cumque dicta, dolores explicabo fuga fugiat minus nemo, perferendis quia recusandae tempore. Delectus veniam, veritatis. Commodi culpa dolor fuga, itaque maiores nulla quam!',
//		),
//		array(
//			'id' => 4,
//			'product_name'=>'Reabook',
//			'product_price'=>100,
//			'product_img'=>'assets/images/reabook.jpg',
//			'product_subtitle'=>'Lorem ipsum dolor 4',
//			'product_description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam architecto blanditiis cum, ea eius iste laboriosam libero maxime nobis numquam obcaecati soluta voluptatem. Assumenda at autem cumque dicta, dolores explicabo fuga fugiat minus nemo, perferendis quia recusandae tempore. Delectus veniam, veritatis. Commodi culpa dolor fuga, itaque maiores nulla quam!',
//		),
//	);
//	$about = array(
//		'title' => 'Title About US',
//		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda excepturi fuga fugiat nihil officiis perspiciatis quam quasi, saepe veniam. Assumenda aut commodi consequatur deserunt dignissimos esse fuga harum in, maiores modi, molestias mollitia non numquam quae quas reiciendis, repudiandae sed. Delectus itaque magnam optio perspiciatis ratione sequi similique, vel veniam!',
//	);
//;?>