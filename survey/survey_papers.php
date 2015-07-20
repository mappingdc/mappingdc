<?php


function cell()
	{
?>
<table class='card'>
	<tr>
		<td class='column_1'>point</td>
		<td class='column_2'><input type='text' /></td>
	</tr>
	<tr>
		<td>name</td>
		<td><input type='text' /></td>
	</tr>
	<tr>
		<td><input type='checkbox' /></td>
		<td>POI is entire building</td>
	</tr>
	<tr>
		<td valign='top'>address</td>
		<td>
<input type='text' /><br/>
<input type='text' /><br/>
<input type='text' />
</td>
	</tr>
	<tr>
		<td>type</td>
		<td><input type='text' /></td>
	</tr>
	<tr>
		<td>attribute 1</td>
		<td><input type='text' /></td>
	</tr>
	<tr>
		<td>attribute 2</td>
		<td><input type='text' /></td>
	</tr>
	<tr>
		<td>attribute 3</td>
		<td><input type='text' /></td>
	</tr>
	<tr>
		<td valign='top'>notes</td>
		<td><textarea></textarea></td>
	</tr>
</table>
<?php
	}




?>
<html>
	<head>
		<title>Survey Papers</title>
		<style>
* { box-sizing: border-box }
body { background-color: #EEE; }
table { width: 100% }
table.p > tbody > tr > td { border: 1px solid black; background-color: white; padding: 10px; width: 50%; }
input[type='text'] { border: none; border-bottom: 1px solid #888; width: 100% }
textarea { width: 100%; height: 60px; border: solid 1px #888; }
.card input { height: 30px; }
.column_1 { width: 30%; }
.column_2 { width: 70%; }
		</style>
	</head>
	<body>
	<form>
		<table class='p'>
			<tr>
				<td>
<?php cell(); ?>
				</td>
				<td>
<?php cell(); ?>
				</td>
			</tr>
			<tr>
				<td colspan='2'>
<p>
Use this guide to help you capture all attributes a POI can have.
</p>
<dl>
	<dt>types:</dt>
	<dd>building, restaurant, cafe, shop/store, bank, post office, bar, house, apartment, hotel, office, fire hydrant, bench, post box</dd>
</dl>
<table border='1'>
	<tr>
		<th>type</th>
		<th>attributes</th>
	</tr>
	<tr>
		<td>restaruant</td>
		<td>cuisine, hours open, website, phone, wheelchair</td>
	</tr>
	<tr>
		<td>cafe</td>
		<td>hours open, website, phone, internet access/fee</td>
	</tr>
	<tr>
		<td>place of worship</td>
		<td>religion, denomination</td>
	</tr>
	<tr>
		<td>parking</td>
		<td>access, fee, capacity, surface</td>
	</tr>
	<tr>
		<td>shop</td>
		<td>what do they sell? convience, supermarket, alcohol, hair dresser, car repair, dry cleaning, laundromat</td>
	</tr>
	<tr>
		<td>leisure</td>
		<td>park, swimming pool, playground, court, sport</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
	</tr>
</table>
from: http://taginfo.openstreetmap.org
				</td>
			</tr>
			<tr>
				<td>
<?php cell() ?>
				</td>
				<td>
<?php cell() ?>
				</td>
			</tr>
			<tr>
				<td>
<?php cell() ?>
				</td>
				<td>
<?php cell() ?>
				</td>
			</tr>
		</table>
	</form>
	</body>
</html>
