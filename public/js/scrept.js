document.addEventListener('DOMContentLoaded', function() {
    var count = 1;
  
    var increaseButton = document.getElementById('increase');
    var decreaseButton = document.getElementById('decrease');
    var countDisplay = document.getElementById('count');
  
    increaseButton.onclick = function() {
      count++;
      countDisplay.textContent = count;
    };
  
    decreaseButton.onclick = function() {
      if (count > 0) {
        count--;
        countDisplay.textContent = count;
      }
    };
  });
  