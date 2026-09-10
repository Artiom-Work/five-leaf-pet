wp.blocks.registerBlockType("theme/custom-product-text-2", {
	title: "Custom Product Text 2",
	icon: "text",
	category: "woocommerce",
	edit: () => wp.element.createElement("p", {}, "📄 Custom Product Text 2"),
	save: () => null,
});