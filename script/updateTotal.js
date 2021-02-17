// function updateTotal() {
// 	var quantitys = document.querySelectorAll('.slsp');
// 	var costs = document.querySelectorAll('.tien');
// 	var totals = document.querySelector('.tientong');
// 	for(var i = 0; i < quantitys.length; i++) {
// 		var quantity = quantitys[i].value;
// 		var cost = costs[i].innerHTML;
// 		var total = totals.innerText;
// 		cost = cost.replace('vnđ', '');
// 		cost = cost.replace(/\,/g,'');
// 		cost = Number(cost);
// 		console.log(total);
// 		total += cost * quantity;
// 		total = total.toLocaleString('vi', {style : 'currency', currency : 'VND'});
// 		totals.innerHTML = total;
// 	}
// }
function updateTotal() {
	var quantitys = document.querySelectorAll('.slsp');
	var costs = document.querySelectorAll('.tien');
	var totals = document.querySelectorAll('.tien2');
	for(var i = 0; i < quantitys.length; i++) {
		var quantity = quantitys[i].value;
		var cost = costs[i].innerHTML;
		var total = totals[i].innerText;
		cost = cost.replace('đ', '');
		cost = cost.replace(/\./g,'');
		cost = Number(cost);
		var total = cost * quantity;
		// console.log(total);
		total = total.toLocaleString('vi', {style : 'currency', currency : 'VND'});
		totals[i].innerHTML = total;
	}
	var rezo = document.querySelector('.tientong');

var so=0;
var tongtien2 = document.querySelectorAll('.tien2');


for(var i = 0; i < quantitys.length; i++) {
	var fomatso = tongtien2[i].textContent;
	fomatso = fomatso.replace(' ₫', '');
	// console.log(fomatso);
		fomatso = fomatso.replace(/\./g,'');
		fomatso = Number(fomatso);
	so += fomatso;

}
		so = so.toLocaleString('vi', {style : 'currency', currency : 'VND'});
		rezo.innerHTML = so;

}

