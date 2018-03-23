<!doctype html>
<html>

<head>
    <title>Far Nothing | Visualization</title>
</head>


<body>
    <?php include("nav.html");?>
    <main class="I" id='write' class='is-mac'>
        <h1>Visualization</h1>
        <ul>
            <li>
                <input type="radio" id="countries" name="region" value="totalpop.json" checked onchange="dataframe(this.value)">
                <label for="countries">Countries</label>
                <div class="check"></div>
            </li>
            <li>
                <input type="radio" id="cont" name="region" value="sevencont.json" onchange="dataframe(this.value)">
                <label for="cont">Continents</label>
                <div class="check">
                </div>
            </li>
            <li>
                <input type="radio" id="income" name="region" value="incomepop.json" onchange="dataframe(this.value)">
                <label for="income">Continents</label>
                <div class="check">
                </div>
            </li>
        </ul>


        <p>If the whole world were reduced to 100 people, how many of them would be from
            <input type='text' name="regioninput" id="continent" list="continents" placeholder='United States of America' onkeyup="selectedpop(this.value);" onclick="this.value=''" onchange="this.style.width = ((this.value.length) * 7) + 20+ 'px';" onkeypress="this.style.width = ((this.value.length +1) * 7) + 25+ 'px';">
            <datalist name="continents" id="continents"> 
            </datalist>?
        </p>
        <span></span>
        </div>


        <script type="text/javascript">
            //create global variables
            var testdata;
            var dataset;
            var cont = 'United States of America';
            var jsonfile = 'totalpop.json';

            viz();

            //create a stick person and loop 'world' times
            var i;
            for (i = 1; i < 100 + 1; i++) {
                d3.select("span")
                    .append("img")
                    .attr("width", 50)
                    .attr("height", 50)
                    .attr("src", "img/man.svg")
                    .attr("class", "totalpop")
            };

            function dataframe(filename) {
                jsonfile = filename;
                if (filename == 'sevencont.json') {
                    cont = 'North America'
                    document.getElementById("continent").style.width = '115px';


                } else if (filename == 'totalpop.json') {
                    cont = 'United States of America';
                    document.getElementById("continent").style.width = '185px';
                } else {
                    cont = 'High-income countries';
                    document.getElementById("continent").style.width = '185px';

                };
                d3.select("datalist").selectAll("option").remove();
                document.getElementById("continent").value = '';
                document.getElementsByName("regioninput")[0].placeholder = cont;
                viz();

            };
            //load JSON file 
            function viz() {
                d3.json(jsonfile, function(data) {

                    //create local variables
                    var contlist = d3.keys(data[0]);
                    var poplist = d3.values(data[0]);
                    testdata = data[0];
                    var world = d3.sum(d3.values(data[0]));
                    dataset = [contlist, poplist];

                    //Create textbox input with suggested options
                    var input = d3.select("datalist");
                    var options = input.selectAll("option")

                        .data(dataset[0])
                        .enter()
                        .append("option");
                    options.text(function(d) {
                            return d;
                        })
                        .attr("value", function(d) {
                            return d;
                        })
                        .data(dataset[1])
                        .attr("data", function(d) {
                            return d;
                        });

                    selectedpop(cont);
                });
            };
            //obtain and write selected continent to console.
            function selectedpop(cont) {
                var continent = (testdata[cont]);
                console.log(continent);
                console.log(cont);
                d3.selectAll("img")
                    .classed("totalpop", true);
                //change color of selected continent's population 
                for (i = 1; i < continent + 1; i++) {
                    d3.selectAll("img").filter("img:nth-child(" +
                            i + ")")
                        .classed("totalpop", false);
                }
            };

        </script>
</body>

</html>
