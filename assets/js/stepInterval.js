function stepInterval(
	finished,
	duration,
	eachStep,
	data,
	stepDuration
){
	if(!finished || !duration || !eachStep){
		return false;
	}
	
	if(!stepDuration){
		stepDuration = 5;
	}
	
	if(!data){
		data = {};
	}
	
	const obj = {
		// PUBLIC VARIABLES
		
		data: data,
		duration: duration,
		stepDuration: stepDuration,
		
		// PRIVATE VARIABLES
		
		interval: null,
		intervalDistance: 0,
		
		// PUBLIC METHODS
		
		destroy: function(){
			clearInterval(this.interval);
			
			this.interval = null;
		},
		finished: finished,
		eachStep: eachStep,
		
		// PRIVATE METHODS
		
		init: function(){
			this.reset();
		},
		
		reset: function(){
			this.intervalDistance = 0;
			
			const obj = this;
			
			this.interval = setInterval(function(){
				obj.step();
			}, this.stepDuration);
		},
		
		step: function(){
			if(!this.eachStep()){
				this.intervalDistance += this.stepDuration;
				
				if(this.intervalDistance >= this.duration){
					this.eachStep();
					
					this.finished();
					
					this.destroy();
				}
			}
		},
	};
	
	obj.init();
	
	return obj;
}