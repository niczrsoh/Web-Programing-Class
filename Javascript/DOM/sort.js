function sort(){
    var x,y;
    //switching is used to determine whether there is a swicth during the loop so that rearrange is needed.
    var swithing = true;
    while(swithing){
        swithing =false;
        //switched is used to tell whether there is a need to have a switched during the loop.
        var swithed = false;
    for(i=1;i<table.rows.length-1;i++){
        //table from AllLabs.html , get their rows, followed by the item(index) 
        //get the
        x=table.rows.item(i).getElementsByTagName("TD")[1];
        y=table.rows.item(i+1).getElementsByTagName("TD")[1];
        if(x.innerHTML>y.innerHTML){
            swithed= true;
            break;
        }}
    if(swithed){
        table.rows.item(i).parentNode.insertBefore(table.rows.item(i+1), table.rows.item(i));
        swithing = true;
    }}
    //rearrange the number of the table
    for(i=1;i<table.rows.length;i++){
    x=table.rows.item(i).getElementsByTagName("TD")[0];
    x.innerHTML = i;
    }
    }