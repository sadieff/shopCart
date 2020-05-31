$(document).ready(function(){

    var cart = new Cert({
		certClass : ".cart", // Класс обертки корзины
        item: ".cart-item", // Элемент корзины
        itemQuantity: ".cart-quantity_js", // input с количеством в корзине
        itemQuantityMinus: ".cart-minus_js", // Уменьшить количество товара
        itemQuantityPlus: ".cart-plus_js", // Увеличить количество товара
        itemSum: ".cart-sum_js", // Стоимость товара
        itemDelete: ".cart-delete_js", // Удалить товар
        totalSum: ".cart-total_js", // Общая сумма
        applyButton: ".cart-apply_js", // Кнопка оформления заказа
        certForm: ".cart_form_js", // Класс формы
        formAction: "ajax.php" // адрес для отправки данных
	});

});