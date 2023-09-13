window.addEventListener('DOMContentLoaded', (event) => {
    const input = document.getElementById('myInput');
    const modal = document.getElementById('myModal');
    const closeBtn = document.getElementsByClassName('close')[0];
  
    input.addEventListener('focus', function() {
      modal.style.display = 'block';
    });
  
    closeBtn.addEventListener('click', function() {
      modal.style.display = 'none';
    });
  
    window.addEventListener('click', function(event) {
      if (event.target === modal) {
        modal.style.display = 'none';
      }
    });
  });
  