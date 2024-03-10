const cart_btn = document.querySelector(".cart__btn")

cart_btn.addEventListener("click", (el) => {
    const cart_block = document.querySelectorAll(".cart-block")
    const elemeny = {};
    const arr = []
    cart_block.forEach((el) => {
        arr.push(el.childNodes[1].textContent)
    })
    elemeny["products"] = arr
        fetch("./cart/over", {method:"POST",
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content,
            },
            body: JSON.stringify(elemeny)})
            .then((res)=>{
                return(res.text())
            }).then((res)=>{console.log(res)}).then(() => {
            location.reload();
        })
    })

