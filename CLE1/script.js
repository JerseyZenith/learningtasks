functtion rain(){
		Let amount = 10;
		Let body = document.querySelector('body');
		Let i = 0;
		while(i < amount){
			Let drop = document.createElement('i');
			
			Let size = Math.random() * 5;
			Let posX = Math.floor(Math.random() * window.
			innerWidth);
			
			drop.style.width = 0.2 + size+'px';
			drop.style.left = posX + 'px';
			body.appendChild(drop);
			i++
		}
	}	
	rain();
