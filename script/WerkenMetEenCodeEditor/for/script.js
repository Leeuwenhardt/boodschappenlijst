const boeken = [
    { titel: "De Da Vinci Code", prijs: 12.99 },
    { titel: "Het Diner", prijs: 9.99 },
    { titel: "Hersenschimmen", prijs: 7.99 },
    { titel: "Het Achterhuis", prijs: 10.99 }
];

let totaalPrijs = 0;

for (let boek of boeken) {
    totaalPrijs += boek.prijs;
}

console.log(`De totale prijs van alle boeken is: €${totaalPrijs.toFixed(2)}`);

const studenten = [
    { naam: "Jan", cijfers: [7, 8, 6, 9] },
    { naam: "Piet", cijfers: [9, 7, 8, 6] },
    { naam: "Klaas", cijfers: [6, 5, 7, 8] },
    { naam: "Marieke", cijfers: [8, 9, 7, 8] }
];

