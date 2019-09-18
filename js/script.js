document.getElementById('toggle').addEventListener('click', function() {
	[...document.getElementsByClassName('top-section')].forEach( (element, index) => {
		element.classList.toggle('active');
	});
});

// [...document.getElementById('menu').getElementsByTagName('li')].forEach( (listItem, index) => {
// 	listItem.addEventListener('hover', () => {
// 		listItem.classList.toggle('hovered');
// 	}
// });