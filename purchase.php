<?php 
include 'php/header.php';
 ?>
<section>
	<table id="purchaseMaterials">
		<tr>
			<td>
				Item
			</td>
			<td>
				Type
			</td>
			<td>
				Amount
			</td>
			<td>
				Customer
			</td>
			<td>
				Price
			</td>
		</tr>
		<tr>
			<td>
				Mulch
			</td>
			<td>
				<select id="typeMulch" name="typeMulch">
					<option id="drpBlack" value="black">Black</option>
					<option id="drpBrown" value="brown">Brown</option>
					<option id="drpNatural" value="natural">Natural</option>
				</select>
			</td>
			<td>
				<input type="number" id="numAmount">yds</input>
			</td>
			<td>
				<select id="typeCustomer" name="typeCustomer">
					<option id="drpHomeowner" value="pickup">Pickup</option>
					<option id="drpDelivery" value="delivery">Delivery</option>
				</select>
			</td>
			<td>
				<input type="text" id="txtMulchPrice" name="txtname" disabled="disabled"></input>
			</td>
		</tr>
		<tr>
			<td>
				Crushed Stone
			</td>
			<td>
				<select id="typeCrushed" name="typeCrushed">
					<option id="drp3/4" value="3/4">3/4</option>
					<option id="drp3/4QP" value="QP">3/4 QP</option>
					<option id="drp3/8" value="3/8">3/8</option>
					<option id="drp3/8QP" value="3/8QP">3/8 QP</option>
					<option id="drp3/8Red" value="3/8Red">3/8 Red</option>
					<option id="drpDust" value="Dust">Stone Dust</option>
					<option id="drpRedDust" value="redDust">Red Stone Dust</option>
				</select>
			</td>
			<td>
				<input type="number" id="numCrushAmount">yds</input>
			</td>
			<td>
				<select id="typeCustomer" name="typeCustomer">
					<option id="drpHomeowner" value="pickup">Pickup</option>
					<option id="drpDelivery" value="delivery">Delivery</option>
				</select>
			</td>
			<td>
				<input type="text" id="txtCrushedPrice" name="txtname" disabled="disabled"></input>
			</td>
		</tr>
		<tr>
			<td>
				Pallets
			</td>
			<td>
				<select id="typePallets">
					<option value="brick">Brick</option>
					<option value="BSSteps">Blue Stone Steps</option>
					<option value="BSWall">Blue Stone</option>
					<option value="Lilok">Lilock</option>
					<option value="colGrey">Colonial Grey</option>
					<option value="white">White</option>
					<option value="regular">Regular Blue Stone</option>
				</select>
			</td>
			<td>
				<input type="number" id="numPalAmount">Pallets</input>
			</td>
			<td>
				<select id="typeCustomer" name="typeCustomer">
					<option id="drpHomeowner" value="pickup">Pickup</option>
					<option id="drpDelivery" value="delivery">Delivery</option>
				</select>
			</td>
			<td>
				<input type="text" id="txtPalPrice" disabled="disabled"></input>
			</td>
		</tr>
				<tr>
			<td>
				Aggregates
			</td>
			<td>
				<select id="typeAg">
					<option value="concrete">Crushed Concrete</option>
					<option value="sand">Sand</option>
					<option value="millings">Millings</option>
				</select>
			</td>
			<td>
				<input type="number" id="numAgAmount">yds</input>
			</td>
			<td>
				<select id="typeCustomer" name="typeCustomer">
					<option id="drpHomeowner" value="pickup">Pickup</option>
					<option id="drpDelivery" value="delivery">Delivery</option>
				</select>
			</td>
			<td>
				<input type="text" id="txtAgPrice" disabled="disabled"></input>
			</td>
		</tr>
		<tr>
			<td>
			Total:
			</td>
			<td>
				<input type="text" id="txtTotal" disabled="disabled"></input>
			</td>
		</tr>
	</table>
	<input type="button" id="btnCalculate" value="Calculate"></input>
</section>
 <?php 
include 'php/footer.php';
 ?>