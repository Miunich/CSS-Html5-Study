const usuarioAutenticado = new Promise((resolve, reject) => {
  const auth = false;

  if (auth) {
    resolve('Usuario autenticado');
  } else {
    reject('No se pudo iniciar sesión');
  }
});

// console.log(usuarioAutenticado);
usuarioAutenticado
    .then( function(resultado) {
        console.log(resultado);
    })
    .catch( function(error) {
        console.log(error);
    })
    .then(resultado => console.log(resultado)); // Arrow  function

// En los Promises existen 3 valores
// Pending: No se ha cumplido pero tampoco se ha rechazado
// Fulfilled: Ya se cumplió
// Rejected: Se ha rechazado o no se pudo cumplir