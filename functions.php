<?php

add_action('admin_menu', 'scraping_menu');

function scraping_menu() {

    add_menu_page(
        'Scrape Scrape',
        'Scrape Cars',
        'edit_posts',
        'scrape_cars',
        'scraping_tool_for_bringatrailer_com',
        'dashicons-insert'

    );
}

