<p>Include pre footer scripts here</p>

<footer>

    <img src="<?=  $logo_large; ?>" alt="">

    <h5>Site Navigation</h5>
    <ul>
        <?php foreach($page_navigation as $nav){ ?>
                
            <li><a href="<?=  $nav["nav_link"];  ?>"><?=  $nav["nav_title"];  ?></a></li>

        <?php } ?>
    </ul>

    <p>© <?=  $copyright_details; ?> Made by <a href="<?=  $designer_address; ?>" target="_blank" rel="noopener noreferrer"><?=  $designer; ?></a> ☻</p>

</footer>
</body>
</html>