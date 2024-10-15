const metodopago = "tarjeta";

switch (metodopago) {
    case "efectivo":
        console.log("Pagaste con efectivo");
        break;
    case "tarjeta":
        console.log("Pagaste con tarjeta");
        break;
    case "cheque":
        console.log("Pagaste con cheque");
        break;
    default:
        console.log("No pagaste");
        break;
}