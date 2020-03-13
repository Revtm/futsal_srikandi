const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

TweenMax.staggerFrom("body", 2, {
	delay: 1.6,
	y: 20,
	opacity: 0,
	ease: Expo.easeInOut
}, 0.1);

TweenMax.staggerFrom(".login-content", 2, {
	delay: 1.6,
	y: 20,
	opacity: 0,
	ease: Expo.easeInOut
}, 0.1);

TweenMax.from(".circle-1", 4, {
	delay: 0.1,
	rotation: 200,
	transformOrigin: "50% 50%",
	opacity: 0,
	x: 500,
	y: 500,
	ease: Expo.easeInOut
});
