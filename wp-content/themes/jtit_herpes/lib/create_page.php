<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 22.12.2016
 * Time: 15:08
 */

//$post = array(
//    'ID' => [ <post id> ] //Are you updating an existing post?
//  'menu_order' => [ <order> ] //If new post is a page, sets the order should it appear in the tabs.
//  'page_template' => [ <template file> ] //Sets the template for the page.
//  'comment_status' => [ 'closed' | 'open' ] // 'closed' means no comments.
//  'ping_status' => [ ? ] //Ping status?
//  'pinged' => [ ? ] //?
//  'post_author' => [ <user ID> ] //The user ID number of the author.
//  'post_category' => [ array(<category id>, <...>) ] //Add some categories.
//  'post_content' => [ <the text of the post> ] //The full text of the post.
//  'post_date' => [ Y-m-d H:i:s ] //The time post was made.
//  'post_date_gmt' => [ Y-m-d H:i:s ] //The time post was made, in GMT.
//  'post_excerpt' => [ <an excerpt> ] //For all your post excerpt needs.
//  'post_name' => [ <the name> ] // The name (slug) for your post
//  'post_parent' => [ <post ID> ] //Sets the parent of the new post.
//  'post_password' => [ ? ] //password for post?
//  'post_status' => [ 'draft' | 'publish' | 'pending' ] //Set the status of the new post.
//  'post_title' => [ <the title> ] //The title of your post.
//  'post_type' => [ 'post' | 'page' ] //Sometimes you want to post a page.
//  'tags_input' => [ '<tag>, <tag>, <...>' ] //For tags.
//  'to_ping' => [ ? ] //?
//);

// Insert the post into the database

function view($path){

    ob_start();
    require_once get_template_directory().'/'.$path;
    return ob_get_clean();
}




/**
 * herpes page
 */
if(!get_page_by_title('HERPES')){
    $post = array(
//    'ID' => '1000',
        'post_title' => 'HERPES',
        'menu_order' => '',
        'page_template' => 'Home page',
        'post_type' => 'page',
        'post_status' => 'publish',
        'post_content' => $herpes = view('herpes_testing.php'),
//        'post_content' => 'some content',
        'post_name' => 'herpes'
    );

    wp_insert_post( $post );
}

/**
 * chlamydia_testing
 */
if(!get_page_by_title('CHLAMYDIA')){
    $post = array(
//    'ID' => '1000',
        'post_title' => 'CHLAMYDIA',
        'menu_order' => '',
        'page_template' => 'Home page',
        'post_type' => 'page',
        'post_status' => 'publish',
        'post_content' => $chlamydia = view('chlamydia_testing.php'),
//        'post_content' => 'some content',
        'post_name' => 'chlamydia'
    );

    wp_insert_post( $post );
}

/**
 * find_a_lab
 */
if(!get_page_by_title('FIND A LAB')){
    $post = array(
//    'ID' => '1000',
        'post_title' => 'FIND A LAB',
        'menu_order' => '',
        'page_template' => 'Home page',
        'post_type' => 'page',
        'post_status' => 'publish',
        'post_content' => $find_a_lab = view('find_a_lab.php'),
        'post_name' => 'find_a_lab'
    );

    wp_insert_post( $post );
}


/**
 * find_a_lab
 */
if(!get_page_by_title('FIND A LAB')){
    $post = array(
//    'ID' => '1000',
        'post_title' => 'FIND A LAB',
        'menu_order' => '',
        'page_template' => 'Home page',
        'post_type' => 'page',
        'post_status' => 'publish',
        'post_content' => $find_a_lab = view('find_a_lab.php'),
        'post_name' => 'find_a_lab'
    );

    wp_insert_post( $post );
}



/**
 * gonorrhea_testing
 */
if(!get_page_by_title('GONORRHEA')){
    $post = array(
//    'ID' => '1000',
        'post_title' => 'GONORRHEA',
        'menu_order' => '',
        'page_template' => '',
        'post_type' => 'page',
        'post_status' => 'publish',
        'post_content' => $gonorrhea = view('gonorrhea_testing.php'),
        'post_name' => 'gonorrhea'
    );

    wp_insert_post( $post );
}


/**
 * hepatitis_testing
 */
if(!get_page_by_title('HEPATITIS')){
    $post = array(
//    'ID' => '1000',
        'post_title' => 'HEPATITIS',
        'menu_order' => '',
        'page_template' => '',
        'post_type' => 'page',
        'post_status' => 'publish',
        'post_content' => $hepatitis = view('hepatitis_testing.php'),
        'post_name' => 'hepatitis'
    );

    wp_insert_post( $post );
}

/**
 * how_it_works
 */
if(!get_page_by_title('HOW IT WORKS')){
    $post = array(
//    'ID' => '1000',
        'post_title' => 'HOW IT WORKS',
        'menu_order' => '',
        'page_template' => '',
        'post_type' => 'page',
        'post_status' => 'publish',
        'post_content' => $home_page = view('how_it_works.php'),
        'post_name' => 'how_it_works'
    );

    wp_insert_post( $post );
}


/**
 * syphilis_testing
 */
if(!get_page_by_title('SYPHILIS')){
    $post = array(
//    'ID' => '1000',
        'post_title' => 'SYPHILIS',
        'menu_order' => '',
        'page_template' => '',
        'post_type' => 'page',
        'post_status' => 'publish',
        'post_content' => $syphilis = view('syphilis_testing.php'),
        'post_name' => 'syphilis_testing'
    );

    wp_insert_post( $post );
}


/**
 * why_us
 */
if(!get_page_by_title('WHY US')){
    $post = array(
//    'ID' => '1000',
        'post_title' => 'WHY US',
        'menu_order' => '',
        'page_template' => '',
        'post_type' => 'page',
        'post_status' => 'publish',
        'post_content' => $why_us = view('why_us.php'),
        'post_name' => 'why_us'
    );

    wp_insert_post( $post );
}

/**
 * home_page
 */
if(!get_page_by_title('HOME PAGE')){
    $post = array(
//    'ID' => '1000',
        'post_title' => 'HOME PAGE',
        'menu_order' => '',
        'page_template' => '',
        'post_type' => 'page',
        'post_status' => 'publish',
        'post_content' => $why_us = view('home_page.php'),
        'post_name' => 'home_page'
    );

    wp_insert_post( $post );
}


/**
 * get_tested_now
 */
if(!get_page_by_title('GET TESTED NOW')){
    $post = array(
//    'ID' => '1000',
        'post_title' => 'GET TESTED NOW',
        'menu_order' => '',
        'page_template' => '',
        'post_type' => 'page',
        'post_status' => 'publish',
        'post_content' => $why_us = view('get_tested_now.php'),
        'post_name' => 'get_tested_now'
    );

    wp_insert_post( $post );
}

/**
 * tests_and_pricing
 */
if(!get_page_by_title('TESTS AND PRICING')){
    $post = array(
//    'ID' => '1000',
        'post_title' => 'TESTS AND PRICING',
        'menu_order' => '',
        'page_template' => '',
        'post_type' => 'page',
        'post_status' => 'publish',
        'post_content' => $why_us = view('tests_and_pricing.php'),
        'post_name' => 'tests-and-pricing'
    );

    wp_insert_post( $post );
}


/**
 * terms_of_service
 */
if(!get_page_by_title('TERMS OF SERVICE')){
    $post = array(
//    'ID' => '1000',
        'post_title' => 'TERMS OF SERVICE',
        'menu_order' => '',
        'page_template' => '',
        'post_type' => 'page',
        'post_status' => 'publish',
        'post_content' => $why_us = view('terms_of_service.php'),
        'post_name' => 'terms-of-service'
    );

    wp_insert_post( $post );
}

if(!get_page_by_title('DESCRIPTION OF THE LAB')){
    $post = array(
//    'ID' => '1000',
        'post_title' => 'DESCRIPTION OF THE LAB',
        'menu_order' => '',
        'page_template' => '',
        'post_type' => 'page',
        'post_status' => 'publish',
        'post_content' => $why_us = view('description_of_the_lab.php'),
        'post_name' => 'description_of_the_lab'
    );

    wp_insert_post( $post );
}






