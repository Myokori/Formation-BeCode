/* 
// WRITE YOUR JAVASCRIPT BELOW THIS COMMENT 
Your name :     
Date :  
Contact information : 
What does this script do ? 
...
*/

// Your scripting goes here...

// Graphique Live (01)

let graph01 = document.createElement("div");
graph01.setAttribute("id", "graph01");
let child = document.getElementById("mw-content-text")
let parentDiv = child.parentNode;
parentDiv.insertBefore(graph01, child);

let svg = dimple.newSvg("#graph01", 590, 400);
function updateChart(){
  let datatab = [];
  async function getData(){
      let response = await fetch ('https://inside.becode.org/api/v1/data/random.json');
      let data = await response.json()
      return data;
    }
    
    getData()
    .then ((data )=> {
        for (let i in data){
          datatab.push({"Année":data[i][0], "Taux de criminalité":data[i][1]});
        }
        let chart = new dimple.chart(svg, datatab);
        chart.addCategoryAxis("x", "Année");
        chart.addMeasureAxis("y", "Taux de criminalité");
        chart.addSeries(null, dimple.plot.bar);
        chart.draw();
        setTimeout(function(){
          chart.svg.selectAll("*").remove();
          updateChart();
        }, 2000);
      })
}
updateChart()


// Graphique 02 //

let graph02 = document.createElement("div");
graph02.setAttribute("id", "graph02");
let child2 = document.getElementById("table1")
let parentDiv2 = child2.parentNode;
parentDiv2.insertBefore(graph02, child2);

let table01 = document.getElementById('table1')
let data02 = [];
let tableData01 = [];
let tableTd01 = table01.querySelectorAll("td")
for (let i=0; i<tableTd01.length;i++){
  tableData01.push(tableTd01[i].innerHTML);
}

for (let i=0; i<tableData01.length;i+=12){
  data02.push({"Pays":tableData01[i].replace(/:/g, "0"),
                    "Infractions":tableData01[i+1].replace(/:/g, "0"),
                    "Infractions2":tableData01[i+2].replace(/:/g, "0"),
                    "Infractions3":tableData01[i+3].replace(/:/g, "0"),
                    "Infractions4":tableData01[i+4].replace(/:/g, "0"),
                    "Infractions5":tableData01[i+5].replace(/:/g, "0"),
                    "Infractions6":tableData01[i+6].replace(/:/g, "0"),
                    "Infractions7":tableData01[i+7].replace(/:/g, "0"),
                    "Infractions8":tableData01[i+8].replace(/:/g, "0"),
                    "Infractions9":tableData01[i+9].replace(/:/g, "0"),
                    "Infractions10":tableData01[i+10].replace(/:/g, "0"),
                    "Infractions11":tableData01[i+11].replace(/:/g, "0")});
}

let svg02 = dimple.newSvg("#graph02", 855, 700);
let chart02 = new dimple.chart(svg02, data02);
chart02.setBounds(60, 25, 800, 500);
let x01 = chart02.addCategoryAxis("x", "Pays");
x01.addOrderRule("Pays");
let y1 = chart02.addMeasureAxis("y", "Infractions");
let s1 = chart02.addSeries("2002",  dimple.plot.bubble, [x01, y1]);
for (let i=2; i<12 ; i++){
    let y$i1 = chart02.addMeasureAxis("y", `Infractions${i}`);
    let s$i1 = chart02.addSeries(2001+i, dimple.plot.bubble, [x01, y$i1]);
    s$i1.interpolation = "cardinal";
}
chart02.addLegend(120, 10, 800, 10, "left");
chart02.draw();

// Graphique 03 //

let graph03 = document.createElement("div");
graph03.setAttribute("id", "graph03");
let child3 = document.getElementById("table2")
let parentDiv3 = child3.parentNode;
parentDiv2.insertBefore(graph03, child3);

let table02 = document.getElementById('table2')
let data03 = [];
let tableData02 = [];
let tableTd02 = table02.querySelectorAll("td")
for (let i=0; i<tableTd02.length;i++){
  tableData02.push(tableTd02[i].innerHTML);
}

for (let i=0; i<tableData02.length;i+=3){
  data03.push({"Pays":tableData02[i], "Population carcérale":tableData02[i+1], "Population carcérale2":tableData02[i+2]});
}

let svg03 = dimple.newSvg("#graph03", 570, 400);
  let chart03 = new dimple.chart(svg03, data03);
  chart03.setBounds(60, 30, 510, 305)
  let x2 = chart03.addCategoryAxis("x", "Pays");
  x2.addOrderRule("Pays");
  let y01 = chart03.addMeasureAxis("y", "Population carcérale");
  let y02 = chart03.addMeasureAxis("y", "Population carcérale2");
  chart03.addSeries("2010 - 2012", dimple.plot.bubble, [x2, y02]);
  chart03.addSeries("2007 - 2009", dimple.plot.bubble, [x2, y01]);
  chart03.addLegend(60, 10, 510, 20, "right");
  chart03.draw();