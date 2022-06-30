const cardsBlock = document.querySelector('.cards');
const cards = document.querySelectorAll('.cards > div');
const [startBtn] = document.getElementsByClassName('start');
const [ticketsNum] = document.getElementsByClassName('ticketsNum');
const [ticketsShopBtn] = document.getElementsByClassName('ticketsShop');

const prizes = [];
const num = localStorage.getItem('tickets');
const tickets = JSON.parse(num);
let userTickets = parseInt(tickets == null ? 0 : tickets);

ticketsNum.style.color = 'white';
ticketsNum.innerText = userTickets;

function start() {
  if (userTickets == 0) {
    alert('Вы не можете начать игру без токенов');
  } else {
    userTickets--;
    ticketsNum.innerText = userTickets;
    startBtn.disabled = true; // стилизация кнопки в состояние неактивности нужно добавить в css
    var random = Math.floor(Math.random() * (cards.length - 1)); // От 0 до 8
    cardsBlock.style.left = -random * 100 + 'px';
    setTimeout(function () {
      random++;
      cards[random].style.background = 'black';
      cards[random].style.color = 'white';
      prizes.push(cards[random].innerText);
      const jsonArr = JSON.stringify(prizes);
      localStorage.setItem('prizes', jsonArr);
      localStorage.setItem('tickets', userTickets);
      startBtn.disabled = false;
    }, 5000);
  }
}

function buyTicket(num) {
  userTickets += num;
  ticketsNum.innerText = userTickets;
  localStorage.setItem('tickets', userTickets);
}
