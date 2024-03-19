document.addEventListener("DOMContentLoaded", function() {
  const rangeInput = document.getElementById('evaluation');
  const output = document.getElementById('evaluationOutput');

  rangeInput.addEventListener('input', function() {
    let value = rangeInput.value;

    switch (value) {
      case '1':
        output.textContent = '😢';
        break;
      case '2':
        output.textContent = '😔';
        break;
      case '3':
        output.textContent = '😐';
        break;
      case '4':
        output.textContent = '😊';
        break;
      case '5':
        output.textContent = '😃';
        break;
      default:
        output.textContent = '😐';
        break;
    }
  });
});
