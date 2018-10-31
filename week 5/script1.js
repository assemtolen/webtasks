function fun(){
	var a = document.getElementById("s11").value*document.getElementById("s22").value*document.getElementById("s33").value +
			document.getElementById("s12").value*document.getElementById("s23").value*document.getElementById("s31").value +
			document.getElementById("s21").value*document.getElementById("s32").value*document.getElementById("s13").value;

	var b = document.getElementById("s13").value*document.getElementById("s22").value*document.getElementById("s31").value -
			document.getElementById("s12").value*document.getElementById("s21").value*document.getElementById("s33").value -
			document.getElementById("s11").value*document.getElementById("s32").value*document.getElementById("s23").value;
	var sum = a + b;
	
	document.getElementById('result').innerHTML = sum;
}

let button = document.getElementById("determinant");
button.addEventListener("click", fun)