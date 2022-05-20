window.onscroll = () => {
	if((window.innerHeight + window.pageYOffset) >= document.body.offsetHeight) {
		console.log("You are at the end of the page.")
	}
}

const toTop = () => window.scrollTo({top: 0, behavior: 'smooth'});