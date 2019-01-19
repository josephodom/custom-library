window.addEventListener('DOMContentLoaded', function(){
	addJSToBody();
	fullscreenExcept();
});

window.addEventListener('load', function(){
	fullscreenExcept();
});

window.addEventListener('resize', function(){
	fullscreenExcept();
});

function addJSToBody(){
	document.body.classList.add('js');
}

function fullscreenExcept(){
	const list = document.querySelectorAll('[data-full-screen-except]');
	
	for(let i in list){
		const e = list[i];
		
		if(!(e instanceof HTMLElement)){
			continue;
		}
		
		e.style.height = '';
		
		const excepts = document.querySelectorAll(e.getAttribute('data-full-screen-except'));
		
		let exceptsHeight = 0;
		
		for(let x in excepts){
			const except = excepts[x];
			
			if(!(except instanceof HTMLElement)){
				continue;
			}
			
			exceptsHeight += parseInt(except.offsetHeight);
		}
		
		e.style.minHeight = `calc(100vh - ${exceptsHeight}px)`;
	}
}