function Kalkulator(operator){
	var angka1 = parseFloat(document.getElementById("angka1").value);
	var angka2 = parseFloat(document.getElementById("angka2").value);
	var total;
	if(isNaN(angka1),isNaN(angka2)){
		alert('Inputan Salah!');
	}
	else
	{
		switch(operator){
			case '+':
				total = angka1+angka2;
			break;
			case '-':
				total = angka1-angka2;
			break;
			case '*':
				total = angka1*angka2;
			break;
			case '/':
				total = angka1/angka2;
			break;
		}
		hasil.value = total;
		document.getElementById("operator").value = hasil;
	}

}