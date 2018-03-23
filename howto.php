<!doctype html>
<html>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width initial-scale=1'>
    <title> Far Nothing | How Not to Visualize Data </title>
</head>

<body>    <?php include("nav.html");?>
    <div id='write' class='is-mac'>
        <h1>How <em>Not</em> to Visualize Data</h1>
        <h3>Part One: From the Kiddie Pool to the Open Ocean</h3>
        <h4>Step One: Dreamin&#39;</h4>
        <p>The first step to any (un)sucessful data visualization it to have an idea. While movie montages and book briefings suggest that inspiration will strike when you least expect it—one moment you&#39;re washing the dishes with an idea so bland zombies wouldn&#39;t even be interested in eating your brain, and the next it&#39;s as if you&#39;ve consumed a Mario Kart starpower power-up and are radiating sunshine and rainbows—reality doesn&#39;t always function the same way. </p>
        <p>Translation? Coming up with a vision is sometimes the hardest part. </p>
        <p>But that&#39;s okay. Really. What hollywood does get right is that once you&#39;ve found it, that perfect idea, you&#39;ll just know. Once you have this glorious idea, its best to write it down, or attempt to sketch it out, because there is nothing worse that forgetting your golden nugget.</p>
        <p>Once this is complete, you&#39;ll look down at the paper and you&#39;ll probably be frustrated. No matter how hard you try to accurately represent this beautiful idea of yours on a 2-D plane it never seems to come out just quite like you were hoping it would. This is normal and to be expected, and I&#39;m right there with you. I&#39;ve spent countless hours (probably around 6 hours ±1) and sheets of paper attempting to replicate the vision of what this project looks like in my head. Once you&#39;ve given up (see appendix A for an analysis of how long it takes you to give up and its correlation to how creative you are) you are officially ready to begin step two.</p>
        <h4>Step Two: Executing your Dreams</h4>
        <p>One you have your idea (relatively) solid, you can begin to work on attempting to figure out how on Earth to execute this dream. </p>
        <p>If you&#39;re going to be visualizing data digitally, it&#39;s <del>best</del> worst to start reading blog posts about best practices and then just right in with a simple tutorial. After completeing said tutorials you will most likely be feeling very accomplished and ready to take on your project like one of the professionals. The only problem is, <strong>where the hell do you start?</strong> </p>
        <p>In a(n) (non)ideal world, it is best to follow the following steps to ensure that you&#39;re on the right track:</p>
        <ol>
            <li>sketch visualization</li>
            <li>gather data (and document sources)</li>
            <li>freak out </li>
            <li>re-watch the tutorial and try to follow along with your own data</li>
            <li>read stack-overflow</li>

        </ol>
        <p>Once you&#39;ve mastered these basic steps, there is only one last thing to do:</p>
        <ol start='6'>
            <li><strong>hang your dreams like 13th century Britain hung pirates</strong></li>

        </ol>
        <p>Perfect! At this point you should be able to follow along with the rest of this guide since you have accepted the fact that the beautiful visualizations featured on websites like <a href='pudding.cool'>pudding.cool</a> and <a href='flowingdata.com'>flowingdata.com</a> are done by professionals who have gone to college for this shirt, and have literally (and figuratively) spent years learning how to artfully manipuate giant-ass excel spreadsheets.</p>
        <p>&nbsp;</p>
        <hr />
        <p>&nbsp;</p>
        <h3>Part Two: The <del>Terminator</del> Terminal</h3>
        <h4>Step One: Prerequisites</h4>
        <i>
        Please Note: All code is done on a mac computer, for those using PC, it is reccomended that you look elsewhere for tutorials. Sorry.
    </i>
        <h4>Step Two: Behind the Green Curtain </h4>
        <p>To access your directory (folder) where you will be keeping all of your files relevant to your data visualization project, open the terminal (command prompt/scary black box that pops up on start up sometimes) and type: </p>
        <pre><code class='language-shell' lang='shell'>cd Code #Code = name of directory
</code></pre>
        <p>Assuming, access the folder that contains the project. To do so, enter the following in the terminal:</p>
        <pre><code class='language-shell' lang='shell'>cd privilege #privilege = name of folder inside &#39;Code&#39;
</code></pre>
        <p>The virtual enviornment is then activated by the following command:</p>
        <pre><code class='language-shell' lang='shell'>source bin/activate
</code></pre>
        <p>Assuming that both <code>pip</code> and <code>jupyter</code> are already installed, the browser interface can be started from the terminal by entering:</p>
        <pre><code class='language-shell' lang='shell'>jupyter notebook
</code></pre>
        <p>To close the jupyter notebook hit <code>Ctrl-C</code> and then <code>y</code> to tell the terminal that you are ineed wanting to close the connection.</p>
    </div>
</body>

</html>
