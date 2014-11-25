<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Continuing with jQuery</title>
        <meta name="description" content="An interactive getting started guide for Edge Code CC.">
        <link rel="stylesheet" href="styles/css/main.css">
    </head>
    
    <body>
        
        <?php include('include/header.inc.php'); ?>
        <Section class="dynamic">
            <article class="post part1">
                <h2 class="post-title">This is the first heading</h2>
                <p class="post-body">The .fadeToggle() method animates the opacity of the matched elements. When called on a visible element, the element's display style property is set to none once the opacity reaches 0, so the element no longer affects the layout of the page.<br>
        
        Durations are given in milliseconds; higher values indicate slower animations, not faster ones. The strings 'fast' and 'slow' can be supplied to indicate durations of 200 and 600 milliseconds, respectively.</p>
            </article>
            
            <article class="post part2">
                <h2 class="post-title">This is the second heading</h2>
                <p class="post-body">The .fadeToggle() method animates the opacity of the matched elements. When called on a visible element, the element's display style property is set to none once the opacity reaches 0, so the element no longer affects the layout of the page.<br>
        
        Durations are given in milliseconds; higher values indicate slower animations, not faster ones. The strings 'fast' and 'slow' can be supplied to indicate durations of 200 and 600 milliseconds, respectively.</p>
            </article>
            
            <a href="content/content.inc">See more</a>

        </Section>
    
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>