function copyText() {
  var text = document.getElementById('text-to-copy').innerText; // Используйте innerText вместо innerHTML

  var tempInput = document.createElement('input');
  tempInput.setAttribute('value', text);
  document.body.appendChild(tempInput);
  tempInput.select();
  document.execCommand('copy');
  document.body.removeChild(tempInput);

  var copiedMessage = document.getElementById('copied-message');
  copiedMessage.style.display = 'block';

  setTimeout(function() {
    copiedMessage.style.display = 'none';
  }, 3000);
}