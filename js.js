console.info("Javascript work!");

const pathplus = document.getElementById("plus");
const pathminus = document.getElementById("minus");
const pathinputs = document.getElementById("inputs");
const pathinput = document.getElementById("input");
const pathpluscount = document.querySelectorAll('#pluscount');
const pathminuscount = document.getElementById("#minuscount");
const createnewelement = document.createElement("div");
let clock = 0;
let count = ['1'];

setInterval( () => {
    const pathpluscount = document.querySelectorAll('#pluscount');
}, 100);

pathplus.onclick = function() {
    clock++;
    count.push('1');
    const createnewelement = document.createElement("div");
    createnewelement.innerHTML = '<input id="inpt'+clock+'" type="text" name="type'+clock+'" placeholder="Введи пункт '+clock+'" class="inputform"> <div class="inputcount"><span style="margin-top: 1px">КОЛИЧЕСТВО:</span> <input class="inputcount2" type="text" name="input'+clock+'"></div>';
    inputs.before(createnewelement);
    console.info("Plus clicked");
};

pathminus.onclick = function() {
    try{
        const inpt = document.getElementById("inpt"+clock).parentNode;
        inpt.remove();
        console.info("Minus clicked");
        clock--;
    }
    catch(error) {
        alert("Уже удалено максимум");
    }
};
pathpluscount.onclick = function() {
    try {
        console.info("work");
        count[clock]++;
    } catch (error) {
        console.info("err");
    }
}
