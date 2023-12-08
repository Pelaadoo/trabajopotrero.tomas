const buttons = document.querySelectorAll('.buy-button');

buttons.forEach(button => {
  button.addEventListener('click', () => {
    // Aquí puedes agregar la lógica para el evento de click en el botón de comprar
    // Por ejemplo, podrías mostrar un mensaje, redirigir a otra página, etc.
    alert('¡Producto agregado al carrito!');
  });
});
