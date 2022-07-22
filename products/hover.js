var card = document.getElementsByClassName('card');
        var i = 0
        for (let i = 0; i < card.length; i++) {
            card[i].addEventListener('mouseover', () => {

                card[i].classList.add('cardhover');
            });
            card[i].addEventListener('mouseleave', () => {

                card[i].classList.remove('cardhover');
            });
        }