<!doctype html>
<html lang="ru">
    <head>
	    <div class="header">
			<title>Комендант 221-362 web5</title>
			<div class="header-item" id="title-item">
				<div class="nav-title"><h1>База данных</h1></div>
			</div>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<link rel="stylesheet" href="index.css"/>
			<link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
		</div>
	</head>
	<body>
        <?php
            include "db.php";
            $images = mysqli_query($mysql, "SELECT * FROM `images`");
            $defs = mysqli_query($mysql, "SELECT * FROM `definitions`");
        ?>
		<div class="table-block">
		    <table>
			    <thead>
				    <tr>
					    <th colspan="2">Данные из базы данных</th>
					</tr>
				</thead>
				<tbody>
                    <?php 
                    while ($img = mysqli_fetch_array($images)){
                        $def = mysqli_fetch_array($defs);
                        ?>
				    <tr>
					    <td><img class="number" title="<?php echo $img['name'];?>" src="/numbers/<?php echo $img['name'];?>.jpg"></td>
						<td><b><?php echo $def['def'];?></b></td>
                        <td><?php echo $def['val'];?></td>
					</tr>
                    <?php
                    }
                    ?>
				</tbody>
			</table>
		</div>
	</body>
	<footer>
	    <div class="footer-container">
		    <div class="footer-item">
			    <h3>О сайте</h3>
				<a>Данная страница является результатом пятой лабораторной работой (Веб-технологии)</a>		
			</div>
			<div class="footer-item">
			    <h3>Контакты</h3>
			    <ul class="footer-ul">
				    <li><a href="">maks.komendant@yandex.ru</a></li>
					<li><a>+79259257991</a>	</li>
				</ul>
			</div>
		</div>
	</footer>
</html>