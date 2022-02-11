var name = [];
var age = [];
var del=[];
window.onload=function(){
  Read();
}
	
function ResponsePost(Omodel,param,callback){
	var params = typeof param == 'string' ? param : Object.keys(param).map(
			 function(k){ return encodeURIComponent(k) + '=' + encodeURIComponent(param[k]) }
	 ).join('&');
	var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
	var a = xhr.open('POST', Omodel);
	xhr.onreadystatechange = function() {
		if (xhr.readyState>3 && xhr.status==200) {
			callback(xhr.responseText);
		}
	};
	xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"),
	xhr.setRequestHeader("Chartset","UTF-8"),
	xhr.send(params);
	return xhr;
};

function table(model,param, div){
	return ResponsePost(model,param,function(data){
		var	t = "<table class='potato-list-table' id='list' >";
		var i=JSON.parse(data);
		var o=0;
		t+="<tr>";
		for(var e in i[0]){
				if(i[0][e]!="")
				t+="<th class='locked_top' style='border:1px solid black;top:0px;position:relative'>"+i[0][e]+"</th>";
				else
				t+="<th style='display:none'>"+i[0][e]+"</th>";
				o++;
		}
		t+="</tr>";
		for(var n in i){
			if("undefined" != i[n][0] && null != i[n][0] && n>0 && i[n][1]!="" ){
				t+="<tr>";
				for(var s=0;s<o;s++){
					if(i[0][s]!=""){
						t+="<td>"+i[n][s]+"</td>";
					}
					else
					t+="<td style='display:none'>"+i[n][s]+"</td>";
				}
				t+="</tr>"
			}
		}
		t+="</table>";
		document.getElementById(div).innerHTML = t;
	});

}


function Add(){
	name.push(document.getElementById("name").value);
	age.push(document.getElementById("age").value);
	table("data.php","name="+name+"&age="+age+"&del="+del,"table1");
}

function Delete(id){
   del.push(id);
   table("data.php","data="+data+"&age=""&del="+del,"table1");
}

function Read(){
	table("data.php","data="+data+"&del="+del,"table1");
}





