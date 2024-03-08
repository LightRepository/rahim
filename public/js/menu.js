const cart = document.querySelectorAll(".cart-add")
cart.forEach((el) => {
    el.addEventListener("click", (el) => {
        fetch("./cart/add", {method:"POST",
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.head.querySelector('meta[name=csrf-token]').content,
            },
            body: JSON.stringify({id: el.target.getAttribute("data-id")})})
            .then((res)=>{
                return(res.text())
            }).then((res)=>{console.log(res)})
    })
})
