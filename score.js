






function chkRad(oR1,oR2,oR3,oR4,oR5,oR6,oR7,oR8,oR9,oR10){
	var bR1=false
	var bR2=false
	var bR3=false
	var bR4=false
	var bR5=false
	var bR6=false
	var bR7=false
	var bR8=false
	var bR9=false
	var bR10=false
	for(i=0;i<oR1.length;i++){
		if(oR1[i].checked==true){
			bR1=true
		
		}
	}
	for(i=0;i<oR2.length;i++){
		if(oR2[i].checked==true){
			bR2=true
		
		}
	}
	for(i=0;i<oR3.length;i++){
		if(oR3[i].checked==true){
			bR3=true
		
		}
	}
	for(i=0;i<oR4.length;i++){
		if(oR4[i].checked==true){
			bR4=true
		
		}
	}
	for(i=0;i<oR5.length;i++){
		if(oR5[i].checked==true){
			bR5=true
		
		}
	}
	for(i=0;i<oR6.length;i++){
		if(oR6[i].checked==true){
			bR6=true
		
		}
	}
	for(i=0;i<oR7.length;i++){
		if(oR7[i].checked==true){
			bR7=true
		
		}
	}
	for(i=0;i<oR8.length;i++){
		if(oR8[i].checked==true){
			bR8=true
		
		}
	}
	for(i=0;i<oR9.length;i++){
		if(oR9[i].checked==true){
			bR9=true
		
		}
	}
	for(i=0;i<oR10.length;i++){
		if(oR10[i].checked==true){
			bR10=true
		
		}
	}
	if(bR1 && bR2 && bR3 && bR4 && bR5 && bR6 && bR7 && bR8 && bR9 && bR10){
		//alert("proceed")
	
	}
	else{
		alert("You must attempt all the questions !!")
		return false
	}
	

}