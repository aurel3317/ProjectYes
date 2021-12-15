<html>
<head>
	<title>test</title>
	<meta charset="UTF-8"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

    <!-- <nav>
        <ul>
            <li><a href="test2(java).js">GRAPH</a></li>
        </ul>
    </nav> -->
    <div>
    <div style="text-align: center;"><img src="pmc.png" width="450" height="200" /></div>
    <h1 style="text-align: center;font-size: 150%; font-weight: bold;"> PMC OUVRIE</h1>

	<h1  style="text-align: center; color: red; padding: 15px; border:3px,solid,black;">On recupere les donnees</h1>
    </div>
    <form>
    <div id="donnee">  
    <?php 
    echo "Debit d entree :".$text."L/h"?>
    </div>
    <div id="date">
    <?php

        echo "<p align 'center'> Today is ". date(). "</p>";
        
    ?>

    </div>

    <div id="graph">
        
    </div>

    <div id="historique">
         
    </div>
      

    
</form>
	
</body>
</html>

<script type="text/javascript">
    async function update(){ var ret
    await fetch('http://192.168.43.193:8888/API').then(response=>response.json()).then(data=>(ret = data));
    $("#donnee").replaceWith("<div id='donnee'>Debit d entree :"+ret+" L/h</div>");}
    
    let interval=async()=>{
    await setInterval(update,10000);}
    interval();


</script>

<script type="text/javascript">
    async function updat(){ 
    let temps = Date();
    $("#date").replaceWith("<div id='date'> Today is "+temps+"</div>");}
    
    let interval2=async()=>{
    await setInterval(updat,1000);}
    interval2();


</script>

<!-- <script type="text/javascript">

    var lesx =[];
    var lesy =[];
    async function update2(){ var lesx
    await fetch('http://192.168.43.193:8888/API').then(response=>response.json()).then(data=>(lesx = data));
    $("#graph").replaceWith("<div id ='graph'>"lesx"</div>");}
    
    let interval3=async()=>{
    await setInterval(update2,10000);}
    interval3();


</script> -->
<!-- <script type="text/javascript">
     async function update(){ var rete
    await fetch('http://192.168.43.193:8888/API').then(response=>response.json()).then(data=>(rete = data));
    
    
    let interval4=async()=>{
    await setInterval(update,10000);}
    interval4();

    async function data() {
        var list = [];
        list.push({
          y: 'Today',
          a: 'rete'
        });
      return ret;
    }

    
    var graph = Morris.Bar({
        element: 'graph',
        data: data(),
        xkey: 'y',
        ykeys: ['a'],
        labels: ['random label']
    });

    let interval5=async()=>{
    await setInterval(data,10000);}
    interval5();
</script>
 -->

<!-- <script type="text/javascript">$(document).ready( function () {
  var data = []; // data is empty
  var graph = Morris.Bar({
    element: 'graph',
    data: data,
    labels: ['random label']
  });
function update () {
    $.getJSON( "data.php", function (newv) {
      data.push( { x: newv, y: "Today" } ); // store new value
      graph.setData( data );                // update the graph
    });
  }

  update();
  setInterval( update, 1000 );
});
</script> -->