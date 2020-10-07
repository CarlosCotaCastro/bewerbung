var interests = ['programming', 'designing', 'social-media', 'planing', 'software', 'advertising', 'analysing', 'roadbikes', 'good people', 'my family', 'video editing', 'football', 'learning', 'cigars', 'clean code', 'UX', 'fast websites'];
var curent_interest = 0;
var interest_element = document.getElementsByClassName('interests')[0];
console.log(interest_element);

function nextInterest() {
	i = curent_interest + 1;
	if (i >= interests.length) {
		i = 0;
	}
	interest_element.innerHTML = interests[i];
	console.log(interests.length);
	curent_interest = i;
	setTimeout(function () {nextInterest();}, 1000);
}

nextInterest();

