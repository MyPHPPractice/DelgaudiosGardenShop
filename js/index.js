var $ = function(id){
	return document.getElementById(id);
}

window.onload = function (){
	$('dgBanner').onclick = goHome;
	$('btnCalculate').onclick = calculate;
	
}
function goHome (){
	var home = 'index.php';
	window.location.href = home;
}
function calculate () {
	var mulch = typeMulch();
	var crushed = typeCrushed();
	var pallet = typePallet();
	var Ag = typeAg();
	var Mquantity = $('numAmount').value;
	var Cquantity = $('numCrushAmount').value;
	var Pquantity = $('numPalAmount').value;
	var Aquantity = $('numAgAmount').value;
	var delivery = isDelivery();
	var mulchPrice = (mulch * Mquantity) + delivery;
	var crushedPrice = (crushed * Cquantity) + delivery;
	var palletPrice = (pallet * Pquantity) + delivery;
	var AgPrice = (Ag * Aquantity) + delivery;
	$('txtMulchPrice').value = mulchPrice;
	$('txtCrushedPrice').value = crushedPrice;
	$('txtPalPrice').value = palletPrice;
	$('txtAgPrice').value = AgPrice;
	$('txtTotal').value = (AgPrice + palletPrice + crushedPrice + mulchPrice)
}

function typeMulch () {
	var mulch = $('typeMulch').value;
	var mulchPrice;
	if (mulch == 'brown') {
		mulchPrice = 22;
	}else{
		if (mulch == 'black') {
			mulchPrice = 22;
		}else{
			mulchPrice = 17;
		}
	}
	return mulchPrice;

}
function typeCrushed () {
	var crushed = $('typeCrushed').value;
	var crushedPrice;
	if (crushed == '3/4') {
		crushedPrice = 40;
	}else{
		if (crushed == 'QP') {
			crushedPrice = 44;
		}else{
			if (crushed == '3/8') {
				crushedPrice = 39;
			}else{
				if (crushed == '3/8QP') {
					crushedPrice = 42;
				}else{
					if (crushed == '3/8Red') {
						crushedPrice = 50;
					}else{
						if (crushed == 'Dust') {
							crushedPrice = 55;
						}else{
							if (crushed == 'redDust') {
								crushedPrice = 60;
							}else{ alert("you fucked up");}
						}
					}
				}
			}
		}
	}
	return crushedPrice;
}

function typePallet () {
	var pallet = $('typePallets').value;
	var palletPrice;
	if (pallet == 'brick') {
		palletPrice = 400;
	}else{
		if (pallet == 'BSSteps') {
			palletPrice = 440;
		}else{
			if (pallet == 'BSWall') {
				palletPrice = 390;
			}else{
				if (pallet == 'Lilok') {
					palletPrice = 420;
				}else{
					if (pallet == 'colGrey') {
						palletPrice = 500;
					}else{
						if (pallet == 'white') {
							palletPrice = 550;
						}else{
							if (pallet == 'regular') {
								palletPrice = 600;
							}else{ alert("you fucked up");}
						}
					}
				}
			}
		}
	}
	return palletPrice;
}
function typeAg () {
	var Ag = $('typeAg').value;
	var AgPrice;
	if (Ag == 'concrete') {
		AgPrice = 20;
	}else{
		if (Ag == 'Sand') {
			AgPrice = 23;
		}else{
			if (Ag == 'millings') {
				AgPrice = 33;
			}
		}
	}
	return AgPrice;
}

function isDelivery () {
	var customer = $('typeCustomer').value;
	var customerPrice;
	if (customer == 'delivery') {
		customerPrice = 25;
		}else{
			if (customer == 'pickup') {
				customerPrice = 0;
			}
		}
	return customerPrice;
}