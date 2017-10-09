function ajaxObjekt () {
			try {var ajaxObjekt=new XMLHttpRequest();}
			catch (greska1) {
				try {ajaxObjekt=new ActiveXObject("Microsoft.XMLHTTP");}
				catch (greska2) {
					try {ajaxObjekt=new ActiveXObject("Msxml2.XMLHTTP");}
					catch (greska3) {
						ajaxObjekt=false;
						}
					}
				}
				return ajaxObjekt;
			}