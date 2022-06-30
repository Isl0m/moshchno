const [dountNum] = document.getElementsByClassName('dountNum');
const [halfDountNum] = document.getElementsByClassName('halfDountNum');

const str = localStorage.getItem('prizes');
const prizes = JSON.parse(str);

dountNum.innerText = getNum('Пончик');
halfDountNum.innerText = getNum('Половина Пончика');

function getNum(str) {
  const filterdArr = prizes.filter((value) => {
    return value == str;
  });
  return filterdArr.length;
}
