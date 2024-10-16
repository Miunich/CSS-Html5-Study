// Async / await

function descargarNuevosClientes(){
    return new Promise(resolve => {
        console.log('Descargando clientes... espere...');
        setTimeout(() => {
            resolve('Los clientes fueron descargados');
        }, 5000);
    });
}

function descargarUltimosPedidos(){
    return new Promise(resolve => {
        console.log('Descargando pedidos... espere...');
        setTimeout(() => {
            resolve('Los Pedidos fueron descargados');
        }, 3000);
    });
}

async function app(){
    try{
        // const clientes = await descargarNuevosClientes();
        // const pedidos = await descargarUltimosPedidos();
        // console.log(clientes)
        // console.log(pedidos)

        const resultado = await Promise.all([descargarNuevosClientes(), descargarUltimosPedidos()]);
        console.log(resultado[0]);//Con esto no se ve como arreglo
        console.log(resultado[1]);

    }catch(error){
        console.log(error);
    }
}

app();

console.log('Este es un mensaje que se muestra en consola'); //Este mensaje no se demora en mostrar en consola, ya que no es una promesa