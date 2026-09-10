wp.blocks.registerBlockType("theme/custom-product-text", {
	title: "Custom Product Text",
	icon: "text",
	category: "woocommerce",
	edit: () => wp.element.createElement("p", {}, "📄 Custom Product Text"),
	save: () => null,
});