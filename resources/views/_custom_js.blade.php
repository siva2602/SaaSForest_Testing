<script>
    var modal = document.getElementById("loginModal");
    var span = document.getElementsByClassName("close")[0];

    let selectedProductId = 0;
    let selectedSizeId = 0;
    let selectedColorId = 0;
    let variantId = 0;

    span.onclick = function() {
        modal.style.display = "none";
    }

    function loginFrom() {
        modal.style.display = "flex";
    }

    function login() {
        var _token = document.getElementsByName('_token')[0];
        var email = document.getElementById('email');
        var password = document.getElementById('password');

        fetch("{{ route('auth.login') }}", {
            method: "POST",
            body: JSON.stringify({
                _token: _token.value,
                email: email.value,
                password: password.value
            }),
            headers: {
                "Content-type": "application/json; charset=UTF-8"
            }
        }).then((response) => response.json()).then((json) => {
            if (json.error_code == 422) {
                document.getElementById('error_email').innerHTML = json.message.email ? json.message.email[0] : '';
                document.getElementById('error_password').innerHTML = json.message.password ? json.message.password[0] : '';
            } else if (json.error_code == 401) {
                document.getElementById('error_invalid').innerHTML = json.message;
            } else {
                location.reload();
            }
        });
    }

    function getVariantPrice(productId, sizeId = null, colorId = null) {
        fetch(`/get-variant-price?product_id=${productId}&size_id=${sizeId}&color_id=${colorId}`, {
            method: 'GET',
        }).then(response => response.json()).then(data => {
            document.getElementById(`product_amount_${productId}`).innerHTML = "RS. " + data.price
            variantId = data.id;
        }).catch(err => console.error(err));
    }

    function selectSize(productId, sizeId) {

        if (selectedProductId !== productId) {
            clearLastSelectetProduct(selectedProductId);
        }

        selectedProductId = productId;
        selectedSizeId = sizeId;

        document.getElementById(`error_product_size_${productId}`).innerHTML = "";

        let childDivs = document.querySelectorAll("#product-cart-variant-size-" + productId + " > span");
        for (var i = 0; i < childDivs.length; i++) {
            childDivs[i].classList.remove('select-variant-size');
        }
        var addClass = document.getElementById("product_" + productId + "_size_" + sizeId);
        addClass.classList.add("select-variant-size");

        if (selectedColorId != 0) {
            getVariantPrice(selectedProductId, selectedSizeId, selectedColorId);
        }
    }

    function selectColor(productId, colorId) {
        if (selectedProductId !== productId) {
            document.getElementById(`error_product_size_${productId}`).innerHTML = "Select ";
            clearLastSelectetProduct(selectedProductId);
            return;
        } else {
            document.getElementById(`error_product_size_${productId}`).innerHTML = "";
            document.getElementById(`error_product_color_${productId}`).innerHTML = "";
        }

        selectedColorId = colorId;

        let childDivs = document.querySelectorAll("#product-cart-variant-color-" + productId + " > span");
        for (var i = 0; i < childDivs.length; i++) {
            childDivs[i].innerHTML = '&nbsp';
        }

        var addClass = document.getElementById("product_" + productId + "_color_" + colorId);
        addClass.innerHTML = '<i class="fa fa-check" aria-hidden="true" style="color:#fff"></i>';

        getVariantPrice(selectedProductId, selectedSizeId, selectedColorId);
    }

    function clearLastSelectetProduct(productId) {
        var childDivs = document.querySelectorAll("#product-cart-variant-size-" + productId + " > span");
        for (var i = 0; i < childDivs.length; i++) {
            childDivs[i].classList.remove('select-variant-size');
        }

        var childDivs = document.querySelectorAll("#product-cart-variant-color-" + productId + " > span");
        for (var i = 0; i < childDivs.length; i++) {
            childDivs[i].innerHTML = '&nbsp';
        }

        selectedSizeId = 0;
        selectedProductId = 0;
        selectedColorId = 0;
    }

    function addToCart(productId) {
        if (selectedProductId !== productId) {
            clearLastSelectetProduct(selectedProductId);
            selectedSizeId = 0;
            selectedColorId = 0;
        }

        if (selectedSizeId == 0) {
            document.getElementById(`error_product_size_${productId}`).innerHTML = "Select ";
            return;
        }
        if (selectedColorId == 0) {
            document.getElementById(`error_product_color_${productId}`).innerHTML = "Select ";
            return;
        }

        var _token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

        fetch("{{ route('cart.add') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": _token
            },
            body: JSON.stringify({
                _token: _token,
                product_id: selectedProductId,
                variant_id: variantId
            }),
            headers: {
                "Content-type": "application/json; charset=UTF-8",
                "Access-Control-Allow-Origin": "*",
                "Access-Control-Allow-Credentials": true
            }
        }).then((response) => response.json()).then((json) => {
            if (json.error_code == 422) {
                document.getElementById('error_email').innerHTML = json.message.email ? json.message.email[0] : '';
                document.getElementById('error_password').innerHTML = json.message.password ? json.message.password[0] : '';
            } else if (json.error_code == 401) {
                document.getElementById('error_invalid').innerHTML = json.message;
            } else {
                document.getElementById('lblCartCount').innerHTML = json.count;
            }
        });
    }
</script>
