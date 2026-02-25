<?php
/**
 * SAKAZUKI Theme Functions
 */

// ===== Theme Setup =====
function sakazuki_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    register_nav_menus(array(
        'primary' => 'メインメニュー',
        'footer'  => 'フッターメニュー',
    ));
}
add_action('after_setup_theme', 'sakazuki_setup');

// ===== Enqueue Styles & Scripts =====
function sakazuki_enqueue() {
    // Google Fonts
    wp_enqueue_style('google-fonts-anuphan', 'https://fonts.googleapis.com/css2?family=Anuphan:wght@400;500;600;700&display=swap', array(), null);
    wp_enqueue_style('material-icons', 'https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined', array(), null);

    // Theme CSS
    wp_enqueue_style('sakazuki-style', get_stylesheet_uri(), array('google-fonts-anuphan', 'material-icons'), wp_get_theme()->get('Version'));

    // Theme JS
    wp_enqueue_script('sakazuki-script', get_template_directory_uri() . '/assets/js/script.js', array(), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'sakazuki_enqueue');

// ===== Custom Post Type: Work =====
function sakazuki_register_work_post_type() {
    $labels = array(
        'name'               => '制作事例',
        'singular_name'      => '制作事例',
        'menu_name'          => '制作事例',
        'add_new'            => '新規追加',
        'add_new_item'       => '制作事例を追加',
        'edit_item'          => '制作事例を編集',
        'new_item'           => '新しい制作事例',
        'view_item'          => '制作事例を見る',
        'search_items'       => '制作事例を検索',
        'not_found'          => '制作事例が見つかりません',
        'not_found_in_trash' => 'ゴミ箱に制作事例はありません',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'work'),
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'show_in_rest'       => true,
    );

    register_post_type('work', $args);
}
add_action('init', 'sakazuki_register_work_post_type');

// ===== Custom Taxonomy: Work Category =====
function sakazuki_register_work_taxonomy() {
    $labels = array(
        'name'          => '制作カテゴリ',
        'singular_name' => '制作カテゴリ',
        'search_items'  => 'カテゴリを検索',
        'all_items'     => 'すべてのカテゴリ',
        'edit_item'     => 'カテゴリを編集',
        'update_item'   => 'カテゴリを更新',
        'add_new_item'  => '新しいカテゴリを追加',
        'new_item_name' => '新しいカテゴリ名',
        'menu_name'     => '制作カテゴリ',
    );

    register_taxonomy('work_category', 'work', array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_in_rest'      => true,
        'rewrite'           => array('slug' => 'work-category'),
    ));
}
add_action('init', 'sakazuki_register_work_taxonomy');

// ===== Work Meta Boxes =====
function sakazuki_add_work_meta_boxes() {
    add_meta_box(
        'work_details',
        '制作事例 詳細情報',
        'sakazuki_work_meta_box_html',
        'work',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'sakazuki_add_work_meta_boxes');

function sakazuki_work_meta_box_html($post) {
    wp_nonce_field('sakazuki_work_meta', 'sakazuki_work_meta_nonce');
    $client = get_post_meta($post->ID, '_work_client', true);
    $tags   = get_post_meta($post->ID, '_work_tags', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="work_client">クライアント名</label></th>
            <td><input type="text" id="work_client" name="work_client" value="<?php echo esc_attr($client); ?>" class="regular-text" placeholder="例）玄海丼様"></td>
        </tr>
        <tr>
            <th><label for="work_tags">タグ（カンマ区切り）</label></th>
            <td><input type="text" id="work_tags" name="work_tags" value="<?php echo esc_attr($tags); ?>" class="regular-text" placeholder="例）デザイン制作,ブランディング,看板"></td>
        </tr>
    </table>
    <?php
}

function sakazuki_save_work_meta($post_id) {
    if (!isset($_POST['sakazuki_work_meta_nonce']) || !wp_verify_nonce($_POST['sakazuki_work_meta_nonce'], 'sakazuki_work_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['work_client'])) {
        update_post_meta($post_id, '_work_client', sanitize_text_field($_POST['work_client']));
    }
    if (isset($_POST['work_tags'])) {
        update_post_meta($post_id, '_work_tags', sanitize_text_field($_POST['work_tags']));
    }
}
add_action('save_post_work', 'sakazuki_save_work_meta');

// ===== Helper: Get Theme Image URL =====
function sakazuki_image($filename) {
    return get_template_directory_uri() . '/assets/images/' . $filename;
}

// ===== Helper: Get Theme Asset URL =====
function sakazuki_asset($path) {
    return get_template_directory_uri() . '/assets/' . $path;
}
