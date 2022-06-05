/*
1. create a table. 
2. append the table to the particular div in html.
3. create a tr.
4. create list of th and assign the title to each header.
5. making an array with key and map for each created element in the content.
6. using array to create the table content.
*/
//DOM methods->createElement(), appendChild(), getElementById() 
//cretaeElement() creates an element node.
let table = document.createElement('table');
//adding entire table to the body tag 
//getElementById()-> returns the element that has the ID attribute with the specific value 
//appendChild()-> append an item to a list (e.g. item.appendChild(list) )
document.getElementById('myTable').appendChild(table);
let row_1 = document.createElement('tr');
let heading_1 = document.createElement('th');
//innerHTML() -> assign the HTML content of an element with id th to "No."
heading_1.innerHTML = 'No.';
let heading_2 = document.createElement('th');
heading_2.innerHTML = 'Room ID';
let heading_3 = document.createElement('th');
heading_3.innerHTML = "lecturer ID";
let heading_4 = document.createElement('th');
heading_4.innerHTML = "Booking Date";
let heading_5 = document.createElement('th');
heading_5.innerHTML = "Starting Time";
let heading_6 = document.createElement('th');
heading_6.innerHTML = "Ending Time";

row_1.appendChild(heading_1);
row_1.appendChild(heading_2);
row_1.appendChild(heading_3);
row_1.appendChild(heading_4);
row_1.appendChild(heading_5);
row_1.appendChild(heading_6);
table.appendChild(row_1);

let myArray= [
    {room_id:'R51',lect_id:'L0030',date:'05/07/22',start:'1000',end:'1200'},
    {room_id:'Z22',lect_id:'L0044',date:'20/07/22',start:'1500',end:'1700'},
    {room_id:'R30',lect_id:'L0021',date:'30/10/22',start:'2000',end:'2200'},
    {room_id:'A43',lect_id:'L0030',date:'05/10/22',start:'1000',end:'1200'},
];

//creating data
for (let i = 0; i < myArray.length; i++){
    let row = document.createElement('tr');
    data1= document.createElement('td');
    data1.innerHTML = i+1;
    row.appendChild(data1);
    data2=  document.createElement('td');
    data2.innerHTML = myArray[i].room_id;
    row.appendChild(data2);
    data3= document.createElement('td');
    data3.innerHTML = myArray[i].lect_id;
    row.appendChild(data3);
    data4= document.createElement('td');
    data4.innerHTML = myArray[i].date;
    row.appendChild(data4);
    data5 = document.createElement('td');
    data5.innerHTML = myArray[i].start;
    row.appendChild(data5);
    data6= document.createElement('td');
    data6.innerHTML = myArray[i].end;
    row.appendChild(data6);
    table.appendChild(row);
}