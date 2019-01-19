window.addEventListener('DOMContentLoaded', function(){
	addJSToBody();
	fullscreenExcept();
	navHashDetect();
	navHashInit();
});

window.addEventListener('load', function(){
	fullscreenExcept();
	navHashDetect();
});

window.addEventListener('resize', function(){
	fullscreenExcept();
	navHashDetect();
});

window.addEventListener('scroll', function(){
	navHashDetect();
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

function navHashDetect(){
	const Y = window.pageYOffset;
	
	const list = document.querySelectorAll('#nav a[href*="#"]');
	
	let hashLink = null;
	
	for(let i in list){
		const e = list[i];
		
		if(!(e instanceof HTMLElement)){
			continue;
		}
		
		e.classList.remove('active');
		
		let scrollTo = scrollFromHash(e.hash);
		
		if(
			scrollTo <= Y
			&&
			(
				!hashLink
				||
				scrollFromHash(hashLink.hash) < scrollTo
			)
		){
			hashLink = e;
		}
	}
	
	hashLink.classList.add('active');
}

function navHashInit(){
	const list = document.querySelectorAll('#nav a[href*="#"]');
	
	for(let i in list){
		const e = list[i];
		
		if(!(e instanceof HTMLElement)){
			continue;
		}
		
		e.onclick = function(e){
			e.preventDefault();
			
			if(window.ubiqNavScrollInterval){
				window.ubiqNavScrollInterval.destroy();
				window.ubiqNavScrollInterval = null;
			}
			
			window.ubiqNavScrollInterval = stepInterval(
				function(){},
				100,
				function (){
					let scrollTo = scrollFromHash(this.data.hash);
					const percentage = 1 / (this.duration / this.intervalDistance);
					
					scrollTo = this.data.originalPosition + ((scrollTo - this.data.originalPosition) * percentage);
					
					window.scrollTo(0, scrollTo);
				},
				{
					hash: this.hash,
					originalPosition: window.pageYOffset,
				}
			);
		};
	}
}

function scrollFromHash(_hash){
	let scrollTo = 0;
	const maxScroll = document.body.height - window.innerHeight;
	
	if(_hash){
		let hash = document.querySelector(_hash);
		
		scrollTo = hash.getBoundingClientRect().top + window.pageYOffset - scrollGutter();
	}
	
	if(scrollTo > maxScroll){
		scrollTo = maxScroll;
	}
	
	return scrollTo;
}

function scrollGutter(){
	let header;
	
	if(!(header = document.querySelector('#header.default-header'))){
		return 0;
	}
	
	return header.offsetHeight;
}