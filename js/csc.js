// JavaScript Document

function getXMLHTTP(divId) 
{ //fuction to return the xml http object
		var xmlhttp=false;	
		var obj = document.getElementById(divId);
			obj.innerHTML='<img src="../images/1.jpg"  />';
			//alert('ok');
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
				
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getState(countryId,divId) {		
		
		var strURL="findState.php?country="+countryId;
		var req = getXMLHTTP(divId);
		
		if (req) {
			
			//alert('ok');
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}
			//document.getElementById(divId).innerHTML='<select name=city><option value=-1></option></select>';
			
			//alert(document.getElementById(divId).innerHTML);
			
			req.open("GET", strURL, true);
			req.send(null);
		}		
		
	}
	function getCity(countryId,stateId,divId) {
		alert('called');		
		var strURL="findCity.php?country="+countryId+"&state="+stateId;
		
		alert(strURL);
		
		var req = getXMLHTTP(divId);
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {	
					
					//alert(req.responseText);
										
						document.getElementById(divId).innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
