if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded',ready)
}else{
    ready()
}

 function ready(){
    var removeCartItem = document.getElementsByClassName('but-remove')
        for(var i=0;i<removeCartItem.length;i++){
        var removebut=removeCartItem[i]
        removebut.addEventListener('click',removeing)
        
    }

    var qtyinput=document.getElementsByClassName('amount')
        for(var i=0;i<qtyinput.length;i++){
        var input=qtyinput[i]
        input.addEventListener('change',qtychange)
    }

    var addtoCart=document.getElementsByClassName('add-cart')
         for(var i=0;i<addtoCart.length;i++){
        var addingCard=addtoCart[i]
        addingCard.addEventListener('click',addtoCartClicked)
     }

     document.getElementsByClassName('check-out')[0].addEventListener('click',purchaseClick)
}


function purchaseClick(){
     alert("Thank you for your order!.Your order will be delivered soon!")
     var foodItems=document.getElementsByClassName('order-wapper')[0]
        while(foodItems.hasChildNodes()){
       foodItems.removeChild(foodItems.firstChild)
      }
     cartTotalUpdate() 
}

function qtychange(event){
    var input=event.target
    if(isNaN(input.value) || input.value <= 0){
        input.value=1
    }
    cartTotalUpdate()
}

function removeing(event){
    var buttonClicked = event.target
        buttonClicked.parentElement.parentElement.remove()
        cartTotalUpdate()
}

function cartTotalUpdate(){
        var cardContainer = document.getElementsByClassName('order-wapper')[0]
        var orderCard=cardContainer.getElementsByClassName('order-card')
        var total=0
        var tex=0
        var finaltotal=0
        for(var i=0;i<orderCard.length;i++){
            var cardRow=orderCard[i]
            var foodPrice=cardRow.getElementsByClassName('order-price')[0]
            var quantity=cardRow.getElementsByClassName('amount')[0]
            var price=parseFloat(foodPrice.innerText.replace('MMK',''))
            var qty=quantity.value
            total=total+(price*qty)
            tex=0.1*total
            finaltotal=total+tex+2500
        }
        total=Math.round(total*100)/100
        document.getElementsByClassName('sub-total')[0].innerText=total + " MMK"
        document.getElementsByClassName('tax')[0].innerText=tex + " MMK"
        var food_price=document.getElementsByClassName('total-price')[0].innerText=finaltotal + " MMK"
}

function addtoCartClicked (event){
     var button=event.target
     var fooditem=button.parentElement.parentElement.parentElement
     var message=fooditem.getElementsByClassName('card-info')[0].innerText
     var food_price=fooditem.getElementsByClassName('food-price')[0].innerText
     var imageSrc=fooditem.getElementsByClassName('card-img')[0].src
     addFoodtoCart(imageSrc,message,food_price)
     cartTotalUpdate()
}

function addFoodtoCart(imageSrc,message,food_price){
    var createRow=document.createElement('div')
    createRow.classList.add('order-card')
    var orderCard=document.getElementsByClassName('order-wapper')[0]
    var cardimage=orderCard.getElementsByClassName('order-img')
    for(var i=0;i<cardimage.length;i++){
        if(cardimage[i].src==imageSrc){
            alert("This item already added to the cart!")
            return 
        }
    }
    var cardContent=`<img src="${imageSrc}" class="order-img">
        <div class="order-detail">
        <p>${message}</p>
        <i class="fas fa-times"></i><input class="amount" type="text" value="1">
        <button class="but-remove">remove</button>
        </div>
        <h4 class="order-price">${food_price}</h4>`
        createRow.innerHTML=cardContent
        orderCard.append(createRow)
        createRow.getElementsByClassName('but-remove')[0].addEventListener('click',removeing)
        createRow.getElementsByClassName('amount')[0].addEventListener('change',qtychange)

}