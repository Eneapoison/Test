//while 
let x = 0;
while (x >= 0 && x <= 10) {
    console.log(x);
    x++;
}
//do while
do {
    console.log(x);
} while (x < 10);


let check = true;

while (check) {
    console.log("Forza Roma");
    if (x >= 20) {
        check = false;
    }
    x++;
}

let y = 0;
while (y < 10) {
    y++;
    console.log("iterazione: " + y);
    if (y > 3) {
        break;
    }
    console.log(y);
}
