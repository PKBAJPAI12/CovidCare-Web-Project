fetch('https://api.rootnet.in/covid19-in/stats/latest')
.then((res)=>
    res.json()
).then((mydata)=>{
  var tables=document.getElementById('table');
  var actives=document.getElementById('active');
  var dischargeds=document.getElementById('discharged');
  var deaths=document.getElementById('death');
  actives.innerHTML=mydata.data.summary.confirmedCasesIndian-
  mydata.data.summary.discharged-
  mydata.data.summary.deaths;
  dischargeds.innerHTML=mydata.data.summary.discharged;
  deaths.innerHTML=mydata.data.summary.deaths;
for(var i=1; i<=36; i++){
         var rows=table.insertRow();
         rows.insertCell(0); 
         tables.rows[i].cells[0].innerHTML=i;
         tables.rows[i].cells[0].style.background='#e2e3e5';
         tables.rows[i].cells[0].style.color='#000';

         rows.insertCell(1);
         tables.rows[i].cells[1].innerHTML=mydata.data.regional[i-1].loc; 
         tables.rows[i].cells[1].style.background='#d1ecf1';

         rows.insertCell(2);
         tables.rows[i].cells[2].innerHTML=mydata.data.regional[i-1].confirmedCasesIndian-
                                      mydata.data.regional[i-1].discharged-
                                      mydata.data.regional[i-1].deaths; 
         tables.rows[i].cells[2].style.background='#fff3cd';

         rows.insertCell(3);
         tables.rows[i].cells[3].innerHTML=mydata.data.regional[i-1].discharged; 
         tables.rows[i].cells[3].style.background='#d4edda';

         rows.insertCell(4);
         tables.rows[i].cells[4].innerHTML=mydata.data.regional[i-1].deaths; 
         tables.rows[i].cells[4].style.background='#f8d7da';

            
}

})


fetch('https://api.rootnet.in/covid19-in/hospitals/beds')
.then((data)=>data.json())
.then((getdata)=>{
var gettables=document.getElementById('table1');
var a=document.getElementById('th');
var b=document.getElementById('tb');
var c=document.getElementById('rh');
var d=document.getElementById('uh');
a.innerHTML=getdata.data.summary.totalHospitals;
b.innerHTML=getdata.data.summary.totalBeds;
c.innerHTML=getdata.data.summary.ruralHospitals;
d.innerHTML=getdata.data.summary.urbanHospitals;
for(var i=1; i<getdata.data.regional.length; i++){
    var x=gettables.insertRow();
    x.insertCell(0);
    gettables.rows[i].cells[0].innerHTML=i;
    gettables.rows[i].cells[0].style.background='#e2e3e5';

    x.insertCell(1);
    gettables.rows[i].cells[1].innerHTML=getdata.data.regional[i-1].state;
    gettables.rows[i].cells[1].style.background='#d1ecf1';

    x.insertCell(2);
    gettables.rows[i].cells[2].innerHTML=getdata.data.regional[i-1].totalHospitals;
    gettables.rows[i].cells[2].style.background='#d4edda';

    x.insertCell(3);
    gettables.rows[i].cells[3].innerHTML=getdata.data.regional[i-1].totalBeds;
    gettables.rows[i].cells[3].style.background='#fff3cd';

}
})