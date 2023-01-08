<?php

add_action('admin_menu', 'scraping_menu');

function scraping_menu(): void {
    add_menu_page(
        'Scrape Scrape',
        'Scrape Cars',
        'edit_posts',
        'scrape_cars',
//     'scraping_tool_for_bringatrailer_com',
        'what_to_scrape',
        'dashicons-insert',
        'center'
    );
}

function what_to_scrape(){
    echo "<h1>Hello World!</h1><form action='action.php' method='post'><p><label>Enter a URL:<input type='text' name='URL'></label></p><p><input type='submit'></p></form>";
}