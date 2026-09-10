const btnGrid = document.querySelector('.btn-grid');
const btnList = document.querySelector('.btn-list');
const productStyle = document.querySelector('.product-style');

document.addEventListener("DOMContentLoaded", () => {

	const buttons = document.querySelectorAll('.cases-tabs button');

	const items = document.querySelectorAll('.category-success-stories');

	buttons.forEach((button) => {

		button.addEventListener('click', () => {
			const filter = button.dataset.filter;
			buttons.forEach((btn) => btn.classList.remove('active'));
			button.classList.add('active');
			items.forEach((item) => {
				if (filter === 'all') {
					item.style.display = '';
					return
				}
				if (item.classList.contains('tag-' + filter)) {
					item.style.display = "";
				} else {
					item.style.display = "none";
				}
			})
		});
	});
});

btnGrid.addEventListener('click', () => {
	productStyle.classList.add('product-grid');
	productStyle.classList.remove('product-list');
	console.log('есть клик1');
});

btnList.addEventListener('click', () => {
	productStyle.classList.remove('product-grid');
	productStyle.classList.add('product-list');
	console.log('есть клик2');
});