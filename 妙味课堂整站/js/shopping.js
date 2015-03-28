window.onload=function(){
	vm.app.toTip();
	vm.app.toBanner();
	vm.app.toSell();
	vm.app.toMove();

};

var vm={};
vm.tools={};
vm.tools.getStyle=function(obj,attr){
	if(obj.currentStyle){
		return obj.currentStyle[attr];
	}else{
		return getComputedStyle(obj,false)[attr];
	}
};

vm.ui={};
vm.ui.tetxChange=function(obj,str){
	obj.onfocus=function(){
		if(this.value==str)
			this.value='';
	};
	obj.onblur=function(){
		if(this.value=='')
			this.value=str;
	};
};
vm.ui.fadeIn=function(obj){
	var iCurOpacity=vm.tools.getStyle(obj, 'opacity');
	if(iCurOpacity==1) return false;
	var value=0;
	var iSpeed=5;
	clearInterval(obj.timer);
	obj.timer=setInterval( function(){
		if(value==100){
			clearInterval(obj.timer);
		}else{
			value+=iSpeed;
			obj.style.opacity=value/100;
			obj.style.filter='alpha(opacity='+value+')';
		}
	}, 30);
}
vm.ui.fadeOut=function(obj){
	var iCurOpacity=vm.tools.getStyle(obj, 'opacity');
	if(iCurOpacity==0) {return false;}
	var value=100;
	var iSpeed=-5;
	clearInterval(obj.timer);
	obj.timer=setInterval( function(){
		if(value==0){
			clearInterval(obj.timer);
		}else{
			value+=iSpeed;
			obj.style.opacity=value/100;
			obj.style.filter='alpha(opacity='+value+')';
		}
	}, 30);
}

vm.ui.moveLeft=function(obj,start,target){
	clearInterval(obj.timer);
	obj.timer=setInterval(function(){
		var iSpeed=(target-start)/10;
		iSpeed=iSpeed>0?Math.ceil(iSpeed):Math.floor(iSpeed);
		if (target==start) {
			clearInterval(obj.timer);
		} else{
			start+=iSpeed;
			obj.style.left=start+'px';
		};
	}, 30);
};

vm.app={};
vm.app.toTip=function(){
	var oText1=document.getElementById('text1');
	var oText2=document.getElementById('text2');
	vm.ui.tetxChange(oText1,'Search website');
	vm.ui.tetxChange(oText2,'Search website');
};
vm.app.toBanner=function(){
	
	var oAd=document.getElementById('ad');
	var oLi=oAd.getElementsByTagName('li');
	var iNow=0;
	var timer=setInterval(autoNext, 3000);
	var oPrev_bg=document.getElementsByClassName('prev_bg')[0];
	var oPrev=document.getElementsByClassName('prev')[0];
	var oNext_bg=document.getElementsByClassName('next_bg')[0];
	var oNext=document.getElementsByClassName('next')[0];
	function autoNext(){
		if(iNow==oLi.length-1){
			iNow=0;
		}else{
			iNow++;
		}

		for(var i=0;i<oLi.length;i++){
			vm.ui.fadeOut(oLi[i]);
		}

		vm.ui.fadeIn(oLi[iNow]);
	}
	function autoPrev(){
		if(iNow==0){
			iNow=oLi.length-1;
		}else{
			iNow--;
		}

		for(var i=0;i<oLi.length;i++){
			vm.ui.fadeOut(oLi[i]);
		}
		vm.ui.fadeIn(oLi[iNow]);
	}

	oPrev_bg.onmouseover=oPrev.onmouseover=function(){
		oPrev.style.display='block'; 
		clearInterval(timer);
	};

	oPrev_bg.onmouseout=oPrev.onmouseout=function(){
		oPrev.style.display='none';  
		timer=setInterval(autoNext, 3000); 
	};

	oNext_bg.onmouseover=oNext.onmouseover=function(){
		oNext.style.display='block'; 
		clearInterval(timer);
	};

	oNext_bg.onmouseout=oNext.onmouseout=function(){
		oNext.style.display='none';  
		timer=setInterval(autoNext, 3000); 
	};

	oPrev.onclick=function(){
		autoPrev();
	};
	oNext.onclick=function(){
		autoNext();
	};
};

vm.app.toSell=function(){
	var oSell=document.getElementById('sell');
	var aDd=oSell.getElementsByTagName('dd');
	var aUl=oSell.getElementsByTagName('ul');
	aH2=oSell.getElementsByTagName('h2');

	for (var i=0;i<aDd.length;i++){
		aDd[i].index=i;
		aDd[i].onclick=function(e){
			var e=e||window.event;
			var This=this;
			for(var i=0;i<aUl.length;i++){
				aUl[i].style.display='none';
			}
			aUl[this.index].style.display='block';
			document.onclick=function(){
				aUl[This.index].style.display='none';
			};
			e.cancelBubble=true;
		};
	}
	for(var i=0;i<aUl.length;i++){
		aUl[i].index=i;
		(function(ul){
			var aLi=ul.getElementsByTagName('li');
			for(var i=0;i<aLi.length;i++){
				aLi[i].onmouseover=function(){
					this.className='active';
				};
				aLi[i].onmouseout=function(){
					this.className='';
				};
				aLi[i].onclick=function(e){
					var e=e||window.event;
					aH2[this.parentNode.index].innerHTML=this.innerHTML;
					// alert(this.parentNode.tagName);
					this.parentNode.style.display='none';
					e.cancelBubble=true; 
				}
			}
		})(aUl[i]);
	}
};
vm.app.toMove=function(){
	var oRun1=document.getElementById('run1');
	var oUl=oRun1.getElementsByTagName('ul')[0];
	var aLi=oUl.getElementsByTagName('li');

	var oPrev=oRun1.getElementsByClassName('prev')[0];
	var oNext=oRun1.getElementsByClassName('next')[0];

	var iStart=0;

	oUl.innerHTML+=oUl.innerHTML;
	oUl.style.width=aLi.length*aLi[0].offsetWidth+'px';

	oPrev.onclick=function(){
		if(iStart==0){
			iStart=aLi.length/2;
			oUl.style.left=-oUl.offsetWidth/2+'px';
		}
		vm.ui.moveLeft(oUl, -iStart*aLi[0].offsetWidth, -(iStart-1)*aLi[0].offsetWidth);
		iStart--;
	};
	oNext.onclick=function(){
		if(iStart==aLi.length/2){
			iStart=0;
			oUl.style.left=0;
		}
		vm.ui.moveLeft(oUl, -iStart*aLi[0].offsetWidth, -(iStart+1)*aLi[0].offsetWidth);
		iStart++;
	};
};

